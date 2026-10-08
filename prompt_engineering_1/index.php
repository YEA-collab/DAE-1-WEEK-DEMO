<?php

require_once "database.php";

$category = $_GET["category"] ?? "Random";

if ($category == "Random") {

    $sql = "SELECT * FROM challenges ORDER BY RAND() LIMIT 1";
    $stmt = $pdo->query($sql);

} else {

    $sql = "SELECT * FROM challenges
            WHERE category = ?
            ORDER BY RAND()
            LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$category]);
}

$challenge = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Random Challenge</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h1>🎲 Random Challenge</h1>

        <p class="subtitle">
            Need something fun to do?
            Pick your vibe!
        </p>


        <div class="categories">

            <a href="?category=Outdoors">🌿 Outdoors</a>

            <a href="?category=Creative">🎨 Creative</a>

            <a href="?category=Active">👟 Active</a>

            <a href="?category=Friends">👯 Friends</a>

            <a href="?category=Food">🍳 Food</a>

            <a href="?category=Random">🎲 Random</a>

        </div>


        <?php if ($challenge): ?>

            <div class="challenge">

                <p class="category">
                    <?= htmlspecialchars($challenge["category"]) ?>
                </p>

                <h2>
                    <?= htmlspecialchars($challenge["title"]) ?>
                </h2>

                <p>
                    <?= htmlspecialchars($challenge["description"]) ?>
                </p>

            </div>

        <?php endif; ?>


        <a class="button"
           href="?category=<?= htmlspecialchars($category) ?>">

            🎲 Give Me Another!

        </a>


        <p class="footer">
            Made with PHP + MySQL
        </p>

    </div>

</body>

</html>
