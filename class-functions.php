<?php
include 'my-functions.php';
include 'database.php';

function displayItem(Items | Torchonnier $itemToDisplay): void
{
    ?>
    <div style='text-align: center'>
        <?= "<h2>" . $itemToDisplay->getName() . "</h2>"; ?>
        <?= "<h3>" . formatPrice($itemToDisplay->getPrice()) . "€" . "TTC</h3>"; ?>
        <?= "<h3>" . priceExcludingVAT($itemToDisplay->getPrice()) . "€" . " HT</h3>"; ?>
        <?= "<h3>" . $itemToDisplay->getWeight() . "g" . " </h3>"; ?>
        <h3>  <?php  echo get_class($itemToDisplay) === 'Torchonnier' ?  $itemToDisplay->getTorchonnier() : '' ; ?> </h3>
        <?= "<img src =' " . $itemToDisplay->getImageUrl() . "' alt=product picture' " . "'>" ?>
        <form method="post" action="cart.php">
            <label for="quantity"> Quantité: </label>
            <input id="quantity" name="quantity" type="number" min="1" value="1">
            <input id="product" name="product" type="hidden" value="<?php echo $itemToDisplay->getName() ?>">
            <input type="submit" name="submit" value="Commander">
        </form>
    </div>
<?php }

function displayCatalog(Catalog $catalogToDisplay): void
{
    foreach ($catalogToDisplay->getItemTab() as $product){
        displayItem($product);
    }
}
