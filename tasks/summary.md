# Ek Balam 36 — Landing Page

## Qué es
Landing one-pager para **Ek Balam 36** (Condos & Shopping), proyecto de usos
mixtos en Puerto Morelos, Q.R.: condos de 1 y 2 recámaras (Suprema Dual Lock Off
103.59 m² · Magna 83.44 m² · Prime 53.10 m²), plaza comercial peatonal, 4 áreas
proyectadas como drive-thru, rooftop de amenidades (infinity pool, gym, firepit,
coworking, podcast…). Presentado por el equipo relacionado con **Alux 33**.

Sexto sitio de la familia. Blueprint: `docs/landing-page-structure.md` ·
proceso: `docs/new-landing-playbook.md`. Skin: negro cálido/selva (`balam-*`),
arena (`sand-*`), dorado discreto (`wood-*`).

## Formulario
`asesoria` (2 pasos) envía por fetch JSON al **webhook de Bolt CRM**
(URL en `FORMS_WEBHOOK_URL`, definida en `.env.example` — cambiarla ahí y push; CI construye desde ese archivo) con campos + form/sitio/pagina;
éxito = popup de confirmación (Alpine `sent`), error = mensaje inline.
Ya NO usa Netlify Forms.

## Secciones
hero (fachada ⭐️PRINCIPAL) → proyecto → video → concepto "Vivir con intención"
(mar conceptual) → ubicación + cercanías (tiempos ~aprox con leyenda) →
composición (6 cards) → plaza comercial (galería + drive-thru, dark) → rooftop
(band, planta aérea) → amenidades (slider 9: 7 con render, jacuzzi/ludoteca con
ícono) → tipologías (3 cards + lightbox interiores) → disponibilidad (dark CTA)
→ patrimonial → galería → asesoría (form 2 pasos) → respaldo → brokers → cta-final

## Reglas del brief
Nada inventado: precios/rendimientos/fechas/marcas de locales/comisiones =
"consultar/sujeto a". Lock Off siempre con nota jurídica. Renders etiquetados;
amenidades "proyectadas"; sello "16 años" NO publicado (sin aprobación); logos
pendientes (wordmarks). Sin contacto comercial aún (tel/WA/correo TODO).
Preloader sin porcentaje.

## Desarrollo local
```bash
composer install && npm install
php artisan serve   # ?nopreload salta el preloader
```
