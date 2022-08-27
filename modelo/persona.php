<?php
require_once 'match.php';
class Persona
{
    public $Id;
    public $ApellidoNombre;
    public $ListMatcheos = array();

    public function GenerarSolicitudDeMatcheo($idPersonaAMatchear)
    {
        //codigo q guarda la solictud en la db
        //ejecuta todas las validaciones

        $p = new Persona();
        $p->ApellidoNombre = 'Escamoso, pedro';
        $p->Id = $idPersonaAMatchear;

        $matchGenerado = new Matcheo();
        $matchGenerado->Id = 1;
        $matchGenerado->Estado = 'No matcheado';
        $matchGenerado->Persona = $p;
        return $matchGenerado;
    }

    public static function getPersona($idPersona)
    {
        //codigo q busca la persona en la db

        $p = new Persona();
        $p->ApellidoNombre = 'Juarez, Alejandro';
        $p->Id = $idPersona;
        return $p;
    }

    public function Agregar()
    {
        //codigo q agrega la persona en la db
        $p = new Persona();
        $p->Id =
            $p->ApellidoNombre = $this->ApellidoNombre;
        return $p;
    }

    public static function BuscarTodasPersonas()
    {
       $listPersonas = array();

       $p1 = new Persona();
       $p1->ApellidoNombre = 'Maradona , Diego';
       $p1->Id = 3;

       $p2 = new Persona();
       $p2->ApellidoNombre = 'Gallardo , Marcelo';
       $p2->Id = 4;
       
       $p3 = new Persona();
       $p3->ApellidoNombre = 'Fernandez , Cristina';
       $p3->Id = 5;
       
       $p4 = new Persona();
       $p4->ApellidoNombre = 'Messi , Lionel';
       $p4->Id = 6;

       $p5 = new Persona();
       $p5->ApellidoNombre = 'Porcel , Jorge';
       $p5->Id = 7;
       
       $listPersonas[] = $p1;
       $listPersonas[] = $p2;
       $listPersonas[] = $p3;
       $listPersonas[] = $p4;
       $listPersonas[] = $p5;
       
       return $listPersonas;
       
       

    }
}
