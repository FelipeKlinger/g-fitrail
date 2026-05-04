export function SlideReflexión() {
  return (
    <section id="reflexion" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Reflexión Crítica del Equipo</h2>
      </header>

      <div className="grid grid-cols-2 gap-12">
        <div>
          <h3 className="text-lg font-semibold text-white mb-4">¿Qué nos funcionó muy bien?</h3>
          <ul className="space-y-3">
            <li className="text-zinc-400 flex items-start gap-2">
              <span className="text-violet-400 font-bold">•</span>
              <span>La división de tareas evitó bloqueos; mientras unos hacían BD, otros avanzaban vistas.</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-2">
              <span className="text-violet-400 font-bold">•</span>
              <span>La paleta de colores restringida (Tailwind) aceleró mucho el diseño frontend.</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-2">
              <span className="text-violet-400 font-bold">•</span>
              <span>Usar Contentful le dio un acabado muy profesional al sistema.</span>
            </li>
          </ul>
        </div>

        <div>
          <h3 className="text-lg font-semibold text-white mb-4">¿Qué mejoraríamos en el futuro?</h3>
          <ul className="space-y-3">
            <li className="text-zinc-400 flex items-start gap-2">
              <span className="text-cyan-400 font-bold">•</span>
              <span>Implementar <strong className="text-white">Tests Automatizados</strong> (PHPUnit). La verificación fue manual.</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-2">
              <span className="text-cyan-400 font-bold">•</span>
              <span>Refinar la gestión asíncrona de Stripe mediante Webhooks completos.</span>
            </li>
          </ul>
        </div>
      </div>
    </section>
  )
}
