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
        $this->call(AddAlimentos::class);
        $this->call(AddDecoracao::class);
        $this->call(AddImagemProduto::class);
        $this->call(AddRoles::class);
        $this->call(AddUser::class);
        $this->call(AddRoleUsers::class);
    }
}
