<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>

<body>
    <!-- TODO: add a form for the user to play the game -->
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="englishWord">English word:</label>
        <input type="text" id="englishWord" name="englishWord"><br><br>
        <input type="submit" value="New word">
    </form>
</body>

</html>