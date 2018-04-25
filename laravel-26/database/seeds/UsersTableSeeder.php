<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('aqq'),
        ]);
        
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('aqq');
        $user->save();
    }
}
