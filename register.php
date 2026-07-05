<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

<h2>Create Account</h2>

<form method="post">

Full Name:
<input type="text" name="fullname" required>

Username:
<input type="text" name="username" required>

Email:
<input type="email" name="email" required>

Password:
<input type="password" name="password" required>

Confirm Password:
<input type="password" name="cpassword" required>

<input type="submit" name="submit" value="Register">

</form>

<p>Already have account? <a href="login.php">Login</a></p>

<a href="index.php" class="back">⬅ Back to Home</a>

</div>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    if($pass != $cpass){
        echo "<script>alert('Passwords do not match');</script>";
    } else {
       $conn->query("INSERT INTO users (fullname, username, email, password) 
VALUES ('$name','$user','$email','$pass')");
        echo "<script>alert('Registered Successfully');</script>";
    }
}
?>

</body>
</html>