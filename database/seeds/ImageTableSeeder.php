<?php

use Illuminate\Database\Seeder;


class ImageTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        $projetos = App\Projeto::all()->take(9);

//        foreach (range(1,9) as $index) {
        $i = 0;
        foreach ($projetos as $projeto)
        {
            $i++;
            DB::table('images')->insert([
                'arquivo' => 'img/projetos/projeto-'. $projeto->id . '/projeto-img-' . $i . '.jpg',
                'tipo' => 'principal',
                'legenda' => $faker->sentence,
                'descricao' => $faker->text,
                'projeto_id' => $projeto->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        };

        foreach ($projetos as $projeto)
        {
            $i++;
            DB::table('images')->insert([
                'arquivo' => 'img/projetos/projeto-'. $projeto->id . '/projeto-img-' . $i . '.jpg',
                'tipo' => 'mini',
                'legenda' => $faker->sentence,
                'descricao' => $faker->text,
                'projeto_id' => $projeto->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        };

        foreach ($projetos as $projeto)
        {
            $i++;
            DB::table('images')->insert([
                'arquivo' => 'img/projetos/projeto-'. $projeto->id . '/projeto-img-' . $i . '.jpg',
                'tipo' => 'layout',
                'legenda' => $faker->sentence,
                'descricao' => $faker->text,
                'projeto_id' => $projeto->id,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        };
    }
}
