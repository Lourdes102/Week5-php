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
$sql = "DELETE FROM  ja_sp22_ContactForm ;";
    
//Execute SQL statement on server 
    $conn->exec($sql);

//Send  message to screen
echo"Table Data Deleted.";

} chatch(PDOException $error)  {    
 // Return error code if one is created 
 echo "An error occurred:<br>" . sql ."<br>". $error ->getMessage();
 
}
$conn = null;
?>