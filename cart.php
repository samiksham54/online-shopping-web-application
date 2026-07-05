<?php
session_start();

/* ✅ REMOVE ITEM LOGIC */
if (isset($_GET['remove'])) {

    $index = $_GET['remove'];

    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);

        // Re-index array
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    // Redirect to avoid refresh issue
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #fda085, #f6d365);
        }

        .cart-container {
            width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .back-btn {
            display: inline-block;
            background: purple;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        h2 {
            text-align: center;
        }

        .cart-item {
            display: flex;
            gap: 15px;
            align-items: center;
            background: #f9f9f9;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
        }

        .cart-details {
            flex: 1;
        }

        .remove {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        .remove:hover {
            color: darkred;
        }

        .cart-total {
            text-align: center;
            font-size: 22px;
            margin-top: 15px;
            color: purple;
            font-weight: bold;
        }

        .checkout-btn {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 12px 25px;
            background: linear-gradient(to right, purple, pink);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
        }

        .empty {
            text-align: center;
            margin-top: 20px;
            color: gray;
        }
    </style>
</head>

<body>

<div class="cart-container">

    <a href="shop.php" class="back-btn">⬅ Back to Shop</a>

    <h2>🛒 Your Cart</h2>

    <?php
    $total = 0;

    if (!empty($_SESSION['cart'])) {

        foreach ($_SESSION['cart'] as $index => $item) {

            // ✅ FIX: ensure array structure
            if (!is_array($item)) {
                $item = [
                    'name' => $item,
                    'price' => 0,
                    'category' => 'Unknown',
                    'image' => 'default.png'
                ];
            }

            $total += $item['price'];
    ?>

        <div class="cart-item">
           <img src="images/<?php echo $item['image']; ?>"alt="">

            <div class="cart-details">
                <h3><?php echo $item['name']; ?></h3>
                <p>Category: <?php echo $item['category']; ?></p>
                <p>Price: ₹<?php echo $item['price']; ?></p>

                <!-- ✅ FIXED REMOVE -->
                <a href="cart.php?remove=<?php echo $index; ?>" class="remove">❌ Remove</a>
            </div>
        </div>

    <?php
        }
    ?>

        <div class="cart-total">
            Total: ₹<?php echo $total; ?>
        </div>

        <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>

    <?php
    } else {
        echo "<p class='empty'>Your cart is empty 😢</p>";
    }
    ?>

</div>

</body>
</html>