<?php

require_once 'modelo/clasePaciente.php';
require_once 'modelo/claseTurno.php';
require_once 'modelo/claseEspecialidad.php';

#Instanciar clase Especialidad
$Especialidad1 = new Especialidad();
$Especialidad1->Id = 1;
$Especialidad1->Description = 'Clinica';

$Especialidad2 = new Especialidad();
$Especialidad2->Id = 2;
$Especialidad2->Description = 'Traumatologia';

#Instanciar clase Turno
$Turno1 = new Turno();
$Turno1->Id = 1;
$Turno1->Fecha = '01-06-2023';
$Turno1->Hora = '17:00';
$Turno1->Medico = 'Armando Rodriguez';
$Turno1->Especialidad = $Especialidad1;

$Turno2 = new Turno();
$Turno2->Id = 2;
$Turno2->Fecha = '01-07-2023';
$Turno2->Hora = '18:00';
$Turno2->Medico = 'Graciela Mendez';
$Turno2->Especialidad = $Especialidad2;

$Pacient = new Paciente();
$Pacient->Id = 1;
$Pacient->Nombre = 'Alberto';
$Pacient->Apellido = 'Juarez';
$Pacient->Documento = '12123456';
$Pacient->Edad = $_GET['edad'];
$Pacient->Email = 'aj@gmail.com';
$Pacient->ListTurnos[] = $Turno1;
$Pacient->ListTurnos[] = $Turno2;
$Pacient->MostrarDatos();