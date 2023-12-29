<?php

include "ZbrajanjeModel.php";

class ZbrajanjeKontroler
{
    public function izracunaj($a, $b)
    {
        
            $z = new ZbrajanjeModel($a, $b);
            $z->zbroji();            
            return $z->rez;
        
    }
}
?>