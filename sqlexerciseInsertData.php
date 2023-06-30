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
$sql = "INSERT INTO ja_sp22_ContactForm (
    Name,
    Email, 
    ContactBack, 
    Comments,
    )
    VALUES(
        
        "Jane Andre",
        "ja@gmail.com",
        "Yes",
        "I look foreward to hearing from you."

    );";

//Execute SQL statement on server 
$conn->exec($sql);

//Get the Id of the last record added 
$last_id = $conn->lastInsertId();

//Send a success message to screen. Changed to new record was added.. 
echo "A new record was added successfully.
The last inserted ID is: " . $last_id;

} chatch(PDOException $error)  {    
 /
 //Return error code if one is created 
 echo "An error occured:<br>" . sql ."<br>". $error ->getMessage();
 
}
$conn= Null; 
?>