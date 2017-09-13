<?php

use Illuminate\Database\Seeder;

class CourseMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('coursemembers')->insert(
            [
                'courseid' => 1,
                'groupid' => 1,
                'edustart' => date('Y-m-d'),
                'edustop' =>date('Y-m-d', mktime(0, 0, 0, date("m")+1  , date("d"), date("Y")))
                ]

        );
    }
}
