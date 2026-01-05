<?php require_once './data/projects.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['name'] ?> | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        body { overflow: hidden; }
        main::-webkit-scrollbar {
            display: none;
        }
        main {
            -ms-overflow-style: none;
            scrollbar-width: none;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-slate-950 antialiased selection:bg-blue-500/30 selection:text-blue-200">

<?php include './components/header.php'; ?>

<main class="flex overflow-x-auto no-scrollbar h-[calc(100vh-200px)] snap-x snap-mandatory">
    <section id="about" class="snap-start min-w-full h-full flex flex-col justify-center items-center p-8 bg-slate-950">
        <div class="max-w-4xl">
            <h2 class="text-3xl font-bold text-white mb-6">About Me</h2>
            <p class="text-slate-400 text-lg">
                I am a dedicated Computer Science student...
            </p>
        </div>
    </section>

    <section id="projects-section" class="snap-start min-w-full h-full overflow-y-auto p-8 bg-slate-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-white mb-10 text-center uppercase tracking-widest">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($projects as $project): ?>
                    <?php include './components/project-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php include './components/footer.php'; ?>
<script src="./assets/js/side-anim.js"></script>
</body>
</html>