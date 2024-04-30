<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="censored.php" method="get">
        <div class="form-wrapper">
            <div class="paragraph-wrapper">
                <label for="uncesored-tex">Testo Originale: </label>
                <input type="text" id="uncesored-tex" name="inputText" required>
            </div>
            <div class="word-wrapper">
                <label for="censored-word">Parola da censurare: </label>
                <input type="text" id="censored-word" name="inputWord" required>
            </div>
            <div class="btn-wrapper">
                <button type="submit">Send</button>
            </div>
        </div>
    </form>
</body>
</html>