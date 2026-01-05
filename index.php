<?php require_once './data/projects.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['name'] ?> | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 antialiased selection:bg-blue-500/30 selection:text-blue-200">

<?php include './components/header.php'; ?>

<main class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-xs font-black text-slate-400 tracking-[0.2em] uppercase mb-12 text-center">Featured Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($projects as $project): ?>
            <?php include './components/project-card.php'; ?>
        <?php endforeach; ?>
    </div>
</main>

<?php include './components/footer.php'; ?>

</body>
</html>