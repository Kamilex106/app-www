<?php
session_start(); // Rozpoczęcie sesji
/*
 Konfiguracja podstawowa dla aplikacji:
 - Dane połączenia z bazą danych
 - Stałe logowania dla administratora
 - Ustawienia globalne
 */
$dbhost= 'localhost';
$dbuser= 'root';
$dbpass = '';
$baza = 'moja_strona';
$login = 'login';
$pass = 'haslo';
$email_pass= 'your_email_password';


// Nawiązanie połączenia z bazą danych
$link = mysqli_connect($dbhost,$dbuser,$dbpass);
if (!$link) {
    echo '<b>przerwane połączenie </b>'; // Komunikat o błędzie połączenia
}
if(!mysqli_select_db($link, $baza)) {
    echo 'nie wybrano bazy'; // Komunikat o błędzie wyboru bazy danych
}
?>