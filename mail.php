<?php

$name = $_POST['name'];
$phone=$_POST['phone']
$email = $_POST['email'];
$location = $_POST['location'];
$age = $_POST['age'];
$university=$_POST['university']

$mailheader = "From:".$name."<".$email.">\r\n";

$tosend = "xxxxxxxxxxxxxx@gmail.com";

mail($tosend," ", $name+$phone+$email+$location+$age+$university, $mailheader) or die("Error!");


echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
    <div class="container">
        <h1>Thank you for filling the form $name</h1>
        <p class="back">Go back to the <a href="page1.html">homepage</a>.</p>
        
    </div>
</body>
</html>
';


?>

