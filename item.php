<?php
$product_name = "Jester Hat";
$price = "66$";
$product_pic = "https://emojis.slackmojis.com/emojis/images/1643516618/26601/jester-hat.png?1643516618";
include 'header.php';
echo $product_name;
echo "<br><img src=$product_pic alt='hat pic'>";
echo "<br>" . $price;
include 'main.php';
include 'footer.php';