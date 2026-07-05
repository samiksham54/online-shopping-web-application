<?php
include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

<h2>Login</h2>

<form method="post">

Username:
<input type="text" name="username" required>

Password:
<input type="password" name="password" required>

<input type="submit" name="login" value="Login">

</form>

<p>Don't have account? <a href="register.php">Register</a></p>

<a href="index.php" class="back">⬅ Back to Home</a>

</div>

<?php
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");

    if($res->num_rows > 0){
        $_SESSION['user'] = $u;
        header("Location: shop.php"); // 👈 go to shop page
    } else {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

</body>
</html>