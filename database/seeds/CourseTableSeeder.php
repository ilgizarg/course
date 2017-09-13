<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert(
            [
                'name' => 'First Course',
                'idname' => 'C-OO1',
                'summary' => 'First system Course',
                'img' => 'courseimg.png',
                'hide' => 1
            ]
        );
    }
}
