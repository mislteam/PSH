<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'name' => 'logo',
            'value' => 'logo.png',
            'type' => 'file',
        ]);
        GeneralSetting::create([
            'name' => 'title',
            'value' => 'PSH GLOBAL',
            'type' => 'string',
        ]);
        GeneralSetting::create([
            'name' => 'Website Name',
            'value' => 'PSH GLOBAL',
            'type' => 'string',
        ]);
    }
}
