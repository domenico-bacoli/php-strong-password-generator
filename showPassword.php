<?php 

session_start();

//Se la password non è stata generata, facciamo tornare alla index
//in questo modo non sarà possibile utilizzare questa pagina senza aver generato
//prima una password

// facciamo quindi il controllo se NON è stata settata
if(!isset($_SESSION['password'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
</head>
<body>
    <h1>La Tua Password Generata</h1>
    <pre> <?php echo $_SESSION['password'] ?></pre>
</body>
</html> 

<?php
session_destroy();
?>