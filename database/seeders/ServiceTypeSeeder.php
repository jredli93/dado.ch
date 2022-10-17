<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\ServiceType::factory()->count(15)->create(); 
    }
}
