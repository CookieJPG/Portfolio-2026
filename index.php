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
        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
            scroll-behavior: smooth;
        }
        main::-webkit-scrollbar {
            display: none;
        }
        main {
            -ms-overflow-style: none;
            scrollbar-width: none;
            scroll-behavior: smooth;
            overflow-x: hidden;
            overflow-y: hidden;
        }
    </style>
</head>
<body class="bg-slate-950 antialiased selection:bg-blue-500/30 selection:text-blue-200">

<?php include './components/header.php'; ?>

<main class="flex overflow-x-auto no-scrollbar h-[calc(200vh-400px)] snap-x snap-mandatory">
    <section id="about" class="snap-start min-w-full h-full flex flex-col justify-center items-center p-8 bg-slate-950">
        <div class="max-w-4xl w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6 underline decoration-blue-500 underline-offset-8">About Me</h2>
                    <p class="text-slate-400 text-lg leading-relaxed mb-6">
                        I am a Computer Science Technology student at LaSalle College Montreal with a passion for building clean, efficient, and user-centric digital experiences. My background combines technical rigor in languages like Java, C#, and Python with a creative eye for Front-End development using PHP, HTML, CSS, SCSS, Bootstrap, and Tailwind CSS.

                        Having lived and studied in different environments, I’ve developed a bilingual (soon to be fully trilingual) and multicultural mindset that allows me to adapt quickly to new teams and technologies. I focus on writing maintainable code and solving complex problems through modular architecture, always aiming to bridge the gap between back-end functionality and seamless user interfaces
                    </p>
                </div>

                <div class="mt-8">
                    <h3 class="text-slate-200 font-bold mb-4 uppercase tracking-widest text-xs">Technical Stack</h3>
                    <div class="flex flex-wrap gap-2">
                        <?php
                        $skills = ['Java', 'C#', 'Python', 'PHP 8.4', 'SQL', 'ASP.NET MVC', 'Swift', 'Tailwind CSS', 'JavaScript'];
                        foreach ($skills as $skill): ?>
                            <span class="text-[10px] font-bold text-slate-300 bg-slate-800 px-2 py-1 rounded border border-slate-700">
                                <?= $skill ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800">
                    <h3 class="text-slate-200 font-bold mb-4 uppercase tracking-widest text-xs">Languages Proficiency</h3>
                    <div class="space-y-4">
                        <?php foreach ($profile['languages'] as $lang => $level): ?>
                            <div class="flex justify-between items-center">
                                <span class="text-white font-medium"><?= $lang ?></span>
                                <span class="text-blue-400 text-xs font-black px-2 py-1 bg-blue-400/10 rounded border border-blue-400/20 italic">
                                <?= $level ?>
                            </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
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