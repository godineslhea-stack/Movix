<?php

include("db.php");

$id=$_GET['id'];

$result=mysqli_query(
$conn,
"SELECT * FROM movies
WHERE id=$id"
);

$movie=mysqli_fetch_assoc(
$result
);

?>

<h1>
<?php
echo $movie['title'];
?>
</h1>

<p>
Genre:
<?php
echo $movie['genre'];
?>
</p>

<p>
Rating:
⭐
<?php
echo $movie['rating'];
?>
</p>

<p>
Price:
₱
<?php
echo $movie['price'];
?>
</p>

<p>
<?php
echo $movie['description'];
?>
</p>