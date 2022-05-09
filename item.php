<html lang="en">
<title> Vente de truc et bidules</title>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
include 'my-functions.php';
include 'multidimensional-catalog.php';
?>

<?php foreach($products as $product) { ?>
    <div style = 'text-align: center' >
    <?= "<h2>" . $product["name"] . "</h2>"; ?>
    <?= "<h3>" . formatPrice($product["price"]) . "TTC</h3>"; ?>
    <?= "<h3>" . priceExcludingVAT($product["price"]) . " HT</h3>"; ?>
    <?= "<h3>" . discountedPrice($product["price"], $product["discount"]) . " de réduction</h3>"; ?>
    <?= "<h3>" . $product["weight"] . " </h3>"; ?>
    <?= "<img src =' " . $product["picture_url"] . "' alt=product picture' " . "'>" ?>
        <form method="post" action="cart.php">
            <label for="quantity"> Quantité: </label>
            <input id="quantity" name="quantity" type="number" min="0" value="1">
            <input id="product" name="product" type="hidden" value="<?php echo $product["name"] ?>">
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
