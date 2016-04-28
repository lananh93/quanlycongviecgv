<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Model::unguard();
       // \Illuminate\Database\Eloquent\Model::unguard();
        $this->call('UserSeeder');
    }
}

class UserSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            
            array(
                'email' => 'abc@gmail.com',
                'password' => 'abc',
                'permissions' => 'user',
            ),
            array(
                'email' => 'abc1@gmail.com',
                'password' => 'abc1',
                'permissions' => 'user',
            ),
            array(
                'email' => 'abc2@gmail.com',
                'password' => 'abc2',
                'permissions' => 'user',
            ),


        ]);

    }
}
