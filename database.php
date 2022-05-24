<?php

// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlClient = new PDO(
    'mysql:host=localhost;dbname=ecommerce;charset=utf8',
    'salem',
    'Gabrielle1997*'
);

//try {
//    $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'salem', 'Gabrielle1997*');
//} catch (Exception $e) {
//    die('Erreur : ' . $e->getMessage());
//}

function connectBDD()
{
    try {
        return new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'salem', 'Gabrielle1997*');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function prepareAndExecuteOne(string $paramQuery): void
{
    connectBDD()->prepare($paramQuery)->execute();
}

function selectAll(string $paramQuery): array
{
    $paramStatement = connectBDD()->prepare($paramQuery);
    $paramStatement->execute();
    return $paramStatement->fetchAll();
}
?>








