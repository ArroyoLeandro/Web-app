<?php

use Illuminate\Database\Seeder;
use database\factories\PostFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeed::class);
        $this->call(NacionalidadesSeed::class);
    }
}
