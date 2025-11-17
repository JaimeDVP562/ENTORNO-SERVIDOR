<?php

class InstitutoControlador 
{
    private CursoModelo $curso;
    private EstudianteModelo $estudiante;

    // Constructor con la conexion
    public function __construct(CursoModelo $curso, EstudianteModelo $estudiante)
    {
        $this->curso = $curso;
        $this->estudiante = $estudiante;    
    }

    // Coordina todo el proceso automáticamente
    public function ejecutar(): array
    {
        // 1. Crear dos cursos
        $this->curso->agregar('Ciberseguridad');
        $this->curso->agregar('Programación Web');
        $cursos = $this->curso->todos();

        // 2. Insertar dos estudiantes asociados a esos cursos
        $this->estudiante->agregar('Ana Pérez', 20, 1); // 1 = Ciberseguridad
        $this->estudiante->agregar('Luis Gómez', 22, 2); // 2 = Programación Web
        $listaInicial = $this->estudiante->conCurso();

        // 3. Modificar un estudiante
        $this->estudiante->actualizaPorNombre('Ana Pérez', 'Ana Torres', 21, 2); // Cambia nombre, edad y curso
        $listaModificada = $this->estudiante->conCurso();

        // 4. Eliminar otro estudiante
        $this->estudiante->eliminarPorNombre('Luis Gómez');
        $listaFinal = $this->estudiante->conCurso();

        // 5. Devuelve los datos para la vista
        return [
            'cursos' => $cursos,
            'listaInicial' => $listaInicial,
            'listaModificada' => $listaModificada,
            'listaFinal' => $listaFinal
        ];
    }


}
?>