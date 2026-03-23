<x-app-layout>

    {{ auth()->user()->client->nombre ." ". auth()->user()->client->apellido }}

</x-app-layout>