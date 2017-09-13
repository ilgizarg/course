<?php

use Illuminate\Database\Seeder;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('access')->insert(
            [
            'name' => 'page:edit',
            'summary' => 'Edit Page element'
            ],
            [
            'name' => 'page:view',
            'summary' => 'View Page element'
            ]
        );
    }
}
