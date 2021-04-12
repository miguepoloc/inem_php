<?php

include_once 'directivos.php';

class ApiDirectivos
{


    function getAll()
    {
        $directivo = new Directivo();
        $directivos = array();
        $directivos["items"] = array();

        $res = $directivo->obtenerDirectivos();
        if ($res->rowCount()) {
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

                $item = array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "cargo" => $row['cargo'],
                    "perfil" => $row['perfil'],
                    "correo" => $row['correo'],
                    "telefono" => $row['telefono'],
                    "foto" => $row['foto'],
                );
                // echo utf8_decode($item['nombre']);
                array_push($directivos["items"], $item);
            }

            echo json_encode($directivos, JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
