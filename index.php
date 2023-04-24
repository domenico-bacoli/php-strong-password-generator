<?php
//richiamiamo il file functions per poter utilizzare la nostra funzione.
//in questo caso non è sufficiente include ma è meglio utilizzare require_once.
//con include se non dovesse funzionare il file con all'interno la funzione andrebbe a generare un warning ma la pagina continuerebbe a funzionare
//abbiamo bisogno invece del require_once
require_once __DIR__ . '/partials/function.php';

//faccio partire la sessione per poter avere accesso alle variabili session
session_start();

$password = '';
//controllo se il parametro GET è settato correttamente
if (isset($_GET['passwordLength']) && $_GET['passwordLength'] >= 4) {
    $password = randomGeneratePassword($_GET['passwordLength']);

    //salvo il dato della password in una variabile di sessione
    $_SESSION['password'] = $password;

    //eseguo il redirect
    header('Location: showPassword.php');
}
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

    <h3>
        <?php
        if ($password != "") {
            echo $password;
        }
        ?>
    </h3>
</body>

</html>