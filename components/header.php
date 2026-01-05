<header class="bg-slate-950 border-b border-slate-800 py-10">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <div class="text-center md:text-left">
            <h1 class="text-4xl font-black text-white tracking-tight">
                <?= $profile['name'] ?>
            </h1>
            <p class="text-blue-400 font-bold text-lg mt-1"><?= $profile['occupation'] ?></p>
        </div>
        <div class="mt-6 md:mt-0 flex flex-col items-center md:items-end text-sm text-slate-400">
            <span class="font-medium text-slate-300"><?= $profile['location'] ?> | <?= $profile['education'] ?></span>
            <a href="mailto:<?= $profile['email'] ?>" class="text-blue-400 hover:text-blue-300 font-bold mt-1"><?= $profile['email'] ?></a>
            <div class="flex gap-4 mt-4">
                <a href="https://github.com/CookieJPG" target="_blank" class="bg-slate-800 text-white px-3 py-1.5 rounded-md hover:bg-slate-700 transition-colors border border-slate-700">GitHub</a>
                <a href="https://www.linkedin.com/in/juan-pablo-monroy-espinosa-1741ba309/" target="_blank" class="bg-blue-600 text-white px-3 py-1.5 rounded-md hover:bg-blue-500 transition-colors">LinkedIn</a>
            </div>
        </div>
    </div>
    <nav class="flex gap-6 mt-6 justify-center">
        <a href="#about" class="px-4 py-2 text-sm font-black uppercase tracking-tighter text-blue-400 border-b-2 border-blue-400 transition-all duration-300">
            About Me
        </a>
        <a href="#projects-section" class="px-4 py-2 text-sm font-black uppercase tracking-tighter text-slate-400 border-b-2 border-transparent transition-all duration-300 hover:text-blue-400">
            Projects
        </a>
    </nav>
</header>