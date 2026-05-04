export function SlideDatos() {
  return (
    <section id="mer" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Modelo de Datos Transaccional</h2>
      </header>

      <p className="text-zinc-400 mb-8 leading-relaxed">
        El diseño relacional fue la primera piedra angular del proyecto. Separamos la lógica de usuarios genéricos de los perfiles específicos.
      </p>

      <div className="grid grid-cols-2 gap-6">
        <div className="rounded-2xl border-l-4 border-l-violet-500 border border-white/10 bg-zinc-800 p-6">
          <h4 className="font-semibold text-white mb-3">Perfiles (1:1)</h4>
          <p className="text-sm text-zinc-400">
            La tabla <code className="text-violet-300">users</code> maneja la autenticación. De ahí derivamos relaciones 1:1 estables hacia <code className="text-violet-300">clients</code> o <code className="text-violet-300">entrenadors</code>, permitiendo campos específicos sin ensuciar la auth.
          </p>
        </div>

        <div className="rounded-2xl border-l-4 border-l-cyan-500 border border-white/10 bg-zinc-800 p-6">
          <h4 className="font-semibold text-white mb-3">Transacciones (Reservas)</h4>
          <p className="text-sm text-zinc-400">
            La tabla <code className="text-cyan-300">reservas</code> une Clientes con Entrenamientos. Implementamos un trigger por software que altera la "capacidad" del entrenamiento al reservar o cancelar.
          </p>
        </div>
      </div>
    </section>
  )
}
