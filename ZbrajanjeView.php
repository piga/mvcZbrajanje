<?php
include "ZbrajanjeKontroler.php";

class ZbrajanjeView
{
    private $kontroler;
    
    public function __construct()
    {
        $this->kontroler = new ZbrajanjeKontroler;    
    }
    
    public function prikaziFormu()
    {
        return "
        <form action='' method='POST'>
    <label for='br1'>Unesi prvi broj: </label>
    <input type='text' name='br1' placeholder='npr. 3.23'>
    <br>
    
    <label for='br2'>Unesi drugi broj: </label>
    <input type='text' name='br2' placeholder='npr. 0.0078'>
    <br>
    <input type='submit' value='Izračunaj'>
    </form>
        ";
    }
    
    public function prikaziRezultat($a, $b)
    {
        echo $this->kontroler->izracunaj($a, $b);
    }
}

?>