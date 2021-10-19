<?php

namespace App;

class Database {

    public function database() {
        $dbname = 'hobbyworld';
        $username = 'root';
        $password = 'root';
        return new \PDO('mysql:host=localhost;charset=utf8mb4;dbname=' . $dbname, $username, $password);
    }
}