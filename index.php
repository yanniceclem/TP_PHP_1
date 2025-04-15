<?php
class Personne{
    private $nom;
    private $prenom;
    private $age;
    
    function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function get_nom() {
        return $this->nom;
    }

    public function get_prenom() {
        return $this->prenom;
    }

    public function get_age() {
        return $this->age;
    }

    public function set_nom($nom) {
        return $this->nom = $nom;
    }

    public function set_prenom($prenom) {
        return $this->prenom = $prenom;
    }

    public function set_age($age) {
        return $this->age = $age;
    }

    public function sePresenter() {
        echo "Bonjour, je m'appelle {$this->prenom} {$this->nom} et j'ai {$this->age} ans.<br>";
    }

    public function estMajeur() {
        if ($this->age>=18) {
            echo "cette personne est majeure.<br>";
        }
        else {
            echo "cette personne est mineur.<br>";
        }
    }
}

$personne1 = new Personne ("clemencin", "yannice", 20);

// $personne1->get_nom();
// $personne1->get_prenom();
// $personne1->get_age();

$personne1->sePresenter();

$personne1->estMajeur();
echo "<br>";
$personne1->set_age(12);
$personne1->sePresenter();
$personne1->estMajeur();