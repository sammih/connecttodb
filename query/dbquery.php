<?php

function fetch($pdoObject)
{
    return $pdoObject->query('SELECT * FROM users');
}