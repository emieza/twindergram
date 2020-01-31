<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // un sol registre
        /*DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);*/
   	    factory(App\User::class, 50)->create()->each(function ($user) {
	        $user->posts()->save(factory(App\Post::class)->make());
	    });        

    }

}
