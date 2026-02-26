<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Alimentation', 'color' => '#F97316'],
            ['name' => 'Factures', 'color' => '#3B82F6'],
            ['name' => 'Produits ménagers', 'color' => '#10B981'],
            ['name' => 'Réparations', 'color' => '#EF4444'],
            ['name' => 'Loisirs', 'color' => '#8B5CF6'],
        ]);
    }
}
