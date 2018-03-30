<?php
    $servername = "localhost";
    $username = "groot";
    $password = NULL;
    $dbname = "unicorn";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed dumbass: " . $connection->connect_error);
    }

    echo "Connected successfully";
?>
