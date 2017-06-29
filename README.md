
[![StyleCI](https://styleci.io/repos/85481364/shield?branch=master)](https://styleci.io/repos/85481364)

# SocialNetworking
Social Networking site with Laravel 5.4

#Install

`Composer install`

Make channges in user table and run
 `php artisan migrate`


Create Laravel Auth
 `php artisan make:auth`



#Add view composer

`php artisan make:provider ComposerServiceProvider`


Add the ComposerServiceProvider class to config/app.php array for providers so that laravel is able to identify it.
Create a new Folder inside App/Http ViewComposer

create a new file PostsComposer.php

In composerServiceProvider boot function

	 `View::composer('posts.create', 'App\Http\ViewComposer\PostsComposer');`

Now go to view and echo the variable

