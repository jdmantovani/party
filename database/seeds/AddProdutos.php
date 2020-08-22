<?php

use Illuminate\Database\Seeder;
use App\Produtos;

class AddProdutos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtos::create([
            'nome' => 'Caixa de Transporte para cachorros',
            'descricao' => 'Caixa de Transporte para cachorros', 
            'valor' => 80
            ]);
        Produtos::create([
            'nome' => 'Jogo de Colchões',
            'descricao' => 'Jogo de Colchões para Cachorro', 
            'valor' => 80
            ]);
        Produtos::create([
            'nome' => 'Capa para Chuva',
            'descricao' => 'Capa para Chuva para cães e gatos', 
            'valor' => 80
            ]);
        Produtos::create([   
            'nome' => 'Arranhador',
            'descricao' => 'JArranhador para gato', 
            'valor' => 80
            ]);
        Produtos::create([   
            'nome' => 'Jogo de colchões para Gatos',
            'descricao' => 'Jogo de colchões para Gatos', 
            'valor' => 80
            ]);
        Produtos::create([   
            'nome' => 'Caixa de Transporte para Gatos',
            'descricao' => 'Caixa de Transporte para Gatos', 
            'valor' => 80
            ]);
        Produtos::create([   
            'nome' => 'Kit com 5 bolinhas',
            'descricao' => 'Kit com 5 bolinhas de borracha', 
            'valor' => 25
            ]);
        Produtos::create([   
            'nome' => 'Ovelha de pelúcia',
            'descricao' => 'Ovelha de pelúcia', 
            'valor' => 20
            ]);
        Produtos::create([   
            'nome' => 'Macaco de pelúcia',
            'descricao' => 'Macaco de pelúcia', 
            'valor' => 20
            ]);
        Produtos::create([   
            'nome' => 'Ossinho de pelúcia',
            'descricao' => 'Ossinho de pelúcia', 
            'valor' => 20
            ]);
        Produtos::create([   
            'nome' => 'Pato de pelúcia',
            'descricao' => 'Pato de pelúcia', 
            'valor' => 20
            ]);
        Produtos::create([   
            'nome' => 'Urso de pelúcia',
            'descricao' => 'Urso de pelúcia', 
            'valor' => 20
            ]);
        Produtos::create([   
            'nome' => 'Ratinho',
            'descricao' => 'Ratinho de brinquedo', 
            'valor' => 10
            ]);
        Produtos::create([   
            'nome' => 'Varinha',
            'descricao' => 'Brinquedo com Varinha para gatos', 
            'valor' => 15
            ]);
        Produtos::create([   
            'nome' => 'Ossinho de borracha',
            'descricao' => 'Ossinho de borracha', 
            'valor' => 10
            ]);
        }
}
