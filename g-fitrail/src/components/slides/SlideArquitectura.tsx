import ArquitecturaImg from './ArquitecturaDiagramaFitrail.png'

export function SlideArquitectura() {
  return (
    <section id="arquitectura" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Arquitectura del Sistema</h2>
      </header>

      <div className="mb-8 rounded-xl border border-white/10 bg-zinc-800 p-8 text-center">
        <img 
          src={ArquitecturaImg} 
          alt="Arquitectura de Fitrail"
          className="max-w-full h-auto mx-auto rounded-3xl"
        />
      </div>

      <div className="grid grid-cols-2 gap-12">
        <div>
          <h3 className="text-xl font-semibold text-white mb-4">Patrón MVC y Seguridad</h3>
          <p className="text-zinc-400 leading-relaxed">
            Desarrollado sobre Laravel 12. La seguridad se gestiona a través de <strong className="text-white">Middlewares</strong> que interceptan las peticiones y redirigen según el rol (Admin, Client, Entrenador).
          </p>
        </div>

        <div>
          <h3 className="text-xl font-semibold text-white mb-4">Frontend Utilitario</h3>
          <p className="text-zinc-400 leading-relaxed">
            Uso intensivo de <strong className="text-white">Tailwind CSS</strong> para mantener un diseño oscuro y coherente, junto con Alpine.js para reactividad ligera.
          </p>
        </div>
      </div>
    </section>
  )
}
