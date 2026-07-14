{{-- ============================== PLAZA COMERCIAL + DRIVE-THRU ============================== --}}
@php
    $plazaGallery = [
        ['img' => 'ek-plaza-1.jpg',       't' => 'Plaza comercial — render ilustrativo', 'span' => 'lg:col-span-2 lg:row-span-2'],
        ['img' => 'ek-plaza-andador.jpg', 't' => 'Andadores peatonales — render ilustrativo', 'span' => ''],
        ['img' => 'ek-plaza-3.jpg',       't' => 'Terrazas y locales — usos ilustrativos', 'span' => ''],
        ['img' => 'ek-drivethru.jpg',     't' => 'Área proyectada como drive-thru — sujeta a confirmación', 'span' => 'lg:col-span-2'],
        ['img' => 'ek-plaza-2.jpg',       't' => 'Locales comerciales — render ilustrativo', 'span' => ''],
        ['img' => 'ek-plaza-4.jpg',       't' => 'Circulación peatonal — render ilustrativo', 'span' => ''],
    ];
    $lb = collect($plazaGallery)->map(fn ($e) => ['src' => asset('images/' . $e['img']), 't' => $e['t']])->values();
@endphp

<section id="plaza" class="bg-balam-950 py-24 text-sand-50 lg:py-32"
    x-data="gallery(@js($lb))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-300">Plaza comercial</p>
            <h2 class="display mt-5 text-4xl font-light sm:text-5xl">Un espacio a nivel peatonal para servicios y <span class="accent-italic">convivencia</span></h2>
            <p class="mt-5 text-lg leading-relaxed text-sand-100/80">
                La plaza comercial de Ek Balam 36 está planteada como un componente integrado al desarrollo, con espacios destinados a servicios, comercio y experiencias cotidianas.
            </p>
        </div>

        <div class="reveal mt-12 grid auto-rows-[200px] grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($plazaGallery as $g)
                <button type="button" @click="show({{ $loop->index }})"
                    class="group relative overflow-hidden rounded-2xl bg-balam-900 {{ $g['span'] }}">
                    <img src="{{ asset('images/' . $g['img']) }}" alt="{{ $g['t'] }}" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-balam-950/60 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    <span class="eyebrow absolute bottom-4 left-4 pr-4 text-left text-[0.55rem] text-sand-50 opacity-0 transition-opacity group-hover:opacity-100">{{ $g['t'] }}</span>
                </button>
            @endforeach
        </div>

        {{-- Drive-thru --}}
        <div class="reveal mt-12 grid items-center gap-8 rounded-3xl border border-sand-50/15 bg-sand-50/[0.04] p-8 backdrop-blur-sm lg:grid-cols-3 lg:p-10">
            <div class="lg:col-span-2">
                <p class="eyebrow text-[0.6rem] text-wood-300">Propuesta comercial</p>
                <h3 class="display mt-3 text-2xl font-light sm:text-3xl">Espacios drive-thru integrados al proyecto</h3>
                <p class="mt-4 text-base leading-relaxed text-sand-100/80">
                    Ek Balam 36 contempla áreas de atención vehicular dentro de su propuesta comercial, buscando combinar accesibilidad, circulación y servicios dentro del desarrollo. Cuatro espacios proyectados como drive-thru en las esquinas del proyecto, sujetos a confirmación comercial y técnica.
                </p>
            </div>
            <div class="text-center lg:text-right">
                <p class="display text-6xl font-light text-wood-300">4</p>
                <p class="eyebrow mt-1 text-[0.55rem] text-sand-200/60">Áreas proyectadas<br>como drive-thru*</p>
            </div>
        </div>

        <p class="reveal mt-6 text-center text-xs text-sand-200/45">*Sin marcas, giros, superficies ni disponibilidad confirmados. Información comercial sujeta a actualización.</p>
        <div class="reveal mt-8 text-center">
            <a href="#contacto" id="cta-locales"
                onclick="var s = document.getElementById('interes'); if (s) s.value = 'Quiero información de locales comerciales';"
                class="eyebrow inline-flex items-center justify-center rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Conocer espacios comerciales</a>
        </div>
    </div>

    @include('partials.lightbox')
</section>
