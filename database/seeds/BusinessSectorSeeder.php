<?php

use Illuminate\Database\Seeder;

class BusinessSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table TypeOfIndustry is empty
        if(DB::table('business_sectors')->get()->count() == 0) {

            DB::table('business_sectors')->insert([
                ['name' => 'Energy'],
                ['name' => 'Industrial'],
                ['name' => 'Agriculture'],
                ['name' => 'Food & Beverage Health Care'],
                ['name' => 'Financial, Management, Legal'],
                ['name' => 'Banking'],
                ['name' => 'Textile, clothing, Leather, Footwear'],
                ['name' => 'Media'],
                ['name' => 'Hotel, Tourism, catering'],
                ['name' => 'Transportation'],
                ['name' => 'Information Technology'],
                ['name' => 'Entertainment'],
                ['name' => 'Telecommunication'],
                ['name' => 'Utilities'],
                ['name' => 'Real Estate'],
                ['name' => 'Retail'],
                ['name' => 'Education'],
                ['name' => 'Craftpersonship'],
                ['name' => 'Other : Please specify'],
            ]);
        }
    }
}

