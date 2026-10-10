*?php
include("db.php");

$result=mysqli_query($conn,
"SELECT * FROM movies");
?>

<!DOCTYPE html>
<html>
<head>
<title>MOVIX</title>
style.css
</head>

<body>

<div class="navbar">
<div class="logo">🎬 MOVIX</div>
<div>Welcome <?php echo $_SESSION['user']; ?></div>
</div>

<div class="hero">
<h1>MOVIX</h1>
<p>Discover amazing movies</p>
</div>

<div class="movies">

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<div class="card">

">

<div class="content">

<h2>
<?php echo $row['title']; ?>
</h2>

<p class="genre">
<?php echo $row['genre']; ?>
</p>

<p class="rating">
⭐ <?php echo $row['rating']; ?>
</p>

<p class="price">
₱ <?php echo $row['price']; ?>
</p>

<a class="id=<?php echo $row['id']; ?>
View Details
</a>

</div>

</div>

<?php } ?>

</div>

</body>
</html>