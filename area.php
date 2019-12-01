<?php
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$result = '';

if (is_numeric($val1) and is_numeric($val2) and $val1 != null and $val2 != null) {
    $result = round($val1 * $val2, 2);
} else {
    $result = 'Error!';
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Area PHP</title>
    </head>
    <body>
        <p><?php echo $result?></p>
    </body>
</html>