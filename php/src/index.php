<?php

declare(strict_types=1);
require_once 'turu.php';
require_once 'Item.php';
require_once 'GildedRose.php';



$itemArray = [ new Item('Sulfuras, Hand of Ragnaros', 2, 0)];
$store = new GildedRose($itemArray);
var_dump($store->showItems());
$store->update();
?>
<br>
<?php
var_dump($store->showItems());


//fer un ItemFactory i/o clase per quality i per sellIn