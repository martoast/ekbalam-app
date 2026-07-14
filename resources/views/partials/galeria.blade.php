@php
    $galeria = [
        ['img' => 'ek-fachada-noche.jpg',   't' => 'Fachada nocturna — render ilustrativo', 'span' => 'lg:col-span-2 lg:row-span-2'],
        ['img' => 'ek-infinity.jpg',        't' => 'Infinity pool — amenidad proyectada', 'span' => ''],
        ['img' => 'ek-plaza-1.jpg',         't' => 'Plaza comercial — render ilustrativo', 'span' => ''],
        ['img' => 'ek-exterior-atardecer.jpg', 't' => 'Exterior al atardecer — render ilustrativo', 'span' => 'lg:col-span-2'],
        ['img' => 'ek-a-cocina.jpg',        't' => 'Cocina Suprema Dual — render ilustrativo', 'span' => ''],
        ['img' => 'ek-firepit.jpg',         't' => 'Lounge y firepit — amenidad proyectada', 'span' => ''],
        ['img' => 'ek-b-hab1.jpg',          't' => 'Recámara Magna — render ilustrativo', 'span' => ''],
        ['img' => 'ek-coworking.jpg',       't' => 'Coworking — amenidad proyectada', 'span' => ''],
    ];
    $lb = collect($galeria)->map(fn ($e) => ['src' => asset('images/' . $e['img']), 't' => $e['t']])->values();
@endphp

<section id="galeria" class="bg-sand-100 py-24 lg:py-32"
    x-data="gallery(@js($lb))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-wood-500">Galería</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Arquitectura, Caribe y vida en <span class="accent-italic">comunidad</span></h2>
        </div>

        <div class="reveal mt-12 grid auto-rows-[220px] grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($galeria as $g)
                <button type="button" @click="show({{ $loop->index }})"
                    class="group relative overflow-hidden rounded-2xl bg-balam-950 {{ $g['span'] }}">
                    <img src="{{ asset('images/' . $g['img']) }}" alt="{{ $g['t'] }}" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-balam-950/60 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    <span class="eyebrow absolute bottom-4 left-4 pr-4 text-left text-[0.55rem] text-sand-50 opacity-0 transition-opacity group-hover:opacity-100">{{ $g['t'] }}</span>
                </button>
            @endforeach
        </div>
    </div>

    @include('partials.lightbox')
</section>
