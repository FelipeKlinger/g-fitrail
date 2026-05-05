import { useEffect, useState } from "react"
import { Menu } from "lucide-react"
import { Sidebar } from "@/components/Sidebar"
import { PageHeader } from "@/components/PageHeader"
import { SlidePropósito } from "@/components/slides/SlidePropósito"
import { SlideMetodología } from "@/components/slides/SlideMetodología"
import { SlideArquitectura } from "@/components/slides/SlideArquitectura"
import { SlideAPIs } from "@/components/slides/SlideAPIs"
import { SlideDatos } from "@/components/slides/SlideDatos"
import { SlideDecisiones } from "@/components/slides/SlideDecisiones"
import { SlideAportaciones } from "@/components/slides/SlideAportaciones"
import { SlideReflexión } from "@/components/slides/SlideReflexión"
import { SlideCierre } from "@/components/slides/SlideCierre"
import { ParticleHero } from "./components/particle-hero"

export function App() {
  const [activeSection, setActiveSection] = useState("portada")
  const [mobileNavOpen, setMobileNavOpen] = useState(false)

  useEffect(() => {
    const handleScroll = () => {
      const sections = [
        "portada",
        "proposito",
        "metodologia",
        "arquitectura",
        "apis",
        "mer",
        "decisiones",
        "aportaciones",
        "reflexion",
        "cierre",
      ]
      const top = window.scrollY + 150

      for (const section of sections) {
        const element = document.getElementById(section)
        if (element && element.offsetTop <= top) {
          setActiveSection(section)
        }
      }
    }

    window.addEventListener("scroll", handleScroll)
    return () => window.removeEventListener("scroll", handleScroll)
  }, [])

  useEffect(() => {
    if (!mobileNavOpen) {
      document.body.style.overflow = ""
      return
    }

    document.body.style.overflow = "hidden"

    const handleKeyDown = (event: KeyboardEvent) => {
      if (event.key === "Escape") {
        setMobileNavOpen(false)
      }
    }

    window.addEventListener("keydown", handleKeyDown)
    return () => {
      document.body.style.overflow = ""
      window.removeEventListener("keydown", handleKeyDown)
    }
  }, [mobileNavOpen])

  useEffect(() => {
    const handleKeydown = (e: KeyboardEvent) => {
      const sections = [
        "portada",
        "proposito",
        "metodologia",
        "arquitectura",
        "apis",
        "mer",
        "decisiones",
        "aportaciones",
        "reflexion",
        "cierre",
      ]
      const currentIdx = sections.indexOf(activeSection)
      let nextIdx = currentIdx

      if (e.key === "ArrowDown" || e.key === "PageDown") {
        e.preventDefault()
        nextIdx = Math.min(currentIdx + 1, sections.length - 1)
      } else if (e.key === "ArrowUp" || e.key === "PageUp") {
        e.preventDefault()
        nextIdx = Math.max(currentIdx - 1, 0)
      }

      if (nextIdx !== currentIdx) {
        const element = document.getElementById(sections[nextIdx])
        element?.scrollIntoView({ behavior: "smooth" })
      }
    }

    window.addEventListener("keydown", handleKeydown)
    return () => window.removeEventListener("keydown", handleKeydown)
  }, [activeSection])

  return (
    <div className="min-h-screen bg-zinc-950 lg:grid lg:grid-cols-[240px_1fr] xl:grid-cols-[280px_1fr]">
      {/* Efectos ambientales */}
      <div className="pointer-events-none fixed top-[-10%] left-[-5%] z-0 h-[400px] w-[400px] rounded-full bg-violet-500/15 blur-[100px]" />
      <div className="pointer-events-none fixed right-[-5%] bottom-[-10%] z-0 h-[450px] w-[450px] rounded-full bg-fuchsia-500/10 blur-[100px]" />

      <Sidebar activeSection={activeSection} className="hidden lg:flex" />
      <Sidebar
        activeSection={activeSection}
        variant="mobile"
        open={mobileNavOpen}
        onClose={() => setMobileNavOpen(false)}
        onNavigate={() => setMobileNavOpen(false)}
      />

      <main className="relative z-10 space-y-8 overflow-y-auto px-4 py-6 sm:px-8 sm:py-8 lg:px-10 lg:py-10 xl:px-16">
        <div className="sticky top-0 z-20 -mx-4 flex items-center gap-3 border-b border-white/10 bg-zinc-950/70 px-4 py-3 backdrop-blur sm:-mx-8 sm:px-8 lg:hidden">
          <button
            type="button"
            onClick={() => setMobileNavOpen(true)}
            aria-label="Abrir menú"
            className="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/5 text-zinc-200 hover:bg-white/10"
          >
            <Menu className="h-5 w-5" />
          </button>
          <div className="text-sm font-semibold text-white tracking-tight">
            G-FITRAIL
          </div>
        </div>
        <PageHeader />

        <div className="space-y-8 pb-20">
          <section id="portada">
            <ParticleHero />
          </section>
          <SlidePropósito />
          <SlideMetodología />
          <SlideArquitectura />
          <SlideAPIs />
          <SlideDatos />
          <SlideDecisiones />
          <SlideAportaciones />
          <SlideReflexión />
          <SlideCierre />
        </div>
      </main>
    </div>
  )
}

export default App
