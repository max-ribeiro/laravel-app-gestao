<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContact;
use Database\Factories\SiteContactFactory;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContact::factory(100)->create();
    }
}
