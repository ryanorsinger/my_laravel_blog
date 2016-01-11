<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $post1 = new Post;
        $post1->title = 'Some title 1';
        $post1->body = 'A body 1';
        $post1->save();

        $post2 = new Post;
        $post2->title = 'Some title 2';
        $post2->body = 'A body 2';
        $post2->save();

        $post3 = new Post;
        $post3->title = 'Some title 3';
        $post3->body = 'A body 3';
        $post3->save();
    }
}