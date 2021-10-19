<?php

namespace App;

use App\Database;

class Post
{
    public static function limit()
    {
        $result = Database::database()->query('SELECT * FROM posts ORDER BY id DESC LIMIT 5');
        
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function get($id)
    {
        $result = Database::database()->query("SELECT snippet FROM posts WHERE id=$id");
        
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function set($data)
    {
        $result = Database::database()->query("INSERT IGNORE INTO posts (title,content,snippet,url) VALUES " . implode(', ', $data));
        return;
    }

    public static function paginate($offset, $countElements)
    {
        $result = Database::database()->query("SELECT * FROM posts ORDER BY id DESC LIMIT $offset,$countElements");
        
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}