<?php 


class rectangle extends shape
{
    public function getNumber()
    {
        echo "2,  nomor dari rectangle";
    }

    public function getNumberShape()
    {

        // nah ini cara untuk mengambil function yang sama ygn udh ke overide dari class parent
        return parent::getNumber();
    }

}

?>