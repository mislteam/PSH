<?php

namespace Database\Seeders;

use App\Models\Milestone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MilestoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Milestone::create([
            'year'=>'1997',
            'title'=>'COMPANY STARTED',
            'description'=>'The company started out as a Trading company doing Import and Export of commodities.'
        ]);
        Milestone::create([
            'year'=>'2002',
            'title'=>'EXPANDED INTO MANUFACTURING AND DISTRIBUTION',
            'description'=>'Expanded into Manufacturing and Distribution of Electronic Weighing Scale products Mettler Toledo and SETRA.'
        ]);
        Milestone::create([
            'year'=>'2005',
            'title'=>'START REPRESENT DISTRIBUTORSHIP',
            'description'=>'Start represent distributorship ATIZ innovation Co., Ltd. (U.S.A) for digitalization instruments (BookDrive DIY).'
        ]);
        Milestone::create([
            'year'=>'2009',
            'title'=>'START REPRESENT DISTRIBUTORSHIP',
            'description'=>'Start represent distributorship for CENSTAR Science & Technology Co., Ltd., Distribution of petroleum equipments and services in Myanmar.'
        ]);
        Milestone::create([
            'year'=>'2010',
            'title'=>'AWARDED WITH ISO 9001-2008',
            'description'=>'Awarded with ISO 9001-2008, Quality Management System. Start represent distributorship of ADITYA BIRLA Chemical Group, products.'
        ]);
        Milestone::create([
            'year'=>'2011',
            'title'=>'AWARDED BEST MARKETING',
            'description'=>'Awarded best marketing distributor from CENSTAR Science and Technology. Start represent distributorship for CAS (Korea) electronic weighing scale, products in Myanmar.'
        ]);
        Milestone::create([
            'year'=>'2012',
            'title'=>'START REPRESENT DISTRIBUTORSHIP',
            'description'=>'Start represent distributorship for KPS Piping System, Sweden. Start represent distributorship of Zephyr Corporation, Japan for the Wind Energy.'
        ]);
        Milestone::create([
            'year'=>'2013',
            'title'=>'START REPRESENT DISTRIBUTORSHIP',
            'description'=>'Start represent distributorship of Miura Boiler, Japan. Become strategic business partner of Kapsch TrafficCom for Myanmar market.'
        ]);
        Milestone::create([
            'year'=>'2014',
            'title'=>'CENSTAR',
            'description'=>'The company started out as a Trading company doing Import and Export of commodities.'
        ]);
        Milestone::create([
            'year'=>'2015',
            'title'=>'START REPRESENT DISTRIBUTORSHIP',
            'description'=>'The company started out as a Trading company doing Import and Export of commodities.'
        ]);
        Milestone::create([
            'year'=>'2016',
            'title'=>'START REPRESENT DISTRIBUTORSHIP',
            'description'=>'The company started out as a Trading company doing Import and Export of commodities.'
        ]);
        Milestone::create([
            'year'=>'2017',
            'title'=>'UPGRADE QUALITY MANAGEMENT SYSTEM',
            'description'=>'The company started out as a Trading company doing Import and Export of commodities.'
        ]);
    }
}
