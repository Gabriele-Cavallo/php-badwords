<?php
    $uncesoredText= $_GET['inputText'];
    $censoredWord= $_GET['inputWord'];
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
</body>
</html>