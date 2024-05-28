<?php

namespace Database\Seeders;

use App\Models\Homeabout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeaboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //homeabout seed
        Homeabout::create([
            'title' => 'Pyi Sone Hein Group Of Companies',
            'description'=>"We duly incorporated under the Myanmar Citizen's Investment Law of the Uion of Myanmar. Company changed to corporate identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009.",
            'about_img'=>'About_img',
            'link'=>'about'
        ]);
    }
}
