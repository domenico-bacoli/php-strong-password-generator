<?php
//Variabile nella quale inserisco la lunghezza della password che l'utente inserirà nel campo di input
if (isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
}

function randomPasswordGenerator($length)
{
    // Elenco dei caratteri disponibili 
    $availableCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*?';

    //inizializzo la variabile $password come array vuoto
    $password = [];

    //definisco la lunghezza dei caratteri disponibili in ($availableCharacters)
    $charactersLength = strlen($availableCharacters);

    // Eseguo un ciclo per x volte che sceglierà l'utente nel form 
    for ($i = 0; $i < $length; $i++) {
        $randomCharacters = $availableCharacters[rand(0, $charactersLength - 1)];
        $password[] = $randomCharacters;
    }
    return implode($password);
}