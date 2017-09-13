<?php

use Illuminate\Database\Seeder;

class CourseElementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courseelements')->insert(
            [
                'themeid' => 1,
                'elementid' => 1,
                'elementinitid' =>1,
                'grade' => 10,
                'order' => 1
            ]
        );
    }
}
