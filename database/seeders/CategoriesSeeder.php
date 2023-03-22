<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Fashion & Lifestyle',
            'category_slug'=> 'fashion-&-lifestyle',
            'status' => 'Active',
        ]);

        Category::create([
            'category_name' => 'Trending & News',
            'category_slug'=> 'trending-&-news',
            'status' => 'Active',
        ]);

         Category::create([
            'category_name' => 'Photography',
            'category_slug'=> 'photography',
            'status' => 'Active',
        ]);

        Category::create([
            'category_name' => 'Reviews & Buying Guide',
            'category_slug'=> 'reviews-&-buying-guide',
            'status' => 'Active',
        ]);

        Category::create([
            'category_name' => 'Tech & Tricks/Tutorial',
            'category_slug'=> 'tech-&-tricks-Tutorial',
            'status' => 'Active',
        ]);

        Category::create([
            'category_name' => 'Art & Design',
            'category_slug'=> 'art-&-design',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Media & Entertainment',
            'category_slug'=> 'media-&-entertainment',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Science & Technology',
            'category_slug'=> 'science-&-technology',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Business & Finance',
            'category_slug'=> 'business-&-finance',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Pet & Animals',
            'category_slug'=> 'pet-&-animals',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Health & Fitness',
            'category_slug'=> 'health-&-fitness',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Sports & Outdoor',
            'category_slug'=> 'sports-&-outdoor',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Food & Travel',
            'category_slug'=> 'food-&-travel',
            'status' => 'Active',
        ]);
        Category::create([
            'category_name' => 'Education and Career',
            'category_slug'=> 'education-and-career',
            'status' => 'Active',
        ]);
    }
}