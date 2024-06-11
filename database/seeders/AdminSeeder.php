<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::create([
            'user_id' => 100000,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at'=> Carbon::now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'idNumber' => '123456789',
            'front_img' => 'front-img.png',
            'back_img' => 'back-img.png',
            'product_type_id'=> 1,
            'region_id'=>13,
            'township_id'=>1,
        ]);

    
        $admin->assignRole(['admin']);
    }
}
