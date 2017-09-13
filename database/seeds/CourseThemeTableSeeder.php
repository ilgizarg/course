<?php

use Illuminate\Database\Seeder;

class CourseThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('coursethemes')->insert(
            [
                'courseid' => 1,
                'name' => 'First theme',
                'summary' => 'Theme summary',
                'order' => 1
            ]
        );
    }
}
