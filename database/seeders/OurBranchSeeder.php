<?php

namespace Database\Seeders;

use App\Models\OurBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OurBranch::create([
            'title'=>'SINT OH DAN (YANGON)',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor',
            'address'=>'No.(49+1), Sin Ooe Dan Street, La Thar Township, Yangon',
            'phone'=>'01-374594 ,
            (+95) 09-73901925',
            'email'=>'setra.sales@zinnine.com',
        ]);

        OurBranch::create([
            'title'=>'Naypyitaw',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor',
            'address'=>'No.(Pa /88), Thapyay Gone Shopping Complex, Thapyay Gone Market, Naypyitaw Capital',
            'phone'=>'(+95) 67-432129 , (+95) 9-790544453',
            'email'=>'setra.sales@zinnine.com',
        ]);

        OurBranch::create([
            'title'=>'Mandalay',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor',
            'address'=>'No(149/Za), Yangon - Mandalay Road (78 Street) , South of the Phayargyi Meseum, Between of Theik Pan Street & Sagaing Lan Khwe, (902) Thidar Aye Quarter, Chan Mya Tharsi Township, Mandalay. Division',
            'phone'=>'(+95) 9-5129954 ,(+95) 47126661 ,(+95) 47126662',
            'email'=>'setra.sales@zinnine.com',
        ]);

        OurBranch::create([
            'title'=>'Monywa',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor',
            'address'=>'No.(3), Sithmudam Hawn Shop, Merchant Road, Monywa Township, Sagaing Division',
            'phone'=>'(+95) 71-28280 ,(+95)9-43041179',
            'email'=>'setra.sales@zinnine.com',
        ]);

        OurBranch::create([
            'title'=>'Pyay',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor',
            'address'=>'No.(49+1), Sin Ooe Dan Street, La Thar Township, Yangon',
            'phone'=>'01-374594 ,(+95) 09-73901925',
            'email'=>'setra.sales@zinnine.com',
        ]);

        OurBranch::create([
            'title'=>'Pathein',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor',
            'address'=>'No.(49+1), Sin Ooe Dan Street, La Thar Township, Yangon',
            'phone'=>'01-374594 ,(+95) 09-73901925',
            'email'=>'setra.sales@zinnine.com',
        ]);
    }
}
