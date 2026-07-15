{{-- Ek Balam 36 wordmark + divider + tagline (pending the official logo files —
     TODO: sustituir por /logos/ek-balam-36-blanco.svg (+ versión oscura) al recibirlos;
     el branding incluye una pantera negra que hoy no tenemos como asset).
     variant 'white' → fixed light version (footer, preloader)
     variant 'auto'  → compact nav version that inherits currentColor. --}}
@php
    $variant = $variant ?? 'white';
    $auto = $variant === 'auto';
@endphp
<span class="flex items-center gap-3 lg:gap-4 {{ $auto ? 'text-current' : 'text-sand-50' }}" role="img" aria-label="Ek Balam 36 — Condos & Shopping, Puerto Morelos">
    <span class="display whitespace-nowrap text-lg font-light uppercase tracking-[0.18em] lg:text-xl">Ek Balam <span class="text-wood-400">36</span></span>
    <span class="{{ $auto ? 'hidden sm:block bg-current opacity-25' : 'bg-sand-50/25' }} h-8 w-px shrink-0 lg:h-9"></span>
    @if ($auto)
        <span class="eyebrow hidden whitespace-nowrap text-[0.5rem] tracking-[0.26em] sm:inline">Condos <span class="opacity-60">&amp;</span> Shopping</span>
    @else
        <span class="flex flex-col leading-none">
            <span class="eyebrow whitespace-nowrap text-[0.5rem] tracking-[0.26em]">Condos &amp; Shopping</span>
            <span class="eyebrow mt-1 whitespace-nowrap text-[0.45rem] tracking-[0.3em] opacity-85">Puerto Morelos</span>
        </span>
    @endif
</span>
