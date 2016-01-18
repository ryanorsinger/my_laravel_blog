<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $user = User::firstOrFail();

        $post1 = new Post;
        $post1->title = 'Some title 1';
        $post1->body = 'A body 1';
        $post1->user_id = $user->id;
        $post1->save();

        $post2 = new Post;
        $post2->title = 'Some title 2';
        $post2->body = 'A body 2';
        $post2->user_id = $user->id;
        $post2->save();

        $post3 = new Post;
        $post3->title = 'Some title 3';
        $post3->body = 'A body 3';
        $post3->user_id = $user->id;
        $post3->save();
    }
}
