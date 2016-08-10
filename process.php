<?php
$conn = mysqli_connect("localhost", "root", "disress");
mysqli_select_db($conn, "opentutorials");
$sel = "SELECT * FROM user WHERE name="";
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
var_dump($row)
exit;
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost:8080/index.php');
?>
