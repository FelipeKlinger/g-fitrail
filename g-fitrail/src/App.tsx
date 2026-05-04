import { useEffect, useState } from "react"
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
    <div className="grid min-h-screen grid-cols-[280px_1fr] gap-0 bg-zinc-950">
      {/* Efectos ambientales */}
      <div className="pointer-events-none fixed top-[-10%] left-[-5%] z-0 h-[400px] w-[400px] rounded-full bg-violet-500/15 blur-[100px]" />
      <div className="pointer-events-none fixed right-[-5%] bottom-[-10%] z-0 h-[450px] w-[450px] rounded-full bg-fuchsia-500/10 blur-[100px]" />

      <Sidebar activeSection={activeSection} />

      <main className="relative z-10 space-y-8 overflow-y-auto px-16 py-10">
        <PageHeader />

        <div className="space-y-8 pb-20">
          <ParticleHero />
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
