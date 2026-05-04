export function SlideCierre() {
  return (
    <section
      id="cierre"
      className="flex min-h-[50vh] flex-col items-center justify-center rounded-3xl border border-white/10 bg-zinc-900 p-12 text-center"
    >
      <h2 className="text-5xl font-bold text-white tracking-tight mb-6">G-Fitrail</h2>
      <p className="text-2xl text-violet-300 mb-8">Gracias por su atención</p>
      <p className="text-lg text-zinc-400 mb-12">Abrimos turno de preguntas.</p>

      <div className="flex flex-wrap justify-center gap-4">
        {['Felipe Klinger', 'Andres Iordachiusi', 'Oscar Ruíz', 'Daniel Masso'].map((name, idx) => (
          <span
            key={idx}
            className="inline-block rounded-full bg-violet-500/15 border border-violet-500/30 px-4 py-2 text-sm font-semibold text-violet-100 uppercase tracking-wider"
          >
            {name}
          </span>
        ))}
      </div>
    </section>
  )
}
