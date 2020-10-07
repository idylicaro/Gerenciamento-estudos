<?php
include("collection.php");

$collection = new Collection(array(10,33,52,1,53));

$collection->display();
echo "\n";
$collection->sort();
$collection->display();
