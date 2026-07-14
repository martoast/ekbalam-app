{{-- ============================== COMPOSICIÓN DEL PROYECTO ============================== --}}
<section id="composicion" class="bg-sand-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">El proyecto</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Residencias, comercio y amenidades en una misma <span class="accent-italic">propuesta</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-ink-soft">Ek Balam 36 integra distintos componentes dentro de una experiencia de usos mixtos pensada para residentes, visitantes y usuarios de la plaza comercial.</p>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['t' => 'Diez niveles', 'd' => 'Dato sujeto a validación final del proyecto.', 'icon' => 'M3 21h18M6 21V8h12v13M9 8V4h6v4M9 12h.01M12 12h.01M15 12h.01M9 16h.01M12 16h.01M15 16h.01'],
                ['t' => 'Condos residenciales', 'd' => 'Tipologías de una y dos recámaras.', 'icon' => 'M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6'],
                ['t' => 'Plaza comercial', 'd' => 'Espacios comerciales a nivel peatonal.', 'icon' => 'M4 7l2-4h12l2 4M4 7h16M4 7v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7M9 21v-6h6v6'],
                ['t' => 'Rooftop', 'd' => 'Una planta dedicada a amenidades y convivencia, sujeta a confirmación del master plan.', 'icon' => 'M2 20h20M4 20V10l8-6 8 6v10M9 14h6'],
                ['t' => 'Área subterránea', 'd' => 'Espacio considerado para uso de residentes, sujeto a planos y disponibilidad.', 'icon' => 'M3 9h18M3 9l9-6 9 6M3 9v12h18V9M8 21v-8h8v8'],
                ['t' => 'Usos mixtos', 'd' => 'Integración de vivienda, comercio y amenidades.', 'icon' => 'M12 3v18M3 12h18M5.6 5.6l12.8 12.8M18.4 5.6 5.6 18.4'],
            ] as $card)
                <div class="reveal rounded-3xl bg-white p-8 shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-balam-500/10 text-balam-700">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $card['icon'] }}"/></svg>
                    </span>
                    <h3 class="display mt-5 text-xl font-light text-ink">{{ $card['t'] }}</h3>
                    <p class="mt-3 text-sm leading-relaxed text-ink-soft">{{ $card['d'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- TODO: cambiar a "Solicitar brochure" cuando exista un brochure real --}}
        <div class="reveal mt-10 text-center">
            <a href="#contacto" id="cta-info-proyecto"
                class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Solicitar información del proyecto</a>
        </div>
    </div>
</section>
