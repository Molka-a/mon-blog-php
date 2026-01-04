<html>
<head>
    <title>Welcome to Our excellent blog : Molka Amara - Dhouha Hamdi - Yosr Cherif</title>
</head>
<body>
    <img src='storage/my-excellent-blog.png'>
    <h1>Welcome to our excellent blog : Molka Amara - Dhouha Hamdi - Yosr Cherif</h1>

<?php
require __DIR__ . '/vendor/autoload.php';  // Charger Composer autoload

// Charger les variables du fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Récupérer les variables de la base
$dbserver = getenv('DB_HOST');
$dbname   = getenv('DB_NAME');
$dbuser   = getenv('DB_USER');
$dbpassword = getenv('DB_PASSWORD');

$conn = null;

try {
    // Tentative de connexion à la base de données
    $conn = new PDO("mysql:host=$dbserver;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la connexion réussit
    echo "Connected successfully to the database **$dbname** on **$dbserver**.";

} catch(PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Database connection failed: " . $e->getMessage();
}

if ($conn) {
    echo "<p>Database status: **Connected**</p>";
}
?>
</body>
</html>
