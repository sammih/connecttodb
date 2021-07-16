<?php

function connect()
{
    // connect
    try {
        return new PDO('mysql:host=localhost;dbname=app', 'root', '');
    } catch (PDOException $exception) {
        echo "Error!" . $exception->getMessage();
    }
}