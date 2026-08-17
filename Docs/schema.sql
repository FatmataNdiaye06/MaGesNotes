
CREATE TABLE role (
    id_role SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
);

CREATE TABLE eleve (
    id_eleve SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    matricule VARCHAR(50) NOT NULL,
    date_daissance DATE
);


CREATE TABLE anne_scolaire (
    id_annee_scolaire SERIAL PRIMARY KEY,
    libelle VARCHAR(20) NOT NULL, 
    date_debut DATE,
    date_fin DATE
);

CREATE TABLE classe (
    id_classe SERIAL PRIMARY KEY,
    nom_classe VARCHAR(50) NOT NULL 
);



CREATE TABLE utilisateur (
    id_utilisateur SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    id_role INT NOT NULL,
    CONSTRAINT fk_utilisateur_role FOREIGN KEY (id_role) 
        REFERENCES role(id_role) 
);




CREATE TABLE inscription (
    id_inscription SERIAL PRIMARY KEY,
    date_inscription DATE NOT NULL,
    id_annee_scolaire INT NOT NULL,
    id_classe INT NOT NULL,
    id_eleve INT NOT NULL,
    CONSTRAINT fk_inscription_annee FOREIGN KEY (id_annee_scolaire) 
        REFERENCES anne_scolaire(id_annee_scolaire) ,
    CONSTRAINT fk_inscription_classe FOREIGN KEY (id_classe) 
        REFERENCES classe(id_classe) ,
    CONSTRAINT fk_inscription_eleve FOREIGN KEY (id_eleve) 
        REFERENCES eleve(id_eleve) 
);



