<?php

class Classe{
    private ?int $idClasse ;
    private string $nomClasse; 


    public function __construct(string $nomClasse,?int $idClasse=null){
        $this->idClasse = $idClasse;
        $this->setNomClasse($nomClasse);
    }
    public function getIdClasse():?int{
        return $this->idClasse;
    }
    public function getNomClasse():string{
        return $this->nomClasse;
    }

    public function setNomClasse(string $nomClasse){
        if(empty($nomClasse)){
            throw new Exception("Le nom est obligatoire");    
        }
        $this->nomClasse=$nomClasse;
    }

}
