{{-- ============================== TIPOLOGÍAS ============================== --}}
@php
    // Tipologías editables — estados: Disponible · Apartado · Vendido · Consultar.
    // TODO: agregar planos oficiales al lightbox cuando existan (hoy abre la galería de interiores).
    $tipologias = [
        [
            'nombre' => 'Suprema Dual',
            'clave' => 'Tipología A · Lock Off',
            'estado' => 'Consultar',
            'img' => 'ek-a-sala.jpg',
            'lb' => 0,
            'specs' => ['2 recámaras', '2 baños completos', '103.59 m²', 'Terminaciones 01 y 05', 'Terraza privada', 'Cuarto de lavado'],
            'texto' => 'Una configuración amplia con distribución Lock Off, pensada para ofrecer flexibilidad de uso dentro de una misma unidad. La operación independiente de espacios, implicaciones de renta, régimen jurídico y condiciones de administración deben confirmarse con el equipo comercial y legal.',
        ],
        [
            'nombre' => 'Magna',
            'clave' => 'Tipología B',
            'estado' => 'Consultar',
            'img' => 'ek-b-sala.jpg',
            'lb' => 5,
            'specs' => ['2 recámaras', '2 baños completos', '83.44 m²', 'Terminaciones 02 y 04', 'Terraza privada', 'Cuarto de lavado'],
            'texto' => 'Una distribución de dos recámaras que combina áreas sociales, espacios privados y terraza dentro de una superficie funcional.',
        ],
        [
            'nombre' => 'Prime',
            'clave' => 'Tipología C',
            'estado' => 'Consultar',
            'img' => 'ek-c-sala.jpg',
            'lb' => 9,
            'specs' => ['1 recámara', 'Baño completo con doble acceso', '53.10 m²', 'Terminación 03', 'Terraza doble', 'Cocina con comedor integrado'],
            'texto' => 'Una configuración compacta que integra las áreas principales dentro de una distribución diseñada para aprovechar la superficie disponible.',
        ],
    ];

    $lightbox = [
        ['src' => asset('images/ek-a-sala.jpg'),    't' => 'Suprema Dual — sala (render ilustrativo)'],
        ['src' => asset('images/ek-a-comedor.jpg'), 't' => 'Suprema Dual — comedor (render ilustrativo)'],
        ['src' => asset('images/ek-a-cocina.jpg'),  't' => 'Suprema Dual — cocina (render ilustrativo)'],
        ['src' => asset('images/ek-a-hab1.jpg'),    't' => 'Suprema Dual — recámara principal (render ilustrativo)'],
        ['src' => asset('images/ek-a-hab2.jpg'),    't' => 'Suprema Dual — recámara 2 (render ilustrativo)'],
        ['src' => asset('images/ek-b-sala.jpg'),    't' => 'Magna — sala (render ilustrativo)'],
        ['src' => asset('images/ek-b-cocina.jpg'),  't' => 'Magna — cocina (render ilustrativo)'],
        ['src' => asset('images/ek-b-hab1.jpg'),    't' => 'Magna — recámara principal (render ilustrativo)'],
        ['src' => asset('images/ek-b-hab2.jpg'),    't' => 'Magna — recámara 2 (render ilustrativo)'],
        ['src' => asset('images/ek-c-sala.jpg'),    't' => 'Prime — sala (render ilustrativo)'],
        ['src' => asset('images/ek-c-cocina.jpg'),  't' => 'Prime — cocina y comedor (render ilustrativo)'],
        ['src' => asset('images/ek-c-hab.jpg'),     't' => 'Prime — recámara (render ilustrativo)'],
    ];
@endphp

<section id="tipologias" class="bg-sand-100 py-24 lg:py-32"
    x-data="gallery(@js(collect($lightbox)))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Tipologías</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Tres configuraciones para diferentes formas de <span class="accent-italic">vivir</span></h2>
            <p class="mt-4 text-lg leading-relaxed text-ink-soft">Conoce las superficies y distribuciones proporcionadas para Ek Balam 36.</p>
        </div>

        <div class="mt-14 grid gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($tipologias as $t)
                <article class="reveal group flex flex-col overflow-hidden rounded-3xl bg-white shadow-lg shadow-ink/5 ring-1 ring-ink/5 {{ $loop->last ? 'md:col-span-2 md:mx-auto md:max-w-md xl:col-span-1 xl:max-w-none' : '' }}">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/' . $t['img']) }}" alt="{{ $t['nombre'] }} — render ilustrativo" loading="lazy"
                            class="aspect-[16/10] w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                        <span class="absolute left-5 top-5 rounded-full bg-balam-950/70 px-4 py-1.5 text-xs font-medium text-sand-50 backdrop-blur-sm">{{ $t['estado'] }}</span>
                        <span class="absolute right-4 top-5 rounded-full bg-balam-950/60 px-3 py-1 text-[0.55rem] font-medium uppercase tracking-wider text-sand-50 backdrop-blur-sm">Render</span>
                    </div>
                    <div class="flex grow flex-col p-8">
                        <p class="eyebrow text-[0.55rem] text-wood-500">{{ $t['clave'] }}</p>
                        <h3 class="display mt-2 text-3xl font-light text-ink">{{ $t['nombre'] }}</h3>
                        <ul class="mt-5 space-y-2.5">
                            @foreach ($t['specs'] as $spec)
                                <li class="flex items-start gap-2 text-sm text-ink-soft">
                                    <svg class="mt-1 h-3.5 w-3.5 shrink-0 text-wood-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.3 3.3 6.8-6.8a1 1 0 0 1 1.4 0z" clip-rule="evenodd"/></svg>
                                    <span>{{ $spec }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-5 text-sm leading-relaxed text-ink-soft">{{ $t['texto'] }}</p>
                        <div class="mt-auto flex flex-col gap-3 pt-7 sm:flex-row">
                            <button type="button" @click="show({{ $t['lb'] }})" id="tipologia-{{ $loop->index }}"
                                class="eyebrow flex-1 whitespace-nowrap rounded-full bg-ink px-6 py-3 text-center text-[0.65rem] text-sand-50 transition-colors hover:bg-wood-500">Ver tipología</button>
                            <a href="#contacto"
                                class="eyebrow flex flex-1 items-center justify-center whitespace-nowrap rounded-full border border-ink/20 px-6 py-3 text-[0.65rem] text-ink transition-colors hover:border-ink hover:bg-ink hover:text-sand-50">Consultar</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <p class="reveal mt-8 text-center text-xs text-ink-soft/70">Superficies, terminaciones, distribuciones y acabados sujetos a confirmación. Estados de disponibilidad actualizados con el equipo comercial.</p>
    </div>

    @include('partials.lightbox')
</section>
