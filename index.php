<?php

require_once "router.php";

route('/', function () {
    return "Welcome";
});

route('/students', function () {
    include 'students.php';
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);