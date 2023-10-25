<?php

interface IEtudiant{
    public function presenter();
    public function faireCour($cour);
    public function faireEvaluation($date);
}