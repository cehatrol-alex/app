<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravolt\Avatar\Avatar;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->count(100)->create();

    }
}
