<?php
class AnneeScolaire{
    private ?int $idAnneeScolaire;
    private string $libelle;
    private \DateTime $dateDebut;
    private \DateTime $dateFin;

    public function __construct(string $libelle,\DateTime $dateDebut,\DateTime $dateFin,?int $idAnneeScolaire=null){
        $this->idAnneeScolaire = $idAnneeScolaire;
        $this->setLibelle($libelle);
        $this->setDateDebut($dateDebut);
        $this->setDateFin($dateFin);
    }
    public function getIdClasse():?int{
        return $this->idAnneeScolaire;
    }
    public function getLibelle():string{
        return $this->libelle;
    }
    public function getDateDebut():\DateTime{
        return $this->dateDebut;
    }
    public function getDateFin():\DateTime{
        return $this->dateFin;
    }

    public function setLibelle(string $libelle):string{
        if(empty($libelle)){
            throw new Exception("Le libelle est obligatoire");    
        }
        $this->libelle=$libelle;
    }
    public function setDateDebut(\DateTime $dateDebut):void{
        if(empty($dateDebut)){
            throw new Exception("La date est obligatoire");    
        }
        $this->dateFin=$dateFin;
    }
    public function setDateFin(\DateTime $dateFin):void{
        if(empty($dateFin)|| ($dateFin <= $this->dateDebut)){
            throw new Exception("La date est obligatoire et doit pas etre enterieur a la date de debut");    
        }
        $this->dateFin=$dateFin;
    }


}
