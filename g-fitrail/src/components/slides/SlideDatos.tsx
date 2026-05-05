export function SlideDatos() {
  return (
    <section
      id="mer"
      className="rounded-3xl border border-white/10 bg-zinc-900 p-8 md:p-12"
    >
          <header className="mb-8">
            <p className="text-sm font-semibold tracking-widest text-emerald-400 uppercase mb-2">
              Despliegue y Validación 
            </p>
            <h2 className="text-3xl font-bold text-white">Despliegue y Validación End-to-End</h2>
            <p className="mt-3 text-zinc-400 max-w-3xl leading-relaxed">
              El desarrollo no concluye en el entorno local. Para certificar que Fitrail es un producto viable, ejecutamos una fase final de despliegue en la nube y sometimos el sistema a una estricta auditoría de flujos críticos.
            </p>
          </header>

          <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            {/* 1. Infraestructura de Producción */}
            <div className="rounded-2xl border border-white/5 bg-zinc-950 p-6 flex flex-col transition hover:border-emerald-500/30 shadow-lg">
              <div className="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
              </div>
              <h3 className="text-lg font-semibold text-white mb-3">Despliegue Cloud (VPS)</h3>
              <p className="text-sm text-zinc-400 leading-relaxed flex-grow">
                Migramos la aplicación a un entorno real aprovisionando una instancia VPS en Oracle Cloud Infrastructure. Esto nos permitió testear el rendimiento bajo condiciones de red reales, garantizando alta disponibilidad.
              </p>
              <div className="mt-4 border-t border-white/10 pt-4">
                <p className="text-xs text-zinc-500">
                  <strong className="text-zinc-300">Seguridad perimetral:</strong> Exponemos el servicio mediante <em className="text-emerald-300">Cloudflare Tunnels</em>, obteniendo HTTPS público sin necesidad de abrir puertos directos en el servidor.
                </p>
              </div>
            </div>

            {/* 2. Pruebas de Flujo (End-to-End) */}
            <div className="rounded-2xl border border-white/5 bg-zinc-950 p-6 flex flex-col transition hover:border-cyan-500/30 shadow-lg">
              <div className="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-400">
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <h3 className="text-lg font-semibold text-white mb-3">Auditoría End-to-End</h3>
              <p className="text-sm text-zinc-400 leading-relaxed flex-grow">
                En lugar de probar fragmentos de código, auditamos el "viaje del usuario" completo. Validamos el flujo exacto: registro público ➔ redirección obligatoria a Stripe ➔ pago exitoso ➔ acceso al dashboard con plan activo ➔ creación de reserva.
              </p>
              <div className="mt-4 border-t border-white/10 pt-4">
                <p className="text-xs text-zinc-500">
                  <strong className="text-zinc-300">APIs en Producción:</strong> Verificamos que Dialogflow operara fuera del modo "sandbox" y que Contentful inyectara los datos dinámicos correctamente en la web pública.
                </p>
              </div>
            </div>

            {/* 3. Pruebas de Resiliencia y UI */}
            <div className="rounded-2xl border border-white/5 bg-zinc-950 p-6 flex flex-col transition hover:border-violet-500/30 shadow-lg">
              <div className="mb-4 inline-flex h-10 w-10 items-center justify-center rounded-lg bg-violet-500/20 text-violet-400">
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
              </div>
              <h3 className="text-lg font-semibold text-white mb-3">Resiliencia y Accesibilidad</h3>
              <p className="text-sm text-zinc-400 leading-relaxed flex-grow">
                Forzamos fallos intencionados para validar la robustez. Simulamos accesos a URLs prohibidas (validando respuestas 403 controladas) y cancelaciones de pago abruptas para certificar que la integridad de la base de datos no se corrompía.
              </p>
              <div className="mt-4 border-t border-white/10 pt-4">
                <p className="text-xs text-zinc-500">
                  <strong className="text-zinc-300">Validación de Interfaz:</strong> Comprobamos el comportamiento responsive (Tailwind CSS) y las animaciones (GSAP) en múltiples dispositivos móviles para asegurar cero pérdida de usabilidad.
                </p>
              </div>
            </div>

          </div>

          {/* Banner Opcional para mostrar que la app es funcional */}
          <div className="mt-8 rounded-xl bg-gradient-to-r from-emerald-500/10 to-transparent border border-emerald-500/20 p-5 flex items-center justify-between">
            <div className="flex items-center gap-4">
              <div className="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></div>
              <p className="text-sm text-emerald-100 font-medium">Estado del MVP: Validado y listo para producción.</p>
            </div>
            <p className="text-xs text-zinc-400 hidden sm:block">Arquitectura, flujos y seguridad certificados.</p>
          </div>
    </section>
  )
}
