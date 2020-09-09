<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class ToolsController extends Controller
{

	public function showAll()
    {   
    	$tag = request('tag');    	
    	
    	if(isset($tag)){
    		return Tool::select('id', 'title', 'link', 'description', 'tags')
    	      ->where('tags', 'like', '%' .$tag. '%')->get(); 
    	} 
    	else 
    		return Tool::select('id', 'title', 'link', 'description', 'tags')->get();    	    				    	                
    }
        
    public function store(Request $request)
    {            
    	
        Tool::create($request->all());
        
        $resultado = Tool::select('title', 'link', 'description', 'tags', 'id')
		    		->orderBy('created_at', 'desc')
		    		->first();
        
        return response()->json($resultado, 201)
        	->header('Content-Type', 'application/json')
        	->header('Status', '201 Created');;
    }

    public function delete($id)
    {
    	$tool = Tool::findOrFail($id);
        $tool->delete();
        return response()->json('Status: 204 No Content', 204)
        	->header('Content-Type', 'application/json');   
    }
}
