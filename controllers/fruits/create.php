<?php

require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (!Validator::string($_POST["name"], min: 2, max: 40)) {
        $errors["name"] = "Augļa nosaukumam jābūt no 2 līdz 40 rakstzīmēm garam";
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