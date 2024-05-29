<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'title' => 'Welcome To Pyi Sone Hein Group Of Companies',
            'description'=>"The Company was established in 1997 and is duly incorporated under the Myanmar Citizen’s Investment Law of the Union of Myanmar. Company changed to corporate identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009. New World Link Pte. Ltd., Singapore is a subsidiary company of Pyei Sone Hein Group of Companies. The Company start with the initial investment of USD 3 million and since then it has been growing profitably. The business extended through five business units in the area of Trading, Manufacturing, Engineering, Services and Construction. The company was opened 6 branches nationwide and the total of 250 staff members working at different management levels.",
            'company_img'=>"company_img"
        ]);
    }
}
