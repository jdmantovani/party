<?php

use Illuminate\Database\Seeder;
use App\Decoracao;

class AddDecoracao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Decoracao::create([
            'nome' => 'Faixa Feliz Aniversario',
            'descricao' => 'Faixa Feliz Aniversario',
            'valor' => 29.90
            ]);
        Decoracao::create([
            'nome' => 'Mini Cachepot Cachorrinhos',
            'descricao' => 'Mini Cachepot Cachorrinhos',
            'valor' => 4.90
            ]);
        Decoracao::create([
            'nome' => 'Chapéu de aniversário',
            'descricao' => 'Chapéu de aniversário',
            'valor' => 5
            ]);
        Decoracao::create([
            'nome' => 'Bandeirinhas Cachorrinhos',
            'descricao' => 'Bandeirinhas Cachorrinhos',
            'valor' => 9
            ]);
        Decoracao::create([
            'nome' => 'Bandeirinhas Gatinhos',
            'descricao' => 'Bandeirinhas Gatinhos',
            'valor' => 9
            ]);
        Decoracao::create([
            'nome' => 'Cake topper coroa',
            'descricao' => 'Cake topper coroa',
            'valor' => 10
            ]);
        Decoracao::create([
            'nome' => 'Cake topper Princess',
            'descricao' => 'Cake topper Princess',
            'valor' => 10
            ]);
        }
}
