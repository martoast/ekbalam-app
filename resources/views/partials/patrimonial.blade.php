{{-- ============================== INFORMACIÓN PATRIMONIAL ============================== --}}
<section id="patrimonial" class="bg-sand-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Información de inversión</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Conoce la propuesta patrimonial de <span class="accent-italic">Ek Balam 36</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-ink-soft">
                Ek Balam 36 integra una ubicación en Puerto Morelos, tipologías residenciales, plaza comercial y amenidades dentro de una propuesta de usos mixtos. Antes de tomar una decisión, solicita precios, documentación, condiciones de preventa, forma de compra y características específicas de cada unidad.
            </p>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['t' => 'Preventa', 'd' => 'Proyecto presentado en etapa de preventa, sujeto a confirmación del equipo comercial.'],
                ['t' => 'Configuración Lock Off', 'd' => 'Disponible en la tipología Suprema Dual, sujeta a condiciones jurídicas y operativas.'],
                ['t' => 'Usos mixtos', 'd' => 'Vivienda, plaza comercial y rooftop dentro de una misma propuesta.'],
                ['t' => 'Documentación', 'd' => 'Solicita la documentación disponible y las condiciones vigentes con un asesor.'],
            ] as $card)
                <div class="reveal rounded-3xl bg-white p-8 shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <p class="eyebrow text-[0.6rem] text-wood-500">{{ $card['t'] }}</p>
                    <p class="mt-4 text-sm leading-relaxed text-ink-soft">{{ $card['d'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="reveal mt-10 text-center">
            <a href="#contacto" id="cta-inversion"
                onclick="var s = document.getElementById('interes'); if (s) s.value = 'Quiero invertir';"
                class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Solicitar información de inversión</a>
        </div>
    </div>
</section>
