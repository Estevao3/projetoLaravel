<?php

use Illuminate\Database\Seeder;

class propertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('properties')->insert([
            'title' => 'imovel teste',
            'name' => 'imovel-teste',
            'description' => 'imovel modelo para teste',
            'rental_price' => '12000',
            'sale_price' => '123000'
        ]);
    }
}
