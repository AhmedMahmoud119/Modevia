<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'id' => 1,
                'name' => 'super-admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);





        Appointment::factory(30)->create();


    }
}


