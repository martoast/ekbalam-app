{{-- ============================== UBICACIÓN Y CERCANÍAS ============================== --}}
<section id="ubicacion" class="bg-sand-100 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="reveal-group">
                <p class="eyebrow text-wood-500">Ubicación</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Puerto Morelos, entre los principales destinos de la <span class="accent-italic">Riviera Maya</span></h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">
                    Ek Balam 36 se ubica en Puerto Morelos, con conexión regional hacia Cancún, Playa del Carmen y otros destinos del Caribe Mexicano.
                </p>

                <ul class="mt-9 grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['p' => 'Aeropuerto de Cancún', 't' => '~25 min'],
                        ['p' => 'Playa del Carmen', 't' => '~35 min'],
                        ['p' => 'Zona Hotelera de Cancún', 't' => '~45 min'],
                        ['p' => 'Tulum', 't' => '~1 h 25 min'],
                        ['p' => 'Isla Mujeres', 't' => '~1 h 15 min'],
                        ['p' => 'Mérida, Yucatán', 't' => '~3 h 40 min'],
                    ] as $ref)
                        <li class="flex items-start gap-3 text-sm text-ink-soft">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-wood-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
                            <span>{{ $ref['p'] }} <span class="text-ink-soft/60">· {{ $ref['t'] }}</span></span>
                        </li>
                    @endforeach
                </ul>
                <p class="mt-5 text-xs leading-relaxed text-ink-soft/70">Tiempos estimados sujetos a ruta, tránsito, punto de salida, transporte y condiciones de traslado.</p>

                <a href="https://maps.google.com/?q=Puerto+Morelos,+Quintana+Roo" target="_blank" rel="noopener" id="cta-mapa"
                    class="eyebrow mt-8 inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Ver ubicación</a>
            </div>

            <div class="reveal overflow-hidden rounded-3xl shadow-xl shadow-ink/10 ring-1 ring-ink/10">
                <iframe
                    title="Mapa de Puerto Morelos, Quintana Roo"
                    src="https://maps.google.com/maps?q=Puerto%20Morelos%2C%20Quintana%20Roo&t=&z=12&ie=UTF8&iwloc=&output=embed"
                    class="aspect-[4/3] w-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        {{-- Cercanías — 3 categorías --}}
        <div class="mt-16 grid gap-6 md:grid-cols-3">
            @foreach ([
                ['t' => 'Naturaleza', 'icon' => 'M12 22v-7m0 0c4 0 7-3 7-8-4 0-6 1.5-7 4-1-2.5-3-4-7-4 0 5 3 8 7 8z', 'items' => ['Playa · ~7 min', 'Ruta de los Cenotes · ~1 min', 'Croco Cun Zoo · ~5 min']],
                ['t' => 'Conectividad', 'icon' => 'M3 12h18M3 12l6-6M3 12l6 6', 'items' => ['Salida a Cancún y Playa del Carmen · ~1 min', 'Estación del Tren Maya · ~6 min']],
                ['t' => 'Experiencias y servicios', 'icon' => 'M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM12 7v5l3 2', 'items' => ['Marina de Puerto Morelos · ~12 min', 'Club de Polo · ~10 min', 'The Go Gran Outlet · ~17 min']],
            ] as $cat)
                <div class="reveal rounded-3xl bg-white p-8 shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <span class="flex h-12 w-12 items-center justify-center rounded-full bg-balam-500/10 text-balam-700">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $cat['icon'] }}"/></svg>
                    </span>
                    <h3 class="display mt-5 text-xl font-light text-ink">{{ $cat['t'] }}</h3>
                    <ul class="mt-4 space-y-2">
                        @foreach ($cat['items'] as $item)
                            <li class="text-sm leading-relaxed text-ink-soft">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <p class="reveal mt-6 text-center text-xs text-ink-soft/70">Referencias cercanas al proyecto, no amenidades del desarrollo. Tiempos aproximados sujetos a verificación.</p>
    </div>
</section>
