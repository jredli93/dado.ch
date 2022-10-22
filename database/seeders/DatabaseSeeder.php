<?php

namespace Database\Seeders;

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
        $this->call(ServiceGroupSeeder::class);
        $this->call(ServiceTypeSeeder::class);
        $this->call(ReservationSeeder::class);

        // $days = ['Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday'];
        $days = ['Tuesday', 'Wednesday','Thursday','Friday','Saturday'];
        $serviceTypes = \App\ServiceType::all();

        foreach ($days as $day){
            foreach ($serviceTypes as $serviceType){
                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '12:00:00'
                ]);

                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '13:00:00'
                ]);

                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '14:00:00'
                ]);

                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '15:00:00'
                ]);

                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '16:00:00'
                ]);

                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '17:00:00'
                ]);

                \DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '18:00:00'
                ]);
            }
        }
    }
}
