<?php

    require 'database/connect.php';
    require 'query/dbquery.php';

    $pdo = connect();
    $results = fetch($pdo);

    foreach ($results as $result) { // displaying
        print_r($result);
    }
