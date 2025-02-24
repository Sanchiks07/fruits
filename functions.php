<?php

// Dump and die (kopā ar dd)
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function redirectIfNotFound($location = "/") {
    http_response_code(404);
    header("Location: $location", 302);
    exit(); // tāds pats kā die(), bet maigāks
}

?>