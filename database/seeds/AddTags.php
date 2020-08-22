<?php

use Illuminate\Database\Seeder;
use App\Tag;

class AddTags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['nome' => 'gatos']);
        Tag::create(['nome' => 'cachorros']);
        Tag::create(['nome' => 'festas']);
        Tag::create(['nome' => 'comida']);
        Tag::create(['nome' => 'acessório']);
        Tag::create(['nome' => 'brinquedo']);
    }
}
