<?php

$router = new \Bramus\Router\Router();

$router->get('/', '\App\Controllers\PostController@index');
$router->get('/getposts', '\App\Controllers\PostController@getPosts');
$router->get('/getsnippetpost/(\d+)', '\App\Controllers\PostController@getSnippetPost');
$router->get('/paginate/(\d+)', '\App\Controllers\PostController@paginate');
$router->get('/parse', '\App\Controllers\PostController@postsParser');

$router->run();