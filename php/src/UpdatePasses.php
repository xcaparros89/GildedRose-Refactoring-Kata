<?php


require_once 'InterfaceUpdate.php';


class UpdatePasses implements InterfaceUpdate
{

    public function __construct(Item $item)
    {
        $this->update($item);
    }

    public function update(Item $item):Item{
        $item->sell_in --;
        if ($item->sell_in < 0 ) {
            $item->quality = 0;
        } else if ($item->sell_in < 6){
            $item->quality += 3;
        } else if ($item->sell_in < 11){
            $item->quality += 2;
        } else {
            $item->quality ++;
        }
        return $item;
    }
}