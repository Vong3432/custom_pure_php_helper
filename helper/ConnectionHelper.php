<?php 

function initializeConnect() {    
    require_once 'connect.php';

    $conn = new mysqli($hn, $un, $pw, $db);
    return $conn->connect_error ? dieConnect("Fatal error") : $conn;    
}

function dieConnect($msg) {
    die($msg);
}

?>