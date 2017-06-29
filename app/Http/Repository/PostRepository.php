<?php

namespace App\Http\Repository;

use App\Post;

/**
 * Post Repository class.
 */
class PostRepository implements PostInterface
{
    /**
     * Get a list of all posts.
     *
     * @return array Array containing list of all posts
     */
    public function getPostsList()
    {
        return [
            'Shawshank redemption',
            'Forrest Gump',
            'The Matrix',
            'Pirates of the Carribean',
            'Back to the future',
        ];
    }

    public function getAllPosts()
    {
        return Post::all();
    }

    public function getPostById($id)
    {
        return Post::find($id);
    }

    public function createOrUpdate($id = null)
    {
        if (is_null($id)) {
            // create after validation
            $post = new Post();
            $post->name = 'Sheikh Heera';
            $post->email = 'me@yahoo.com';
            $post->password = '123456';

            return $post->save();
        } else {
            // update after validation
            $post = Post::find($id);
            $post->name = 'Sheikh Heera';
            $post->email = 'me@yahoo.com';
            $post->password = '123456';

            return $post->save();
        }
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->user, $method], $args);
    }
}
