<?php

$products = ["Menottes","Matraque","Surin"];
sort ($products);
print_r($products);

$tab_count = count($products);

$i=0;
while ($i < $tab_count){
    echo $products[$i] . "\n" ;
    $i++;
}

$i2=0;
do{
    echo $products[$i2] . "\n" ;
    $i2++;
}
while($i2 < $tab_count);


for($i3=0; $i3 < $tab_count; $i3++){
    echo $products[$i3] . "\n" ;
}

foreach($products as $value){
    echo $value . "\n" ;
}