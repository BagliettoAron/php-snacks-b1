<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$name_checked = strlen($name) > 3;
$mail_at_checked = strpos($mail, '@') !==false;
$mail_dot_checked = strpos($mail, '.') !== false;
$age_checked =  is_numeric($age) === true;

if ($name_checked && $mail_at_checked && $mail_dot_checked && $age_checked) {
    echo 'accesso consetito';
} else {
    echo 'accesso negato';
}
?>
