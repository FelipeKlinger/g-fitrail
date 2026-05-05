import { X } from "lucide-react"
import { cn } from "@/lib/utils"

type SidebarVariant = "desktop" | "mobile"

interface SidebarProps {
  activeSection: string
  className?: string
  variant?: SidebarVariant
  open?: boolean
  onClose?: () => void
  onNavigate?: () => void
}

const sections = [
  { id: "portada", label: "1. Portada" },
  { id: "proposito", label: "2. El Proyecto" },
  { id: "metodologia", label: "3. Trabajo en Equipo" },
  { id: "arquitectura", label: "4. Arquitectura" },
  { id: "apis", label: "5. Integraciones y APIs" },
  { id: "mer", label: "6. Despliegue y Validación" },
  { id: "decisiones", label: "7. Retos y Decisiones" },
  { id: "aportaciones", label: "8. Aportaciones Individuales" },
  { id: "reflexion", label: "9. Reflexión Crítica" },
  { id: "cierre", label: "10. Conclusión" },
]

function SidebarContent({
  activeSection,
  onNavigate,
  showClose,
  onClose,
}: {
  activeSection: string
  onNavigate?: () => void
  showClose?: boolean
  onClose?: () => void
}) {
  return (
    <>
      <div className="mb-6 border-b border-white/10 pb-6">
        <div className="flex items-start justify-between gap-3">
          <div>
            <div className="text-2xl font-bold tracking-tight text-white">
              G-FITRAIL
            </div>
            <p className="mt-1 text-sm font-medium text-violet-300">
              Defensa Módulo 0616
            </p>
          </div>

          {showClose ? (
            <button
              type="button"
              onClick={onClose}
              aria-label="Cerrar menú"
              className="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10"
            >
              <X className="h-5 w-5" />
            </button>
          ) : null}
        </div>
      </div>

      <nav className="flex-1 overflow-y-auto">
        <ul className="space-y-2">
          {sections.map((section) => (
            <li key={section.id}>
              <a
                href={`#${section.id}`}
                onClick={onNavigate}
                className={cn(
                  "block rounded-lg border border-transparent px-4 py-2 text-sm transition-all",
                  activeSection === section.id
                    ? "border-violet-500/30 bg-violet-500/15 font-semibold text-violet-100"
                    : "text-zinc-400 hover:bg-white/3% hover:text-white"
                )}
              >
                {section.label}
              </a>
            </li>
          ))}
        </ul>
      </nav>

      <div className="mt-6 border-t border-white/10 pt-6">
        <span className="inline-block rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs uppercase tracking-wider text-zinc-400">
          Maquinistas - Fitrail
        </span>
      </div>
    </>
  )
}

export function Sidebar({
  activeSection,
  className,
  variant = "desktop",
  open = false,
  onClose,
  onNavigate,
}: SidebarProps) {
  if (variant === "mobile") {
    return (
      <div
        className={cn(
          "fixed inset-0 z-50 lg:hidden",
          open ? "" : "pointer-events-none"
        )}
        aria-hidden={!open}
      >
        <button
          type="button"
          onClick={onClose}
          aria-label="Cerrar menú"
          className={cn(
            "absolute inset-0 bg-black/60",
            open ? "" : "opacity-0"
          )}
        />

        <aside
          className={cn(
            "absolute left-0 top-0 flex h-full w-[280px] max-w-[85vw] flex-col border-r border-white/10 bg-zinc-950/95 px-5 py-6 backdrop-blur-[20px]",
            "transition-transform duration-200",
            open ? "translate-x-0" : "-translate-x-full"
          )}
        >
          <SidebarContent
            activeSection={activeSection}
            onNavigate={onNavigate}
            showClose
            onClose={onClose}
          />
        </aside>
      </div>
    )
  }

  return (
    <aside
      className={cn(
        "sticky top-0 flex h-screen flex-col border-r border-white/10 bg-zinc-950/80 px-5 py-6 backdrop-blur-[20px] xl:px-6 xl:py-8",
        className
      )}
    >
      <SidebarContent activeSection={activeSection} onNavigate={onNavigate} />
    </aside>
  )
}
