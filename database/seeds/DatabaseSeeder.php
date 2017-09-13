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
        // $this->call(UsersTableSeeder::class);
        $this->call(AccessTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(CourseMembersSeeder::class);
        $this->call(CourseElementsSeeder::class);
        $this->call(CourseThemeTableSeeder::class);
        $this->call(ElementsSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(GroupMembersSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RoleAccessTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
