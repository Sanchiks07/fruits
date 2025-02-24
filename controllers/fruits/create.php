<?php

require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (!Validator::string($_POST["name"], max: 40)) {
        $errors["name"] = "Saturam jābūt ievadītam, bet ne garākam par 40 rakstzīmēm";
    }
    else if (empty($errors)) {
        $sql = "INSERT INTO fruits (name) VALUES (:name)";
        $params = ["name" => $_POST["name"]];
        $fruit = $db->query($sql, $params)->fetch();
        
        header("Location: /");
        exit();
    }
}

$pageTitle = "Izveidot augli";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/fruits/create.view.php";

?>