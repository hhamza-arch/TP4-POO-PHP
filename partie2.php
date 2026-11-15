<?php

class Voiture {
    public function __construct(public string $couleur = "Blanche", public int $vitesse = 0) {
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);
$v3 = new Voiture("Noire");
$v1->afficher();
$v2->afficher();
$v3->afficher();

unset($v2);

class Personne {
    public function __construct(public string $nom = "", public string $prenom = "") {
        echo "Création Personne" . PHP_EOL;
    }

    public function __destruct() {
        echo "Détruire " . __CLASS__ . PHP_EOL;
    }
}

$p1 = new Personne();
$p2 = new Personne("Ahmed", "Ali");
