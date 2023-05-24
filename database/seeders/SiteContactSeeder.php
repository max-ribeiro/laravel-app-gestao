<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContact;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contact = new SiteContact();
        $contact->name = 'Sistema Brabo';
        $contact->tel = '(12)99009900';
        $contact->email = 'contato@contato.com';
        $contact->subject = 1;
        $contact->message = 'Sistema muito bom em!';
        $contact->save();
    }
}
