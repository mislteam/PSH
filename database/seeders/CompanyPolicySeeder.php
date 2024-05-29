<?php

namespace Database\Seeders;

use App\Models\CompanyPoilcy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //company policy seed
        CompanyPoilcy::create([
            'title' => 'OUR MISSION',
            'description'=>"To recognize World-Class company in Myanmar through strategic alliances with business partners for mutual benefits.",
        ]);

         //company policy seed
         CompanyPoilcy::create([
            'title' => 'OUR VISION',
            'description'=>"To be a leading organization on supply of quality products, standard operation and excellent services in Myanmar.",
        ]);

         //company policy seed
         CompanyPoilcy::create([
            'title' => 'QUALITY POLICY',
            'description'=>"According to ISO 9001-2015 Quality Management System, building the capacity of staff systematically and dramatically having to manufacture the quality products and services, to achieve the confidence and satisfaction of our clients and developing the market share with fair competition, for sustainable development of company prosperity and happiness of employees.",
        ]);

         //company policy seed
         CompanyPoilcy::create([
            'title' => 'QUALITY OBJECTIVE',
            'description'=>"Proactively learn and master how to generate profit through making excellent quality of product and services, hoping for the prosperity of the company and happiness of the employees.
            Continuous Improvement for quality, cost-effectiveness and delivery of product and services.
            Building the capacity of staff and confidence for the clients by delivering quality products and services.
            Learn cost reduction methods to generate profit.
            Sustainable development for the “Brand” reputation.
            Building mutual benefits between seller and buyer by delivering international standard quality and services.",
        ]);
    }
}
