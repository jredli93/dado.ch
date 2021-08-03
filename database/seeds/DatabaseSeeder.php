<?php

use App\ServiceType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('users')->insertOrIgnore([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'role_id' => 1,
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('SuperAdmin1'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);

        DB::table('roles')->insertOrIgnore([
            'id' => 1,
            'name' => 'Super Admin',
        ]);

        $days = ['Tuesday', 'Wednesday','Thursday','Friday','Saturday'];
        $serviceTypes = ServiceType::all();

        foreach ($days as $day){
            foreach ($serviceTypes as $serviceType){
                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '12:00:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '12:30:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '13:00:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '13:30:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '14:00:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '14:30:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '15:00:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '15:30:00'
                ]);
                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '16:00:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '16:30:00'
                ]);
                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '17:00:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '17:30:00'
                ]);

                DB::table('periods')->insertOrIgnore([
                    'service_type_id' => $serviceType->id,
                    'day' => $day,
                    'time' => '18:00:00'
                ]);
            }
        }
    }
}
