<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

use \App\Http\Repository\PostInterface;

class PostsComposer
{

	Public $postsList = [];

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
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('latestPosts', end($this->postsList));
    }


}
