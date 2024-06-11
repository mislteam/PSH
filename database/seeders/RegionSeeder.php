<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = Region::create([
            'name'=>'ကချင်ပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'ကယားပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'ကရင်ပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'ချင်းပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'စစ်ကိုင်းတိုင်းဒေသကြီး'
        ]);

        $region = Region::create([
            'name'=>'တနင်္သာရီတိုင်းဒေသကြီး'
        ]);

        $region = Region::create([
            'name'=>'ပဲခူးတိုင်းဒေသကြီး'
        ]);

        $region = Region::create([
            'name'=>'မကွေးတိုင်းဒေသကြီး'
        ]);

        $region = Region::create([
            'name'=>'မန္တလေးတိုင်းဒေသကြီး'
        ]);

        $region = Region::create([
            'name'=>'နေပြည်တော်'
        ]);

        $region = Region::create([
            'name'=>'မွန်ပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'ရခိုင်ပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'ရန်ကုန်တိုင်းဒေသကြီး'
        ]);

        $region = Region::create([
            'name'=>'ရှမ်းပြည်နယ်'
        ]);

        $region = Region::create([
            'name'=>'ဧရာဝတီတိုင်းဒေသကြီး'
        ]);
    }
}
