<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(EquipmentTypeSeeder::class);
        $this->call(EquipmentSeeder::class);
    }
}
