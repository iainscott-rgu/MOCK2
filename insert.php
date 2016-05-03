<?php
include("connection.php");
$title = $_POST["title"];
$link = $_POST["link"];
$summary = $_POST["summary"];
$category = $_POST["category"];
$sql = "INSERT INTO news_item (title, link, summary, category) VALUES ('$title','$link','$summary','$category')";
if(mysqli_query($db, $sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
header("location:index.php");
?>
