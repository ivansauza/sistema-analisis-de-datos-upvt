<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Modulo Periodos
         */
        Permission::create([
            'name'        => 'Navegar periodos', 
            'slug'        => 'periodos.index', 
            'description' => 'Lista y navegar todos los periodos del sistema.'
        ]);

        Permission::create([
            'name'        => 'Ver detalle del periodo', 
            'slug'        => 'periodos.show', 
            'description' => 'Ver en detalle cada periodo del sistema.'
        ]);

        Permission::create([
            'name'        => 'Creación de periodos', 
            'slug'        => 'periodos.create', 
            'description' => 'Crear periodos en el sistema.'
        ]);

        Permission::create([
            'name'        => 'Edición de periodos', 
            'slug'        => 'periodos.edit', 
            'description' => 'Editar cualquier dato de un periodo del sistema.'
        ]);

        Permission::create([
            'name'        => 'Eliminar periodos', 
            'slug'        => 'periodos.destroy', 
            'description' => 'Eliminar cualquier periodo del sistema.'
        ]);

        /**
         * Modulo Preguntas
         */
        Permission::create([
            'name'        => 'Navegar preguntas', 
            'slug'        => 'preguntas.index', 
            'description' => 'Lista y navegar todas las preguntas del sistema.'
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la pregunta', 
            'slug'        => 'preguntas.show', 
            'description' => 'Ver en detalle cada pregunta del sistema.'
        ]);

        Permission::create([
            'name'        => 'Creación de preguntas', 
            'slug'        => 'preguntas.create', 
            'description' => 'Crear preguntas en el sistema.'
        ]);

        Permission::create([
            'name'        => 'Edición de preguntas', 
            'slug'        => 'preguntas.edit', 
            'description' => 'Editar cualquier dato de un pregunta del sistema.'
        ]);

        Permission::create([
            'name'        => 'Eliminar preguntas', 
            'slug'        => 'preguntas.destroy', 
            'description' => 'Eliminar cualquier pregunta del sistema.'
        ]);

        /**
         * Modulo Encuestas
         */
        Permission::create([
            'name'        => 'Navegar encuestas', 
            'slug'        => 'encuestas.index', 
            'description' => 'Lista y navegar todas las encuestas del sistema.'
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la encuesta', 
            'slug'        => 'encuestas.show', 
            'description' => 'Ver en detalle cada encuesta del sistema.'
        ]);

        Permission::create([
            'name'        => 'Creación de encuestas', 
            'slug'        => 'encuestas.create', 
            'description' => 'Crear encuestas en el sistema.'
        ]);

        Permission::create([
            'name'        => 'Edición de encuestas', 
            'slug'        => 'encuestas.edit', 
            'description' => 'Editar cualquier dato de una encuesta del sistema.'
        ]);

        Permission::create([
            'name'        => 'Eliminar encuestas', 
            'slug'        => 'encuestas.destroy', 
            'description' => 'Eliminar cualquier encuesta del sistema.'
        ]);

        /**
         * Modulo Procesos
         */
        Permission::create([
            'name'        => 'Navegar procesos', 
            'slug'        => 'procesos.index', 
            'description' => 'Lista y navegar todos los procesos del sistema.'
        ]);

        Permission::create([
            'name'        => 'Ver detalle del proceso', 
            'slug'        => 'procesos.show', 
            'description' => 'Ver en detalle cada proceso del sistema.'
        ]);

        Permission::create([
            'name'        => 'Creación de procesos', 
            'slug'        => 'procesos.create', 
            'description' => 'Crear procesos en el sistema.'
        ]);

        Permission::create([
            'name'        => 'Edición de procesos', 
            'slug'        => 'procesos.edit', 
            'description' => 'Editar cualquier dato de un proceso del sistema.'
        ]);

        Permission::create([
            'name'        => 'Eliminar procesos', 
            'slug'        => 'procesos.destroy', 
            'description' => 'Eliminar cualquier proceso del sistema.'
        ]);

        /**
         * Modulo Estadísticas
         */
        Permission::create([
            'name'        => 'Navegar estadísticas', 
            'slug'        => 'estadisticas.index', 
            'description' => 'Lista y navegar todos los estadísticas del sistema.'
        ]);

        Permission::create([
            'name'        => 'Ver detalle de la estadística', 
            'slug'        => 'estadisticas.details', 
            'description' => 'Ver en detalle cada estadística del sistema.'
        ]);     
    }
}
