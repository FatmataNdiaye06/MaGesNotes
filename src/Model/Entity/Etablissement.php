<?php

class Etablissement{
    private ?int $idEtablissement ;
    private string $nomEtablissement; 


    public function __construct(string $nomEtablissement,?int $idEtablissement=null){
        $this->idEtablissement = $idEtablissement;
        $this->setNomEtablissement($nomEtablissement);
    }
    public function getidEtablissement():?int{
        return $this->idEtablissement;
    }
    public function getNomEtablissement():string{
        return $this->nomEtablissement;
    }

    public function setNomEtablissement(string $nomEtablissement){
        if(empty($nomEtablissement)){
            throw new Exception("Le nom est obligatoire");    
        }
        $this->nomEtablissement=$nomEtablissement;
    }



}
