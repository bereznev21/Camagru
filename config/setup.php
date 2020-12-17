<?php

include "database.php";

$dbh = new PDO("mysql:host=$DB_HOST_NAME", $DB_USER, $DB_PASSWORD);

$sql = "CREATE DATABASE `$DB_NAME`;
                CREATE USER '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASSWORD';
                GRANT ALL ON `$DB_NAME`.* TO '$DB_USER'@'localhost';
                FLUSH PRIVILEGES;";
$dbh->exec($sql);

$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $DB_OPT);
$sql = "
    CREATE TABLE IF NOT EXISTS users (
    user_id int(100) PRIMARY KEY,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL
    );";
$result = $dbh->exec($sql);

?>