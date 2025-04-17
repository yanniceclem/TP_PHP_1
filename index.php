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

    public function get_marque() {
        return $this->marque = $marque;
    }

    public function get_modele() {
        return $this->modele = $modele;
    }

    public function get_annee() {
        return $this->annee = $annee;
    }

    public function get_infos() {
        return "marque : {$this->marque} modele : {$this->modele} date de sorti : {$this->annee}.<br>";
    }

    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;

    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee); 
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    public function get_marque() {
        return $this->marque = $marque;
    }

    public function get_modele() {
        return $this->modele = $modele;
    }

    public function get_annee() {
        return $this->annee = $annee;
    }

    public function get_typeCarburant() {
        return $this->typeCarburant = $typeCarburant;
    }

    public function get_nombrePortes() {
        return $this->nombrePortes = $nombrePortes;
    }
    
    public function get_infos() {
        echo "marque : {$this->marque} modele : {$this->modele} date de sorti : {$this->annee}.<br>";
    }

    public function demarrer() {
        echo "Le véhicule démarre.";
    }
}
class Moto extends Vehicule {
    private $cylindree;
    
}
$voiture = new Voiture("ford", "fiesta", 2013, 5, "Essence");

$voiture->get_infos();
$voiture->demarrer();