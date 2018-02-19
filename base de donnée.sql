create TABLE lrvl_admin (
    id integer PRIMARY KEY AUTO_INCREMENT,
    prenom varchar(15) NOT null DEFAULT 'aucun' ,
    nom varchar (15) not null DEFAULT 'aucun',
    email varchar (40) not null DEFAULT 'aucun',
    mdp varchar (256) NOT NULL
    );
    
INSERT into lrvl_admin(prenom, nom, email, mdp)
VALUES ('Murat', 'MENDIL', 'mendil.murat@yahoo.com', SHA2('mastermiashs',256));

create TABLE lrvl_dons (
    id integer PRIMARY KEY AUTO_INCREMENT,
    prenom varchar(15) NOT null DEFAULT 'aucun' ,
    nom varchar (15) not null DEFAULT 'aucun',
    adresse varchar (60) not null,
    code_postal integer (5) not null,
    ville varchar (40) NOT null,
    pays varchar (40) NOT null,
    email varchar (40) not null DEFAULT 'aucun',
    telephone integer (15) not null,
    type_de_dons varchar (40) NOT null,
    somme integer not null,
    choix_prelevement varchar (30) not null,
    iban varchar (35) not null,
    bic varchar (15),
    rib varchar (60)
    );



create TABLE lrvl_actualite (
    id integer PRIMARY KEY AUTO_INCREMENT,
    titre varchar(15) NOT null DEFAULT 'aucun' ,
    auteur varchar (15) not null DEFAULT 'aucun',
    date_actu varchar (20) not null,
   	contenue varchar (3000) NOT NULL,
    images varchar (50) not null,
    description_images varchar (300) not null
    );




create TABLE lrvl_news (
    id integer PRIMARY KEY AUTO_INCREMENT,
    id_admin integer,
    id_actualite integer,
    titre varchar(15) NOT null DEFAULT 'aucun' ,
    auteur varchar (15) not null DEFAULT 'aucun',
    date_actu varchar (20) not null,
   	contenue varchar (3000) NOT NULL,
    images varchar (50) not null,
    description_images varchar (300) not null,
    
    FOREIGN KEY (id_admin) REFERENCES lrvl_admin(id) on UPDATE CASCADE on DELETE SET null,
    FOREIGN KEY (id_actualite) REFERENCES lrvl_actualite(id) on UPDATE CASCADE on DELETE SET null
    );

create TABLE lrvl_newsletter (
    id integer PRIMARY KEY AUTO_INCREMENT,
    prenom varchar(15) NOT null DEFAULT 'aucun' ,
    nom varchar (15) not null DEFAULT 'aucun',
    email varchar (60) not null DEFAULT 'aucun'
    );