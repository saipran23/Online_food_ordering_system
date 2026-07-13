<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";

    // Establishing connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checking connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Checking if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['new-username'];
        $password = $_POST['new-password'];
       $location = $_POST['new-location'];
        $email = $_POST['new-email'];

        if (empty($username)) {
            echo "Please enter a username";
        } elseif (empty($password)) {
            echo "Please enter a password";
        } else {
            $sql = "INSERT INTO Coffee_db (username, password, location, email)
                    VALUES ('$username', '$password', '$location', '$email')";
            if (mysqli_query($conn, $sql)) {
           /* //    echo "<script>alert('Succesfully login')</script>";
                echo "<script>alert('Successfully registered')</script>";
                header("location: index.php"); // Redirect to homepage after successful insertion
                exit(); // Exit to prevent further execution of PHP code */
                echo "<script>alert('Successfully registered');
                window.location.href = 'index.php';</script>";
          exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    // Closing connection
    mysqli_close($conn);
?>
