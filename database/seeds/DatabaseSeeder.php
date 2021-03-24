<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PermissionsSeeder::class);
        $this->call(TypeOfIndustrySeeder::class);
        $this->call(BusinessSectorSeeder::class);
        $this->call(BusinessGenerationSeeder::class);
        $this->call(BusinessLegalFormSeeder::class);
    }
}
