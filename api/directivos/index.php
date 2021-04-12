<?php
include_once 'api_directivos.php';
// header("Content-Type: text/html;charset=utf-8");

$api = new ApiDirectivos();

$api->getAll();
