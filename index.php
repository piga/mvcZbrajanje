<!DOCTYPE html>
<html>
<body>
    
    <?php 
        include "ZbrajanjeView.php";
    
        $zv = new ZbrajanjeView;
        echo $zv->prikaziFormu();
    
        if (!empty($_POST))
        {
            if(isset($_POST["br1"]) && isset($_POST["br2"]))
            {
                $a = $_POST["br1"];
                $b = $_POST["br2"];
                echo $zv->prikaziRezultat($a, $b);                
            }
        }
        else
        {
            echo "Nisi unio nikakve brojeve.";
        }
    ?>
    </body>
</html>