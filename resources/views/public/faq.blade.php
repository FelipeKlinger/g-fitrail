<x-guest-layout>
    <style>
        .ds-page { font-family: 'Geist', sans-serif; color: #09090B; }
        .ds-page h1, .ds-page h2, .ds-page h3 { font-family: 'Geist', sans-serif; }
        .faq-summary::-webkit-details-marker { display: none; }
        details svg { transition: transform 200ms ease; }
        details[open] svg { transform: rotate(45deg); }
    </style>
    <div class="ds-page w-full rounded-[28px] border border-white/10 bg-black px-6 py-10 shadow-[0_20px_60px_rgba(15,23,42,0.35)] sm:px-10">
        <section class="reveal text-center space-y-3">
            <p class="text-xs uppercase tracking-[0.4em] text-violet-300">FAQ</p>
            <h1 class="text-4xl sm:text-5xl font-semibold text-white">Dudas frecuentes</h1>
            <p class="text-sm text-zinc-400 max-w-2xl mx-auto">Resolvemos lo esencial para que entrenes sin fricciones.</p>
        </section>

        <section class="mt-10 grid grid-cols-1 gap-4">
            @foreach($faqs as $faq)
                <details class="reveal rounded-2xl border border-white/10 bg-zinc-900 p-6 shadow-[0_10px_30px_rgba(15,23,42,0.35)]">
                    <summary class="faq-summary flex cursor-pointer items-center justify-between gap-4 text-left text-lg font-semibold text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/40">
                        <span>{{ $faq['pregunta'] }}</span>
                        <svg class="h-5 w-5 text-violet-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 5v14" />
                            <path d="M5 12h14" />
                        </svg>
                    </summary>
                    <p class="mt-3 text-sm text-zinc-400">{{ $faq['respuesta'] }}</p>
                </details>
            @endforeach
        </section>
    </div>
    <script src="https://unpkg.com/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            gsap.fromTo('.reveal', { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: 'power2.out' });
        }
    </script>
</x-guest-layout>
