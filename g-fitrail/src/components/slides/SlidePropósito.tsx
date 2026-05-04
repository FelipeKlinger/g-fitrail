export function SlidePropósito() {
  return (
    <section
      id="proposito"
      className="rounded-3xl border border-white/10 bg-zinc-900 p-8 shadow-2xl md:p-12"
    >
      <header className="mb-8 border-b border-white/10 pb-4">
        <p className="mb-2 text-sm font-semibold tracking-widest text-violet-400 uppercase">
          Fase de Ideación y Diseño
        </p>
        <h2 className="text-3xl font-bold text-white">
          Propósito, Visión y Marca
        </h2>
      </header>

      <div className="mb-10 grid grid-cols-1 gap-12 lg:grid-cols-2">
        {/* Bloque 1: Problema y Solución Funcional */}
        <div className="space-y-8">
          <div>
            <h3 className="mb-3 flex items-center gap-3 text-xl font-semibold text-white">
              <span className="flex h-8 w-8 items-center justify-center rounded-lg bg-rose-500/20 text-sm font-bold text-rose-400">
                1
              </span>
              El Problema Detectado
            </h3>
            <p className="pl-11 text-sm leading-relaxed text-zinc-400 md:text-base">
              Los gimnasios tradicionales sufren de una alta fragmentación:
              utilizan un software genérico para los cobros, hojas de Excel para
              aforos y WhatsApp para atención. Esto genera descontrol
              administrativo y una mala experiencia de usuario.
            </p>
          </div>

          <div>
            <h3 className="mb-3 flex items-center gap-3 text-xl font-semibold text-white">
              <span className="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-500/20 text-sm font-bold text-emerald-400">
                2
              </span>
              La Solución Centralizada
            </h3>
            <div className="pl-11">
              <p className="mb-4 text-sm leading-relaxed text-zinc-400 md:text-base">
                Una plataforma web diseñada para eliminar la fricción operativa,
                estructurada en{" "}
                <strong className="font-medium text-white">
                  3 niveles de gestión
                </strong>
                :
              </p>
              <ul className="space-y-3">
                <li className="flex items-start gap-3 text-sm text-zinc-400">
                  <div className="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-violet-500"></div>
                  <p>
                    <strong className="text-white">Administrador:</strong>{" "}
                    Control global (Sedes, Finanzas, Usuarios).
                  </p>
                </li>
                <li className="flex items-start gap-3 text-sm text-zinc-400">
                  <div className="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-500"></div>
                  <p>
                    <strong className="text-white">Entrenador:</strong> Gestión
                    operativa y seguimiento de clases.
                  </p>
                </li>
                <li className="flex items-start gap-3 text-sm text-zinc-400">
                  <div className="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-orange-500"></div>
                  <p>
                    <strong className="text-white">Cliente:</strong> Consumidor
                    final de los servicios deportivos.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        {/* Bloque 2: Identidad de Marca y UI/UX */}
        <div className="flex flex-col justify-center space-y-6 rounded-2xl border border-white/5 bg-black/20 p-6 md:p-8">
          <div>
            <h3 className="mb-3 flex items-center gap-3 text-xl font-semibold text-white">
              <span className="flex h-8 w-8 items-center justify-center rounded-lg bg-violet-500/20 text-sm font-bold text-violet-400">
                3
              </span>
              Identidad Visual: G-Fitrail
            </h3>
            <p className="mb-6 pl-11 text-sm leading-relaxed text-zinc-400">
              El naming <strong className="text-white">G-Fitrail</strong> surge
              de unir "Gestión/Gym" con "Trail" (vía o camino). Rompimos con el
              diseño agresivo de los gimnasios tradicionales, apostando por una
              estética tecnológica, limpia y de alto contraste.
            </p>
          </div>

          <div className="grid grid-cols-1 gap-4 pl-11 sm:grid-cols-2">
            {/* Tarjeta de Colores */}
            <div className="rounded-xl border border-white/10 bg-zinc-950 p-4 transition duration-300 hover:-translate-y-1 hover:border-violet-500/30">
              <div className="mb-3 flex gap-2">
                <div className="h-5 w-5 rounded border border-zinc-800 bg-[#09090B] shadow-inner"></div>
                <div className="h-5 w-5 rounded bg-violet-500 shadow-[0_0_10px_rgba(139,92,246,0.4)]"></div>
                <div className="h-5 w-5 rounded bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,0.4)]"></div>
              </div>
              <h4 className="text-sm font-semibold text-white">
                Paleta Dark & Zinc
              </h4>
              <p className="mt-1.5 text-xs leading-relaxed text-zinc-500">
                Fondo <span className="text-zinc-300">Zinc</span> para reducir
                fatiga visual. Acentos en{" "}
                <span className="text-violet-400">Violeta</span> y{" "}
                <span className="text-cyan-400">Cyan</span> para interacciones
                clave.
              </p>
            </div>

            {/* Tarjeta de Tipografía */}
            <div className="rounded-xl border border-white/10 bg-zinc-950 p-4 transition duration-300 hover:-translate-y-1 hover:border-violet-500/30">
              <div className="mb-2 font-sans text-2xl font-bold tracking-tight text-white">
                Aa
              </div>
              <h4 className="text-sm font-semibold text-white">
                Tipografía: Geist
              </h4>
              <p className="mt-1.5 text-xs leading-relaxed text-zinc-500">
                <span className="text-white">Geist</span> garantiza una altísima
                legibilidad en pantallas pequeñas y tablas de datos con mucha
                densidad informativa.
              </p>
            </div>
            <div className="rounded-xl border border-white/10 bg-zinc-950 p-4 transition duration-300 hover:-translate-y-1 hover:border-violet-500/30">
              <h4 className="text-sm font-semibold text-white">
                Inspiración UI/UX
              </h4>
              <p className="mt-1.5 text-xs leading-relaxed text-zinc-500 mb-3">
                Minimalismo elegante y precisión <span className="text-white"> Apple</span>.  <span className="text-white">Vercel</span>. Diseño limpio.
              </p>
              <div className="flex items-center justify-center gap-4">
                <img
                  src="https://wallpapers.com/images/hd/apple-logo-silver-1mjsdirro3dgpg29.jpg"
                  alt="Apple Logo - Inspiración minimalista"
                  className="h-8 w-8 rounded border border-zinc-700 bg-zinc-900 p-1 object-contain transition hover:border-violet-500/50"
                />
                <img
                  src="https://raw.githubusercontent.com/lobehub/lobe-icons/refs/heads/master/packages/static-png/dark/vercel.png"
                  alt="Vercel Logo - Inspiración de velocidad"
                  className="h-8 w-8 rounded border border-zinc-700 bg-zinc-900 p-1 object-contain transition hover:border-violet-500/50"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Bloque 3: Propuesta de Valor para el CLIENTE (NUEVO) */}
      <div className="mt-4 rounded-2xl border border-cyan-500/20 bg-gradient-to-br from-cyan-500/10 to-violet-500/5 p-8 shadow-inner">
        <header className="mb-6 flex items-center gap-3">
          <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-400">
            <svg
              className="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
              ></path>
            </svg>
          </div>
          <h3 className="text-2xl font-bold text-white">
            El Cliente como producto: Propuesta de Valor
          </h3>
        </header>

        <p className="mb-6 text-sm leading-relaxed text-zinc-300 md:text-base">
          Fitrail no es solo una herramienta de administración interna. Es un
          producto enfocado en empoderar al usuario final, otorgándole{" "}
          <strong className="text-white">
            autonomía, privacidad y acceso en tiempo real
          </strong>{" "}
          a su actividad física.
        </p>

        <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
          {/* Autonomía */}
          <div className="border-l-2 border-cyan-400 pl-4">
            <h4 className="mb-2 font-semibold text-white">Autogestión</h4>
            <p className="text-sm leading-relaxed text-zinc-400">
              El cliente tiene control total de sus operaciones comerciales.
              Puede comprar o renovar planes de forma autónoma gracias a la
              pasarela segura de{" "}
              <strong className="text-cyan-300">Stripe</strong>, y gestionar las
              reservas de sus clases desde el móvil sin depender de recepción.
            </p>
          </div>

          {/* Atención */}
          <div className="border-l-2 border-violet-400 pl-4">
            <h4 className="mb-2 font-semibold text-white">
              Asistencia Continua 24/7
            </h4>
            <p className="text-sm leading-relaxed text-zinc-400">
              Rompemos los horarios del gimnasio físico integrando inteligencia
              artificial. El chatbot{" "}
              <strong className="text-violet-300">Dialogflow</strong> asiste al
              cliente de manera inmediata para dudas frecuentes o consultas
              sobre los planes disponibles.
            </p>
          </div>
        </div>
      </div>

      {/* ==========================================
            BLOQUE X: LÓGICA DE NEGOCIO Y FLUJO DE LA APP
            ========================================== */}
      <div className="mt-16 border-t border-white/10 pt-12">
        <header className="mb-8">
          <p className="mb-2 text-sm font-semibold tracking-widest text-amber-400 uppercase">
            Lógica de Negocio
          </p>
          <h2 className="text-3xl font-bold text-white">Flujo de Fitrail</h2>
          <p className="mt-3 max-w-3xl leading-relaxed text-zinc-400">
            Antes de programar, definimos cómo debía funcionar el gimnasio en la
            vida real. La plataforma está diseñada para acompañar al usuario
            desde que entra por la puerta virtual hasta que asiste a su clase,
            conectando las instalaciones, el personal y las membresías en un
            único ciclo automatizado.
          </p>
        </header>

        <div className="relative grid grid-cols-1 gap-8 lg:grid-cols-3">
          {/* Línea conectora de flujo (visible en pantallas grandes) */}
          <div className="absolute top-1/2 right-[10%] left-[10%] -z-10 hidden h-0.5 -translate-y-1/2 transform bg-gradient-to-r from-amber-500/20 via-blue-500/20 to-rose-500/20 lg:block"></div>

          {/* 1. Adquisición (Planes) */}
          <div className="relative flex flex-col rounded-2xl border border-white/5 bg-zinc-950 p-6 shadow-lg">
            <div className="absolute -top-4 -left-4 flex h-8 w-8 items-center justify-center rounded-full bg-amber-500 text-sm font-bold text-black shadow-[0_0_15px_rgba(245,158,11,0.5)]">
              1
            </div>
            <h3 className="mt-2 mb-3 text-center text-lg font-semibold text-white">
              Adquisición y Membresías
            </h3>
            <p className="flex-grow text-center text-sm leading-relaxed text-zinc-400">
              El flujo del cliente comienza con la suscripción. Diseñamos el
              modelo de negocio en torno a <strong>Planes</strong>. Un usuario
              recién registrado no tiene acceso a los servicios del gimnasio
              hasta que adquiere una membresía activa. El sistema guarda su
              historial para que el equipo comercial pueda ofrecerle
              renovaciones o promociones en el futuro.
            </p>
          </div>

          {/* 2. Oferta (Sedes y Entrenadores) */}
          <div className="relative mt-8 flex flex-col rounded-2xl border border-white/5 bg-zinc-950 p-6 shadow-lg lg:mt-0">
            <div className="absolute -top-4 -left-4 flex h-8 w-8 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white shadow-[0_0_15px_rgba(59,130,246,0.5)]">
              2
            </div>
            <h3 className="mt-2 mb-3 text-center text-lg font-semibold text-white">
              Organización de la Oferta
            </h3>
            <p className="flex-grow text-center text-sm leading-relaxed text-zinc-400">
              Para que el cliente tenga clases a las que asistir, el gimnasio
              debe organizar sus recursos. La lógica se divide físicamente por{" "}
              <strong>Sedes</strong>. Cada sede cuenta con un equipo de{" "}
              <strong>Entrenadores</strong>, y son estos profesionales quienes
              diseñan, publican y se hacen responsables de las rutinas y clases
              que se ofrecen cada semana.
            </p>
          </div>

          {/* 3. Consumo (Reservas) */}
          <div className="relative mt-8 flex flex-col rounded-2xl border border-white/5 bg-zinc-950 p-6 shadow-lg lg:mt-0">
            <div className="absolute -top-4 -left-4 flex h-8 w-8 items-center justify-center rounded-full bg-rose-500 text-sm font-bold text-white shadow-[0_0_15px_rgba(244,63,94,0.5)]">
              3
            </div>
            <h3 className="mt-2 mb-3 text-center text-lg font-semibold text-white">
              Consumo y Control de Aforos
            </h3>
            <p className="flex-grow text-center text-sm leading-relaxed text-zinc-400">
              El punto de encuentro entre el cliente y el gimnasio es la{" "}
              <strong>Reserva</strong>. Pensamos este proceso para garantizar
              una experiencia premium: el sistema verifica automáticamente que
              el cliente tenga su plan al día y asegura que la clase no supere
              su aforo máximo, bloqueando la reserva si la sala ya está llena.
            </p>
          </div>
        </div>
      </div>
    </section>
  )
}
