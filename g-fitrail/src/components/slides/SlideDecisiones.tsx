export function SlideDecisiones() {
  return (
    <section id="decisiones" className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
      <header className="mb-8 pb-4 border-b border-white/10">
        <p className="text-sm font-semibold tracking-widest text-rose-400 uppercase mb-2">
          Gestión de Incidencias
        </p>
        <h2 className="text-3xl font-bold text-white">Toma de Decisiones y Retos Operativos</h2>
      </header>

      <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">

        {/* Reto 1: Brecha de Seguridad en Registro */}
        <div className="flex gap-5 rounded-2xl border border-white/5 bg-black/20 p-6 transition duration-300 hover:border-rose-500/30 hover:bg-zinc-800/50">
          <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-rose-500/20 text-rose-400 font-bold text-lg shadow-inner">
            1
          </div>
          <div>
            <h4 className="font-semibold text-white mb-2">Brecha Lógica en el Registro</h4>
            <p className="text-sm text-zinc-400 leading-relaxed mb-3">
              <strong className="text-white">El Problema:</strong> Detectamos que un cliente podía registrarse y, forzando la URL o retrocediendo en el navegador, entrar al dashboard sin haber pagado su plan.
            </p>
            <p className="text-sm text-zinc-400 leading-relaxed">
              <strong className="text-emerald-400">La Decisión:</strong> Desarrollamos el middleware <code className="bg-zinc-800 px-1.5 py-0.5 rounded text-zinc-300">EnsureClientHasPlan</code>. Este verifica la tabla pivote en cada petición; si no hay un plan activo, aborta el acceso y lo encierra en un loop hacia la pasarela de pago.
            </p>
          </div>
        </div>

        {/* Reto 2: Consistencia en Transacciones */}
        <div className="flex gap-5 rounded-2xl border border-white/5 bg-black/20 p-6 transition duration-300 hover:border-violet-500/30 hover:bg-zinc-800/50">
          <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-violet-500/20 text-violet-400 font-bold text-lg shadow-inner">
            2
          </div>
          <div>
            <h4 className="font-semibold text-white mb-2">Consistencia de Datos Financieros</h4>
            <p className="text-sm text-zinc-400 leading-relaxed mb-3">
              <strong className="text-white">El Problema:</strong> Evitar que un error del sistema durante el retorno del pago en Stripe dejara a un cliente cobrado pero sin el plan activado en la base de datos.
            </p>
            <p className="text-sm text-zinc-400 leading-relaxed">
              <strong className="text-emerald-400">La Decisión:</strong> Envolvimos la lógica del controlador de pagos en un <code className="bg-zinc-800 px-1.5 py-0.5 rounded text-zinc-300">DB::transaction</code>. Así, la desactivación del plan antiguo y la creación del nuevo solo hacen "commit" si el bloque entero se ejecuta sin fallos.
            </p>
          </div>
        </div>

        {/* Reto 3: Entorno de Desarrollo */}
        <div className="flex gap-5 rounded-2xl border border-white/5 bg-black/20 p-6 transition duration-300 hover:border-cyan-500/30 hover:bg-zinc-800/50">
          <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-400 font-bold text-lg shadow-inner">
            3
          </div>
          <div>
            <h4 className="font-semibold text-white mb-2">Limitaciones del Entorno Local</h4>
            <p className="text-sm text-zinc-400 leading-relaxed mb-3">
              <strong className="text-white">El Problema:</strong> Al iniciar el proyecto, la receta original del Makefile de la infraestructura Docker no soportaba modo interactivo, lo que nos impedía usar Laravel Tinker para la depuración de datos.
            </p>
            <p className="text-sm text-zinc-400 leading-relaxed">
              <strong className="text-emerald-400">La Decisión:</strong> Adaptamos y reescribimos las reglas del Makefile para habilitar el soporte interactivo (TTY) dentro de los contenedores, optimizando drásticamente los tiempos de testeo del equipo.
            </p>
          </div>
        </div>

        {/* Reto 4: Integración de Equipo */}
        <div className="flex gap-5 rounded-2xl border border-white/5 bg-black/20 p-6 transition duration-300 hover:border-orange-500/30 hover:bg-zinc-800/50">
          <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-orange-500/20 text-orange-400 font-bold text-lg shadow-inner">
            4
          </div>
          <div>
            <h4 className="font-semibold text-white mb-2">Conflictos de Integración Continua (Git)</h4>
            <p className="text-sm text-zinc-400 leading-relaxed mb-3">
              <strong className="text-white">El Problema:</strong> Colisiones constantes de código al hacer push/pull entre los 4 desarrolladores cuando tocábamos las mismas vistas o controladores al mismo tiempo.
            </p>
            <p className="text-sm text-zinc-400 leading-relaxed">
              <strong className="text-emerald-400">La Decisión:</strong> Establecimos una política estricta de Feature Branches en GitLab. Ante conflictos severos en local, acordamos descartar los cambios problemáticos locales y refactorizar sobre un pull limpio para proteger la rama Main.
            </p>
          </div>
        </div>

      </div>
    </section>
  )
}