export function SlideAportaciones() {
  const members = [
    {
      name: '[Nombre Alumno 1]',
      role: 'Líder Backend y Base de Datos',
      color: 'text-violet-300',
      tasks: ['Diseño del Modelo de Relaciones (MER).', 'Creación de Migraciones y Seeders (SqlDump).', 'Lógica CRUD de Controladores base.'],
    },
    {
      name: '[Nombre Alumno 2]',
      role: 'Líder Frontend y UX',
      color: 'text-violet-300',
      tasks: ['Implementación del diseño oscuro con Tailwind.', 'Integración de layouts dinámicos (Blade).', 'Vistas adaptativas para Dashboards.'],
    },
    {
      name: '[Nombre Alumno 3]',
      role: 'Gestor de Lógica de Negocio',
      color: 'text-violet-300',
      tasks: ['Lógica de control de aforos en Reservas.', 'Sistema de Seguimiento Físico.', 'Control de roles y Middlewares.'],
    },
    {
      name: '[Nombre Alumno 4]',
      role: 'Integraciones Externas (APIs)',
      color: 'text-violet-300',
      tasks: ['Implementación de Checkout con Stripe.', 'Conexión con CMS Contentful.', 'Configuración del Chatbot (Dialogflow).'],
    },
  ]

  return (
    <section id="aportaciones" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Aportaciones Individuales</h2>
      </header>

      <p className="text-zinc-400 mb-8 leading-relaxed">
        Cada integrante asumió el liderazgo de una parcela técnica del proyecto.
      </p>

      <div className="grid grid-cols-2 gap-6">
        {members.map((member, idx) => (
          <div key={idx} className="rounded-2xl border border-white/10 bg-zinc-800 p-6">
            <h4 className={`font-semibold ${member.color} mb-2`}>{member.name}</h4>
            <p className="text-sm text-white font-semibold mb-3">{member.role}</p>
            <ul className="space-y-2 text-sm text-zinc-400">
              {member.tasks.map((task, taskIdx) => (
                <li key={taskIdx} className="flex items-start gap-2">
                  <span className="text-violet-400 font-bold">•</span>
                  <span>{task}</span>
                </li>
              ))}
            </ul>
          </div>
        ))}
      </div>
    </section>
  )
}
