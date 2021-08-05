<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Category;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Create default 10 brand
        factory(Brand::class,10)->create();
        // Create default 5 categories
        factory(Category::class, 5)->create();
        // Create a user
        DB::table('users')->insert([
            'name' => 'Tosar Ahmed',
            'email' => 'tosar@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}
