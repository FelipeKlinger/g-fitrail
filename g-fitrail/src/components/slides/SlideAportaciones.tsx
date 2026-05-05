export function SlideAportaciones() {
const members = [
    {
      name: 'Felipe Klinger',
      role: 'Arquitectura de Sistema y Seguridad',
      color: 'text-violet-300',
      tasks: [
        'Planificación del modelo relacional (MER) y control de migraciones.',
        'Definición de políticas de acceso y roles (Middlewares).',
        'Gestión y orquestación de servicios externos (Stripe, Contentful).'
      ],
    },
    {
      name: 'Andrés Iordachiusi y Felipe Klinger',
      role: 'Líder de UX y Flujos Funcionales',
      color: 'text-cyan-300',
      tasks: [
        'Estandarización de la usabilidad y diseño del sistema.',
        'Planificación de la navegación y dashboards por tipo de usuario.',
        'Supervisión y resolución de conflictos de versiones en UI.'
      ],
    },
    {
      name: 'Daniel Massó y Felipe Klinger',
      role: 'Control de Calidad (QA) y Validaciones',
      color: 'text-emerald-300',
      tasks: [
        'Testeo de los flujos de autenticación (Breeze) y casos de uso.',
        'Validación funcional de las restricciones de rutas y accesibilidad.',
        'Pruebas de estrés en reservas y asignación de entrenadores.'
      ],
    },
    {
      name: 'Daniel Massó, Óscar Ruiz y Andrés Iordachiusi',
      role: 'Documentación Técnica y Auditoría',
      color: 'text-orange-300',
      tasks: [
        'Redacción de informes de validación y actas de seguimiento.',
        'Gestión de Revisiones Cruzadas (Code Reviews de otros proyectos).',
        'Planificación de métricas operativas (Dashboard Admin).'
      ],
    }
  ];

  return (
    <section
      id="aportaciones"
      className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12"
    >
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Aportaciones Individuales</h2>
      </header>

      <p className="text-zinc-400 mb-8 leading-relaxed">
        Cada integrante asumió el liderazgo de una parcela técnica del proyecto.
      </p>

      <div className="grid grid-cols-1 gap-6 md:grid-cols-2">
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
