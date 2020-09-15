<?php

use Illuminate\Database\Seeder;
use App\ImagemProduto;

class AddImagemProduto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //
        ImagemProduto::create([
            'caminhoDaImagem' => 'img/categori/produtos-cachorro/produto-cachorros.jpg',
            'produto_id' => 1
            ]);

            ImagemProduto::create([
                'caminhoDaImagem' => 'img/categori/produtos-cachorro/produto-cachorros2.jpg',
                'produto_id' => 2
                ]);
    }

}
