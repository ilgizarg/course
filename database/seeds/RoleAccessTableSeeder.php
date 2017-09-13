<?php

use Illuminate\Database\Seeder;

class RoleAccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rolesaccses')->insert(
            [
                'roleid' => 1,
                'accessid' => 2,
                'status' => 1
            ]
        );
    }
}
