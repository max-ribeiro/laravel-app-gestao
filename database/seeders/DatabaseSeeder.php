<?php

namespace Database\Seeders;

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
        // \App\Models\Suppliers::factory(10)->create();
        // $this->call(SupplierSeeder::class);
        // $this->call(SiteContactSeeder::class);
        $this->call(SubjectContactSeeder::class);
    }
}
