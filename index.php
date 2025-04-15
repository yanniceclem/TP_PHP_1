<?php
class Personne{
    private $nom;
    private $prenom;
    private $age;
    
    function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    };



}