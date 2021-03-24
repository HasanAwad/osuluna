<?php

use Illuminate\Database\Seeder;

class BusinessGenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('business_generations')->get()->count() == 0) {

            DB::table('business_generations')->insert([
                ['name' => 'Founding Generation'],
                ['name' => '2nd Generation'],
                ['name' => '3rd Generation'],
                ['name' => '4rth Generation'],
                ['name' => 'Mix of Generations'],

            ]);
        }
    }
}
