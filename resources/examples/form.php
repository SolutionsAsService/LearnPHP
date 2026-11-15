<?php
// Simulate a form post so the script can run on the command line.
$_SERVER["REQUEST_METHOD"] = "POST";
$_POST['name'] = '<b>Ada</b>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " . $name;
}
