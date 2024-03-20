<?php

namespace Database\Seeders;

use App\Models\NewCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newcategory = NewCategory::create([
            'name' => 'New Category-1',
        ]);
    }
}
