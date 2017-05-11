<?php
	include("header.php");
?>

<form action="main.php" method="get">
    <ul>
    <li>Registreer:</li><br>
    <li>Naam <input type="text" name="naam"></li><br>
        <li>Adres <input type="text" name="adres"></li><br>
        <li>E-mail <input type="text" name="email"></li><br>
        <li>Wachtwoord <input type="password" name="wachtwoord"></li><br>
    </ul>
    <input type="submit">

<?php
    include("footer.php");
?>
