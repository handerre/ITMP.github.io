<?php

include 'kobling.php';

// Opprette en kobling
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

if(isset($_POST["deletedata"])) 

{
  

    //Denne loopen kjører tre ganger hvor den øker med 1
    for ($x = 0; $x <= 2; $x++)
    {
        switch($x)
        {
            case 0:
                $sql = "DELETE FROM Forfatter_has_Artikler";
                break;
            case 1:
                $sql = "DELETE FROM Forfatter";
                break;
            case 2:
                $sql = "DELETE FROM Artikler";
                break;
        }
    }
}
?>