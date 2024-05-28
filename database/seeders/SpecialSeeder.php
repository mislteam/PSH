<?php

namespace Database\Seeders;

use App\Models\Special;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Special::create([
            'title' => 'Our Specializations',
            'description'=>'We are providing end to end industrial solutions for Retail Fueling & Petroleum Equipment sector, Electronic Weighing System, Toll Management System, Industrial Software Solutions and System Integration Engineering. Our engineering team is organized with experienced and systematic well trained engineers and technicians. We are delivering quality products, latest technologies and innovative solutions to our clients.'
        ]);
    }
}
