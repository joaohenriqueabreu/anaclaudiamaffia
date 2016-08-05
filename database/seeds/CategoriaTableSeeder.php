<?php

use Illuminate\Database\Seeder;


class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('categorias')->insert([
                'nome' => "residencial",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);

        DB::table('categorias')->insert([
            'nome' => "comercial",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('categorias')->insert([
            'nome' => "corporativo",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('categorias')->insert([
            'nome' => "conceito",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
