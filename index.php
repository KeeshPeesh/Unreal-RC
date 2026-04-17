<?php
$navItems = ["Cars", "Boats", "Airplanes", "Repair Service"];

// Load popular picks from JSON file
$popularPicks = [];

$jsonFile = 'popular_picks.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $popularPicks = json_decode($jsonData, true);
}

// fallback if empty
if (empty($popularPicks)) {
    $popularPicks = [
        [
            "title" => "Name / Price",
            "image" => "",
            "description" => "Short description goes here."
        ]
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unreal RC</title>
    <link rel="stylesheet" href="indexstyle.css">
    <favicon href="resources/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BJ+Cree:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            <input type="text" id="searchBar" placeholder="Search Popular Picks...">
        </section>

        <section class="cards">
            <?php foreach ($popularPicks as $pick): ?>
                <div class="card" 
     data-title="<?= strtolower(htmlspecialchars($pick["title"])) ?>" 
     data-description="<?= strtolower(htmlspecialchars($pick["description"] ?? "")) ?>">
                    <div class="card-image">
                        <?php if (!empty($pick["image"])): ?>
                            <img src="<?= htmlspecialchars($pick["image"]) ?>" alt="<?= htmlspecialchars($pick["title"]) ?>">
                        <?php endif; ?>
                    </div>
                    <div class="card-info">
                        <h3><?= htmlspecialchars($pick["title"]) ?></h3>
                        <p><?= htmlspecialchars($pick["description"] ?? "") ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <script src="indexscript.js"></script>
</body>
</html>