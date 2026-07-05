<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<a href="index.php">⬅ Back to Home</a>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="sell.php">Sell Clothes</a><br><br>
<a href="buy.php">Buy Clothes</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>