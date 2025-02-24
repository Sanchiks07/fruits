<?php

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT * FROM fruits WHERE id = :id;";
$params = ["id" => $_GET["id"]];
$fruit = $db->query($sql, $params)->fetch();

if (!$fruit) {
    redirectIfNotFound();
}

$pageTitle = "Auglis";
$style = "css/style3.css";
$style2 = "css/kop-style.css";
require "views/fruits/show.view.php";

?>