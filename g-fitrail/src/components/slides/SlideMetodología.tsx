export function SlideMetodología() {
  return (
    <section id="metodologia" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Metodología y Trabajo de Equipo</h2>
      </header>

      <p className="text-zinc-400 mb-8 leading-relaxed">
        Al ser un equipo de 4 personas, la coordinación fue el pilar fundamental para no pisarnos el código y avanzar en paralelo.
      </p>

      <div className="grid grid-cols-3 gap-6">
        <div className="rounded-2xl border border-white/10 bg-zinc-800 p-6">
          <h4 className="font-semibold text-white mb-3">División del Trabajo</h4>
          <p className="text-sm text-zinc-400">
            Estructuramos el proyecto en 4 áreas core: Base de datos, Lógica MVC (Controladores), Vistas UI/UX, e Integraciones de terceros.
          </p>
        </div>

        <div className="rounded-2xl border border-white/10 bg-zinc-800 p-6">
          <h4 className="font-semibold text-white mb-3">Control de Versiones</h4>
          <p className="text-sm text-zinc-400">
            Uso estricto de ramas en <strong className="text-white">Git (Feature Branches)</strong>. Nadie subía a <code className="text-violet-300">main</code> sin que otro compañero revisara el código (Pull Requests).
          </p>
        </div>

        <div className="rounded-2xl border border-white/10 bg-zinc-800 p-6">
          <h4 className="font-semibold text-white mb-3">Entorno Homogéneo</h4>
          <p className="text-sm text-zinc-400">
            Implementamos <strong className="text-white">Docker + Makefile</strong>. Así los 4 trabajamos con las mismas versiones de PHP y MySQL.
          </p>
        </div>
      </div>
    </section>
  )
}
