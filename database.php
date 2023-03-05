<?php


    $host="localhost";
    $username="root";
    $password="";
    $dbname="mydatabase";
    $conn=new PDO("mysql:host=$host;dbname=$dbname","$username","$password");


?>

<?php

if (isset($_POST['submit'])){
    if ($_POST['firstname']=="" or $_POST['lastname']=="" or $_POST['email']=="" or $_POST['password']==""){
        echo "Some Inputs are Empty...";
    }
    else{
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $insert=$conn->prepare("INSERT INTO forms (firstname,lastname,emailid,pas)VALUES (:firstname, :lastname, :email, :password)");

        $insert->execute([
            ":firstname"=>$firstname,
            ":lastname"=>$lastname,
            ":email"=>$email,
            ":password"=>$password
        ]);
    }
}


?>