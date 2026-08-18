<?php

class Responsable {
    private ?int $idResponsable;  
    private string $nom;  
    private string $prenom;  
    private string $email;  
    private string $telephone;  

    public function __construct(string $nom,string $prenom,string $email, 
        string $telephone,?int $idResponsable = null) 
        {
        $this->idResponsable = $idResponsable;
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setTelephone($telephone);
    }


    public function getIdResponsable(): ?int {
        return $this->idResponsable;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTelephone(): string {
        return $this->telephone;
    }


    public function setNom(string $nom): void {
        $nomNettoye = $nom;
        if (empty($nomNettoye)) {
            throw new Exception("Le nom du responsable est obligatoire");    
        }
        $this->nom = $nomNettoye;
    }

    public function setPrenom(string $prenom): void {
        $prenomNettoye = $prenom;
        if (empty($prenomNettoye)) {
            throw new Exception("Le prénom du responsable est obligatoire");    
        }
        $this->prenom = $prenomNettoye;
    }

    public function setEmail(string $email): void {
        $emailNettoye = $email;
        if (!filter_var($emailNettoye, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("L'adresse email saisie n'est pas valide");    
        }
        $this->email = $emailNettoye;
    }

    public function setTelephone(string $telephone): void {
        $telNettoye = $telephone;
        if (empty($telNettoye)) {
            throw new Exception("Le numéro de téléphone est obligatoire");    
        }
        $this->telephone = $telNettoye;
    }
}
