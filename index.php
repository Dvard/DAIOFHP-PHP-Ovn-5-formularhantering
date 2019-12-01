<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Formulär</title>
    </head>
    <body>
        <!-- Upg 1 -->
        <form action="comment.php" method="post">
            <input type="text" name="username">
            <textarea rows="5" name="comment"></textarea>
            <input type="date" name="date">
            <input type="submit" placeholder="Send">
        </form>

        <!-- Upg 2 -->
        <form action="area.php" method="post">
            <input type="number" name="val1">
            <input type="number" name="val2">
            <input type="submit" placeholder="Calculate">
        </form>

        <!-- Upg 3 -->
        <form action="fixa.php" method="post">
            <textarea rows="10" name="text"></textarea>
            <input type="submit" placeholder="Fix">
        </form>
    </body>
</html>