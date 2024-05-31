<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Header::create([
            'phone'=>'(+95) 9765432123',
            'email'=>'info@yourcompany.com',
            'open_hour'=>'Mon - Fri 9am - 6pm',
            'ig_link'=>'instagram.com',
            'twitter_link'=>'twitter.com',
            'fb_link'=>'facebook.com',
        ]);
    }
}
