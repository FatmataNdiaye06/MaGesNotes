CREATE TABLE roles (
    id_role SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
);

CREATE TABLE responsables (
    id_responsable SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL, 
    telephone VARCHAR(50) NOT NULL 
);

CREATE TABLE eleves (
    id_eleve SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    matricule VARCHAR(50) NOT NULL,
    date_naissance DATE,
    id_responsable INT NOT NULL,
    CONSTRAINT fk_id_responsable FOREIGN KEY (id_responsable) 
        REFERENCES responsables(id_responsable)
);

CREATE TABLE anneeScolaires (
    id_annee_scolaire SERIAL PRIMARY KEY,
    libelle VARCHAR(20) NOT NULL, 
    date_debut DATE,
    date_fin DATE
);

CREATE TABLE classes (
    id_classe SERIAL PRIMARY KEY,
    nom_classe VARCHAR(50) NOT NULL 
);

CREATE TABLE etablissements (
    id_etablissement SERIAL PRIMARY KEY,
    nom_etablissement VARCHAR(50) NOT NULL
);

CREATE TABLE utilisateurs (
    id_utilisateur SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    id_role INT NOT NULL,
    CONSTRAINT fk_utilisateur_role FOREIGN KEY (id_role) 
        REFERENCES roles(id_role) 
);

CREATE TABLE statuts (
    id_statut SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE inscriptions (
    id_inscription SERIAL PRIMARY KEY,
    date_inscription DATE NOT NULL,
    id_annee_scolaire INT NOT NULL,
    id_classe INT NOT NULL,
    id_eleve INT NOT NULL,
    id_etablissement INT NOT NULL,
    id_statut INT NOT NULL,
    CONSTRAINT fk_inscription_annee FOREIGN KEY (id_annee_scolaire) 
        REFERENCES anneeScolaires(id_annee_scolaire),
    CONSTRAINT fk_inscription_classe FOREIGN KEY (id_classe) 
        REFERENCES classes(id_classe),
    CONSTRAINT fk_inscription_eleve FOREIGN KEY (id_eleve) 
        REFERENCES eleves(id_eleve),
    CONSTRAINT fk_inscription_etablissement FOREIGN KEY (id_etablissement) 
        REFERENCES etablissements(id_etablissement),
    CONSTRAINT fk_inscription_statut FOREIGN KEY (id_statut)
        REFERENCES statuts(id_statut)
);

CREATE TABLE transferts (
    id_transferts SERIAL PRIMARY KEY,
    type_transferts VARCHAR(50) NOT NULL,
    id_inscription INT NOT NULL, 
    CONSTRAINT fk_transferts_inscription FOREIGN KEY (id_inscription) 
        REFERENCES inscriptions(id_inscription) 
);
