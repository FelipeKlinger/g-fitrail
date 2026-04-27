<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Client;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name . " " . $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client'
        ]);

        $user->client()->create([
            'nombre' => $request->name,
            'apellido' => $request->apellido,   
            'email' => $request->email,
            'edad' => null,
            'altura' => null,
            'peso' => null,
            'objetivo' => null,
        ]);

        

        event(new Registered($user));

        Auth::login($user);

        switch ($user->role) {

            case "admin":
                return redirect()->route('admin.dashboard');
            case "client":
                return redirect()->route('clients.paso-2');
            case "entrenador":
                return redirect()->route('entrenadors.dashboard');
        }
        // Fallback por si no tiene rol definido
        return redirect()->route('dashboard');
    }

    /**
     * Cancel registration flow from step 2 and remove user if no plan is assigned.
     */
    public function cancelStepTwo(Request $request): RedirectResponse
    {
        $user = $request->user();

        if (!$user || $user->role !== 'client') {
            return redirect()->route('login');
        }

        $client = $user->client;
        $hasPlan = $client ? $client->plans()->exists() : false;

        if ($hasPlan) {
            return redirect()->route('clients.dashboard')
                ->with('error', 'No puedes cancelar porque ya tienes un plan activo o registrado.');
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $user->delete();

        return redirect()->route('register')
            ->with('status', 'Registro cancelado correctamente.');
    }
}
