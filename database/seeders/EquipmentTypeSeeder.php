<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_type')->insert([
            ['id'=>1, 'type'=>'Truck'],
            ['id'=>2, 'type'=>'Backhoe Loader'],
            ['id'=>3, 'type'=>'Payloader'],
            ['id'=>4, 'type'=>'Bulldozer'],
            ['id'=>5, 'type'=>'Cement Mixer'],
            ['id'=>6, 'type'=>'Elf'],
            ['id'=>7, 'type'=>'Motor Pool'],
            ['id'=>8, 'type'=>'Batching'],
            ['id'=>9, 'type'=>'Asphalt'],
        ]);
    }
}
