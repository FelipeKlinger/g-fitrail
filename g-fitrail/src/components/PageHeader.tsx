export function PageHeader() {
  return (
    <header className="mb-10 flex flex-col justify-between gap-8 rounded-3xl border border-white/10 bg-zinc-900 p-6 shadow-2xl sm:p-8 lg:flex-row lg:items-end lg:p-10">
      <div>
        <p className="mb-3 text-xs font-bold tracking-widest text-violet-400 uppercase">
          Plataforma integral de gestión deportiva
        </p>
        <h1 className="mb-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">
          Defensa del Sistema Fitrail
        </h1>
        <p className="max-w-2xl text-base leading-relaxed text-zinc-400">
          Análisis de arquitectura, toma de decisiones y organización del
          desarrollo del MVP por parte del equipo.
        </p>
      </div>

      <div className="flex flex-wrap gap-4">
        <div className="bg-white/3% w-full rounded-lg border border-white/10 px-5 py-4 sm:min-w-40 sm:w-auto">
          <p className="mb-2 text-xs font-semibold text-zinc-400 uppercase">
            Organización
          </p>
          <p className="font-semibold text-white">GitLab</p>
        </div>
        <div className="bg-white/3% w-full rounded-lg border border-white/10 px-5 py-4 sm:min-w-40 sm:w-auto">
          <p className="mb-2 text-xs font-semibold text-zinc-400 uppercase">
            Metodología de trabajo
          </p>
          <p className="font-semibold text-white">Metodología Scrum</p>
        </div>
        <div className="bg-white/3% w-full rounded-lg border border-white/10 px-5 py-4 sm:min-w-40 sm:w-auto">
          <p className="mb-2 text-xs font-semibold text-zinc-400 uppercase">
            Framework
          </p>
          <p className="font-semibold text-white">Laravel 12</p>
        </div>
        <div className="bg-white/3% w-full rounded-lg border border-white/10 px-5 py-4 sm:min-w-40 sm:w-auto">
          <p className="mb-2 text-xs font-semibold text-zinc-400 uppercase">
            Estilos
          </p>
          <p className="font-semibold text-white">Tailwind CSS</p>
        </div>
        <div className="bg-white/3% w-full rounded-lg border border-white/10 px-5 py-4 sm:min-w-40 sm:w-auto">
          <p className="mb-2 text-xs font-semibold text-zinc-400 uppercase">
            Infraestructura
          </p>
          <p className="font-semibold text-white">Docker</p>
        </div>
      </div>
    </header>
  )
}
