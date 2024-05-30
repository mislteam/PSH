<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUs::create([
            'phone'=>'(+95) 9-4431 35270,
            (+95) 9-4431 45270,
            (+95) 1 515203,
            (+95 ) 1537530',
            'address'=>'No.(29), Shwe Padauk Yeikmon, Bayintnaung Main Road, Kamayut Tsp, Yangon (11041), Union of Myanmar',
            'hours'=>'Mon - Sat 9:00am - 8:00pm Sunday - CLOSED',
            'email'=>'info@yourcompany.com'
        ]);
    }
}
