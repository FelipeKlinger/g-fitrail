import { useEffect, useState } from 'react'

interface SidebarProps {
  activeSection: string
}

export function Sidebar({ activeSection }: SidebarProps) {
  const sections = [
    { id: 'portada', label: '1. Portada' },
    { id: 'proposito', label: '2. El Proyecto' },
    { id: 'metodologia', label: '3. Trabajo en Equipo' },
    { id: 'arquitectura', label: '4. Arquitectura' },
    { id: 'apis', label: '5. Integraciones y APIs' },
    { id: 'mer', label: '6. Modelo de Datos' },
    { id: 'decisiones', label: '7. Retos y Decisiones' },
    { id: 'aportaciones', label: '8. Aportaciones Individuales' },
    { id: 'reflexion', label: '9. Reflexión Crítica' },
    { id: 'cierre', label: '10. Conclusión' },
  ]

  return (
    <aside className="sticky top-0 flex h-screen flex-col border-r border-white/10 bg-zinc-950/80 px-6 py-8 backdrop-blur-[20px]">
      <div className="border-b border-white/10 pb-6 mb-6">
        <div className="text-2xl font-bold text-white tracking-tight">G-FITRAIL</div>
        <p className="text-sm font-medium text-violet-300 mt-1">Defensa Módulo 0616</p>
      </div>

      <nav className="flex-1 overflow-y-auto">
        <ul className="space-y-2">
          {sections.map((section) => (
            <li key={section.id}>
              <a
                href={`#${section.id}`}
                className={`block rounded-lg border border-transparent px-4 py-2 text-sm transition-all ${
                  activeSection === section.id
                    ? 'border-violet-500/30 bg-violet-500/15 text-violet-100 font-semibold'
                    : 'text-zinc-400 hover:text-white hover:bg-white/3%'
                }`}
              >
                {section.label}
              </a>
            </li>
          ))}
        </ul>
      </nav>

      <div className="mt-6 pt-6 border-t border-white/10">
        <span className="inline-block rounded-full bg-white/5 border border-white/10 px-3 py-1 text-xs uppercase text-zinc-400 tracking-wider">
            Maquinistas - Fitrail
        </span>
      </div>
    </aside>
  )
}
