{{-- ============================== FORMULARIO DE ASESORÍA (2 pasos) ============================== --}}
<section id="contacto" class="bg-beige py-24 lg:py-32"
    x-data="{
        step: 1,
        get stepOneValid() {
            return this.$refs.nombre.value.trim() !== ''
                && this.$refs.apellido.value.trim() !== ''
                && /^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(this.$refs.email.value)
                && this.$refs.telefono.value.trim().length >= 7;
        },
    }">
    <div class="mx-auto max-w-xl px-6 lg:px-10">
        <div class="reveal-group text-center">
            <p class="eyebrow text-wood-500">Contacto</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Agenda una asesoría <span class="accent-italic">personalizada</span></h2>
            <p class="mx-auto mt-5 max-w-lg text-lg leading-relaxed text-ink-soft">Déjanos tus datos para recibir información sobre tipologías, disponibilidad, precios, condiciones de preventa, locales comerciales o colaboración con brokers.</p>
        </div>

        <form name="asesoria" method="POST" data-netlify="true" netlify-honeypot="bot-field" action="/gracias.html"
            class="reveal mt-12 rounded-3xl bg-white p-8 shadow-xl shadow-ink/10 ring-1 ring-ink/5 lg:p-10">
            <input type="hidden" name="form-name" value="asesoria">
            <p class="hidden" aria-hidden="true"><label>Campo interno: <input name="bot-field" tabindex="-1" autocomplete="off"></label></p>

            {{-- Progreso --}}
            <div class="mb-7">
                <div class="flex items-center justify-between">
                    <p class="eyebrow text-[0.55rem] text-ink-soft">Paso <span x-text="step"></span> de 2</p>
                    <p class="eyebrow text-[0.55rem] text-wood-500" x-text="step === 1 ? 'Tus datos' : 'Tu interés'"></p>
                </div>
                <div class="mt-3 h-1 overflow-hidden rounded-full bg-sand-100">
                    <div class="h-full rounded-full bg-wood-500 transition-all duration-500" :style="'width:' + (step === 1 ? '50%' : '100%')"></div>
                </div>
            </div>

            {{-- Paso 1: datos --}}
            <div x-show="step === 1" class="space-y-4">
                <div class="grid gap-4 sm:grid-cols-2">
                    <input type="text" name="nombre" x-ref="nombre" placeholder="Nombre" autocomplete="given-name"
                        class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                    <input type="text" name="apellido" x-ref="apellido" placeholder="Apellido" autocomplete="family-name"
                        class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                </div>
                <input type="email" name="email" x-ref="email" placeholder="Correo electrónico" autocomplete="email"
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                <input type="tel" name="telefono" x-ref="telefono" placeholder="Teléfono o WhatsApp" autocomplete="tel" inputmode="tel"
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400">
                <button type="button" @click="stepOneValid ? step = 2 : $refs.stepError.classList.remove('hidden')"
                    class="eyebrow w-full rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Continuar</button>
                <p x-ref="stepError" class="hidden text-center text-xs text-red-600">Completa tu nombre, apellido, correo válido y teléfono para continuar.</p>
            </div>

            {{-- Paso 2: interés + contacto --}}
            <div x-show="step === 2" x-cloak class="space-y-4">
                <select name="interes" id="interes" required
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm text-ink focus:border-wood-400 focus:ring-wood-400">
                    <option value="" disabled selected>¿Qué te interesa?</option>
                    <option>Quiero vivir en Ek Balam 36</option>
                    <option>Quiero invertir</option>
                    <option>Quiero conocer tipologías</option>
                    <option>Quiero recibir disponibilidad</option>
                    <option>Quiero información de locales comerciales</option>
                    <option>Soy broker o aliado</option>
                </select>
                <div class="grid gap-4 sm:grid-cols-2">
                    <input type="date" name="fecha-preferida" aria-label="Fecha preferida"
                        class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm text-ink-soft focus:border-wood-400 focus:ring-wood-400">
                    <select name="horario-preferido" aria-label="Horario preferido"
                        class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm text-ink focus:border-wood-400 focus:ring-wood-400">
                        <option value="" disabled selected>Horario preferido</option>
                        <option>Mañana</option>
                        <option>Tarde</option>
                        <option>Noche</option>
                    </select>
                </div>
                <textarea name="mensaje" placeholder="Mensaje (opcional)" rows="3"
                    class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3.5 text-sm focus:border-wood-400 focus:ring-wood-400"></textarea>

                <label class="flex items-start gap-3 pt-1 text-left text-[0.7rem] leading-relaxed text-ink-soft/80">
                    <input type="checkbox" name="acepto-contacto" required
                        class="mt-0.5 h-4 w-4 shrink-0 rounded border-ink/20 text-wood-500 focus:ring-wood-400">
                    {{-- TODO: enlazar el Aviso de Privacidad cuando el cliente entregue el documento --}}
                    <span>Acepto ser contactado por el equipo comercial de Ek Balam 36 vía llamada, mensaje o correo electrónico y confirmo haber leído el Aviso de Privacidad.</span>
                </label>

                <div class="flex flex-col gap-3 pt-2 sm:flex-row">
                    <button type="button" @click="step = 1"
                        class="eyebrow rounded-full border border-ink/20 px-8 py-4 text-[0.7rem] text-ink transition-colors hover:border-ink hover:bg-ink hover:text-sand-50">Regresar</button>
                    <button type="submit" id="cta-enviar"
                        class="eyebrow flex-1 rounded-full bg-wood-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-wood-400">Enviar solicitud</button>
                </div>
            </div>
            <p class="pt-4 text-center text-[0.7rem] leading-relaxed text-ink-soft/70">Tu información será tratada con privacidad y utilizada únicamente para darte seguimiento.</p>
        </form>
    </div>
</section>
