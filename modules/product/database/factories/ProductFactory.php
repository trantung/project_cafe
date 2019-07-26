<?php
use APV\Category\Models\Category;
use APV\Product\Models\Product;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(Product::class, function (Faker $faker) {
    $categoryIds = Category::get()->pluck('id');
    $imageObject = (object) [
        'main' => 'default_product_main_image.png',
        'more_img' => [
            'product.png'
        ],
    ];

    return [
        'name' => $faker->name,
        'category_id' => $faker->randomElement($categoryIds),
        'price' => $faker->numberBetween(10000, 1000000),
        'images' => $imageObject,
        'status' => 1,
        'short_description' => $faker->text,
        'long_description' => $faker->text,
        'created_admin_id' => null,
        'updated_admin_id' =>null,
    ];
});
