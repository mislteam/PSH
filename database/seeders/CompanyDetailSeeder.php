<?php

namespace Database\Seeders;

use App\Models\CompanyDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyDetail::create([
            'title' => 'Business Year',
            'description'=>'We duly incorporated under the Myanmar Citizen Investment Law of the Uion of Myanmar. Company changed to corporate identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009',
            'value'=>'50'
        ]);

        CompanyDetail::create([
            'title' => 'Satiesfied Clients',
            'description'=>Null,
            'value'=>'240'
        ]);

        CompanyDetail::create([
            'title' => 'Successfull Cases',
            'description'=>null,
            'value'=>'2000'
        ]);

        CompanyDetail::create([
            'title' => 'Professional Attorneys',
            'description'=>null,
            'value'=>'20'
        ]);
    }
}
