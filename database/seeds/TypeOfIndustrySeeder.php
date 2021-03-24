<?php

use Illuminate\Database\Seeder;

class TypeOfIndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // check if table TypeOfIndustry is empty
        if(DB::table('type_of_industries')->get()->count() == 0) {

            DB::table('type_of_industries')->insert([
            ['name' => 'Agriculture'],
            ['name' => 'Manufucture'],
            ['name' => 'Service'],
            ['name' => 'Trade'],

            ]);
        }

    }
}
