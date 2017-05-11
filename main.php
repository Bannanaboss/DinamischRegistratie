<?php
    include("header.php");

    $messages = array();

    if (!isset($_GET["naam"]) && !isset($_GET["adres"]) && !isset($_GET["email"]) && !isset($_GET["wachtwoord"])) {
        $messages[] = "Ful eerst het formulier in";
    } else if (strlen($_GET["naam"]) == null) {
        $messages[] = "U moet uw naam invullen";
    } else if (strlen($_GET["adres"]) == null) {
        $messages[] = "U moet uw adres invullen";
    } else if (strlen($_GET["email"]) == null) {
        $messages[] = "U moet uw email invullen";
    } else if (strlen($_GET["wachtwoord"]) == null) {
        $messages[] = "U moet uw wachtwoord invullen";
    }

    if (count($messages) > 0) {
        $html = "<ul>";
        foreach ($messages as $message) {
            $html .= "<li>" . $message . "</li>";
        }
        $html .= "</ul>";
        echo $html;

    } else {
        echo 'Naam: '.$_GET["naam"].'<br>';
        echo 'Adres: '.$_GET["adres"].'<br>';
        echo 'E-Mail: '.$_GET["email"].'<br>';
        echo 'Wachtwoord: '.$_GET["wachtwoord"].'<br>';
    }

?>

<?php
    include("footer.php");
?>