<html lang="en">
<head>
    <title> Vente de truc et bidules </title>
    <meta charset="UTF-8">
</head>
<body>

<?php
include 'my-functions.php';
include 'multidimensional-catalog.php';
global $products;
?>

<?php foreach($products as $product => $product_info) { ?>
    <div style = 'text-align: center' >
    <?= "<h2>" . $product_info["name"] . "</h2>"; ?>
    <?= "<h3>" . formatPrice($product_info["price"]) . "€" . "TTC</h3>"; ?>
    <?= "<h3>" . priceExcludingVAT($product_info["price"]) . "€" . " HT</h3>"; ?>
    <?= "<h3>" . discount($product_info["price"], $product_info["discount"]) . "€" . " de réduction</h3>"; ?>
    <?= "<h3>" . $product_info["weight"] . " </h3>"; ?>
    <?= "<img src =' " . $product_info["picture_url"] . "' alt=product picture' " . "'>" ?>
        <form method="post" action="cart.php">
            <label for="quantity"> Quantité: </label>
            <input id="quantity" name="quantity" type="number" min="1" value="1">
            <input id="product" name="product" type="hidden" value="<?php echo $product ?>">
            <input type="submit" name="submit" value="Commander">
        </form>
    </div>
<?php } ?>


<!--<html lang="en">-->
<!--<body>-->
<!--<br><br>-->
<!---->
<!--<div style = 'text-align: center' >-->
<!--    <form method="post" action="cart.php">-->
<!--        <label for="product-selection">Sélection du produit:</label>-->
<!--        <select name="product" id="product-selection">-->
<!--            <option value="">--Choisissez un produit--</option>-->
<!--            <option value="menottes">Menottes</option>-->
<!--            <option value="matraque">Matraque</option>-->
<!--            <option value="surin">surin</option>-->
<!--        </select>-->
<!--        <br>-->
<!--        <label for="quantity"> Quantité: </label>-->
<!--        <input id="quantity" type="number" min="0" value="1">-->
<!--        <input type="submit" value="Commander">-->
<!--    </form>-->
<!--</div>-->

</body>
</html>

<!--//include 'header.php';-->
<!--//include 'main.php';-->
<!--//include 'footer.php';-->
<!--?>-->
