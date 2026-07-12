<?php
/**
 * Database connection.
 * Credentials are loaded from the project-root config.php
 * (copy config.example.php -> config.php and edit it).
 */
require_once __DIR__ . '/../../config.php';

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit("Database connection failed. Check your config.php.");
}
