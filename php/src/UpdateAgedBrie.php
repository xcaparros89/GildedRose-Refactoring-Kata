<?php

require_once 'InterfaceUpdate.php';
class UpdateAgedBrie implements InterfaceUpdate
{

    public function __construct(Item $item)
    {
        $this->update($item);
    }

    public function update(Item $item):Item{
        $item->sell_in --;
        if ($item->sell_in < 0 ) $item->quality += 2; else{
            $item->quality ++;
        }
        if ($item->quality>50) {
            $item->quality = 50;
        }
        return $item;

    }
}