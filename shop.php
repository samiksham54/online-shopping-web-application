<?php
include 'db.php';
session_start();

/* 🛒 ADD TO CART LOGIC */
if (isset($_POST['add'])) {

    $id = $_POST['id'];

    $result = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);

   $item = [
    'name' => $row['name'],
    'price' => $row['price'],
    'category' => $row['category'],
    'image' => $row['image']
];

    $_SESSION['cart'][] = $item;

    header("Location: shop.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- 🔝 TOP NAV -->
<div class="top-bar">
    <div class="logo">🛍️ My Shop</div>

    <div class="nav-links">
        <a href="shop.php">🏠 Home</a>
        <a href="sell.php">➕ Sell Product</a>
        <a href="cart.php">🛒 Cart</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<!-- 🎉 HEADER -->
<div class="shop-header">
    <h1>Welcome to Your Fashion Store ✨</h1>
    <p>Explore trendy collections and shop your style 💃</p>

    <?php
    if (isset($_GET['cat']) && $_GET['cat'] != '') {
        $cat = urldecode($_GET['cat']);
        echo "<h2 class='category-title'>🛍️ $cat Collection</h2>";
    }
    ?>
</div>

<!-- 🔍 SEARCH -->
<form method="get" class="search-box">
    <input type="text" name="search" placeholder="Search products...">
    <button type="submit">Search</button>
</form>

<!-- 📂 CATEGORY FILTER -->
<div class="categories">
    <a href="shop.php">All</a>
    <a href="shop.php?cat=Footwear">Footwear</a>
    <a href="shop.php?cat=Ladies%20Top%20Wear">Ladies Top Wear</a>
    <a href="shop.php?cat=Jeans">Jeans</a>
    <a href="shop.php?cat=Mens%20Top%20Wear">Mens Top Wear</a>
    <a href="shop.php?cat=Goggles%20%26%20Purses">Goggles & Purses</a>
</div>

<!-- 🛍️ PRODUCTS -->
<div class="container">

<?php
$query = "SELECT * FROM products";

/* 🔍 SEARCH */
if(isset($_GET['search']) && $_GET['search'] != ""){
    $s = mysqli_real_escape_string($conn, $_GET['search']);
    $query = "SELECT * FROM products WHERE name LIKE '%$s%'";
}

/* 📂 CATEGORY */
if(isset($_GET['cat']) && $_GET['cat'] != ""){
    $c = mysqli_real_escape_string($conn, $_GET['cat']);
    $query = "SELECT * FROM products WHERE category LIKE '%$c%'";
}

$res = $conn->query($query);

if ($res->num_rows > 0) {

while($row = $res->fetch_assoc()){
?>

<div class="card">
<img src="images/<?php echo $row['image']; ?>">
<h3><?php echo $row['name']; ?></h3>
<p><?php echo $row['category']; ?></p>
<p>₹<?php echo $row['price']; ?></p>

<form method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="submit" name="add" value="Add to Cart">
</form>

</div>

<?php } 
} else {
    echo "<h3 style='text-align:center;'>No products found 😢</h3>";
}
?>

</div>

</body>
</html>