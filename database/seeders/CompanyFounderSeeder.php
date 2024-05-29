<?php

namespace Database\Seeders;

use App\Models\CompanyFounder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyFounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyFounder::create([
            'title' => 'Founder Message',
            'description'=>'We, PYEI SONE HEIN Group committed Socially Responsible Business in Myanmar. We brings many challenges to generate new growth for PSH Group by enhancing our management expertise, raising the value of our subsidiaries and business units, reviewing each of our businesses depending on its current lifecycle stage, and shifting our focus to business segments with the greatest potential. We care about development of human resources for capacity building and society safety. We made other structural improvements to capture market momentum, evolution of technology and globally change is taking place nowadays. We shall be maintaining our reputation, continuous improvement for delivering of excellence services and quality products with professionals to our customers and business partners for their success, prosperity and portfolios. PSH Group’s guiding philosophy is its “Client Satisfaction is our Success” and to uphold those philosophy to our members it must meet the expectations of its stakeholders. We remain confident that the best way to do that is through business that simultaneously generates economic, society, and environmental value. We look forward to the challenges ahead and ask for your continuous cooperation!',
            'name'=>'JOHN DOE - CEO & FOUNDER',
            'founder_img'=>'founder_img'
        ]);

    }
}
