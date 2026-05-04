export function SlideReflexión() {
  return (
    <section id="reflexion" className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl">
      <header className="mb-8 pb-4 border-b border-white/10">
        <p className="text-sm font-semibold tracking-widest text-fuchsia-400 uppercase mb-2">
          Auditoría y Aprendizaje
        </p>
        <h2 className="text-3xl font-bold text-white">Reflexión Crítica del Equipo</h2>
      </header>

      <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">
        {/* Qué funcionó */}
        <div className="rounded-2xl border border-white/5 bg-black/20 p-6 transition hover:border-emerald-500/30">
          <h3 className="text-xl font-semibold text-emerald-400 mb-4 flex items-center gap-2">
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            ¿Qué nos funcionó muy bien?
          </h3>
          <ul className="space-y-4">
            <li className="text-zinc-400 flex items-start gap-3 text-sm">
              <span className="text-emerald-500 mt-1 font-bold">•</span>
              <span><strong>División y Metodología:</strong> El uso estricto de <em>Feature Branches</em> en GitLab y la orquestación del entorno local con Docker evitó bloqueos y el temido "en mi máquina funciona".</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-3 text-sm">
              <span className="text-emerald-500 mt-1 font-bold">•</span>
              <span><strong>Ecosistema de APIs:</strong> Delegar funcionalidades a Stripe, Contentful y Dialogflow redujo drásticamente la complejidad del desarrollo backend y aumentó la calidad percibida.</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-3 text-sm">
              <span className="text-emerald-500 mt-1 font-bold">•</span>
              <span><strong>Diseño Utilitario:</strong> Establecer una paleta estricta en Tailwind (Zinc/Violet) unificó el diseño visual sin necesidad de invertir horas en debates sobre UI.</span>
            </li>
          </ul>
        </div>

        {/* Qué mejorar */}
        <div className="rounded-2xl border border-white/5 bg-black/20 p-6 transition hover:border-orange-500/30">
          <h3 className="text-xl font-semibold text-orange-400 mb-4 flex items-center gap-2">
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            ¿Qué mejoraríamos en el futuro?
          </h3>
          <ul className="space-y-4">
            <li className="text-zinc-400 flex items-start gap-3 text-sm">
              <span className="text-orange-500 mt-1 font-bold">•</span>
              <span><strong>Tests Automatizados:</strong> Depender de validaciones manuales consumió demasiado tiempo; debimos haber implementado <em>PHPUnit</em> para testear rutas críticas desde el principio.</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-3 text-sm">
              <span className="text-orange-500 mt-1 font-bold">•</span>
              <span><strong>Asincronía de Pagos:</strong> Refinar la integración de Stripe utilizando Webhooks completos en el servidor, en lugar de depender únicamente de las redirecciones de éxito/cancelación de la sesión.</span>
            </li>
            <li className="text-zinc-400 flex items-start gap-3 text-sm">
              <span className="text-orange-500 mt-1 font-bold">•</span>
              <span><strong>Privacidad de Datos (RGPD):</strong> Implementar políticas automatizadas de retención y borrado de los datos físicos e históricos, algo que a nivel técnico quedó solo como propuesta.</span>
            </li>
          </ul>
        </div>
      </div>
    </section>
  )
}