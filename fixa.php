<?php
$vowels = array('a', 'e', 'i', 'o', 'u', 'å', 'ä', 'ö');
$replacing_vowels = array ('a' => 'A', 'e' => 'E', 'i' => 'I', 'o' => 'O', 'u' => 'U', 'å' => 'Å', 'ä' => 'Ä', 'ö' => 'Ö');
$text = $_POST['text'];
$text_len = strlen($text);

foreach ($vowels as $vowel) {
	$text = str_replace($vowel, $replacing_vowels[$vowel], $text);
}

$text = nl2br($text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Comment PHP</title>
    </head>
    <body>
        <p><?php echo $text?></p>
    </body>
</html>