<?php

include_once 'db.php';

class Prueba extends DB{
    
    function obtenerPruebas(){
        $query = $this->connect()->query('SELECT * FROM prueba');
        return $query;
    }

}
