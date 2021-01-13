<?php
$roaring = new roaring_bitmap64;

$i=100000;


//$roaring->add(1141364700);
//$roaring->add(1141364799);
//$roaring->add(1141364798);

//$roaring->add(3241364798);

var_dump($roaring->equalorLargerFirst(1141364700));
?>
