<?php
$navItems = ["Cars", "Boats", "Airplanes", "Repair Service"];

$popularPicks = [
    [
        "title" => "Name / Price",
        "image" => ""
    ],
    [
        "title" => "Name / Price",
        "image" => ""
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blueprint Layout</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <header class="top-header">
        <div class="logo-box">
            <img src="resources/logo.png" alt="Logo">
        </div>

        <nav class="main-nav">
            <?php foreach ($navItems as $item): ?>
                <a href="#"><?= htmlspecialchars($item) ?></a>
            <?php endforeach; ?>
        </nav>
    </header>

    <main class="main-content">
        <section class="section-title">
            <h2>Popular Picks</h2>
        </section>

        <section class="cards">
            <?php foreach ($popularPicks as $pick): ?>
                <div class="card">
                    <div class="card-image">
                        <?php if (!empty($pick["image"])): ?>
                            <img src="<?= htmlspecialchars($pick["image"]) ?>" alt="<?= htmlspecialchars($pick["title"]) ?>">
                        <?php endif; ?>
                    </div>
                    <div class="card-info">
                        <p><?= htmlspecialchars($pick["title"]) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <script src="indexscript.js"></script>
</body>
</html>