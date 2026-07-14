<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Lock scroll during the first-load preloader (safety-unlocks after 14s) --}}
    <script>
        document.documentElement.classList.add('is-loading');
        setTimeout(function () { document.documentElement.classList.remove('is-loading'); }, 14000);
    </script>

    @php
        $siteUrl = rtrim(config('app.url'), '/');
        $metaTitle = $title ?? 'Ek Balam 36 Puerto Morelos | Condos & Shopping';
        $metaDesc = $description ?? 'Conoce Ek Balam 36, un proyecto de usos mixtos en Puerto Morelos con condos, plaza comercial, rooftop y tipologías de una y dos recámaras.';
        $ogImage = $siteUrl . '/images/og-ekbalam.jpg';
    @endphp
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDesc }}">
    <meta name="keywords" content="Ek Balam 36, Puerto Morelos, condos Puerto Morelos, plaza comercial Puerto Morelos, usos mixtos Riviera Maya, departamentos preventa Riviera Maya, lock off">
    <meta name="author" content="Ek Balam 36">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="theme-color" content="#0b0c07">
    <link rel="canonical" href="{{ $siteUrl }}/">

    {{-- Icons --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" href="/icon-512.png" sizes="512x512">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- Open Graph — URLs must be absolute --}}
    <meta property="og:site_name" content="Ek Balam 36 · Puerto Morelos">
    <meta property="og:title" content="Ek Balam 36 · Condos & Shopping — Puerto Morelos">
    <meta property="og:description" content="Proyecto de usos mixtos en Puerto Morelos: condos de 1 y 2 recámaras, plaza comercial a nivel peatonal, rooftop y amenidades.">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:secure_url" content="{{ $ogImage }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Fachada de Ek Balam 36 en Puerto Morelos — render ilustrativo">
    <meta property="og:url" content="{{ $siteUrl }}/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">

    {{-- Twitter / X card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ek Balam 36 · Condos & Shopping — Puerto Morelos">
    <meta name="twitter:description" content="Condos, plaza comercial y rooftop en Puerto Morelos, Riviera Maya. Tipologías Suprema Dual, Magna y Prime.">
    <meta name="twitter:image" content="{{ $ogImage }}">
    <meta name="twitter:image:alt" content="Ek Balam 36 — Puerto Morelos">

    {{-- Structured data --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ApartmentComplex',
        'name' => 'Ek Balam 36',
        'description' => $metaDesc,
        'url' => $siteUrl . '/',
        'image' => $ogImage,
        'slogan' => 'Condos & Shopping',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Puerto Morelos',
            'addressRegion' => 'Quintana Roo',
            'addressCountry' => 'MX',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    x-data="{ navSolid: false, navOpen: false }"
    @scroll.window.passive="navSolid = window.scrollY > 40"
    :class="navOpen ? 'overflow-hidden xl:overflow-auto' : ''"
>

    {{-- ============================== PRELOADER (sin porcentaje, per brief) ============================== --}}
    <div id="preloader" class="fixed inset-0 z-[100] flex items-center justify-center bg-balam-950">
        <div class="preloader-mark flex flex-col items-center text-sand-50">
            @include('partials.logo')
        </div>
    </div>

    @php
        $navLinks = [
            ['label' => 'Proyecto',       'href' => '#proyecto'],
            ['label' => 'Ubicación',      'href' => '#ubicacion'],
            ['label' => 'Amenidades',     'href' => '#amenidades'],
            ['label' => 'Tipologías',     'href' => '#tipologias'],
            ['label' => 'Plaza comercial','href' => '#plaza'],
            ['label' => 'Disponibilidad', 'href' => '#disponibilidad'],
        ];
        $mobileExtra = [
            ['label' => 'Contacto', 'href' => '#contacto'],
        ];

        // Contacto comercial de Ek Balam 36 — PENDIENTE (teléfono, WhatsApp, correo, redes).
        // Al recibirlos: llenar aquí y activar los botones flotantes/footer (TODOs abajo).
        $mapsUrl = 'https://maps.google.com/?q=Puerto+Morelos,+Quintana+Roo';
        $waNumber = null;  // ej. '529981234567'
        $telNumber = null; // ej. '+529981234567'
        $waText = rawurlencode('Hola, me interesa Ek Balam 36 en Puerto Morelos. ¿Me pueden compartir información?');
    @endphp

    {{-- ============================== NAV ============================== --}}
    <header
        class="fixed inset-x-0 top-0 z-50 transition-all duration-500"
        :class="navSolid || navOpen ? 'bg-sand-50/95 backdrop-blur-sm shadow-[0_1px_0_0_rgba(35,32,25,0.08)]' : 'bg-transparent'"
    >
        <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
            <a
                href="#inicio"
                class="group relative z-50 flex shrink-0 items-center transition-colors duration-500"
                :class="navSolid || navOpen ? 'text-ink' : 'text-sand-50'"
                aria-label="Alux 33 — inicio"
            >
                @include('partials.logo', ['variant' => 'auto'])
            </a>

            {{-- Desktop links + CTA, right-aligned --}}
            <div class="flex items-center gap-3 xl:gap-5">
                <div class="hidden items-center gap-4 xl:flex 2xl:gap-7">
                    @foreach ($navLinks as $item)
                        <a
                            href="{{ $item['href'] }}"
                            class="nav-link eyebrow whitespace-nowrap text-[0.6rem] transition-colors duration-300 2xl:text-[0.65rem] {{ in_array($item['label'], ['Plaza comercial', 'Disponibilidad']) ? 'hidden 2xl:inline-block' : '' }}"
                            :class="navSolid ? 'text-ink-soft hover:text-wood-500' : 'text-sand-100 hover:text-white'"
                        >{{ $item['label'] }}</a>
                    @endforeach
                </div>
                <a
                    href="#contacto"
                    id="cta-nav"
                    class="eyebrow z-50 hidden whitespace-nowrap rounded-full px-4 py-2.5 text-[0.65rem] text-sand-50 transition-all duration-300 bg-wood-500 hover:bg-wood-400 lg:inline-flex xl:px-5"
                >Solicitar información</a>

                <button
                    class="relative z-50 flex h-10 w-10 flex-col items-center justify-center gap-1.5 xl:hidden"
                    @click="navOpen = !navOpen"
                    aria-label="Menú"
                >
                    <span class="block h-px w-6 transition-all duration-300"
                        :class="[navOpen ? 'translate-y-[3.5px] rotate-45' : '', navSolid || navOpen ? 'bg-ink' : 'bg-sand-50']"></span>
                    <span class="block h-px w-6 transition-all duration-300"
                        :class="[navOpen ? '-translate-y-[3.5px] -rotate-45' : '', navSolid || navOpen ? 'bg-ink' : 'bg-sand-50']"></span>
                </button>
            </div>
        </nav>

        {{-- Mobile / tablet menu --}}
        <div x-show="navOpen" x-collapse.duration.400ms class="xl:hidden">
            <div class="space-y-1 border-t border-ink/5 bg-sand-50 px-6 pb-8 pt-4">
                @foreach (array_merge($navLinks, $mobileExtra) as $item)
                    <a href="{{ $item['href'] }}" @click="navOpen = false"
                        class="display block py-3 text-2xl text-ink transition-colors hover:text-wood-500">{{ $item['label'] }}</a>
                @endforeach
                <a href="#contacto" @click="navOpen = false"
                    class="eyebrow mt-4 inline-block rounded-full bg-wood-500 px-6 py-3 text-[0.65rem] text-sand-50">Solicitar información</a>
            </div>
        </div>
    </header>

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    {{-- ============================== FOOTER ============================== --}}
    <footer class="bg-balam-950 text-sand-200">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-10">
            <div class="grid gap-12 md:grid-cols-3">
                <div class="text-sand-50">
                    @include('partials.logo')
                    <p class="mt-6 max-w-xs text-sm leading-relaxed text-sand-200/70">
                        Puerto Morelos, Quintana Roo, México.<br>
                        Riviera Maya.
                    </p>
                    <p class="mt-5 text-xs leading-relaxed text-sand-200/55">
                        {{-- TODO: desarrollador — confirmar razón social antes de publicar --}}
                        Proyecto presentado por el equipo relacionado con Alux 33.
                    </p>
                </div>

                <div>
                    <p class="eyebrow mb-5 text-[0.6rem] text-wood-300">El proyecto</p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#proyecto" class="transition-colors hover:text-wood-300">Conoce Ek Balam 36</a></li>
                        <li><a href="#tipologias" class="transition-colors hover:text-wood-300">Tipologías</a></li>
                        <li><a href="#amenidades" class="transition-colors hover:text-wood-300">Rooftop y amenidades</a></li>
                        <li><a href="#plaza" class="transition-colors hover:text-wood-300">Plaza comercial</a></li>
                        <li><a href="#disponibilidad" class="transition-colors hover:text-wood-300">Disponibilidad</a></li>
                        <li><a href="#galeria" class="transition-colors hover:text-wood-300">Galería</a></li>
                    </ul>
                </div>

                <div>
                    <p class="eyebrow mb-5 text-[0.6rem] text-wood-300">Contacto</p>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 transition-colors hover:text-wood-300">
                                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
                                Ver en Google Maps
                            </a>
                        </li>
                        {{-- TODO: WhatsApp, teléfono, correo y redes sociales — pendientes de confirmación --}}
                    </ul>
                    <a href="#contacto" class="eyebrow mt-7 inline-flex items-center justify-center rounded-full bg-wood-500 px-7 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-wood-400">Agendar asesoría</a>
                </div>
            </div>

            <div class="mt-14 border-t border-sand-50/10 pt-8 text-xs leading-relaxed text-sand-200/50">
                <p>© {{ date('Y') }} Ek Balam 36 · Condos & Shopping · Puerto Morelos. Todos los derechos reservados. · Aviso de Privacidad <span class="text-sand-200/30">· v1.0.0</span></p>
                <p class="mt-2">
                    Las imágenes, planos, renders, superficies, amenidades y representaciones mostradas pueden ser ilustrativas y están sujetas a modificaciones.
                    La disponibilidad, precios, vistas, equipamiento, promociones y condiciones comerciales deben confirmarse con el equipo correspondiente y pueden cambiar sin previo aviso.
                </p>
            </div>
        </div>
    </footer>

    {{-- ============================== FLOATING ACTIONS ============================== --}}
    <div class="fixed right-4 top-1/2 z-40 flex -translate-y-1/2 flex-col items-center gap-3 sm:right-6">
        <a href="{{ $mapsUrl }}" target="_blank" rel="noopener" aria-label="Ver ubicación en Google Maps"
            class="flex h-12 w-12 items-center justify-center rounded-full bg-balam-900 text-sand-50 shadow-lg shadow-ink/20 transition-transform duration-300 hover:scale-110">
            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
        </a>
        <a href="#contacto" aria-label="Ir al formulario de contacto"
            class="flex h-14 w-14 items-center justify-center rounded-full bg-wood-500 shadow-lg shadow-ink/20 transition-transform duration-300 hover:scale-110">
            <svg viewBox="0 0 24 24" class="h-7 w-7 fill-white"><path d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
        </a>
        {{-- TODO: botón flotante de WhatsApp — activar cuando exista el número comercial:
        @if ($waNumber)
        <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" ...>WhatsApp</a>
        @endif --}}
    </div>

</body>
</html>
