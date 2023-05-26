<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SubjectContact;

class SubjectContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SubjectContact::create(['subject_contact' => 'Duvida']);
        SubjectContact::create(['subject_contact' => 'Elogio']);
        SubjectContact::create(['subject_contact' => 'Reclamação']);
    }
}
