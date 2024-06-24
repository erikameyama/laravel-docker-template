<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
<<<<<<< HEAD
     * Seed the application's database.
=======
     * un the databases seeds.
>>>>>>> develop/laravel_todo_app
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
	    $this->call([
		    TodoSeeder::class,
	    ]);
>>>>>>> develop/laravel_todo_app
    }
}
