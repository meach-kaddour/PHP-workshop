<!DOCTYPE html>
<html>
<head>
<title><?php? echo $_GET['movieName']></title></head>
<body>

<h1>Informatin About <?php echo $_GET['movieName']?></h1>

<?php
echo $_GET['movieStar']." "."starred in the movie"." ".$_GET['movieName']." "."which was released in year"." ".$_GET['movieYear'];
?>

</body>
</html>