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
    </section>
  )
}
