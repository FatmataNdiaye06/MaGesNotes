<?php

class Eleve{
    private int  $idEleve; 
    private string  $nom ; 
    private string  $prenom; 
    private string  $matricule; 
    private \DateTime  $dateNaissance;
    
    public function getIdEleve():int{
        return $this->idEleve;
    }


}
