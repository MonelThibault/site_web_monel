<?php

// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlClient = new PDO(
    'mysql:host=localhost;dbname=mydb;charset=utf8',
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
        return new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'salem', 'Gabrielle1997*');
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
    $paramStatement->execute([]);
    return $paramStatement->fetchAll(PDO::FETCH_ASSOC);
}


function getProductId( string $productName ): int {
    $sqlRequest = "SELECT id FROM products WHERE name = :productName";

    $paramStatement = connectBDD()->prepare($sqlRequest);
    $paramStatement->execute([
        "productName" => $productName,
    ]);
    return $paramStatement->fetch(PDO::FETCH_ASSOC)["id"];
}

function insertNewOrder ( string $order_number, int $totalPrice ):void {
    $sqlRequest = "
        INSERT INTO orders( orders.number, orders.total, orders.date ) 
                VALUES (:orderNumber, :totalPrice, CURRENT_TIMESTAMP() )
    ";

    $paramStatement = connectBDD()->prepare($sqlRequest);
    $paramStatement->execute( [
        "orderNumber" => $order_number,
        "totalPrice" => $totalPrice
    ]);
}

function getOrderId( string $orderNumber ): int {
    $sqlRequest = " SELECT id FROM orders WHERE number = :orderNumber ";

    $paramStatement = connectBDD()->prepare($sqlRequest);
    $paramStatement->execute([
        "orderNumber" => $orderNumber,
        ]);

    return $paramStatement->fetch(PDO::FETCH_ASSOC)["id"];
}



