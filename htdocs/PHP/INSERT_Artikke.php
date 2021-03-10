<?php



  // Opprette en kobling
  $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    // Lagrer skjemafeltene i enklere navn
    $AID = $_POST["ArtikkelID"];
    $Kilde = $_POST["Kilde"];
    $ABeskrivelse = $_POST["Beskrivelse"];



    $sql = "INSERT INTO Artikler (ArtikkelID, Kilde, Beskrivelse) VALUES ('$AID', '$Kilde', '$ABeskrivelse')";

    
    if($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført.";
    } /*else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }*/

?>