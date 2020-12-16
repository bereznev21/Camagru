<?php
    $DB_NAME = "camagru";
    $DB_HOST_NAME = "localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    $DB_DSN = "mysql:host=$DB_HOST_NAME;dbname=$DB_NAME";
    $DB_OPT = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]