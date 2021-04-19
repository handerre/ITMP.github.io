<?php
if(isset($_POST["leggtil"])) 
 {

  
    // Tilkoblingsinformasjon	
    $tjener = "109.106.246.51";
    $brukernavn = "u580154432_london";
    $passord = "Passord01";
    $database = "u580154432_london";
    
      // Opprette en kobling
      $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    // Sjekk om koblingen virker
   if ($kobling->connect_error) {
   die("Noe gikk galt: " . $kobling->connect_error);
 }
 
    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");


    // Lagrer skjemafeltene i enklere navn
    $BN = $_POST["username"];
    $Epost = $_POST["email"];
    $Pass = $_POST["password"];
    $Tide = $_POST["create_time"];



    $sql = "INSERT INTO user (username, email, password, create_time) VALUES ('$BN', '$Epost', '$Pass', '$Tide')";

    
    if($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
    
  
}

?>