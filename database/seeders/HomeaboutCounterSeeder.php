<?php

namespace Database\Seeders;

use App\Models\HomeaboutCounter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeaboutCounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //homeabout seed
         HomeaboutCounter::create([
            'title' => 'Dealers',
            'value'=>'100'
        ]);

        HomeaboutCounter::create([
            'title' => 'Staff Members',
            'value'=>'250'
        ]);

        HomeaboutCounter::create([
            'title' => 'Satiesfied Clients',
            'value'=>'5000'
        ]);

        HomeaboutCounter::create([
            'title' => 'Products',
            'value'=>'100'
        ]);

        
    }
}
