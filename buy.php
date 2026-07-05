<?php include 'db.php'; ?>

<h2>Available Products</h2>

<div class="image-row">

<?php
$res = $conn->query("SELECT * FROM products");

while($row = $res->fetch_assoc()){
    echo "<div class='card'>";
    echo "<img src='images/".$row['image']."'>";
    echo "<h3>".$row['name']."</h3>";
    echo "<p>".$row['category']."</p>";
    echo "<p>₹".$row['price']."</p>";
    echo "</div>";
}
?>

</div>