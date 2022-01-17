<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['baju', 'celana', 'kaos', 'kemeja', 'tas selempang'];
        foreach ($categories as $category){
            Category::create([
                'category' => $category
            ]);
        }
    }
}
