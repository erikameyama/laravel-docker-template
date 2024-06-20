<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * un the databases seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->call([
		    TodoSeeder::class,
	    ]);
    }
}
