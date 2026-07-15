{{-- Ek Balam 36 wordmark (pending the official logo files —
     TODO: sustituir por /logos/ek-balam-36-blanco.svg (+ versión oscura) al recibirlos;
     el branding incluye una pantera negra que hoy no tenemos como asset).
     variant 'white' → versión completa con tagline (footer, preloader)
     variant 'auto'  → nav: solo el wordmark, hereda currentColor. --}}
@php
    $variant = $variant ?? 'white';
    $auto = $variant === 'auto';
@endphp
<span class="flex items-center gap-3 lg:gap-4 {{ $auto ? 'text-current' : 'text-sand-50' }}" role="img" aria-label="Ek Balam 36 — Condos & Shopping, Puerto Morelos">
    <span class="display whitespace-nowrap text-lg font-light uppercase tracking-[0.18em] lg:text-xl">Ek Balam <span class="text-wood-400">36</span></span>
    @unless ($auto)
        <span class="h-8 w-px shrink-0 bg-sand-50/25 lg:h-9"></span>
        <span class="flex flex-col leading-none">
            <span class="eyebrow whitespace-nowrap text-[0.5rem] tracking-[0.26em]">Condos &amp; Shopping</span>
            <span class="eyebrow mt-1 whitespace-nowrap text-[0.45rem] tracking-[0.3em] opacity-85">Puerto Morelos</span>
        </span>
    @endunless
</span>
