<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'web desgin',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
        ]);

        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development',
        ]);
    }
}
