export function SlideCierre() {
  return (
    <section
      id="cierre"
      className="flex min-h-[50vh] flex-col items-center justify-center rounded-3xl border border-white/10 bg-zinc-900 p-8 text-center md:p-12"
    >
      <h2 className="mb-6 text-4xl font-bold tracking-tight text-white sm:text-5xl">
        G-Fitrail
      </h2>
      <p className="mb-8 text-xl text-violet-300 sm:text-2xl">
        Gracias por su atención
      </p>
      <p className="mb-12 text-base text-zinc-400 sm:text-lg">
        Abrimos turno de preguntas.
      </p>

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
