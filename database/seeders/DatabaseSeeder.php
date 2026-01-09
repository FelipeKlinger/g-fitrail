<?php
// database/seeders/DatabaseSeeder.php para insertar un cliente de prueba
namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Client::create([
            'nombre' => 'Juan Pérez',
            'email' => 'juan.perez@example.com',
            'edad' => 28,
            'altura' => 1.75,
            'peso' => 75.50,
            'objetivo' => 'ganar masa muscular',
            'password' => Hash::make('password123'),
        ]);
    }
}
