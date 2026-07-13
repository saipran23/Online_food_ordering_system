<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Establishing connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}




    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from Coffee_db where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  

            echo  '<script>
            window.location.href = "index.php";
            alert("Login Successfully")
        </script>';


           // header("Location: index.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    


/*
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Checking if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['new-username'];
    $password = $_POST['new-password'];
   $location = $_POST['new-location'];
    $email = $_POST['new-email'];*/




?>