<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tree_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tree__details')->insert([
            'id' => 1,
            'emergency' => true,
            'going_coming' => false,
            'icon' => 'fake-icon',
            'name' => 'mal au cazz',
            'order' => 1,
            'priority' => 3,
            'slug' => 'mal-au-cazz',
            'leaf' => false,
            'tree_id' => 1,
            'category_id' => 12
        ]);

        DB::table('tree__details')->insert([
            'id' => 2,
            'emergency' => true,
            'going_coming' => false,
            'icon' => 'fake-icon',
            'name' => 'mal au cazz',
            'order' => 1,
            'priority' => 3,
            'slug' => 'mal-au-cazz',
            'leaf' => true,
            'tree_id' => 1,
            'category_id' => 12,
            'parentId' => 1
        ]);

        DB::table('tree__details')->insert([
            'id' => 3,
            'emergency' => true,
            'going_coming' => false,
            'icon' => 'fake-icon',
            'name' => 'mal au dos',
            'order' => 1,
            'priority' => 2,
            'slug' => 'mal-au-dos',
            'leaf' => true,
            'tree_id' => 1,
            'category_id' => 12,
        ]);

        DB::table('tree__details')->insert([
            'id' => 4,
            'emergency' => false,
            'going_coming' => false,
            'icon' => 'fake-icon',
            'name' => 'soif',
            'order' => 1,
            'priority' => 3,
            'slug' => 'soif',
            'leaf' => true,
            'tree_id' => 1,
            'category_id' => 12,
            'parentId' => 3
        ]);
    }
}
