<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->id = 1;
        $category->name = 'Sport';
        $category->save();

        $category = new \App\Category();
        $category->id = 2;
        $category->name = 'Entertainment';
        $category->save();
    }
}
