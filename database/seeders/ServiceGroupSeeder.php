<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\ServiceGroup;

class ServiceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $model = ServiceGroup::class;
    
    public function run()
    {
        \App\ServiceGroup::factory()->count(30)->create(); 
    }
}
