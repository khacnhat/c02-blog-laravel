<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog();
        $blog->id = 1;
        $blog->title = 'My first blog';
        $blog->description = 'My blog description';
        $blog->content = 'Blog content';
        $blog->category_id = 1;
        $blog->save();
    }
}
