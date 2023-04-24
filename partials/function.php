<?php


function randomGeneratePassword($length)
{
    // Elenco dei caratteri disponibili 
    $availableCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*?';

    //inizializzo la variabile $password come vuota
    $password = "";

    //definisco la lunghezza dei caratteri disponibili in ($availableCharacters)
    $charactersLength = strlen($availableCharacters);

    // Eseguo un ciclo per x volte che sceglierà l'utente nel form 
    for ($i = 0; $i < $length; $i++) {
        //genero un carattere random prendendolo da $availableCharacters 
        $randomCharacters = $availableCharacters[rand(0, $charactersLength - 1)];

        //concateno alla variabile password il nuovo carattere generato in maniera random 
        $password .= $randomCharacters;
    }
    //restituisco la password generata 
    return $password;
}