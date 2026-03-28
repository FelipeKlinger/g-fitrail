<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DialogflowController extends Controller
{
    public function handle(Request $request)
    {
        // Verifica que haya un intent detectado
        $intent = $request->input('queryResult.intent.displayName', null);

        if (!$intent) {
            return response()->json([
                'fulfillmentText' => 'No pude entender tu intención 😅'
            ]);
        }

        // Switch simple según intent
        switch ($intent) {
            case 'recomendar_plan':
                $message = 'Te recomiendo el plan premium para ganar músculo 💪';
                break;

            case 'clases_hoy':
                $message = 'Hoy tenemos crossfit a las 18:00 y yoga a las 20:00 🧘';
                break;

            case 'comprar_plan':
                $message = 'Puedes comprar tu plan aquí: https://tuweb.com/pago';
                break;

            default:
                $message = 'No entendí tu pregunta 😅';
        }

        return response()->json([
            'fulfillmentText' => $message
        ]);
    }
}