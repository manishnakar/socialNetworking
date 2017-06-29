<?php

namespace App\Http\ViewComposers;

use App\Http\Repository\PostInterface;
use Illuminate\View\View;

class PostsComposer
{
    public $postsList = [];

    /**
     * Create a movie composer.
     *
     *  @param MovieRepository $movie
     *
     * @return void
     */
    public function __construct(PostInterface $posts)
    {
        $this->postsList = $posts->getPostsList();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('latestPosts', end($this->postsList));
    }
}
