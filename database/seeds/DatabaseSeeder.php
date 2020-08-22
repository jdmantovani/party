<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddTags::class);//primeiro vai executar essa classe
        $this->call(AddProdutos::class);
    }
}
