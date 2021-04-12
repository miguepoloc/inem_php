<?php
require_once 'pdoconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $sql = "SELECT * from prueba";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "id: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
    }
    // } else {
    //     echo "0 results";
    // }
    // $conn->close();
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
