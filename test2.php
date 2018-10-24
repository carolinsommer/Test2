<?php

$db="mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-cs252";
$dbuser="cs252";
$dbpw="keewo0OhDi";

$pdo = new PDO($db, $dbuser, $dbpw);


$name = $_POST["username"];
$pw = $_POST["password"];

$statement = $pdo->prepare("SELECT FROM user (passwort) WHERE username=:$name");
$statement->execute(array(":username"=>"$name"));

$row = $statement->fetchObject();
if ($pw == $row->passwort){echo "Eingeloggt";}
else echo "ausgeloggt";


$query = $pdo->prepare("SELECT * FROM post");
$query->execute();

while ($zeile = $query->fetchObject()) {
    echo "<p> $zeile->id $zeile->content</p>" . "<br>";}


?>
