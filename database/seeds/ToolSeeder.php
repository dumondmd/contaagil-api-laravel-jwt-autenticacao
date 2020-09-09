
<?php
use App\User;
use App\Tool;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tool::class, 25)->create();
        User::create([
            'name'      => 'admin@mail.com',
            'email'     => 'admin@mail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}