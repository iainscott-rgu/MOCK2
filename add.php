<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <h1>newsbox: add news item</h1><br>
    <h6>all the news in a box</h6>
</header>
<main>
    <form action="insert.php" method="post">
    <table class="form_add">
        <tr><td><label for="title">title:</label></td><td><input type="text" name="title" id="title" size="30" required></td></tr>
        <tr><td><label for="link">link:</label></td><td><input type="text" name="link" id="link" size="30" required></td></tr>
        <tr><td><label for="summary">summary:</label></td><td><textarea cols="31" rows="5" name="summary" id="summary" required></textarea></td></tr>
        <tr><td><label for="category">category:</label></td><td>
                <select name = "category" id="category">
                    <option value="sport" name="sport">sport</option>
                    <option value="politics" name="politics">politics</option>
                    <option value="technology" name="technology">technology</option>
                </select></td></tr>
        <tr><td><label for="submittor">submittor:</label></td><td><input type="text" name="submittor" id="submittor" size="30"></td></tr>
    </table>
        </form>
</main>
<footer>
    <p>Designed by Iain Scott 2016</p>
</footer>
</body>
</html>