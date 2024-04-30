<?php
    $uncesoredText = $_GET['inputText'];
    $censoredWord = $_GET['inputWord'];
    $sostitutiveText = '***';
    $censoredText = str_replace($censoredWord, $sostitutiveText, $uncesoredText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Censored Words</title>
</head>
<body>
    <p>Il testo inserito è: <?php echo $uncesoredText; ?> e la mia lunghezza è di <?php echo strlen($uncesoredText); ?> caratteri.</p>
    <p>La parola da censurare è: <?php echo $censoredWord; ?>  </p>
    <p>Il testo censurato è: <?php echo $censoredText; ?> e la mia lunghezza è di <?php echo strlen($censoredText); ?> caratteri.</p>
</body>
</html>