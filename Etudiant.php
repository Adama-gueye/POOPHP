<?php
include('IEtudiant.php');//inclusion d'interface IEtudiant
class Etudiant implements IEtudiant{//on a implémenter l'interface pour pouvoir définir tout ces méthode
    protected $nom;
    protected $prenom;
    protected $matricule;
    protected $dateNaissance;
    public function __construct($nom = "",$prenom = "",$matricule = "",$dateNaissance = "") {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->dateNaissance = $dateNaissance;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getMatricule() {
        return $this->matricule;
    }
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setNom($nouveauNom){
        $this->nom = $nouveauNom;
    }

    public function presenter(){
        echo "Bonjour je m'appelle $this->nom $this->prenom ma date de naissance est $this->dateNaissance et mon matricule est $this->matricule <br>";
    }
    public function faireCour($cour){
        echo "Bonjour je m'appelle $this->nom et je fais cour sur $cour <br>";
    }
    public function faireEvaluation($evaluation){
        echo "Je dois faire une evaluation le $evaluation <br>";
    }
}
$nom = "Gueye";
$prenom = "Adama";
if(preg_match("/^[A-Za-z]+$/", $nom) && preg_match("/^[A-Za-z]+$/", $prenom)){
    $etudiant = new Etudiant($nom,$prenom,"0002","22/10/2000");
    $etudiant->presenter();
    $etudiant->setNom("Aicha");
    $etudiant->faireCour("PHP");
    $etudiant->faireEvaluation("30/10/2023");
}else throw new Exception("Vous avez fait une erreur sur la saisie de nom ou du prénom");

     
