

<html>
<head><title>Welcome to my excellent blog</title></head>
<body>
    <img src='storage/my-excellent-blog.png'>
    <h1>Welcome to my excellent blog</h1>

    <?php
        $dbserver = getenv('DB_HOST') ?: 'db';
        $dbname = getenv('DB_NAME') ?: 'blog_db';
        $dbuser = getenv('DB_USER') ?: 'blog_user';
        $dbpassword = getenv('DB_PASSWORD') ?: 'password';

        $conn = null;

        try {
            // Tentative de connexion à la base de données
            $conn = new PDO("mysql:host=$dbserver;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Si la connexion réussit, vous pouvez continuer avec la logique du blog
            echo "Connected successfully to the database **$dbname** on **$dbserver**.";



        } catch(PDOException $e) {
            // Gestion des erreurs de connexion
            echo "Database connection failed: " . $e->getMessage();
        }
        ?>

    <?php if ($conn) echo "<p>Database status: **Connected**</p>"; ?>
</body>
</html>