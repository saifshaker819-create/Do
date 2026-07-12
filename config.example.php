<?php
/**
 * Database configuration template.
 *
 * Copy this file to `config.php` and fill in your own database
 * credentials. `config.php` is git-ignored so your real credentials
 * are never committed.
 *
 *   cp config.example.php config.php
 */

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'odlmsdb');
