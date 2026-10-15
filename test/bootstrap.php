<?php
// tests/bootstrap.php
require __DIR__ . '/../vendor/autoload.php';

// Initialisation spécifique à l'application (ex: Symfony)
if (file_exists(__DIR__ . '/../config/bootstrap.php')) {
    require __DIR__ . '/../config/bootstrap.php';
} elseif (method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv())->bootEnv(__DIR__ . '/../.env');
}   