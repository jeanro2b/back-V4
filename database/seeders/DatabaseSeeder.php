<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(HospitalSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ConfigSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(TreeSeeder::class);
        $this->call(Tree_DetailSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PatientSeeder::class);
    }
}
