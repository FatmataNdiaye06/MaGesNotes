<?php

class Inscription{
    private int $idInscription;  
    private \DateTime $dateInscription;  
    private AnneeScolaire $anneeScolaire;  
    private Classe $classe;  
    private Eleve $eleve;  
    private Etablissement $etablissement;  
    private Statut $statut;  



    public function __construct(\DateTime $dateInscription,AnneeScolaire $anneeScolaire,  
        Classe $classe,  Eleve $eleve,Etablissement $etablissement) 
        {
        $this->idInscription = $idInscription;
        $this->setDateInscription($dateInscription);
        $this->setAnneeScolaire($anneeScolaire);
        $this->setClasse($classe);
        $this->setEleve($eleve);
        $this->setEtablissement($etablissement);
        $this->setStatut($statut);
    }

    public function getIdInscription(): ?int {
        return $this->idInscription;
    }

    public function getDateInscription(): \DateTime {
        return $this->dateInscription;
    }

    public function getAnneeScolaire(): AnneScolaire {
        return $this->anneeScolaire;
    }

    public function getClasse(): Classe {
        return $this->classe;
    }

    public function getEleve(): Eleve {
        return $this->eleve;
    }

    public function getEtablissement(): Etablissement {
        return $this->etablissement;
    }

    public function getStatut(): Statut {
        return $this->statut;
    }


    public function setDateInscription(\DateTime $dateInscription): void {
        $this->dateInscription = $dateInscription;
    }

    public function setAnneeScolaire(AnneScolaire $anneeScolaire): void {
        $this->anneeScolaire = $anneeScolaire;
    }

    public function setClasse(Classe $classe): void {
        $this->classe = $classe;
    }

    public function setEleve(Eleve $eleve): void {
        $this->eleve = $eleve;
    }

    public function setEtablissement(Etablissement $etablissement): void {
        $this->etablissement = $etablissement;
    }

    public function setStatut(Statut $statut): void {
        $this->statut = $statut;
    }
}
