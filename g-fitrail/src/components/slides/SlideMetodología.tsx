export function SlideMetodología() {
  return (
    <section id="metodologia" className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
      <header className="mb-8 pb-4 border-b border-white/10">
        <p className="text-sm font-semibold tracking-widest text-cyan-400 uppercase mb-2">
          Organización y Flujo de Trabajo
        </p>
        <h2 className="text-3xl font-bold text-white">Metodología y Sincronización de Equipo</h2>
        <p className="mt-3 text-zinc-400 max-w-3xl leading-relaxed">
          Coordinar a 4 desarrolladores requirió abandonar la programación improvisada e implementar dinámicas ágiles reales. Nos centramos en la trazabilidad, la comunicación constante y la estandarización técnica.
        </p>
      </header>

      <div className="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {/* 1. Gestión Ágil y GitLab */}
        <div className="rounded-2xl border border-white/5 bg-zinc-950 p-6 flex flex-col transition duration-300 hover:-translate-y-1 hover:border-cyan-500/30 shadow-lg">
          <div className="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-400">
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
          </div>
          <h4 className="text-lg font-semibold text-white mb-3">Trazabilidad en GitLab</h4>
          <p className="text-sm text-zinc-400 leading-relaxed mb-4 flex-grow">
            Estructuramos el trabajo utilizando tableros de GitLab divididos en estados claros: <em className="text-zinc-300">Por hacer (backlog), En proceso y Hecho</em>. 
          </p>
          <div className="mt-auto border-t border-white/10 pt-4">
            <p className="text-xs text-zinc-500">
              <strong className="text-cyan-400">Política de equipo:</strong> Se acordó que cada <code className="bg-zinc-800 px-1 rounded text-zinc-300">push</code> al repositorio debía ir vinculado obligatoriamente a una <em>issue</em> específica del tablero para mantener un histórico limpio.
            </p>
          </div>
        </div>

        {/* 2. Reuniones y Conflictos */}
        <div className="rounded-2xl border border-white/5 bg-zinc-950 p-6 flex flex-col transition duration-300 hover:-translate-y-1 hover:border-violet-500/30 shadow-lg">
          <div className="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-violet-500/20 text-violet-400">
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
          </div>
          <h4 className="text-lg font-semibold text-white mb-3">Seguimiento y Conflictos</h4>
          <p className="text-sm text-zinc-400 leading-relaxed mb-4 flex-grow">
            Implementamos actas de reunión semanales para analizar el cronograma, ajustar estimaciones y detectar cuellos de botella.
          </p>
          <div className="mt-auto border-t border-white/10 pt-4">
            <p className="text-xs text-zinc-500">
              <strong className="text-violet-400">Resolución de bloqueos:</strong> Ante los inevitables conflictos de <em>push/pull</em>, aplicamos una regla estricta: descartar los cambios locales del lado del conflicto para proteger siempre la estabilidad de la rama principal.
            </p>
          </div>
        </div>

        {/* 3. Estandarización de Entorno */}
        <div className="rounded-2xl border border-white/5 bg-zinc-950 p-6 flex flex-col transition duration-300 hover:-translate-y-1 hover:border-emerald-500/30 shadow-lg">
          <div className="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
          </div>
          <h4 className="text-lg font-semibold text-white mb-3">Estandarización del Entorno</h4>
          <p className="text-sm text-zinc-400 leading-relaxed mb-4 flex-grow">
            Eliminamos las dependencias locales aislando toda la infraestructura. Utilizamos contenedores Docker orquestados con un <code className="bg-zinc-800 px-1 rounded text-zinc-300">Makefile</code> personalizado.
          </p>
          <div className="mt-auto border-t border-white/10 pt-4">
            <p className="text-xs text-zinc-500">
              <strong className="text-emerald-400">Stack homologado:</strong> Los 4 integrantes desarrollamos bajo las mismas versiones exactas (PHP 8.4, Node 20 y MySQL) asegurando que el código fuera 100% reproducible en cualquier máquina.
            </p>
          </div>
        </div>

      </div>
    </section>
  )
}