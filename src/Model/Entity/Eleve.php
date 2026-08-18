<?php

class Eleve {
    private ?int $idEleve; 
    private string $nom; 
    private string $prenom; 
    private string $matricule; 
    private \DateTime $dateNaissance;
    private Responsable $responsable; 

    public function __construct(string $nom,string $prenom, 
        string $matricule,\DateTime $dateNaissance,Responsable $responsable, 
        ?int $idEleve = null) 
        {
        $this->idEleve = $idEleve;
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMatricule($matricule);     
        $this->setDateNaissance($dateNaissance); 
        $this->setResponsable($responsable);     
    }


    public function getIdEleve(): ?int {
        return $this->idEleve;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getMatricule(): string {
        return $this->matricule;
    }

    public function getDateNaissance(): \DateTime {
        return $this->dateNaissance;
    }

    public function getResponsable(): Responsable {
        return $this->responsable;
    }


    public function setNom(string $nom): void {
        $nomNettoye = $nom;
        if (empty($nomNettoye)) {
            throw new Exception("Le nom est obligatoire");    
        }
        $this->nom = $nomNettoye;
    }

    public function setPrenom(string $prenom): void {
        $prenomNettoye = $prenom;
        if (empty($prenomNettoye)) {
            throw new Exception("Le prenom est obligatoire");    
        }
        $this->prenom = $prenomNettoye;
    }

    public function setMatricule(string $matricule): void {
        $matriculeNettoye = $matricule;
        if (empty($matriculeNettoye)) {
            throw new Exception("Le matricule est obligatoire");    
        }
        $this->matricule = $matriculeNettoye;
    }

    public function setDateNaissance(\DateTime $dateNaissance): void {
        $this->dateNaissance = $dateNaissance;
    }

    public function setResponsable(Responsable $responsable): void {
        $this->responsable = $responsable;
    }
}
