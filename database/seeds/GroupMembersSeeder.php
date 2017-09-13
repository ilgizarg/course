<?php

use Illuminate\Database\Seeder;

class GroupMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gropmemebers')->insert(
            [
                'groupid' => 1,
                'userid' => 2,
                'roleid' => 2
            ]
        );
    }
}
