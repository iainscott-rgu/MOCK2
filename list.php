<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Newsbox Items</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <h1>newsbox: all news</h1><br>
    <h6>all the news in a box</h6>
</header>

<?php
include("connection.php");
if(isset($_GET['category'])){
    $news_itemCategory = $_GET['category'];
    echo "<p><h5>Category: {$news_itemCategory} </h5></p>

<section class='grid-100' id='listcon1'>

    </section>";
    $sql = "SELECT * FROM news_item WHERE category = '$news_itemCategory'";
}
else{
    echo "<p><h5>Category: all news </h5></p>
<section class='grid-100' id='listcon1'>

    </section>";
    $sql = "SELECT * FROM news_item";
}
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $title = $row['title'];
    $link = $row['link'];
    $summary = $row['summary'];
    $category = $row['category'];
    echo "
<main class='grid-container'>

    <section class='grid-20' id='listcon2'>
Title:
    </section>
    <section class='grid-80' id='listcon3'>
        '{$title}'
    </section>
    <section class='grid-20' id='listcon4'>
Link:
    </section>
    <section class='grid-80' id='listcon5'>
        '{$link}'
    </section>
    <section class='grid-20' id='listcon6'>
Summary:
    </section>
    <section class='grid-80' id='listcon7'>
        '{$summary}'
    </section>
    <section class='grid-20' id='listcon8'>
Category:
    </section>
    <section class='grid-40' id='listcon9'>
        '{$category}'
    </section>
    <section class='grid-40' id='listcon10'>

    </section>
    <section class='grid-100' id='listcon11'>
    </section>
</main>
";
}
?>

<footer>
    <p>Designed by Iain Scott 2016</p>
</footer>
</body>
</html>