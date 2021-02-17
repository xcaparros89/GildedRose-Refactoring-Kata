<?php


require_once 'InterfaceUpdate.php';


class UpdateDefault implements InterfaceUpdate
{
    public function __construct(Item $item)
    {
        $this->update($item);
    }

    public function update(Item $item):Item{
        $item->sell_in --;
        if ($item->sell_in < 0 ) {
            $item->quality -= 2;
        } else{
            $item->quality --;
        }
        if ($item->quality<0) {
            $item->quality = 0;
        }
        return $item;
    }
}