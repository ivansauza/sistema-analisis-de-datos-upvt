<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de alumnos que fueron evaluados en el de Estancias/Estadía', 
        	'nota'        => 'Periodo establecido. (40 días como máximo)', 
        	'desactivar'  => 0, 
        	'posicion'    => 1, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Total de alumnos con carta de terminación de Estancia/Estadía', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 2, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Alumnos que entregan informe quincenal', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 3, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de alumnos en proceso de Estancia/Estadía', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 4, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Numero total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 5, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número total de alumnos tutorados', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 6, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número total de alumnos que cumplieron con el 100% de asesorías', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 7, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número total de alumnos que acreditaron todas sus asignaturas', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 8, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Planes de Cursos Académicos autorizados en los primeros 15 días del cuatrimestre', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 9, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Total de asignaturas de la oferta educativa del cuatrimestre', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 10, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de Cargas Horarias Docentes autorizadas', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 11, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Total de Docentes para el cuatrimestre Autorizadas', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 12, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de alumnos con Dictamen de Cambio de Carrera en los 10 días hábiles', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 13, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Total de alumnos que solicitaron cambio de Cambio de Carrera', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 14, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de Docentes con más del 50% del total de sus cursos con Evaluación Docente satisfactoria', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 15, 
        	'programa_id' => 2, 
        	'role_id'     => 3, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Total de Docentes evaluados', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 16, 
        	'programa_id' => 2, 
        	'role_id'     => 3, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de Docentes Contratados', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 17, 
        	'programa_id' => 2, 
        	'role_id'     => 3, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de Aspirantes Evaluados', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 18, 
        	'programa_id' => 2, 
        	'role_id'     => 3, 
		]);
		
        DB::table('preguntas')->insert([
        	'nombre'      => 'Número de asignaturas que atendieron el 100% del programa de la asignatura', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 19, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Total de alumnos inscritos en el Programa Educativo', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 20, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Expedición de Dictamen oficial de equivalencia de estudios', 
        	'nota'        => 'Días Transcurridos entre la solicitud y la entrega del dictamen', 
        	'desactivar'  => 0, 
        	'posicion'    => 21, 
        	'programa_id' => 2, 
        	'role_id'     => 1, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número total de alumnos asesorados con control de Tutoría', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 22, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número total de alumnos asesorados sin Control de Tutoría', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 23, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número total de alumnos asesorados', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 24, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);

        DB::table('preguntas')->insert([
        	'nombre'      => 'Número Total de Asesorías', 
        	'nota'        => '', 
        	'desactivar'  => 0, 
        	'posicion'    => 25, 
        	'programa_id' => 2, 
        	'role_id'     => 2, 
        ]);
    }
}
