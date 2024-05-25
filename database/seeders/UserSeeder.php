<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users =  User::factory(100)->create(['phone' => '123-456-7890',]);
        // foreach ($users as $user) {
        //     $user->assignRole('user');
        // }

        $users = [
            "thuratun" => "thuratundev@gmail.com",
        ];

        $index = 100001;
        foreach ($users as $name => $email) {
            $me = User::create([
                'user_id' => $index ++,
                'name' => $name,
                'email' => $email,
                'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", // password
                'email_verified_at' => now(),
                'idNumber' => '123456789',
                'front_img' => 'front-img.png',
                'back_img' => 'back-img.png',
                'product_type_id'=> 1
            ]);
            $me->assignRole('user');
        }
    }
}
