<html lang="en">
<head>
    <title> Panier</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>

<?php
include 'my-functions.php';
include 'multidimensional-catalog.php';
global $products;
?>

<div style = 'text-align: center' >
    <a href="item.php">Retour à la selection des produits</a>
    <br>
    Produit:  <?php echo $products[$_POST["product"]]["name"]; ?><br>
    Quantité: <?php echo intval($_POST["quantity"]); ?>
    <table>
        <thead>
        <td>
            <th colspan="6">Récapitulatif de votre commande</th>
        </td>
        </thead>
        <select>
        <tr>
            <td> <?php echo $products[$_POST["product"]]["name"]; ?></td>
            <td> <?php echo "Quantité :" . $_POST["quantity"]; ?></td>
            <td colspan="2">Prix final : <?php
                if (intval($_POST["quantity"]) > 0) {
                    echo discounted_price($products[$_POST["product"]]["price"],$products[$_POST["product"]]["discount"]) * intval($_POST["quantity"]);
                }
                else{
                    echo "Erreur Prix";
                }?>
            </td>
        </tr>
        <tr>
            <td> Remise: <?php echo discount($products[$_POST["product"]]["price"],$products[$_POST["product"]]["discount"]) * intval($_POST["quantity"]) . "€"; ?></td>
            <td> Prix unitaire(TTC): <?php echo formatPrice($products[$_POST["product"]]["price"]) . "€"; ?></td>
            <td> Total HT:  <?php echo priceExcludingVAT($products[$_POST["product"]]["price"]) * intval($_POST["quantity"]) . "€"; ?></td>
            <td> TVA: <?php echo valueVAT($products[$_POST["product"]]["price"]) * intval($_POST["quantity"]) . "€"; ?> </td>
        </tr>
        <label for="ship-select">Choisissez un moyen de livraison:</label>
        <select name="shipment" id="ship-select"
            <option value="la-poste">La Poste</option>
            <option value="DHL">DHL</option>
            <option value="UPS">UPS</option>
        </select>
        </tbody>
    </table>

</div>

</body>
</html>
