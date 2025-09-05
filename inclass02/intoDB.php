<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Tilføj bruger</title>
</head>
<body>
<h1>Tilføj ny bruger</h1>
<form method="post" action="addToDB.php">
    <label for="fname">Fornavn:</label><br>
    <input type="text" id="fname" name="fname" required><br><br>

    <label for="lname">Efternavn:</label><br>
    <input type="text" id="lname" name="lname" required><br><br>

    <label for="age">Alder:</label><br>
    <input type="number" id="age" name="age" min="0" required><br><br>

    <input type="submit" name="submit" value="Gem">
</form>
</body>
</html>
