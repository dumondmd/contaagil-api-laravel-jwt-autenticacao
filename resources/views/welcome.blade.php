

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
   </head>
   <body>
      <div id="readme" class="Box md js-code-block-container Box--responsive">
         <div class="Box-header d-flex flex-items-center flex-justify-between bg-white border-bottom-0">
            <h2 class="Box-title pr-3">
               README.md
            </h2>
            <div>
               <a href="/dumondmd/contaagil-api-laravel-jwt-autenticacao/edit/master/README.md" class="Box-btn-octicon btn-octicon float-right" aria-label="Edit this file">
                  <svg class="octicon octicon-pencil" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                     <path fill-rule="evenodd" d="M11.013 1.427a1.75 1.75 0 012.474 0l1.086 1.086a1.75 1.75 0 010 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 01-.927-.928l.929-3.25a1.75 1.75 0 01.445-.758l8.61-8.61zm1.414 1.06a.25.25 0 00-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 000-.354l-1.086-1.086zM11.189 6.25L9.75 4.81l-6.286 6.287a.25.25 0 00-.064.108l-.558 1.953 1.953-.558a.249.249 0 00.108-.064l6.286-6.286z"></path>
                  </svg>
               </a>
            </div>
         </div>
         <div class="Popover anim-scale-in js-tagsearch-popover" data-tagsearch-url="/dumondmd/contaagil-api-laravel-jwt-autenticacao/find-definition" data-tagsearch-ref="master" data-tagsearch-path="README.md" data-tagsearch-lang="Markdown" data-hydro-click="{&quot;event_type&quot;:&quot;code_navigation.click_on_symbol&quot;,&quot;payload&quot;:{&quot;action&quot;:&quot;click_on_symbol&quot;,&quot;repository_id&quot;:294237621,&quot;ref&quot;:&quot;master&quot;,&quot;language&quot;:&quot;Markdown&quot;,&quot;originating_url&quot;:&quot;https://github.com/dumondmd/contaagil-api-laravel-jwt-autenticacao&quot;,&quot;user_id&quot;:18427825}}" data-hydro-click-hmac="d6b0fd7508d4eed725b584c83fe4ac64fa7b099d804170115a8d3331e7476da6" hidden="">
            <div class="Popover-message Popover-message--large Popover-message--top-left TagsearchPopover mt-1 mb-4 mx-auto Box box-shadow-large">
               <div class="TagsearchPopover-content js-tagsearch-popover-content overflow-auto" style="will-change:transform;">
               </div>
            </div>
         </div>
         <div class="Box-body px-5 pb-5">
            <article class="markdown-body entry-content container-lg" itemprop="text">
               <h2>
                  <a id="user-content-0-a-api-deve-responder-na-porta-3000" class="anchor" aria-hidden="true" href="#0-a-api-deve-responder-na-porta-3000">
                     <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                     </svg>
                  </a>
                  0: A API deve responder na porta 3000
               </h2>
               <p>php artisan serve --port=3000</p>
               <p>#Gere os registros do banco de dados para teste</p>
               <pre><code>php artisan db:seed --class=ToolSeeder
</code></pre>
               <h2>
                  <a id="user-content-login-no-para-entrar-nas-rotas-protegidas-da-api" class="anchor" aria-hidden="true" href="#login-no-para-entrar-nas-rotas-protegidas-da-api">
                     <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                     </svg>
                  </a>
                  Login no para entrar nas rotas protegidas da api
               </h2>
               <pre><code>admin@mail.com
123456
</code></pre>
               <h1>
                  <a id="user-content-acesso-as-rotas" class="anchor" aria-hidden="true" href="#acesso-as-rotas">
                     <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                     </svg>
                  </a>
                  Acesso as rotas
               </h1>
               <h3>
                  <a id="user-content-rotas-de-login-e-logout" class="anchor" aria-hidden="true" href="#rotas-de-login-e-logout">
                     <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                     </svg>
                  </a>
                  Rotas de Login e Logout
               </h3>
               <p>Post (Realizando o login com o usuario '<a href="mailto:admin@mail.com">admin@mail.com</a>' e senha '123456')</p>
               <pre><code>http://127.0.0.1:3000/api/auth/login
</code></pre>
               <p>Post (Realizando o logout, invalidando o token que foi gerado no login)</p>
               <pre><code>http://127.0.0.1:3000/api/auth/logout
</code></pre>
               <h3>
                  <a id="user-content-rotas-do-sistema" class="anchor" aria-hidden="true" href="#rotas-do-sistema">
                     <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                     </svg>
                  </a>
                  Rotas do sistema
               </h3>
               <p>Get (Buscando todos os dados)</p>
               <pre><code>http://127.0.0.1:3000/api/tools
</code></pre>
               <p>Get (Buscando por tag Ex.:'api')</p>
               <pre><code>http://127.0.0.1:3000/api/tools?tag=api
</code></pre>
               <p>Post (Inserido dados)</p>
               <pre><code>http://127.0.0.1:3000/api/tools
</code></pre>
               <p>Campos que poderão sere preenchidos (title, link, description, tags)</p>
               <p>Delete (Deletando dados Ex.: com o id = 5)</p>
               <pre><code>http://127.0.0.1:3000/api/tools/5
</code></pre>
               <p>Get (Listando todos os usuários)</p>
               <pre><code>http://127.0.0.1:3000/api/users
</code></pre>
            </article>
         </div>
      </div>
   </body>
</html>

