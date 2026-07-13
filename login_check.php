<?php
session_start();

$servername = getenv('DB_HOST') ?: 'localhost';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPassword = getenv('DB_PASS') ?: '';
$dbname = getenv('DB_NAME') ?: 'test_db';

$conn = mysqli_connect($servername, $dbUser, $dbPassword, $dbname);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedUsername = trim($_POST['username'] ?? '');
    $submittedPassword = trim($_POST['password'] ?? '');

    $stmt = mysqli_prepare($conn, 'SELECT username FROM Coffee_db WHERE username = ? AND password = ?');
    if (!$stmt) {
        die('Login query failed: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'ss', $submittedUsername, $submittedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        $_SESSION['username'] = $submittedUsername;
        echo '<script>alert("Login Successfully"); window.location.href = "index.php";</script>';
        exit();
    }

    echo '<script>alert("Login failed. Invalid username or password!!"); window.location.href = "login.php";</script>';
    exit();
}

mysqli_close($conn);
?>