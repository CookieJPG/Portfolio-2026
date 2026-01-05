<article class="bg-slate-900 rounded-2xl border border-slate-800 shadow-sm hover:border-blue-500/50 transition-all duration-300 p-6 flex flex-col">
    <div class="flex justify-between items-start mb-4">
        <span class="text-[10px] font-bold uppercase tracking-widest px-2 py-1 bg-slate-800 text-slate-300 rounded">
            <?= htmlspecialchars($project['type']) ?>
        </span>
        <span class="text-[10px] font-semibold text-emerald-400 bg-emerald-400/10 px-2 py-1 rounded">
            <?= htmlspecialchars($project['status']) ?>
        </span>
    </div>

    <h3 class="text-xl font-bold text-white mb-2">
        <?= htmlspecialchars($project['title']) ?>
    </h3>

    <p class="text-slate-400 text-sm leading-relaxed mb-4 flex-grow">
        <?= htmlspecialchars($project['description']) ?>
    </p>

    <div class="flex flex-wrap gap-2 mb-6">
        <?php foreach ($project['stack'] as $tech): ?>
            <span class="text-[10px] font-bold text-blue-300 bg-blue-900/30 px-2 py-1 rounded border border-blue-800/50">
                <?= htmlspecialchars($tech) ?>
            </span>
        <?php endforeach; ?>
    </div>

    <div class="pt-4 border-t border-slate-800">
        <?php if ($project['github_url']): ?>
            <a href="<?= $project['github_url'] ?>" target="_blank" class="text-sm font-black text-blue-400 hover:text-blue-300 flex items-center group">
                VIEW REPOSITORY
                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        <?php else: ?>
            <span class="text-xs text-slate-500 font-medium italic">Private Repository</span>
        <?php endif; ?>
    </div>
</article>