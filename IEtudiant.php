<?php
//cette interface nous permet de déclarer nos méthodes
interface IEtudiant{
    public function presenter();
    public function faireCour($cour);
    public function faireEvaluation($date);
}