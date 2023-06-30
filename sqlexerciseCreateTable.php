<?php
$HostName="localhost";
$UserName="root"
$Password=" ";
$DatabaseName= "test";

try {
//Create a PDO Object with connection pareamenters  
$conn = new PDO ("mysql:host=$HostName;dbname=$DatabaseName", $UserName, $Password);

//Set PDO error mode to Exception 
$conn-> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Variable Containing SQL Command 
$sql = "CREATE TABLE ja_sp22_ContactForm (
    ContactFormID  INT(6), NOT NULL AUTO_INCREMENT
    PRIMARY KEY
    Name VARCHAR(100) NULL,
    Email VARCHAR (100) NULL,
    ContactBack VARCHAR(100) NULL,
    Comments VARCHAR(600) NULL, 
    DateSent DATETIME DEFAULT CURRENT_TIMESTAMP
    );";

    //Execute SQL statement on server 
    $conn->exec($sql);

//Send success message to screen
echo"The table was created successfully. ";

} chatch(PDOException $error)  {    
 // Return error code if one is created 
 echo "Connection Failed:" . $error->getMessage ();

}
$conn=null;
?>