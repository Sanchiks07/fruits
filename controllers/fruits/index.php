<?php

require "index.php";

$select = "SELECT * FROM fruits";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] !="") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE name LIKE :nosaukums;";
    $params = ["nosaukums" => $search_query];
}
$fruits = $db->query($select, $params)->fetchAll();

$pageTitle = "Augļi";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/fruits/index.view.php";

?>