<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            ['id'=>1, 'position'=>'Mason'],
            ['id'=>2, 'position'=>'Foreman'],
            ['id'=>3, 'position'=>'Labor'],
            ['id'=>4, 'position'=>'Welder'],
            ['id'=>5, 'position'=>'Paintor'],
            ['id'=>6, 'position'=>'Skilled Worker'],
            ['id'=>7, 'position'=>'Backhoe Operator'],
            ['id'=>8, 'position'=>'Payloader Operator'],
            ['id'=>9, 'position'=>'Truck Driver'],
        ]);
    }
}
