<?php
include 'kobling.php';
 
    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

      // Opprette en kobling
      $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


    // Lagrer skjemafeltene i enklere navn
    $AID = $_POST["ArtikkelID"];
    $FID = $_POST["ForfatterID"];
  
    

    $sql = "INSERT INTO Forfatter_has_Artikler(F_ForfatterID, A_ArtikkelID) VALUES ('$FID', '$AID')";

    if($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført.";
    }  /*else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }*/
    
  


?>