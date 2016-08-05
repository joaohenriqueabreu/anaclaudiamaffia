<?php 

use Illuminate\Database\Seeder;

class ProjetoTableSeeder extends Seeder {

    public function run()
    {

        $categorias = App\Categoria::all();
        $faker = Faker\Factory::create();

        foreach ($categorias as $categoria)
        {
            foreach (range(1,2) as $index) {

                DB::table('projetos')->insert([
                    'nome' => $faker->word,
                    'resumo' => $faker->paragraph,
                    'categoria_id' => $categoria->id,
                    'cidade' => $faker->city,
                    'descricao_completa' => $faker->text,
                    'frase_destaque' => $faker->sentence,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);
            }
        }
    }

}