<?php

include_once '../db.php';

class Directivo extends DB
{

    function obtenerDirectivos()
    {
        $this->connect()->query('SET CHARACTER SET utf8');
        $query = $this->connect()->query('SELECT * FROM directivos');
        return $query;
    }
}
