<?php

use Illuminate\Database\Seeder;

class ElementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('elements')->insert(
        [
            'name' => 'Page',
            'summary' => 'Page Summary'
        ]
        );
    }
}
