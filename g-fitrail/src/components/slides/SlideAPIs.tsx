export function SlideAPIs() {
  const apis = [
    {
      name: 'Pagos (Stripe)',
      icon: 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/960px-Stripe_Logo%2C_revised_2016.svg.png',
      purpose: 'Gestión de suscripciones y procesamiento seguro de pagos.',
      strategy: 'Decidimos no desarrollar un sistema propio debido a la alta complejidad y los riesgos críticos de seguridad financiera.',
      risks: 'Las transacciones rechazadas o canceladas se redirigen sin afectar la base de datos, usando DB::transaction para asegurar la consistencia.',
      color: 'hover:border-indigo-500/50',
      badge: 'bg-indigo-500/20 text-indigo-300'
    },
    {
      name: 'CMS (Contentful)',
      icon: 'https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/1/contentful-8lg04b2avylmh700pic73l.png/contentful-m9m0l34hql9xfsr0ejl3gf.png?_a=DATAiZAAZAA0',
      purpose: 'CMS Headless para desacoplar el contenido dinámico del frontend.',
      strategy: 'Permite a los administradores actualizar planes y textos sin depender del equipo de desarrollo, facilitando la escalabilidad operativa.',
      risks: 'Contemplamos errores de conexión o IDs inexistentes en la API para garantizar que la aplicación no se rompa si el contenido falla.',
      color: 'hover:border-cyan-500/50',
      badge: 'bg-cyan-500/20 text-cyan-300'
    },
    {
      name: 'Chatbot (Dialogflow)',
      icon: 'https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/3/dialogflow-hwo0764xobs2i5fcrkc4ro.png/dialogflow-mwyw8o2b21wa3l53ro3p.png?_a=DATAiZAAZAA0',
      purpose: 'Atención al cliente 24/7 mediante procesamiento de lenguaje natural.',
      strategy: 'Evita el altísimo coste y complejidad de desarrollar un motor de IA propio, optimizando los recursos de soporte humano del gimnasio.',
      risks: 'Implementamos mensajes de respuesta por defecto (fallbacks) para mantener la coherencia si el bot no detecta la intención del usuario.',
      color: 'hover:border-orange-500/50',
      badge: 'bg-orange-500/20 text-orange-300'
    },
  ]

  return (
    <section
      id="apis"
      className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12 shadow-2xl"
    >
      <header className="mb-8 pb-4 border-b border-white/10">
        <p className="text-sm font-semibold tracking-widest text-blue-400 uppercase mb-2">
          Orquestación de Servicios
        </p>
        <h2 className="text-3xl font-semibold text-white">Integraciones y APIs Externas</h2>
      </header>

      <p className="text-zinc-400 mb-10 leading-relaxed max-w-4xl">
        A nivel de arquitectura y negocio, decidimos no "reinventar la rueda". Para la implementación de soluciones críticas, delegamos responsabilidades a servicios líderes en la nube (SaaS/PaaS). Esto nos permitió reducir tiempos de desarrollo, asegurar la escalabilidad y enfocarnos en la lógica core de Fitrail.
      </p>

      <div className="grid grid-cols-1 gap-8 lg:grid-cols-3">
        {apis.map((api, idx) => (
          <div
            key={idx}
            className={`flex flex-col rounded-2xl border border-white/10 bg-zinc-950 p-6 transition-colors duration-300 ${api.color} shadow-lg`}
          >
            <div className="mb-6 h-14 flex items-center justify-start">
              <img 
                src={api.icon} 
                alt={api.name}
                className="h-full object-contain drop-shadow-md"
              />
            </div>
            
            <h3 className="text-xl font-bold text-white mb-4">{api.name}</h3>
            
            <div className="space-y-4 flex-grow">
              <div>
                <span className={`inline-block px-2 py-1 rounded text-xs font-semibold mb-2 ${api.badge}`}>
                  Propósito
                </span>
                <p className="text-sm text-zinc-400 leading-relaxed">
                  {api.purpose}
                </p>
              </div>

              <div>
                <span className={`inline-block px-2 py-1 rounded text-xs font-semibold mb-2 ${api.badge}`}>
                  Decisión Estratégica
                </span>
                <p className="text-sm text-zinc-400 leading-relaxed">
                  {api.strategy}
                </p>
              </div>

              <div>
                <span className={`inline-block px-2 py-1 rounded text-xs font-semibold mb-2 ${api.badge}`}>
                  Gestión de Riesgos
                </span>
                <p className="text-sm text-zinc-400 leading-relaxed">
                  {api.risks}
                </p>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  )
}