<?php
include('Etudiant.php');// inclusion de la classe
class Professeur extends Etudiant {

    private $salaire;
    private $specialite;
    private $voiture;


    public function __construct($nom,$prenom,$matricule,$dateNaissance,$salaire,$specialite,$voiture) {//notre contuctieur

        parent::__construct($nom,$prenom,$matricule,$dateNaissance);//constructeur de la classe parent
        $this->salaire = $salaire;
        $this->specialite = $specialite;
        $this->voiture = $voiture;
    }
    public function presenter(){
    
        echo "Bonjour je m'appelle $this->nom $this->prenom ma date de naissance est $this->dateNaissance et mon matricule est $this->matricule.
        Avez-vous une voiture? $this->voiture suis spécialisé dans $this->specialite et mon salaire est $this->salaire <br>";
    }
        public function evaluerEtudiant($dateEvaluation) {
            echo "J'évaluerais les etudiants le $dateEvaluation InshaAllah <br>";
        
    }
    
}

$Professeur = new Professeur("Kane","Samba","0001","22/10/2000",3000000,"Informatique","Oui");//Création d'un objet
$Professeur->presenter();
$Professeur->evaluerEtudiant("30/10/2023");