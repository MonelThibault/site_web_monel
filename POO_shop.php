<?php
include_once 'Catalog.php'; ?>

<html lang="en">
<head>
    <title> Vente de truc et bidules </title>
    <meta charset="UTF-8">
</head>
<body>

<?php
$catalog = new Catalog();
displayCatalog($catalog);
?>


</body>
