export function SlideDecisiones() {
  return (
    <section id="decisiones" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Toma de Decisiones y Retos</h2>
      </header>

      <div className="space-y-6">
        <div className="flex gap-6">
          <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-violet-500/20 text-violet-300 font-bold">
            1
          </div>
          <div>
            <h4 className="font-semibold text-white mb-2">Concurrencia en Reservas</h4>
            <p className="text-sm text-zinc-400">
              <strong className="text-white">El Problema:</strong> Evitar que dos clientes reserven la última plaza a la vez.<br />
              <strong className="text-white">La Solución:</strong> Gestión atómica de la tabla <code className="text-violet-300">Entrenamientos</code>. Cuando se crea una reserva, se decrementa la capacidad; si se cancela, se incrementa.
            </p>
          </div>
        </div>

        <div className="flex gap-6">
          <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-300 font-bold">
            2
          </div>
          <div>
            <h4 className="font-semibold text-white mb-2">Despliegue y Pruebas</h4>
            <p className="text-sm text-zinc-400">
              <strong className="text-white">El Problema:</strong> Testear el Webhook de Stripe en entorno local.<br />
              <strong className="text-white">La Solución:</strong> Utilizamos Cloudflare Tunnels para exponer el servicio local de forma segura mediante HTTPS público.
            </p>
          </div>
        </div>
      </div>
    </section>
  )
}
