<?php
include './partials/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <h1>PASSWORD GENERATOR</h1>
    <form action="index.php" method="GET">
        <label for="Inserisci"><strong>Inserisci la lunghezza della password che desideri</strong></label><br>
        <input type="number" name="passwordLength" placeholder="inserisci la lunghezza della password" required>
        <input type="submit">
    </form>

    <h4>
        <?php echo "LA TUA PASSWORD:"; ?>
    </h4>

    <h3>
        <?php
        if (isset($passwordLength)) {
            echo randomPasswordGenerator($passwordLength);
        }
        ?>
    </h3>
</body>

</html>