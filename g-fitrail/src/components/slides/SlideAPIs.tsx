export function SlideAPIs() {
  const apis = [
    {
      name: 'Pagos (Stripe)',
      description: 'Gestión de suscripciones y pagos seguros. Utilizamos Webhooks para activar planes en la base de datos tras el pago exitoso.',
      icon: 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/960px-Stripe_Logo%2C_revised_2016.svg.png',
    },
    {
      name: 'CMS (Contentful)',
      description: 'CMS Headless para que la administración del gimnasio pueda cambiar textos e imágenes sin tocar código.',
      icon: 'https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/1/contentful-8lg04b2avylmh700pic73l.png/contentful-m9m0l34hql9xfsr0ejl3gf.png?_a=DATAiZAAZAA0',
    },
    {
      name: 'Chatbot (Dialogflow)',
      description: 'Endpoint conversacional inteligente mediante la API de Google para responder dudas comunes 24/7.',
      icon: 'https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/3/dialogflow-hwo0764xobs2i5fcrkc4ro.png/dialogflow-mwyw8o2b21wa3l53ro3p.png?_a=DATAiZAAZAA0',
    },
  ]

  return (
    <section id="apis" className="rounded-3xl border border-white/10 bg-zinc-900 p-12">
      <header className="mb-8 pb-4 border-b border-white/10">
        <h2 className="text-3xl font-semibold text-white">Integraciones y APIs</h2>
      </header>

      <p className="text-zinc-400 mb-10 leading-relaxed">
        Para no reinventar la rueda en áreas críticas, delegamos responsabilidades a servicios líderes del mercado.
      </p>

      <div className="grid grid-cols-3 gap-6">
        {apis.map((api, idx) => (
          <div
            key={idx}
            className="rounded-2xl border border-white/10 bg-zinc-800 p-6 text-center hover:border-violet-500/30 transition-colors"
          >
            <div className="mb-4 h-16 flex items-center justify-center">
              <img 
                src={api.icon} 
                alt={api.name}
                className="h-full max-w-full object-contain"
              />
            </div>
            <h4 className="font-semibold text-white mb-3">{api.name}</h4>
            <p className="text-sm text-zinc-400">{api.description}</p>
          </div>
        ))}
      </div>
    </section>
  )
}
