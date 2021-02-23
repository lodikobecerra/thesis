<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipments')->insert([
            ['id'=>1, 'type'=>'Truck', 'body_number'=>'LRT-1', 
                'status'=>'Available', 'last_location'=>'Bulacan', 'Operator'=>'Jakiri Rupido'],
            ['id'=>2, 'type'=>'Backhoe Loader', 'body_number'=>'LRT-2', 
                'status'=>'Available', 'last_location'=>'Cavite', 'Operator'=>'Francis Macalintal'],
            ['id'=>3, 'type'=>'Payloader', 'body_number'=>'LRT-3', 
                'status'=>'Available', 'last_location'=>'Laguna', 'Operator'=>'Romeo Sumbong'],
            ['id'=>4, 'type'=>'Bulldozer', 'body_number'=>'LRT-4', 
                'status'=>'Available', 'last_location'=>'Manila', 'Operator'=>'Gilbert Ranoco'],
            ['id'=>5, 'type'=>'Cement Mixer', 'body_number'=>'LRT-5', 
                'status'=>'Available', 'last_location'=>'Davao', 'Operator'=>'Jason Gerona'],
            ['id'=>6, 'type'=>'Elf', 'body_number'=>'LRT-6', 
                'status'=>'Available', 'last_location'=>'Cebu', 'Operator'=>'John Kevin Baltazar'],
            ['id'=>7, 'type'=>'Motor Pool', 'body_number'=>'LRT-7', 
                'status'=>'Available', 'last_location'=>'Leyte', 'Operator'=>'Mico Bonite'],
            ['id'=>8, 'type'=>'Batching', 'body_number'=>'LRT-8', 
                'status'=>'Available', 'last_location'=>'Batangas', 'Operator'=>'Emmanuel Mendoza'],
            ['id'=>9, 'type'=>'Asphalt', 'body_number'=>'LRT-9', 
                'status'=>'Available', 'last_location'=>'Nueva Ecija', 'Operator'=>'Ralvinne Halili'],
            ['id'=>10, 'type'=>'Truck', 'body_number'=>'LRT-10', 
                'status'=>'On Maintainance', 'last_location'=>'Pampanga', 'Operator'=>'Gilbert Galvizo'],
            ['id'=>11, 'type'=>'Backhoe Loader', 'body_number'=>'LRT-11', 
                'status'=>'On Maintainance', 'last_location'=>'Tarlac', 'Operator'=>'Christian Bonayon'],
            ['id'=>12, 'type'=>'Payloader', 'body_number'=>'LRT-12', 
                'status'=>'On Maintainance', 'last_location'=>'Pangasinan', 'Operator'=>'Melchor Roxas'],
            ['id'=>13, 'type'=>'Payloader', 'body_number'=>'LRT-13', 
                'status'=>'On Maintainance', 'last_location'=>'La Union', 'Operator'=>'Levi Mendoza'],
            ['id'=>14, 'type'=>'Cement Mixer', 'body_number'=>'LRT-14', 
                'status'=>'On Maintainance', 'last_location'=>'Baguio', 'Operator'=>'Jakiri Rupido'],
            ['id'=>15, 'type'=>'Elf', 'body_number'=>'LRT-15', 
                'status'=>'On Maintainance', 'last_location'=>'Mindoro', 'Operator'=>'Abette Gumasing'],
            ['id'=>16, 'type'=>'Motor Pool', 'body_number'=>'LRT-16', 
                'status'=>'On Maintainance', 'last_location'=>'Muntinlupa', 'Operator'=>'Jerick Alonzo'],
            ['id'=>17, 'type'=>'Batching', 'body_number'=>'LRT-17', 
                'status'=>'On Maintainance', 'last_location'=>'Rizal', 'Operator'=>'Ka Teryong'],
            ['id'=>18, 'type'=>'Asphalt', 'body_number'=>'LRT-18', 
                'status'=>'On Maintainance', 'last_location'=>'Quezon', 'Operator'=>'Ka Berto'],
        ]);
    }
}
