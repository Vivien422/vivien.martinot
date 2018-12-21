<?php
class Intervention
{
    public $id;
    public $nom;
    public $bureau;
    public $probleme;
    public $description;
    public $date;
    public $etat;

    public function __construct($nom, $bureau, $probleme, $description)
    {
        $this->nom = $nom;
        $this->bureau = $bureau;
        $this->probleme = $probleme;
        $this->description = $description;
        $this->date = date("d/m/Y");
        $this->etat = "en cours";
    }
}