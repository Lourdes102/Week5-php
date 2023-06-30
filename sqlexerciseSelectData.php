<?php
$HostName="localhost";
$UserName="root";
$Password=" ";
$DatabaseName= "test";

try {
//Create a PDO Object with connection pareamenters  
$conn = new PDO ("mysql:host=$HostName;dbname=$DatabaseName", $UserName, $Password);

//Set PDO error mode to Exception 
$conn-> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Variable Containing SQL Command / Insert into statement to insert data in table  
$sql = "SELECT * FROM ja_sp22_ContactForm ;";

//Execute SQL statement on server

$returnedData = $conn->query($sql);

// Print retured data to the screen, Chance sql statement to query(returs an array) and create a foreach loop   and add echo statement
    echo"<b>The data currently in the database:</b><br>\n";
    foreach $conn->query($sql) as $row) {
    echo $row ['ContactFormID'] .  " |  "  ; 
    echo $row ['Name'] .  "  |  "  ;
    echo $row ['Email'] .  " |  "  ;
    echo $row ['ContactBack'] .  " | "  ;
    echo $row ['Comments'] .  " | "  ;
    echo $row ['DateSent'] .  " <br>\n"; }



} chatch(PDOException $error)  {    

    // Return error code if one is created 
     echo "An error occurred:<br>" . sql ."<br>". $error ->getMessage();
 
}

$conn= null; 
?>