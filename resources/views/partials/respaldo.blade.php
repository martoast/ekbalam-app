{{-- ============================== RESPALDO ============================== --}}
{{-- TODO: sustituir wordmarks por los logos oficiales (Ek Balam 36, desarrollador,
     Alux 33 solo con autorización). El sello "16 años construyendo el presente"
     NO se publica hasta estar aprobado por la marca. --}}
<section class="bg-sand-50 pb-8 pt-24 lg:pt-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-wood-500">Respaldo</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Una propuesta desarrollada con <span class="accent-italic">experiencia</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-ink-soft">Ek Balam 36 es presentado como un proyecto desarrollado por el equipo relacionado con Alux 33. Solicita la documentación disponible y la información del desarrollador con el equipo comercial.</p>
        </div>

        <div class="reveal mx-auto mt-12 grid max-w-2xl grid-cols-1 gap-4 sm:grid-cols-2">
            @foreach ([
                ['n' => 'Ek Balam 36', 'l' => 'Condos & Shopping'],
                ['n' => 'Alux 33', 'l' => 'Proyecto relacionado'],
            ] as $marca)
                <div class="flex min-h-[7rem] flex-col items-center justify-center gap-2 rounded-2xl bg-white px-6 py-7 text-center ring-1 ring-ink/5">
                    <span class="display text-lg font-light uppercase tracking-[0.14em] text-ink">{{ $marca['n'] }}</span>
                    <span class="eyebrow text-[0.5rem] text-ink-soft/70">{{ $marca['l'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
