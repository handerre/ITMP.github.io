<?php
include 'kobling.php';
 
 
  // Opprette en kobling
  $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


    // Lagrer skjemafeltene i enklere navn
   
    $FID = $_POST["ForfatterID"];
    $FF = $_POST["Fornavn"];
    $FE = $_POST["Etternavn"];
  
   


    $sql = "INSERT INTO Forfatter (ForfatterID, Fornavn, Etternavn) 
    VALUES ('$FID', '$FF', '$FE')";

  

    if($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført.";
    } /*else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }*/
    
  


?>