<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=user', 'root', '');
}
catch (PDOException $e)
{    print('Erreur : ' . $e->getMessage() . "<br/>");
}