<?php
session_start();

$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];

// Clear cart after order
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Success</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #a1ffce, #faffd1);
            text-align: center;
            padding-top: 100px;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: purple;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>🎉 Order Placed Successfully!</h2>
    <p>Thank you, <?php echo $name; ?> 😊</p>
    <p>Payment Method: <?php echo $payment; ?></p>

    <a href="shop.php">Continue Shopping</a>
</div>

</body>
</html>