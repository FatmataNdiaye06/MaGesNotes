<?php

class Role{
    private ?int $idRole ;
    private string $libelle; 

    public function __construct(string $libelle,?int $idRole=null){
        $this->idRole = $idRole;
        $this->setLibelle($libelle);
    }
    public function getidRole():?int{
        return $this->idRole;
    }
    public function getLibelle():string{
        return $this->libelle;
    }

    public function setLibelle(string $libelle){
        if(empty($libelle)){
            throw new Exception("Le libelle est obligatoire");    
        }
        $this->libelle=$libelle;
    }


}
