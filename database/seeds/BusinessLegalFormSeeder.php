<?php

use Illuminate\Database\Seeder;

class BusinessLegalFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('business_legal_forms')->get()->count() == 0) {

            DB::table('business_legal_forms')->insert([
                ['name' => 'SA'],
                ['name' => 'SARL'],
                ['name' => 'Partnership'],
                ['name' => 'Limited partnership'],
                ['name' => 'Soleproprietorship'],
                ['name' => 'Informal Sector'],

            ]);
        }
    }
}
