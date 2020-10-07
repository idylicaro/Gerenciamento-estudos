<?php
include("collection.php");

$collection = new Collection(array(1,3,5,6,7));

echo $collection->find(2), "\n";
echo $collection->find(3), "\n";
echo $collection->find(5), "\n";
echo $collection->find(1), "\n";