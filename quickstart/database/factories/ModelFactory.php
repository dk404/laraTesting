<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// Begin Widget Factory

$factory->define(App\Widget::class, function (Faker\Generator $faker) {

    return [

        'name' => $faker->unique()->word,

    ];

});

// End Widget Factory
// Begin Category Factory

$factory->define(App\Category::class, function (Faker\Generator $faker) {


    $name = $faker->unique()->words(2, true);
    return [

        'name' => $name,
        'slug' => \Illuminate\Support\Str::slug($name, "-"),

    ];

});

// End Category Factory
// Begin Subcategory Factory

$factory->define(App\Subcategory::class, function (Faker\Generator $faker) {
    return [

        'name' => $faker->unique()->word,
        'category_id' => $faker->numberBetween($min = 48, $max = 61),

    ];

});

// End Subcategory Factory
// Begin Gadget Factory

$factory->define(App\Gadget::class, function (Faker\Generator $faker) {
    return [

        'name' => $faker->unique()->word,
        'widget_id' => $faker->numberBetween($min = 1, $max = 4),

    ];

});

// End Gadget Factory
// Begin Dummy Factory

$factory->define(App\Dummy::class, function (Faker\Generator $faker) {

    return [

        'name' => $faker->unique()->word,

    ];

});

// End Dummy Factory
// Begin Post Factory

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    $uniqueWord = $faker->unique()->word;
    $slug = str_slug($uniqueWord, "-");
    $is_published = rand(0, 1);

    return [

        'name' => $uniqueWord,
        'body' => $faker->sentence(),
        'is_published' => $is_published,
        'slug' => $slug,

    ];

});

// End Post Factory