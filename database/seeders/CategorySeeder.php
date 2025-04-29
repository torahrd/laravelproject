<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'foods',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('categories')->insert([
            'name' => 'music',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
