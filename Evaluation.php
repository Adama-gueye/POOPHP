<?php
include('Professeur.php');
class Evaluation extends Professeur{
    private $nomEvaluation;
    private $dateEvaluation;
    private $duree;

    public function __construct($nomEvaluation,$nom,$prenom,$matricule,$dateNaissance,$salaire,$specialite,$voiture,$dateEvaluation,$duree) {
        parent::__construct($nom,$prenom,$matricule,$dateNaissance,$salaire,$specialite,$voiture);
        $this->nomEvaluation = $nomEvaluation;
        $this->dateEvaluation = $dateEvaluation;
        $this->duree = $duree;

    }

    public function faireEvaluation(){
        echo "Bonjour je suis $this->nom $this->prenom j'évalu les étudiants sur $this->nomEvaluation le $this->dateEvaluation sur une durée de $this->duree";
    }
}

$evaluation = new Evaluation("PHP","Kane","Samba","0001","22/10/2000",3000000,"Informatique","Oui","30/10/2023",2);
$evaluation->faireEvaluation();