<?php

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT fruits.* FROM fruits
        LEFT JOIN fruits
        ON fruits.category_id = categories.id
        WHERE fruits.id = :id;";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}

$pageTitle = "Auglis";
$style = "css/style3.css";
$style2 = "css/kop-style.css";
require "views/posts/show.view.php";

?>