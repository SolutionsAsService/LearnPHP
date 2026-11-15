<?php
$_SERVER["REQUEST_METHOD"] = "POST";
$_POST['name'] = "Ada <b>Lovelace</b>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " . $name;
}
