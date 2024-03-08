<?php

namespace Database\Seeders;

use App\Models\UserSupport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersupp = UserSupport::create([
            'name' => 'UserSupport-1',
            'product_id'=>1,
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing',
        ]);
    }
}
