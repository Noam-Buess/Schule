<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Direktaufruf verhindern
    header("Location: rueckmeldung.html");
    exit;
}

$anrede    = htmlspecialchars($_POST['anrede']);
$firstname = htmlspecialchars($_POST['firstname']);
$lastname  = htmlspecialchars($_POST['lastname']);
$email     = htmlspecialchars($_POST['email']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Rückmeldung erhalten</title>
</head>
<body>

<h2>Danke!</h2>

<p>
    Hallo <?= $anrede ?> <?= $firstname ?> <?= $lastname ?>,<br>
    vielen Dank für deine Nachricht.<br>
    Wir melden uns unter <strong><?= $email ?></strong>.
</p>

<a href="rueckmeldung.html">Zurück zum Formular</a>

</body>
</html>