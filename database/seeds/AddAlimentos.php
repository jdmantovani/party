<?php

use Illuminate\Database\Seeder;
use App\Alimentos;

class AddAlimentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alimentos::create([
            'nome' => 'Premier Cookie',
            'descricao' => 'Ração Premier Cookie Cachorro',
            'valor' => 55
            ]);
        Alimentos::create([
            'nome' => 'Ração Pro Plan',
            'descricao' => 'Ração Pro Plan Gatos', 
            'valor' => 60
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Frango Cachorros',
            'descricao' => 'Ração Úmida Sachê Frango Cachorros', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Carne Cachorros',
            'descricao' => 'Ração Úmida Sachê Carne Cachorros', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Salmão Cachorros',
            'descricao' => 'Ração Úmida Sachê Salmão Cachorros', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Cordeiro Cachorros',
            'descricao' => 'Ração Úmida Sachê Cordeiro Cachorros', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Frango Gatos',
            'descricao' => 'Ração Úmida Sachê Frango Gatos', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Carne Gatos',
            'descricao' => 'Ração Úmida Sachê Carne Gatos', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Gatos Salmão',
            'descricao' => 'Ração Úmida Sachê Gatos Salmão', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Ração Úmida Sachê Cordeiro Gatos',
            'descricao' => 'Ração Úmida Sachê Cordeiro Gatos', 
            'valor' => 4
            ]);
        Alimentos::create([
            'nome' => 'Pet Delícia Frango Gatos',
            'descricao' => 'Pet Delícia Frango Gatos', 
            'valor' => 6
            ]);
        Alimentos::create([
            'nome' => 'Pet Delícia Frango Cachorros',
            'descricao' => 'Pet Delícia Frango Cachorros', 
            'valor' => 6
            ]);
        Alimentos::create([
            'nome' => 'Royal Canin Frango Gatos',
            'descricao' => 'Royal Canin Frango Gatos', 
            'valor' => 70
            ]);
        Alimentos::create([
            'nome' => 'Royal Canin Frango Cachorros',
            'descricao' => 'Royal Canin Frango Cachorros', 
            'valor' => 70
            ]);
        Alimentos::create([
            'nome' => 'Royal Canin Carne Gatos',
            'descricao' => 'Royal Canin Carne Gatos', 
            'valor' => 70
            ]);
        Alimentos::create([
            'nome' => 'Royal Canin Carne Cachorros',
            'descricao' => 'Royal Canin Carne Cachorros', 
            'valor' => 70
            ]);
        Alimentos::create([
            'nome' => 'Premier Raças Pequenas Cachorro',
            'descricao' => 'Premier Raças Pequenas Cachorro', 
            'valor' => 75
            ]);
        Alimentos::create([
            'nome' => 'Premier Gatos Castrados',
            'descricao' => 'Premier Gatos Castrados', 
            'valor' => 75
            ]);
        Alimentos::create([
            'nome' => 'Royal Canin Gastro Intestinal Gatos',
            'descricao' => 'Royal Canin Gastro Intestinal Gatos', 
            'valor' => 100
            ]);
        Alimentos::create([
            'nome' => 'Royal Canin Gastro Intestinal Cachorros',
            'descricao' => 'Royal Canin Gastro Intestinal Cachorros', 
            'valor' => 100
            ]);
        Alimentos::create([
            'nome' => 'Bolo de aniversário para cachorro',
            'descricao' => '- 1 bolo redondo de 250 g. decorado com fita e biscoitos de aveia e mel', 
            'valor' => 25
            ]);
        Alimentos::create([
            'nome' => 'Kit festa para Cachorro',
            'descricao' => '- 1 bolo redondo de 250 g. decorado com fita e biscoitos de aveia e mel
            - 2 pupcakes
            - 2 mini pupcakes
            - 2 mini bolos ossinho', 
            'valor' => 40
            ]);

    }
}
