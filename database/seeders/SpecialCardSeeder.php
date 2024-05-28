<?php

namespace Database\Seeders;

use App\Models\SpecialCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecialCard::create([
            'title' => 'Trading - Electronic Weighing Scales',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Trading - Digitalization Equipments',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Trading - Road Safety Materials',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Trading - Petroleum Equipments',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Electronic Weighing Scales',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Electronic Toll Management System',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Software & System Engineering',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Electronic & Electrical Engineering',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);

        SpecialCard::create([
            'title' => 'Our Specializations',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...',
            'card_img'=>'specialization_img'
        ]);
    }
}
