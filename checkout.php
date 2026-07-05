<?php
session_start();

if (empty($_SESSION['cart'])) {
    echo "Cart is empty!";
    exit();
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
        }

        .checkout-container {
            width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: purple;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .payment {
            margin-top: 15px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, purple, pink);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        .summary {
            background: #f3f3f3;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="checkout-container">

    <h2>🧾 Checkout</h2>

    <!-- 🛍️ ORDER SUMMARY -->
    <div class="summary">
        <h3>Order Summary</h3>
        <?php foreach ($_SESSION['cart'] as $item) { ?>
            <p><?php echo $item['name']; ?> - ₹<?php echo $item['price']; ?></p>
        <?php } ?>
        <h3>Total: ₹<?php echo $total; ?></h3>
    </div>

    <!-- 📋 FORM -->
    <form action="place_order.php" method="post">

        <input type="text" name="name" placeholder="Full Name" required>

        <textarea name="address" placeholder="Full Address" required></textarea>

        <input type="text" name="city" placeholder="City" required>

        <input type="text" name="state" placeholder="State" required>

        <input type="text" name="pincode" placeholder="Pincode" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <!-- 💳 PAYMENT -->
        <div class="payment">
            <label><b>Select Payment Method:</b></label><br><br>

            <input type="radio" name="payment" value="COD" required> Cash on Delivery<br>
            <input type="radio" name="payment" value="UPI"> UPI<br>
            <input type="radio" name="payment" value="Card"> Debit/Credit Card<br>
        </div>

        <br>

        <button type="submit" class="btn">Place Order</button>

    </form>

</div>

</body>
</html>