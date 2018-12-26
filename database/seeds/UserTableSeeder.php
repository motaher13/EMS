<?php


use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('a'),
        ]);

        User::create([
            'username'=>'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('a'),
        ]);

        User::create([
            'username'=>'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('a'),
        ]);
    }
}
