<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'id' => 21,
            'name' => 'testPatient',
            'position_statut' => 'new',
            'position_id' => 1,
            'department_id' => 13,
            'user_id' => 1,
        ]);
    }
}
