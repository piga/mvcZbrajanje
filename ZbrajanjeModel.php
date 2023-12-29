<?php

class ZbrajanjeModel
{
    private $a, $b;
    public $rez;
    
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function zbroji()
    {
        try
        {
            if (is_numeric($this->a) && is_numeric($this->b))
            {
                $this->rez = $this->a + $this->b;    
                
            }
            else
            {
                throw new Exception;
            }
            
        }
        catch(Exception $e)
        {
            echo "Nešto si krivo unio".$e->getMessage();
        }
    }
}

?>