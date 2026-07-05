<?php
include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Sell Product</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-container">

<h2>Add Product 🛍️</h2>

<form method="post" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Product Name" required>

<select name="category" required>
<option value="">Select Category</option>
<option>Footwear</option>
<option>Ladies Top Wear</option>
<option>Jeans</option>
<option>Mens Top Wear</option>
<option>Goggles & Purses</option>
</select>

<input type="number" name="price" placeholder="Price" required>

<input type="file" name="image" required>

<input type="submit" name="sell" value="Add Product">

</form>

<a href="shop.php" class="back">⬅ Back to Shopping</a>

</div>

<?php
if(isset($_POST['sell'])){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "images/".$image);

    $conn->query("INSERT INTO products (name, category, price, image)
    VALUES ('$name','$category','$price','$image')");

    echo "<script>alert('Product Added Successfully');</script>";
}
?>

</body>
</html>