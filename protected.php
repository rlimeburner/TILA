<?php
session_start();
if (!isset($_SESSION["authenticated"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TILA Protected Area</title>
</head>
<body>
    <h1>Welcome to the protected TILA Member Area</h1>
    <p>This content is only visible to authenticated users.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
