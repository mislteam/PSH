<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'about_des'=>"We duly incorporated under the Myanmar Citizen's Investment Law of the Uion of Myanmar. Company changed to corporate identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009",
            'phone'=>'(+95) 9-4431 35270, (+95) 9-4431 45270, (+95) 1 515203, (+95 ) 1537530',
            'address'=>'No.(29), Shwe Padauk Yeikmon, Bayintnaung Main Road, Kamayut Tsp, Yangon (11041), Union of Myanmar',
            'email'=>'info@yourcompany.com',
            'ig_link'=>'instagram.com',
            'twitter_link'=>'twitter.com',
            'facebook_link'=>'facebook.com',

        ]);
    }
}
