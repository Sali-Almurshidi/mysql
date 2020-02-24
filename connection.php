<?php
function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "becode";
    $dbuser    = "becode";
    $dbpass    = "becode";
    $dbname    = "becode";
    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost .'mysql.local ;dbname='. $dbname, $dbuser, $dbpass);

 // Why we do this here
 return $pdo;
}