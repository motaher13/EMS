<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use App\BaseSettings\Settings;

class AssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);
        $admin->assignRole(Settings::$admin_role);

        $teacher = User::find(2);
        $teacher->assignRole('teacher');

        $teacher = User::find(3);
        $teacher->assignRole('student');
    }
}
