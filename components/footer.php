<footer class="bg-black text-white py-16 mt-20 border-t border-slate-900">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-6">Languages Proficiency</p>
        <div class="flex flex-wrap justify-center gap-8 mb-10">
            <?php foreach ($profile['languages'] as $lang => $level): ?>
                <div class="flex flex-col">
                    <span class="font-bold text-lg text-slate-200"><?= $lang ?></span>
                    <span class="text-blue-400 text-[10px] font-black uppercase tracking-tighter"><?= $level ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="pt-8 border-t border-slate-900 text-slate-600 text-[10px] font-medium tracking-widest">
            &copy; <?= date('Y') ?> <?= $profile['name'] ?> | BUILT WITH PHP 8.4 & TAILWIND DARK MODE
        </div>
    </div>
</footer>