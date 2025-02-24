<?php

require "Validator.php";

if(isset($_GET["id"])) {
    $sql = "SELECT * FROM fruits WHERE id = :id;";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (!Validator::string($_POST["name"], max: 40)) {
        $errors["name"] = "Saturam jābūt ievadītam, bet ne garākam par 40 rakstzīmēm";
    }
    else if (empty($errors)) {
        $sql = "UPDATE fruits SET name = :name WHERE id = :id;";
        $params = ["name" => $_POST["name"], "id" => $_POST["id"]];
        $post = $db->query($sql, $params)->fetch();
        
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

$pageTitle = "Rediģēt augli";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/fruits/edit.view.php";

?>