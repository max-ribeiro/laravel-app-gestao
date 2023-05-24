<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Suppliers;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //by object
        $supplier = new Suppliers();
        $supplier->name = 'Zeca Baleiro Ltda';
        $supplier->site = 'algumsite.com';
        $supplier->uf = "AM";
        $supplier->email = 'zeca@baleiro.com';
        $supplier->save();
        //by class
        Suppliers::create([
            'name' => 'Pedro Alvarez',
            'site' => 'descubra.com',
            'uf' => 'BR',
            'email' => 'algumemail@bemlegal.com'
        ]);
        //DB
        DB::table('suppliers')->insert([
            'name' => 'Fulano de Tal',
            'site' => 'fulano.net',
            'uf' => 'AC',
            'email' => 'fulano@detal.com.br'
        ]);
    }
}
