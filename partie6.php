<?php

class Animal {
    public function manger(): void {
        echo "Je mange." . PHP_EOL;
    }
}

class Chien extends Animal {
    public function aboyer(): void {
        echo "Wouf !" . PHP_EOL;
    }
}

class Chat extends Animal {
    public function miauler(): void {
        echo "Miaou !" . PHP_EOL;
    }
}

$c = new Chien();
$c->manger();
$c->aboyer();

$chat = new Chat();
$chat->manger();
$chat->miauler();

class Personne {
    private string $dateNaissance;
    protected string $nom;
    protected string $prenom;

    public function __construct(string $nom, string $prenom, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    protected function getAge(): int {
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        return $naissance->diff($aujourdhui)->y;
    }

    public function __toString(): string {
        return $this->prenom . " " . $this->nom . " (" . $this->getAge() . " ans)";
    }
}

class Etudiant extends Personne {
    private string $cne;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $cne) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->cne = $cne;
    }

    public function getCne(): string {
        return $this->cne;
    }

    public function __toString(): string {
        return parent::__toString() . " - CNE : " . $this->cne;
    }
}

$etudiants = [];

$etudiants[] = new Etudiant("Alaoui", "Ahmed", "2004-01-15", "CNE001");
$etudiants[] = new Etudiant("Hachimi", "Sara", "2003-05-20", "CNE002");
$etudiants[] = new Etudiant("Amrani", "Youssef", "2004-08-10", "CNE003");
$etudiants[] = new Etudiant("Bennani", "Salma", "2003-11-02", "CNE004");
$etudiants[] = new Etudiant("Idrissi", "Omar", "2004-03-25", "CNE005");

foreach ($etudiants as $e) {
    echo $e . PHP_EOL;
}
