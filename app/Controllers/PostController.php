<?php

namespace App\Controllers;

use App\Post;
use Sunra\PhpSimple\HtmlDomParser;

class PostController 
{
    public function index()
    {
        $posts = Post::limit();
        require_once 'resources/views/layouts/app.php';
    }

    public function getPosts()
    {
        $posts = Post::limit();
        header("Content-Type: application/json; charset=UTF-8");
        
        echo json_encode($posts);
    }

    public function getSnippetPost(int $post_id)
    {
        $post = Post::get($post_id);
        header("Content-Type: application/json; charset=UTF-8");
        
        echo json_encode($post);
    }

    public function paginate(int $page)
    {
        $countElements = 5;
        $offset = ($page - 1) * $countElements;
        $post = Post::paginate($offset, $countElements);
        header("Content-Type: application/json; charset=UTF-8");
        
        echo json_encode($post);
    }

    public function postsParser()
    {
        // Create DOM from URL
        $html1 = file_get_contents('https://habr.com/ru/all/');
        
        \phpQuery::newDocument($html1);
        
        $parselinks = pq('.tm-article-snippet__title-link');
        $links = [];
        $index = 0;
        foreach ($parselinks as $link) {
            if ($index < 5) {
                $link = pq($link);
                
                $links[] = 'https://habr.com' . $link->attr("href");
                $index++;
            } else {
                break;
            }
        }
        
        $data = [];
        foreach ($links as $value) {
            $html = file_get_contents($value);
            
            \phpQuery::newDocument($html);

            $posts = pq('.tm-misprint-area__wrapper');

            foreach ($posts as $key => $post) {
                $post = pq($post);
                
                $data[] = '("' . htmlspecialchars(trim($post->find('h1')->text())) . '","' .  htmlspecialchars(mb_strimwidth(trim($post->find('#post-content-body')->text()), 0, 250, "")) . '","'. htmlspecialchars(trim($post->find('#post-content-body')->html())) . '","' . htmlspecialchars($value) . '")';
                
            }
        }
        
        \phpQuery::unloadDocuments();
        Post::set($data);       
    }
}