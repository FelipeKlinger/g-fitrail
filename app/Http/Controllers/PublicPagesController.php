<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use App\Models\Entrenamiento;
use App\Models\Plan;
use App\Models\Sede;
use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function planes()
    {
        $planes = Plan::orderBy('precio')->get();

        return view('public.planes', compact('planes'));
    }

    public function clases()
    {
        $entrenamientos = Entrenamiento::with('entrenador')->orderBy('fecha_inicio')->get();

        return view('public.clases', compact('entrenamientos'));
    }

    public function entrenadores()
    {
        $entrenadores = Entrenador::with('sede')->orderBy('nombre')->get();

        return view('public.entrenadores', compact('entrenadores'));
    }

    public function sedes()
    {
        $sedes = Sede::orderBy('ciudad')->get();

        return view('public.sedes', compact('sedes'));
    }

    public function contacto()
    {
        $sedes = Sede::orderBy('ciudad')->get();

        return view('public.contacto', compact('sedes'));
    }

    public function enviarContacto(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'telefono' => ['nullable', 'string', 'max:40'],
            'mensaje' => ['required', 'string', 'max:1000'],
        ]);

        return back()->with([
            'contacto_enviado' => true,
            'contacto_nombre' => $validated['nombre'],
        ]);
    }

    public function faq()
    {
        $faqs = [
            [
                'pregunta' => '¿Puedo probar una clase antes de elegir un plan?',
                'respuesta' => 'Sí, puedes solicitar una clase de prueba en la sede que prefieras y un coach te guiará.',
            ],
            [
                'pregunta' => '¿Qué incluye el plan premium?',
                'respuesta' => 'Acceso total, clases ilimitadas y acompañamiento de un entrenador según disponibilidad.',
            ],
            [
                'pregunta' => '¿Hay horarios flexibles?',
                'respuesta' => 'Tenemos horarios ampliados de lunes a domingo. Revisa cada sede para ver su franja exacta.',
            ],
            [
                'pregunta' => '¿Puedo cambiar de sede?',
                'respuesta' => 'Claro, puedes entrenar en cualquier sede disponible. Solo avísanos para coordinar cupos.',
            ],
        ];

        return view('public.faq', compact('faqs'));
    }
}
