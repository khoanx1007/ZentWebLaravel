<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = [
            [
                'name' => 'Điện thoại',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Máy tính',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        foreach($categories as $categorie)
        {
            DB::table('categories')->insert($categorie);
        }
    }
}
