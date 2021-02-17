<?php

require_once 'UpdateAgedBrie.php';
require_once 'UpdateDefault.php';
require_once 'UpdatePasses.php';

class GildedRose
{
    /**
     * @var Item[]
     */
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function update(): void
    {
        foreach ($this->items as $item) {
            switch($item->name) {
                case "Sulfuras, Hand of Ragnaros":
                    break;
                case "Aged Brie":
                    new UpdateAgedBrie($item);
                    break;
                case "Backstage passes to a TAFKAL80ETC concert":
                    $item = new UpdatePasses($item);
                    break;
                default:
                    $item = new UpdateDefault($item);
                    break;
            }
        }
    }
    public function showItems():array
    {
        return $this->items;
    }
}
