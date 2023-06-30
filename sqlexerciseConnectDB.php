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

//Send success message to screen
echo "Database Connection Successful!";

} chatch(PDOException $error)  {    
 // Return error code if one is created 
 echo "Connection Failed:" . $error->getMessage ();

}
$conn= null; 
?>