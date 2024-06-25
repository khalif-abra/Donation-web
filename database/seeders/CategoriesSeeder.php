<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class CategoriesSeeder extends Seeder
{
    public function run()
    {

        User::factory(7)->create();
        $categories = [
            [
                'name' => 'Palestine',
                'slug' => 'palestine'
            ],
            [
                'name' => 'Animals',
                'slug' => 'animals'
            ],
            [
                'name' => 'Donations',
                'slug' => 'donations'
            ],
            [
                'name' => 'Religion',
                'slug' => 'religion'
            ],
            [
                'name' => 'Humanity',
                'slug' => 'humanity'
            ]
        ];
        Post::factory(35)->create();

        // Insert data into categories table
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
