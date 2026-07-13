<?php
$servername = getenv('DB_HOST') ?: 'localhost';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPassword = getenv('DB_PASS') ?: '';
$dbname = getenv('DB_NAME') ?: 'test_db';

$conn = mysqli_connect($servername, $dbUser, $dbPassword, $dbname);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedUsername = trim($_POST['new-username'] ?? '');
    $submittedPassword = trim($_POST['new-password'] ?? '');
    $submittedLocation = trim($_POST['new-location'] ?? '');
    $submittedEmail = trim($_POST['new-email'] ?? '');

    if ($submittedUsername === '') {
        echo 'Please enter a username';
    } elseif ($submittedPassword === '') {
        echo 'Please enter a password';
    } else {
        $stmt = mysqli_prepare($conn, 'INSERT INTO Coffee_db (username, password, location, email) VALUES (?, ?, ?, ?)');
        if (!$stmt) {
            die('Registration query failed: ' . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, 'ssss', $submittedUsername, $submittedPassword, $submittedLocation, $submittedEmail);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Successfully registered'); window.location.href = 'index.php';</script>";
            exit();
        }

        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
