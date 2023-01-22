<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\ServiceGroup::factory()->count(3)->create();
    }
}
