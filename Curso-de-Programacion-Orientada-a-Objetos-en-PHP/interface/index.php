<?php

interface Search{

    public function all();
}

/* class User implements Search{
    public function all(){
        return 'All users';
    }
} */

class Post implements Search{
    public function all(){
        return 'All posts';
    }
}

/* $user = new User();
echo $user->all(); */

$post = new Post();
echo $post->all();



