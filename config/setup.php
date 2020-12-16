#!/usr/bin/php
<?php

include "database.php";

$dbh = new PDO($DB_DSN), $DB_USER, $DB_PASSWORD, $DB_OPT);
$sql = "CREATE TABLE IF NOT EXISTS 'users' (
    user_id int(5) PRIMARY KEY,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL
    );";
$result = $dbh->$exec($sql);

?>