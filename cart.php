<?php session_start();

include 'my-functions.php';
include 'database.php';
global $products;
$products = selectAll('SELECT * FROM products');
if (isset($_POST["product"])) {
    $_SESSION = ["panier" => $_POST];
} elseif (isset($_SESSION["panier"])) {
    $_POST = $_SESSION["panier"];
} ?>

<html lang="en">
<head>
    <title> Panier</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>

<?php
$key_product = $_POST["product"];
$discounted_price = discounted_price($products[$key_product]["price"], $products[$key_product]["discount"]);
$quantity = intval($_POST["quantity"]);
$shipment = (isset($_POST["shipment"]) ? $_POST["shipment"] : "la_poste");
$product_name = ($products[$key_product]["name"]);
//var_dump($_SESSION);
//var_dump($products);
//var_dump($_POST);
//var_dump($shipment);
?>

<div style='text-align: center'>
    <a href="item.php">Retour à la selection des produits</a>
    <br><br>
    <table>
        <thead>
        <td>
        <th colspan="6">Récapitulatif de votre commande</th>
        </td>
        </thead>
        <tr>
            <td> <?php echo $products[$key_product]["name"]; ?></td>
            <td> <?php echo "Quantité :" . $_POST["quantity"]; ?></td>
            <td colspan="2">Prix total (après remise): <?php
                if ($quantity > 0) {
                    echo $discounted_price * $quantity . "€";
                } else {
                    echo "Erreur Prix";
                } ?>
            </td>
        </tr>
        <tr>
            <td>
                Remise: <?php echo discount($products[$key_product]["price"], $products[$key_product]["discount"]) * $quantity . "€"; ?></td>
            <td> Prix unitaire(TTC): <?php echo formatPrice($products[$key_product]["price"]) . "€"; ?></td>
            <td> Total
                HT: <?php echo priceExcludingVAT($products[$key_product]["price"]) * $quantity . "€"; ?></td>
            <td>
                TVA: <?php echo valueVAT($products[$key_product]["price"]) * $quantity . "€"; ?> </td>
        </tr>
    </table>
</div>
<br>
<div style="text-align: center">
    <form method="post" action="">
        <label for="shipment">Choisissez un moyen de livraison:</label>
        <select name="shipment" id="shipment" required>
            <option value="">Choisissez un option</option>
            <option value="la_poste" <?php echo($shipment == "la_poste" ? "selected" : "") ?> >La Poste</option>
            <option value="DHL" <?php echo($shipment == "DHL" ? "selected" : "") ?>>DHL</option>
            <option value="UPS" <?php echo($shipment == "UPS" ? "selected" : "") ?>>UPS</option>
        </select>
        <input id="quantity" name="quantity" type="hidden" value="<?php echo $quantity ?>">
        <input id="product" name="product" type="hidden" value="<?php echo $key_product ?>">
        <input type="submit" name="submit" value="valider">
    </form>
    <?php
    echo "Frais de port : " . $FDP = shippingCost(($products[$key_product]["weight"]) * $quantity, $discounted_price, $shipment);
    $finalPrice = $FDP + $discounted_price * $quantity;
    echo "<h4>" . "Prix final :" . $finalPrice . "</h4>";
    ?>
    <form method="post" action="bravo.php">
        <input id="final_price" name="final_price" type="hidden" value="<?php echo $finalPrice ?>">
        <input id="product_name" name="product_name" type="hidden" value="<?php echo $product_name ?>">
        <input type="submit" name="submit" value="Commander">
    </form>
</div>

</body>
</html>
