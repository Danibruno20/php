<?php

function load() {

    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

}