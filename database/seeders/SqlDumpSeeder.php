<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SqlDumpSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        DB::table('users')->insert([
            ['id'=>1,'name'=>'Admin','email'=>'admin@fitrail.com','email_verified_at'=>null,'password'=>'$2y$12$GK.wjEY99RTopuk2HqfgT.ebUcJ/LbPbTWv7wm/itwpxe0d/pd4ra','role'=>'admin','remember_token'=>null,'created_at'=>'2026-03-20 12:27:03','updated_at'=>'2026-03-20 12:27:03'],
            ['id'=>2,'name'=>'Laura Villa','email'=>'laura@gmail.com','email_verified_at'=>null,'password'=>'$2y$12$Ak8q/1WnidPeo7BheTJwbu88kzOC7fnI3tYPBnRPDK.U1WbJKOmO2','role'=>'client','remember_token'=>null,'created_at'=>'2026-03-20 12:28:05','updated_at'=>'2026-03-20 12:28:05'],
            ['id'=>3,'name'=>'Marta Lopez','email'=>'marta@gmail.com','email_verified_at'=>null,'password'=>'$2y$12$8GNdikz8akPUPLCZRy1knusyzcJ9FHvt/XXXPr/9gpglDP.oRoioy','role'=>'entrenador','remember_token'=>null,'created_at'=>'2026-03-20 12:31:13','updated_at'=>'2026-03-20 12:31:13'],
            ['id'=>4,'name'=>'David Martinez','email'=>'david@gmail.com','email_verified_at'=>null,'password'=>'$2y$12$Ksgi9Ex7MnK.4umcRnFqv.IFFz4kQTgGg/g55O9AbFdZD4ckveyia','role'=>'entrenador','remember_token'=>null,'created_at'=>'2026-03-20 12:32:08','updated_at'=>'2026-03-20 12:32:08'],
            ['id'=>5,'name'=>'Emiliano Martinez','email'=>'emiliano@gmail.com','email_verified_at'=>null,'password'=>'$2y$12$HTVAQ8tjf7.KOfCH5t0ibOVqGfXfTck.tMUdpphJTMETrVPKD02pG','role'=>'entrenador','remember_token'=>null,'created_at'=>'2026-03-20 12:32:53','updated_at'=>'2026-03-20 12:32:53'],
        ]);

        // Sedes
        DB::table('sedes')->insert([
            ['id'=>1,'direccion'=>'Calle de Ramon 13','telefono'=>'640182058','ciudad'=>'Tarragona','horario_apertura'=>'07:00:00','horario_cierre'=>'23:00:00','created_at'=>'2026-03-20 12:29:37','updated_at'=>'2026-03-20 12:29:37'],
            ['id'=>2,'direccion'=>'Calle de Hospital Cruz 12','telefono'=>'640528877','ciudad'=>'Tarragona','horario_apertura'=>'07:00:00','horario_cierre'=>'23:00:00','created_at'=>'2026-03-20 12:30:24','updated_at'=>'2026-03-20 12:30:24'],
        ]);

        // Plans
        DB::table('plans')->insert([
            ['id'=>1,'nombre'=>'Plan Básico','descripcion'=>'Incluye acceso a sala fitness + 2 clases semanales','precio'=>'29.99','created_at'=>'2026-03-20 12:36:31','updated_at'=>'2026-03-20 12:36:31'],
            ['id'=>2,'nombre'=>'Plan Premium','descripcion'=>'Acceso total + clases ilimitadas + entrenador','precio'=>'59.99','created_at'=>'2026-03-20 12:36:47','updated_at'=>'2026-03-20 12:36:47'],
            ['id'=>3,'nombre'=>'Plan Pro','descripcion'=>'Todo incluido + seguimiento personalizado','precio'=>'79.99','created_at'=>'2026-03-20 12:37:01','updated_at'=>'2026-03-20 12:37:01'],
        ]);

        // Clients
        DB::table('clients')->insert([
            ['id'=>1,'nombre'=>'Laura','apellido'=>'Villa','email'=>'laura@gmail.com','edad'=>null,'altura'=>null,'peso'=>null,'objetivo'=>null,'user_id'=>2,'created_at'=>'2026-03-20 12:28:05','updated_at'=>'2026-03-20 12:28:05'],
        ]);

        // Entrenadors
        DB::table('entrenadors')->insert([
            ['id'=>1,'nombre'=>'Marta','apellido'=>'Lopez','email'=>'marta@gmail.com','telefono'=>640187899,'direccion'=>'Calle Fitness 1','especialidad'=>'Funcional','sede_id'=>1,'user_id'=>3,'created_at'=>'2026-03-20 12:31:13','updated_at'=>'2026-03-20 12:31:13'],
            ['id'=>2,'nombre'=>'David','apellido'=>'Martinez','email'=>'david@gmail.com','telefono'=>640784736,'direccion'=>'Calle San Juan 15','especialidad'=>'Musculación','sede_id'=>2,'user_id'=>4,'created_at'=>'2026-03-20 12:32:08','updated_at'=>'2026-03-20 12:32:08'],
            ['id'=>3,'nombre'=>'Emiliano','apellido'=>'Martinez','email'=>'emiliano@gmail.com','telefono'=>640441287,'direccion'=>'Calle River 13','especialidad'=>'Rehabilitación','sede_id'=>1,'user_id'=>5,'created_at'=>'2026-03-20 12:32:53','updated_at'=>'2026-03-20 12:32:53'],
        ]);

        // Entrenamientos
        DB::table('entrenamientos')->insert([
            ['id'=>1,'nombre'=>'HIIT Intenso','descripcion'=>'Alta intensidad para quemar grasa','capacidad'=>10,'fecha_inicio'=>'2026-03-28 15:00:00','fecha_fin'=>'2026-03-28 17:00:00','entrenador_id'=>1,'created_at'=>'2026-03-20 12:34:03','updated_at'=>'2026-03-20 12:37:59'],
            ['id'=>2,'nombre'=>'Full Body Funcional','descripcion'=>'Entrenamiento completo del cuerpo','capacidad'=>15,'fecha_inicio'=>'2026-03-01 10:00:00','fecha_fin'=>'2026-03-01 12:30:00','entrenador_id'=>3,'created_at'=>'2026-03-20 12:34:47','updated_at'=>'2026-03-20 12:38:49'],
            ['id'=>3,'nombre'=>'Press Banca intenso','descripcion'=>'Levantamiento de pesas para Hipertrofiar el Cerebro.','capacidad'=>5,'fecha_inicio'=>'2026-06-25 13:25:00','fecha_fin'=>'2026-06-25 16:00:00','entrenador_id'=>2,'created_at'=>'2026-03-20 12:35:54','updated_at'=>'2026-03-20 12:35:54'],
        ]);

        // Sessions (one sample row)
        DB::table('sessions')->insert([
            ['id'=>'lE4swAPYhRAWjUd0RYeluf357A04xjPiGNvKDzjg','user_id'=>null,'ip_address'=>'10.168.162.106','user_agent'=>'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36','payload'=>'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRU40Q2djZkdReVVNV1RhRDZOc3pLalE2UGYxRXhOWWJUVFdvUGFVSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovLzEwLjE2OC4xNjIuMTA4OjgwMDEiO31zOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czozMjoiaHR0cDovLzEwLjE2OC4xNjIuMTA4OjgwMDEvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO319','last_activity'=>1774010686],
        ]);
    }
}
