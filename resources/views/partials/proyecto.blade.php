{{-- ============================== CONOCE EK BALAM 36 ============================== --}}
<section id="proyecto" class="bg-sand-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="reveal-group">
                <p class="eyebrow text-wood-500">Conoce Ek Balam 36</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Una forma distinta de vivir <span class="accent-italic">Puerto Morelos</span></h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">
                    Ek Balam 36 nace como una propuesta residencial y comercial que busca integrar diseño, comunidad y experiencia cotidiana dentro de un mismo proyecto.
                </p>
                <p class="mt-4 text-base leading-relaxed text-ink-soft">
                    La propuesta reúne condos, plaza comercial, rooftop y espacios de convivencia en una ubicación conectada con la Riviera Maya. Cada área del desarrollo forma parte de una experiencia integral: desde las residencias hasta las amenidades, desde la plaza peatonal hasta los espacios de encuentro.
                </p>

                <dl class="mt-10 grid grid-cols-2 gap-x-6 gap-y-5 sm:grid-cols-3">
                    @foreach ([
                        ['n' => 'Usos mixtos', 'l' => 'Condos + comercio'],
                        ['n' => '1 · 2', 'l' => 'Recámaras'],
                        ['n' => '10', 'l' => 'Niveles*'],
                    ] as $stat)
                        <div>
                            <dt class="display text-2xl font-light text-ink sm:text-3xl">{{ $stat['n'] }}</dt>
                            <dd class="eyebrow mt-1 text-[0.55rem] text-ink-soft">{{ $stat['l'] }}</dd>
                        </div>
                    @endforeach
                </dl>

                <ul class="mt-8 flex flex-wrap gap-2.5">
                    @foreach (['Plaza comercial peatonal', 'Rooftop de amenidades*', 'Área subterránea para residentes*', 'Preventa sujeta a confirmación'] as $tag)
                        <li class="rounded-full bg-balam-500/10 px-4 py-2 text-xs font-medium text-balam-700">{{ $tag }}</li>
                    @endforeach
                </ul>
                <p class="mt-4 text-xs text-ink-soft/70">*Datos sujetos a validación final del proyecto.</p>
            </div>

            <div class="reveal overflow-hidden rounded-3xl shadow-xl shadow-ink/10">
                <img src="{{ asset('images/ek-fachada-dia.jpg') }}" alt="Fachada de Ek Balam 36 — render ilustrativo" loading="lazy"
                    class="aspect-[4/3] w-full object-cover">
            </div>
        </div>
    </div>
</section>
