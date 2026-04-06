<x-guest-layout>
	<div class="w-full space-y-12 pb-12">

		<section class="w-full text-center px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
			<h2 class="text-base sm:text-xl lg:text-2xl font-bold text-violet-500">
				{{ $headerBienvenida->getTagline() }}
			</h2>

			<h1 class="mt-3 text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-tight">
				{{ $headerBienvenida->getTitulo() }}
			</h1>

			<h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white/70 leading-tight">
				{{ $headerBienvenida->getTitulo2() }}
			</h1>

			<p
				class="mt-4 sm:mt-5  lg:text-lg text-white/40 max-w-xs sm:max-w-2xl lg:max-w-4xl mx-auto leading-relaxed">
				{{ $headerBienvenida->getDescription() }}
			</p>
			<div class="mt-6 flex justify-center">
				<button
					class="inline-flex items-center gap-2 rounded-xl border border-violet-500/30 bg-violet-500/15 px-5 py-2.5 text-sm font-semibold text-violet-100 transition hover:border-violet-400/40 hover:bg-violet-500/25">
					Comenzar ahora
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
								stroke-width="2" d="M5 12h14m-7 7V5" />
						</svg>
					</span>
				</button>
			</div>
		</section>

		<section id="" class="space-y-20">
			<div class="flex flex-col justify-between gap-3 md:flex-row md:items-end">
				<div>
					<h2 class="text-4xl font-semibold text-white">Simple y efectivo.</h2>
				</div>
			</div>

			<section class="relative overflow-hidden rounded-3xl border border-white/10 bg-zinc-950">
				<div class="pointer-events-none absolute inset-0">
					<div class="absolute -left-24 -top-24 h-72 w-72 rounded-full bg-violet-500/25 blur-3xl"></div>
					<div class="absolute -bottom-24 -right-12 h-72 w-72 rounded-full bg-fuchsia-500/20 blur-3xl"></div>
				</div>

				<div class="relative grid grid-cols-1 gap-8 p-8 lg:grid-cols-2 lg:p-12">
					<div class="flex flex-col justify-center">
						<span
							class="w-fit rounded-full border border-violet-400/30 bg-violet-500/10 px-3 py-1 text-xs font-medium uppercase tracking-widest text-violet-200">
							Nuevo ciclo fitness 2026
						</span>

						<h1 class="mt-5 text-4xl font-semibold leading-tight text-white sm:text-5xl">
							Transforma tu energía en resultados reales
						</h1>

						<p class="mt-4 max-w-xl text-sm text-zinc-300 sm:text-base">
							Entrena con un sistema integral de fuerza, movilidad y acompañamiento profesional.
							Este preview muestra cómo se vería la homepage principal del gimnasio con contenido
							dinámico.
						</p>

						<div class="mt-8 flex flex-wrap items-center gap-3">
							<a href="#planes"
								class="rounded-xl border border-violet-500/30 bg-violet-500/15 px-5 py-2.5 text-sm font-semibold text-violet-100 transition hover:border-violet-400/40 hover:bg-violet-500/25">
								Ver planes
							</a>
							<a href="#clases"
								class="rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-zinc-200 transition hover:border-violet-400/40 hover:bg-violet-500/10">
								Explorar clases
							</a>
						</div>

						<div class="mt-8 grid grid-cols-3 gap-3 text-center">
							<div class="rounded-xl border border-white/10 bg-white/5 px-3 py-3">
								<p class="text-2xl font-semibold text-white">+4k</p>
								<p class="text-xs text-zinc-400">Miembros</p>
							</div>
							<div class="rounded-xl border border-white/10 bg-white/5 px-3 py-3">
								<p class="text-2xl font-semibold text-white">85%</p>
								<p class="text-xs text-zinc-400">Retención</p>
							</div>
							<div class="rounded-xl border border-white/10 bg-white/5 px-3 py-3">
								<p class="text-2xl font-semibold text-white">24/7</p>
								<p class="text-xs text-zinc-400">Acceso</p>
							</div>
						</div>
					</div>

					<div class="overflow-hidden rounded-2xl border border-white/10 bg-zinc-900">
						@if($entry && $entry->getBienvenida())
						<img src="https:{{ $entry->getBienvenida()->getFile()->getUrl() }}" alt="Imagen">
						@endif
					</div>
				</div>
			</section>

			<section id="planes" class="space-y-20">
				<div class="flex flex-col justify-between gap-3 md:flex-row md:items-end">
					<div>
						<p class="text-sm text-violet-300">Membresías</p>
						<h2 class="text-4xl font-semibold text-white">Planes para cada objetivo</h2>
					</div>
					<p class="max-w-xl text-sm text-zinc-400">Precios y beneficios de ejemplo para mostrar la estructura
						de
						una sección comercial.</p>
				</div>

				<div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
						<h3 class="text-lg font-semibold text-white">{{ $planes[0]->getNombre() }}</h3>
						<p class="mt-1 text-sm text-zinc-400">{{ $planes[0]->getDescripcion() }}</p>
						<p class="mt-4 text-3xl font-semibold text-white">{{ $planes[0]->getPrecio() }} €<span
								class="text-sm text-zinc-400">/mes</span>
						</p>
						<ul class="mt-5 space-y-2 text-sm text-zinc-300">
							<li>{{ $planes[0]->getVentaja1() }}</li>
							<li>{{ $planes[0]->getVentaja2() }}</li>
							<li>{{ $planes[0]->getVentaja3() }}</li>

						</ul>
						<button
							class="mt-6 w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white transition hover:border-violet-400/40 hover:bg-violet-500/10">Seleccionar</button>
					</article>

					<article
						class="rounded-2xl border border-violet-400/40 bg-gradient-to-b from-violet-500/20 to-zinc-900 p-6 shadow-[0_0_40px_rgba(139,92,246,0.25)]">
						<p
							class="w-fit rounded-full border border-violet-300/40 bg-violet-500/20 px-2.5 py-1 text-xs text-violet-100">
							Más popular</p>
						<h3 class="mt-3 text-lg font-semibold text-white">Plan Pro</h3>
						<p class="mt-1 text-sm text-zinc-300">Equilibrio entre rendimiento y precio</p>
						<p class="mt-4 text-3xl font-semibold text-white">$39<span
								class="text-sm text-zinc-300">/mes</span>
						</p>
						<ul class="mt-5 space-y-2 text-sm text-zinc-200">
							<li>• Acceso total al gimnasio</li>
							<li>• Clases ilimitadas</li>
							<li>• Rutina personalizada mensual</li>
						</ul>
						<button
							class="mt-6 w-full rounded-xl border border-violet-400/40 bg-violet-500/20 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-violet-500/30">Elegir
							Pro</button>
					</article>

					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
						<h3 class="text-lg font-semibold text-white">Plan Elite</h3>
						<p class="mt-1 text-sm text-zinc-400">Experiencia premium</p>
						<p class="mt-4 text-3xl font-semibold text-white">$59<span
								class="text-sm text-zinc-400">/mes</span>
						</p>
						<ul class="mt-5 space-y-2 text-sm text-zinc-300">
							<li>• Entrenador personal 1:1</li>
							<li>• Nutrición y seguimiento semanal</li>
							<li>• Zona recovery incluida</li>
						</ul>
						<button
							class="mt-6 w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white transition hover:border-violet-400/40 hover:bg-violet-500/10">Solicitar
							demo</button>
					</article>
				</div>
			</section>

			<section id="clases" class="space-y-20">
				<div>
					<p class="text-sm text-violet-300">Entrenamientos</p>
					<h2 class="text-4xl font-semibold text-white">Clases destacadas de la semana</h2>
				</div>

				<div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-5">
						<p class="text-xs uppercase tracking-wider text-zinc-400">HIIT Burn</p>
						<p class="mt-2 text-xl font-semibold text-white">45 min de alta intensidad</p>
						<p class="mt-2 text-sm text-zinc-400">Lunes · 07:00 AM · Cupos: 18</p>
					</article>
					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-5">
						<p class="text-xs uppercase tracking-wider text-zinc-400">Strength Lab</p>
						<p class="mt-2 text-xl font-semibold text-white">Fuerza y técnica</p>
						<p class="mt-2 text-sm text-zinc-400">Martes · 06:30 PM · Cupos: 12</p>
					</article>
					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-5">
						<p class="text-xs uppercase tracking-wider text-zinc-400">Mobility Flow</p>
						<p class="mt-2 text-xl font-semibold text-white">Movilidad y control corporal</p>
						<p class="mt-2 text-sm text-zinc-400">Jueves · 08:00 AM · Cupos: 16</p>
					</article>
					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-5">
						<p class="text-xs uppercase tracking-wider text-zinc-400">Core & Cardio</p>
						<p class="mt-2 text-xl font-semibold text-white">Resistencia funcional</p>
						<p class="mt-2 text-sm text-zinc-400">Sábado · 10:00 AM · Cupos: 20</p>
					</article>
				</div>
			</section>

			<section class="space-y-6">
				<div>
					<p class="text-sm text-violet-300">Contenido fitness</p>
					<h2 class="text-3xl font-semibold text-white">Tips para mantener el progreso</h2>
				</div>

				<div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
						<p class="text-xs uppercase tracking-wide text-zinc-400">Nutrición</p>
						<h3 class="mt-2 text-xl font-semibold text-white">Cómo armar un plato post-entreno</h3>
						<p class="mt-3 text-sm text-zinc-400">Guía visual con distribución de proteína, carbohidratos y
							grasas saludables para recuperación.</p>
						<a href="#"
							class="mt-4 inline-block text-sm font-medium text-violet-300 hover:text-violet-200">Leer
							tip</a>
					</article>

					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
						<p class="text-xs uppercase tracking-wide text-zinc-400">Entrenamiento</p>
						<h3 class="mt-2 text-xl font-semibold text-white">Progresión simple para ganar fuerza</h3>
						<p class="mt-3 text-sm text-zinc-400">Estrategia semanal para subir cargas sin perder técnica ni
							comprometer la movilidad.</p>
						<a href="#"
							class="mt-4 inline-block text-sm font-medium text-violet-300 hover:text-violet-200">Leer
							tip</a>
					</article>

					<article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
						<p class="text-xs uppercase tracking-wide text-zinc-400">Hábitos</p>
						<h3 class="mt-2 text-xl font-semibold text-white">Dormir mejor para rendir más</h3>
						<p class="mt-3 text-sm text-zinc-400">Checklist nocturno para mejorar recuperación, consistencia
							y
							energía durante el día.</p>
						<a href="#"
							class="mt-4 inline-block text-sm font-medium text-violet-300 hover:text-violet-200">Leer
							tip</a>
					</article>
				</div>
			</section>

			<section class="space-y-6">
				<div>
					<p class="text-sm text-violet-300">Testimonios</p>
					<h2 class="text-3xl font-semibold text-white">Lo que dicen nuestros miembros</h2>
				</div>

				<div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
					<blockquote class="rounded-2xl border border-white/10 bg-zinc-900 p-6 text-zinc-200">
						<p>“El cambio en mi energía fue brutal desde el primer mes. El ambiente motiva muchísimo.”</p>
						<footer class="mt-4 text-sm text-zinc-400">— Sofía M. · Miembro Pro</footer>
					</blockquote>
					<blockquote class="rounded-2xl border border-white/10 bg-zinc-900 p-6 text-zinc-200">
						<p>“Las clases están súper bien organizadas y los coaches corrigen cada detalle técnico.”</p>
						<footer class="mt-4 text-sm text-zinc-400">— Diego R. · Miembro Elite</footer>
					</blockquote>
					<blockquote class="rounded-2xl border border-white/10 bg-zinc-900 p-6 text-zinc-200">
						<p>“Por primera vez logré mantener constancia. Todo está pensado para progresar de verdad.”</p>
						<footer class="mt-4 text-sm text-zinc-400">— Carla T. · Miembro Starter</footer>
					</blockquote>
				</div>
			</section>

			<section
				class="rounded-3xl border border-violet-400/30 bg-gradient-to-r from-violet-500/20 via-purple-500/10 to-fuchsia-500/20 p-8 text-center sm:p-10">
				<p class="text-sm uppercase tracking-[0.2em] text-violet-200">¿Listo para empezar?</p>
				<h2 class="mt-3 text-3xl font-semibold text-white sm:text-4xl">Da el primer paso hoy</h2>
				<p class="mx-auto mt-3 max-w-2xl text-sm text-zinc-200 sm:text-base">
					Crea tu cuenta, reserva tu primera clase y vive una experiencia de entrenamiento diseñada para
					resultados sostenibles.
				</p>
				<div class="mt-6 flex flex-wrap items-center justify-center gap-3">
					<a href="{{ route('register') }}"
						class="rounded-xl border border-violet-300/40 bg-violet-500/25 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-violet-500/35">
						Crear cuenta
					</a>
					<a href="{{ route('login') }}"
						class="rounded-xl border border-white/20 bg-white/10 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-white/15">
						Ya tengo cuenta
					</a>
				</div>
			</section>
	</div>
</x-guest-layout>