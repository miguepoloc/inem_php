<?php

include_once 'tabla.php';

class ApiPruebas{


    function getAll(){
        $prueba = new Prueba();
        $pruebas = array();
        $pruebas["items"] = array();

        $res = $prueba->obtenerPruebas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    // "imagen" => $row['imagen'],
                );
                array_push($pruebas["items"], $item);
            }
        
            echo json_encode($pruebas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
