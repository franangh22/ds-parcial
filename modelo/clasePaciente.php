<?php

class Paciente
{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Documento;
    public $Edad;
    public $Email;
    public $ListTurnos = array();

    public function MostrarDatos()
    {
        echo '<hr>';
        echo '<--- PACIENTE ---> <br>';
        echo '-ID: ' . $this->Id . '<br>';
        echo '-Nombre: ' . $this->Nombre . '<br>';
        echo '-Apellido: ' . $this->Apellido . '<br>';
        echo '-Documento: ' . $this->Documento . '<br>';
        echo '-Edad: ' . $this->Edad . '<br>';
        echo '-Email: ' . $this->Email . '<br>';

        //COMPARAR EDAD CON IF

        if ($this->Edad >= 0 && $this->Edad <= 17) {
            echo '-es menor de edad';
        } elseif ($this->Edad >= 18 && $this->Edad <= 74) {
            echo '-es mayor de edad';
        } elseif ($this->Edad >= 75) {
            echo '-Paciente de la tercera edad';
        }elseif ($this->Edad == $_GET['edad']) {
            echo 'Edad indicada correctamente!';
        }

        //FIN SENTENCIA

        echo '<hr>';
        echo '<--- Lista Turnos ---> <br>';
        foreach ($this->ListTurnos as $t1) {
            echo '-ID: ' . $t1->Id . '<br>';
            echo '-Fecha: ' . $t1->Fecha . '<br>';
            echo '-Hora: ' . $t1->Hora . '<br>';
            echo '-Medico: ' . $t1->Medico . '<br>';
            echo '----Especialidad <br>';
            echo '--ID: ' . $t1->Especialidad->Id . '<br>';
            echo '--Descripcion: ' . $t1->Especialidad->Description . '<br> <hr>';
        }

    }

}