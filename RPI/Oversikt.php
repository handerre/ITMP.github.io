
<?php

   
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
 else {
 echo "Koblingen virker"; }
  
   //Angi UTF-8 som tegnsett
   $kobling->set_charset("utf8");



$sql = "SELECT username, email, password, create_time
FROM user";


$resultat = $kobling->query($sql);


echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
    echo "<th>Brukernavn</th>"; 
    echo "<th>Mail</th>";
    echo "<th>Passord</th>";
    echo "<th>Tidsmerke</th>";

    
    

echo "</tr>";

while($rad = $resultat->fetch_assoc()) {


    $BN = $rad["username"];
    $Epost = $rad["email"];
    $Pass = $rad["password"];
    $Tide = $rad["create_time"];
	
    echo "<tr>";
        echo "<td>$BN</td>";
        echo "<td>$Epost</td>"; 
        echo "<td>$Pass</td>";
        echo "<td>$Tide</td>";
       
       
    echo "</tr>";
}

echo "</table>"; // Avslutter tabellen


?>


