<?php

use Illuminate\Database\Seeder;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 30)->create();
        factory(Category::class, 100)->create();
        factory(Category::class, 100)->create();
        factory(Category::class, 100)->create();
        factory(Category::class, 100)->create();
        factory(Category::class, 100)->create();
    }
}
