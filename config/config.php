<?php
$dbhost = 'localhost';
$dbname = 'ecommerce_project';
$dbuser = 'root';
$dbpass = 'thanhtrung123@#Z';
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error :" . $exception->getMessage();
}
define("BASE_URL", "http://localhost:8080/ecommerce_project/");
define("ADMIN_URL", BASE_URL . "admin/");

define("SMTP_HOST", "sandbox.smtp.mailtrap.io");
define("SMTP_PORT", "587");
define("SMTP_USERNAME", "f08fef70f919e3");
define("SMTP_PASSWORD", "301cd3a7b4f466");
define("SMTP_ENCRYPTION", "tls");
define("SMTP_FROM", "admin@example.com");
