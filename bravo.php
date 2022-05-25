<?php session_start();

include 'my-functions.php';
include 'database.php';
//var_dump($_SESSION);
//var_dump($_SESSION['panier']);
//var_dump($_POST);
$order = insertOrderToDatabase($_POST['final_price'],
    $_SESSION['panier']['product'],
    $_SESSION['panier']['quantity'],
    $_SESSION['panier']['shipment']);
?>

<html lang="en">
<head>
    <title> Panier</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<div style='text-align: center'>
    <h2>Commande validé !</h2>
    <a href="item.php">Retour à la selection des produits</a>
</div>
</body>
