export function SlidePropósito() {
  return (
    <section id="proposito" className="space-y-12">
      {/* ========== BLOQUE 1: PROPÓSITO Y MARCA ========== */}
      <div className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
        <header className="mb-8 pb-4 border-b border-white/10">
          <p className="text-sm font-semibold tracking-widest text-violet-400 uppercase mb-2">
            Fase de Ideación y Diseño
          </p>
          <h2 className="text-3xl font-bold text-white">Propósito, Visión y Marca</h2>
        </header>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
          {/* Bloque 1.1: Problema y Solución Funcional */}
          <div className="space-y-8">
            <div>
              <h3 className="text-xl font-semibold text-white mb-3 flex items-center gap-3">
                <span className="flex h-8 w-8 items-center justify-center rounded-lg bg-rose-500/20 text-rose-400 text-sm font-bold">1</span>
                El Problema Detectado
              </h3>
              <p className="text-zinc-400 leading-relaxed text-sm md:text-base pl-11">
                Los gimnasios tradicionales sufren de una alta fragmentación: utilizan un software genérico para los cobros, hojas de Excel para aforos y WhatsApp para atención. Esto genera descontrol administrativo y una mala experiencia de usuario.
              </p>
            </div>

            <div>
              <h3 className="text-xl font-semibold text-white mb-3 flex items-center gap-3">
                <span className="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400 text-sm font-bold">2</span>
                La Solución: Fitrail
              </h3>
              <div className="pl-11">
                <p className="text-zinc-400 mb-4 leading-relaxed text-sm md:text-base">
                  Una plataforma web centralizada, diseñada para eliminar la fricción operativa mediante <strong className="text-white font-medium">3 roles clave</strong>:
                </p>
                <ul className="space-y-3">
                  <li className="flex items-start gap-3 text-sm text-zinc-400">
                    <div className="mt-1.5 w-1.5 h-1.5 rounded-full bg-violet-500 shrink-0"></div>
                    <p><strong className="text-white">Administrador:</strong> Panel de métricas, control de sedes y CRUD global.</p>
                  </li>
                  <li className="flex items-start gap-3 text-sm text-zinc-400">
                    <div className="mt-1.5 w-1.5 h-1.5 rounded-full bg-cyan-500 shrink-0"></div>
                    <p><strong className="text-white">Entrenador:</strong> Gestión de su tiempo, clases y seguimiento de los alumnos.</p>
                  </li>
                  <li className="flex items-start gap-3 text-sm text-zinc-400">
                    <div className="mt-1.5 w-1.5 h-1.5 rounded-full bg-orange-500 shrink-0"></div>
                    <p><strong className="text-white">Cliente:</strong> Autonomía total (pagos con Stripe, reservas y evolución).</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          {/* Bloque 1.2: Identidad de Marca y UI/UX */}
          <div className="flex flex-col justify-center space-y-6 rounded-2xl border border-white/5 bg-black/20 p-6 md:p-8">
            <div>
              <h3 className="text-xl font-semibold text-white mb-3 flex items-center gap-3">
                <span className="flex h-8 w-8 items-center justify-center rounded-lg bg-violet-500/20 text-violet-400 text-sm font-bold">3</span>
                Identidad Visual: G-Fitrail
              </h3>
              <p className="text-zinc-400 leading-relaxed text-sm mb-6 pl-11">
                El naming <strong className="text-white">G-Fitrail</strong> surge de unir "Gestión/Gym" con "Trail" (vía o camino), reflejando una ruta guiada hacia los resultados físicos. A nivel de interfaz, huimos de los diseños agresivos (rojos/neones) típicos del fitness, apostando por una estética más tecnológica y limpia.
              </p>
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 pl-11">
              {/* Tarjeta de Colores */}
              <div className="rounded-xl border border-white/10 bg-zinc-950 p-4 transition duration-300 hover:-translate-y-1 hover:border-violet-500/30">
                <div className="flex gap-2 mb-3">
                  <div className="w-5 h-5 rounded bg-[#09090B] border border-zinc-800 shadow-inner"></div>
                  <div className="w-5 h-5 rounded bg-violet-500 shadow-[0_0_10px_rgba(139,92,246,0.4)]"></div>
                  <div className="w-5 h-5 rounded bg-cyan-500 shadow-[0_0_10px_rgba(6,182,212,0.4)]"></div>
                </div>
                <h4 className="text-white text-sm font-semibold">Paleta Dark & Zinc</h4>
                <p className="text-xs text-zinc-500 mt-1.5 leading-relaxed">
                  Fondo <span className="text-zinc-300">Zinc</span> para reducir la fatiga visual en los paneles de control. Acentos en <span className="text-violet-400">Violeta</span> (energía, tecnología) y <span className="text-cyan-400">Cyan</span> para interacciones.
                </p>
              </div>

              {/* Tarjeta de Tipografía */}
              <div className="rounded-xl border border-white/10 bg-zinc-950 p-4 transition duration-300 hover:-translate-y-1 hover:border-violet-500/30">
                <div className="text-2xl font-bold text-white mb-2 font-sans tracking-tight">Aa</div>
                <h4 className="text-white text-sm font-semibold">Tipografía: Geist</h4>
                <p className="text-xs text-zinc-500 mt-1.5 leading-relaxed">
                  Seleccionamos <span className="text-white">Geist</span> por su altísima legibilidad en interfaces de alta densidad de datos. Sus proporciones geométricas garantizan claridad en tablas, calendarios y formularios.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* ========== BLOQUE 2: METODOLOGÍA Y RETOS OPERATIVOS ========== */}
      <div className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
        <header className="mb-8 pb-4 border-b border-white/10">
          <p className="text-sm font-semibold tracking-widest text-cyan-400 uppercase mb-2">
            Gestión del Proyecto
          </p>
          <h2 className="text-3xl font-bold text-white">Metodología y Retos Operativos</h2>
        </header>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          {/* Tarjeta 2.1: Entorno y Herramientas */}
          <div className="rounded-2xl border border-white/10 bg-zinc-900/50 p-6">
            <h4 className="text-lg font-semibold text-white mb-3">1. Estandarización</h4>
            <p className="text-sm text-zinc-400 leading-relaxed mb-3">
              Para evitar el clásico problema de "en mi máquina funciona", unificamos el entorno de los 4 desarrolladores usando contenedores Docker orquestados con un Makefile.
            </p>
            <ul className="text-sm text-zinc-400 space-y-1">
              <li>• PHP 8.4 y Node 20 aislados.</li>
              <li>• Base de datos MySQL centralizada.</li>
            </ul>
          </div>

          {/* Tarjeta 2.2: Flujo de Trabajo */}
          <div className="rounded-2xl border border-white/10 bg-zinc-900/50 p-6">
            <h4 className="text-lg font-semibold text-white mb-3">2. Control de Versiones</h4>
            <p className="text-sm text-zinc-400 leading-relaxed mb-3">
              Gestión ágil mediante GitLab Boards (Backlog, En proceso, Hecho) asegurando la trazabilidad de cada fase.
            </p>
            <p className="text-sm text-zinc-400 leading-relaxed">
              Utilizamos <strong>Feature Branches</strong> para no pisarnos el código. Los conflictos de integración (push/pull) se resolvieron analizando y descartando cambios locales conflictivos a favor de la rama principal.
            </p>
          </div>

          {/* Tarjeta 2.3: Reto de Infraestructura */}
          <div className="rounded-2xl border border-rose-500/20 bg-rose-500/5 p-6 relative overflow-hidden">
            <div className="absolute top-0 right-0 p-3 opacity-20 text-rose-500 font-bold text-4xl">!</div>
            <h4 className="text-lg font-semibold text-rose-300 mb-3">3. El Reto del Makefile</h4>
            <p className="text-sm text-zinc-300 leading-relaxed">
              Durante el desarrollo del backend, detectamos que la receta original del Makefile no soportaba el modo interactivo del contenedor. Esto nos impedía usar Laravel Tinker para la depuración de datos.
            </p>
            <p className="text-sm text-white font-medium mt-3">
              Solución: Reescribimos las reglas del Makefile para permitir la interacción TTY, acelerando el desarrollo.
            </p>
          </div>
        </div>
      </div>

      {/* ========== BLOQUE 3: ARQUITECTURA, SEGURIDAD Y CASOS CRÍTICOS ========== */}
      <div className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
        <header className="mb-8 pb-4 border-b border-white/10">
          <p className="text-sm font-semibold tracking-widest text-emerald-400 uppercase mb-2">
            Arquitectura Interna
          </p>
          <h2 className="text-3xl font-bold text-white">Seguridad y Modelo de Datos</h2>
        </header>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
          {/* Bloque 3.1: Lógica de Negocio y BD */}
          <div className="space-y-6">
            <div className="rounded-2xl border border-white/10 bg-zinc-950 p-6 shadow-lg">
              <h3 className="text-xl font-semibold text-white mb-3">Modelo Transaccional Sólido</h3>
              <p className="text-sm text-zinc-400 leading-relaxed mb-4">
                Evitamos relaciones simplistas. Implementamos una tabla pivote N:M (<code className="text-violet-300 bg-violet-500/10 px-1 rounded">client_plan</code>) porque un usuario puede tener un historial de varios planes a lo largo del tiempo, pero solo uno activo.
              </p>
              <p className="text-sm text-zinc-400 leading-relaxed">
                Para las reservas, aseguramos la integridad referencial restando/sumando aforos directamente en el controlador, evitando clases sobresaturadas.
              </p>
            </div>

            {/* Bloque 3.2: Roles y Middlewares */}
            <div className="rounded-2xl border border-white/10 bg-zinc-950 p-6 shadow-lg">
              <h3 className="text-xl font-semibold text-white mb-3">Defensa en Profundidad (Middlewares)</h3>
              <p className="text-sm text-zinc-400 leading-relaxed mb-4">
                La seguridad no depende de ocultar botones en la vista. Creamos tres barreras en el servidor que leen la BBDD e interceptan peticiones:
              </p>
              <div className="flex gap-2 flex-wrap">
                <span className="text-xs font-semibold px-3 py-1 bg-zinc-800 text-zinc-300 rounded-full border border-zinc-700">IsAdmin</span>
                <span className="text-xs font-semibold px-3 py-1 bg-zinc-800 text-zinc-300 rounded-full border border-zinc-700">IsEntrenador</span>
                <span className="text-xs font-semibold px-3 py-1 bg-zinc-800 text-zinc-300 rounded-full border border-zinc-700">IsClient</span>
              </div>
            </div>
          </div>

          {/* Bloque 3.3: Caso Real de Resolución de Brechas */}
          <div className="rounded-2xl border border-violet-500/30 bg-violet-500/5 p-8 flex flex-col justify-center">
            <h3 className="text-xl font-semibold text-violet-300 mb-4 flex items-center gap-2">
              <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
              Parche Crítico: Flujo de Pagos
            </h3>
            <p className="text-zinc-300 text-sm leading-relaxed mb-4">
              <strong>El problema:</strong> Tras registrarse, un cliente era redirigido a la compra del plan (<code className="text-zinc-400">/paso-2</code>). Descubrimos que forzando la URL o volviendo atrás, el usuario podía entrar al dashboard sin haber pagado.
            </p>
            <p className="text-zinc-300 text-sm leading-relaxed">
              <strong>La decisión técnica:</strong> Diseñamos el middleware <code className="text-emerald-400 bg-emerald-500/10 px-1 rounded">EnsureClientHasPlan</code>. Ahora, el servidor verifica la tabla pivote en cada click; si no hay un pago registrado activo, aborta la petición y lo encierra en un loop hacia la pasarela de pago.
            </p>
          </div>
        </div>
      </div>

      {/* ========== BLOQUE 4: INTEGRACIÓN DE SERVICIOS EXTERNOS ========== */}
      <div className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
        <header className="mb-8 pb-4 border-b border-white/10">
          <p className="text-sm font-semibold tracking-widest text-orange-400 uppercase mb-2">
            Escalabilidad
          </p>
          <h2 className="text-3xl font-bold text-white">Integración de Servicios Externos</h2>
          <p className="mt-3 text-zinc-400 max-w-2xl">
            Decidimos no "reinventar la rueda". Delegamos funcionalidades críticas a plataformas líderes para reducir tiempos de desarrollo, asegurar escalabilidad y garantizar el cumplimiento normativo.
          </p>
        </header>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div className="rounded-2xl border border-white/10 bg-zinc-900/50 p-6 text-center hover:border-orange-500/30 transition">
            <h4 className="text-lg font-bold text-white mb-2">Stripe</h4>
            <p className="text-sm text-zinc-400">
              Pasarela de pagos. Nos permite procesar tarjetas con alta seguridad sin almacenar datos financieros sensibles en nuestra BBDD. Controlamos los fallos enviando al usuario al checkout si cancela el pago.
            </p>
          </div>
          
          <div className="rounded-2xl border border-white/10 bg-zinc-900/50 p-6 text-center hover:border-cyan-500/30 transition">
            <h4 className="text-lg font-bold text-white mb-2">Contentful</h4>
            <p className="text-sm text-zinc-400">
              CMS Headless. La información de planes, entrenamientos y textos de la home llega vía JSON. El administrador del gimnasio puede cambiar la web sin que nosotros toquemos código.
            </p>
          </div>

          <div className="rounded-2xl border border-white/10 bg-zinc-900/50 p-6 text-center hover:border-violet-500/30 transition">
            <h4 className="text-lg font-bold text-white mb-2">Dialogflow</h4>
            <p className="text-sm text-zinc-400">
              Inteligencia artificial. Usado para procesar lenguaje natural y resolver dudas 24/7. Implementamos respuestas "default" para asegurar que el bot no se rompa ante intenciones desconocidas.
            </p>
          </div>
        </div>
      </div>

      {/* ========== BLOQUE 5: REFLEXIÓN Y CODE REVIEW ========== */}
      <div className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
        <header className="mb-8 pb-4 border-b border-white/10">
          <p className="text-sm font-semibold tracking-widest text-fuchsia-400 uppercase mb-2">
            Auditoría y Aprendizaje
          </p>
          <h2 className="text-3xl font-bold text-white">Reflexión Crítica y Code Reviews</h2>
        </header>

        <div className="rounded-3xl bg-gradient-to-br from-zinc-900 to-zinc-950 border border-white/10 p-8 md:p-10">
          <p className="text-zinc-300 leading-relaxed mb-6">
            Durante la Fase 7 y 8, realizamos auditorías cruzadas a los proyectos de otros equipos (como <strong>Tarraco Fitness</strong>). Esto nos aportó dos grandes lecciones que redefinieron nuestra visión sobre la calidad del software:
          </p>
          
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <h4 className="text-lg font-semibold text-fuchsia-300 mb-3 border-b border-fuchsia-500/20 pb-2">1. La fragilidad de la seguridad</h4>
              <p className="text-sm text-zinc-400 leading-relaxed">
                Observamos vulnerabilidades graves: exposición de datos sensibles en claro (PAN y CVV de tarjetas de crédito) y carencia de validación de propiedad de recursos (Ataques BOLA/IDOR donde un cliente podía alterar los datos de otro). 
              </p>
              <p className="text-sm text-white font-medium mt-3">
                Nuestro aprendizaje: Nunca confiar en IDs ocultos en los formularios; la identidad se valida siempre en el backend mediante <code className="bg-zinc-800 px-1 rounded">auth()-&gt;id()</code>.
              </p>
            </div>

            <div>
              <h4 className="text-lg font-semibold text-fuchsia-300 mb-3 border-b border-fuchsia-500/20 pb-2">2. El despliegue como parte del producto</h4>
              <p className="text-sm text-zinc-400 leading-relaxed">
                Notamos que un proyecto puede ser funcional, pero si su archivo <code className="bg-zinc-800 px-1 rounded">README.md</code> y su documentación son dispersos o frágiles en configuración de variables de entorno, el despliegue fracasa.
              </p>
              <p className="text-sm text-white font-medium mt-3">
                Nuestro aprendizaje: Un software no termina cuando compila; termina cuando una tercera persona puede clonarlo, configurarlo, entender su arquitectura y ponerlo en producción sin ambigüedades.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}