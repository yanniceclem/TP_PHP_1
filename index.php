<?php
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;

    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getInfos() {
        return "marque : {$this->marque} modele : {$this->modele} date de sorti : {$this->annee}.<br>";
    }

    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;

    public function __construct($nombrePortes, $typeCarburant) {
        parent::__construct();
    }

}