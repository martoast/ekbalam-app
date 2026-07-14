{{-- ============================== HERO ============================== --}}
<section id="inicio" class="grain relative flex min-h-svh items-end justify-center overflow-hidden bg-balam-950">
    <div class="absolute inset-0">
        <picture>
            <source media="(min-width: 1024px)" srcset="{{ asset('images/ek-fachada-principal.jpg') }}">
            <img
                src="{{ asset('images/ek-hero-movil.jpg') }}"
                alt="Fachada de Ek Balam 36 al atardecer en Puerto Morelos — render ilustrativo"
                class="kenburns h-full w-full object-cover object-center"
                fetchpriority="high"
            >
        </picture>
        <div class="absolute inset-0 bg-balam-950/25"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-balam-950/90 via-balam-950/30 to-balam-950/30"></div>
    </div>

    {{-- Copy — minimal: la imagen es la protagonista --}}
    <div class="reveal-group is-revealed relative z-10 mx-auto w-full max-w-5xl px-6 pb-32 text-center sm:pb-28">
        <p class="eyebrow text-[0.7rem] text-sand-50 drop-shadow-[0_2px_12px_rgba(11,12,7,0.9)]">
            Proyecto de usos mixtos en Puerto Morelos
        </p>
        <h1 class="display mt-4 text-5xl font-light uppercase tracking-[0.12em] leading-[1.02] text-sand-50 drop-shadow-[0_2px_28px_rgba(11,12,7,0.7)] sm:text-7xl lg:text-8xl">
            Ek Balam <span class="text-wood-300">36</span>
        </h1>
        <p class="mx-auto mt-4 max-w-xl font-sans text-base font-light uppercase leading-snug tracking-[0.18em] text-sand-100/95 drop-shadow-[0_2px_16px_rgba(11,12,7,0.8)] sm:text-lg">
            Condos <span class="text-wood-300">&amp;</span> Shopping
        </p>
    </div>
</section>
