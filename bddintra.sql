#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
drop database IF exists bdd;
CREATE database bdd;
use bdd ;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------

CREATE TABLE CLIENT(
        uti_id      Int NOT NULL ,
        uti_nom    Varchar (25) ,
        uti_prenom Varchar (25) ,
        raison_cli  Varchar (45) ,
        commant_client varchar(150),
        adresse_cli Varchar (25) ,
        tel_cli     Char (10) ,
        PRIMARY KEY (uti_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FOURNISSEURS
#------------------------------------------------------------

CREATE TABLE FOURNISSEURS(
        id_four      Int NOT NULL ,
        nom_four     Varchar (25) ,
        adresse_four Varchar (25) ,
        tel_four     Char (10) ,
        PRIMARY KEY (id_four )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUITS
#------------------------------------------------------------

CREATE TABLE PRODUITS(
        id_pro       Int NOT NULL ,
        nom_pro      Varchar (30) ,
        image_pro    Varchar(200),
		    type_pro	 VARCHAR (30) ,
        marque_pro VARCHAR (10) ,
        stock_pro    Int ,
        prixunit_pro Float ,
		    note		 int(2),
        PRIMARY KEY (id_pro )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: BON_LIVRAISON
#------------------------------------------------------------

CREATE TABLE BON_LIVRAISON(
        id_livr   Int NOT NULL ,
        date_livr Date ,
        com_num   Int ,
        PRIMARY KEY (id_livr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMANDE
#------------------------------------------------------------

CREATE TABLE COMMANDE(
        com_num   int (11) Auto_increment  NOT NULL ,
        com_date  Date ,
        com_text  Varchar (25) ,
        com_prest Bool ,
        uti_id    Int ,
        fact_num  Int ,
        id_livr   Int ,
        PRIMARY KEY (com_num )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: FACTURE
#------------------------------------------------------------

CREATE TABLE FACTURE(
        fact_num       int (11) Auto_increment  NOT NULL ,
        fact_quantite  Int ,
        fact_prix      Int ,
        fact_reglement Date ,
        fact_adresse   Varchar (25) ,
        fact_nom       Varchar (25) ,
        PRIMARY KEY (fact_num )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TECHNICIEN
#------------------------------------------------------------

CREATE TABLE TECHNICIEN(
        id_tech  Int NOT NULL ,
        uti_id   Int NOT NULL ,
        id_prest Int ,
        PRIMARY KEY (id_tech ,uti_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRESTATION
#------------------------------------------------------------

CREATE TABLE PRESTATION(
        id_prest   Int NOT NULL ,
        date_prest Date ,
        prix_prest Float ,
        com_num    Int ,
        PRIMARY KEY (id_prest )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UTILISATEUR
#------------------------------------------------------------

CREATE TABLE UTILISATEUR(
        uti_id     Int Auto_increment NOT NULL ,
        uti_nom    Varchar (25) ,
        uti_prenom Varchar (25) ,
        uti_email  Varchar (25) ,
        login      Varchar (25) ,
        passwordd   Varchar (100) ,
        grp_id     Int ,
        PRIMARY KEY (uti_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: GROUPE_PRIVILEGE
#------------------------------------------------------------

CREATE TABLE GROUPE_PRIVILEGE(
        grp_id  Int NOT NULL ,
        grp_nom Varchar (25) ,
        PRIMARY KEY (grp_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: RESSOURCES
#------------------------------------------------------------

CREATE TABLE RESSOURCES(
        res_id   Int NOT NULL ,
        res_nom  Varchar (25) ,
        res_type Varchar (25) ,
        res_date Date ,
        grp_id   Int ,
        PRIMARY KEY (res_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ADMINISTRATEUR
#------------------------------------------------------------




#------------------------------------------------------------
# Table: fournir
#------------------------------------------------------------

CREATE TABLE fournir(
        id_four Int NOT NULL ,
        id_pro  Int NOT NULL ,
        PRIMARY KEY (id_four ,id_pro )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comporter
#------------------------------------------------------------

CREATE TABLE comporter(
        qte_livr Int ,
        id_pro   Int NOT NULL ,
        id_livr  Int NOT NULL ,
        PRIMARY KEY (id_pro ,id_livr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: concerner
#------------------------------------------------------------

CREATE TABLE concerner(
        qte_commande Int ,
        com_num      Int NOT NULL ,
        id_pro       Int NOT NULL ,
        PRIMARY KEY (com_num ,id_pro )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: installer
#------------------------------------------------------------

CREATE TABLE installer(
        id_prest Int NOT NULL ,
        id_pro   Int NOT NULL ,
        PRIMARY KEY (id_prest ,id_pro )
)ENGINE=InnoDB;


ALTER TABLE BON_LIVRAISON ADD CONSTRAINT FK_BON_LIVRAISON_com_num FOREIGN KEY (com_num) REFERENCES COMMANDE(com_num);
ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_uti_id FOREIGN KEY (uti_id) REFERENCES UTILISATEUR(uti_id);
ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_fact_num FOREIGN KEY (fact_num) REFERENCES FACTURE(fact_num);
ALTER TABLE COMMANDE ADD CONSTRAINT FK_COMMANDE_id_livr FOREIGN KEY (id_livr) REFERENCES BON_LIVRAISON(id_livr);
ALTER TABLE TECHNICIEN ADD CONSTRAINT FK_TECHNICIEN_uti_id FOREIGN KEY (uti_id) REFERENCES UTILISATEUR(uti_id);
ALTER TABLE TECHNICIEN ADD CONSTRAINT FK_TECHNICIEN_id_prest FOREIGN KEY (id_prest) REFERENCES PRESTATION(id_prest);
ALTER TABLE PRESTATION ADD CONSTRAINT FK_PRESTATION_com_num FOREIGN KEY (com_num) REFERENCES COMMANDE(com_num);
ALTER TABLE UTILISATEUR ADD CONSTRAINT FK_UTILISATEUR_grp_id FOREIGN KEY (grp_id) REFERENCES GROUPE_PRIVILEGE(grp_id);
ALTER TABLE RESSOURCES ADD CONSTRAINT FK_RESSOURCES_grp_id FOREIGN KEY (grp_id) REFERENCES GROUPE_PRIVILEGE(grp_id);
ALTER TABLE fournir ADD CONSTRAINT FK_fournir_id_four FOREIGN KEY (id_four) REFERENCES FOURNISSEURS(id_four);
ALTER TABLE fournir ADD CONSTRAINT FK_fournir_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
ALTER TABLE comporter ADD CONSTRAINT FK_comporter_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
ALTER TABLE comporter ADD CONSTRAINT FK_comporter_id_livr FOREIGN KEY (id_livr) REFERENCES BON_LIVRAISON(id_livr);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_com_num FOREIGN KEY (com_num) REFERENCES COMMANDE(com_num);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);
ALTER TABLE installer ADD CONSTRAINT FK_installer_id_prest FOREIGN KEY (id_prest) REFERENCES PRESTATION(id_prest);
ALTER TABLE installer ADD CONSTRAINT FK_installer_id_pro FOREIGN KEY (id_pro) REFERENCES PRODUITS(id_pro);


#------------------------------------------------------------
# Trigger
#------------------------------------------------------------
#trigger1
/*
DROP Trigger if exists ajoutclient;
DELIMITER //
CREATE Trigger ajoutclient
AFTER INSERT ON UTILISATEUR
FOR EACH ROW
BEGIN
IF new.grp_id = 3
THEN
INSERT INTO client(uti_id,uti_nom,uti_prenom)
  VALUES(new.uti_id,new.uti_nom,new.uti_prenom);
END IF ;
END //
DELIMITER ;
*/

#------------------------------------------------------------
# Table jeux dessai
#------------------------------------------------------------

insert into GROUPE_PRIVILEGE values
(1,'Administrateur'),
(2,'Technicien'),
(3,'Client');

insert into PRODUITS (id_pro,nom_pro,image_pro,type_pro,marque_pro,stock_pro,prixunit_pro)
  values
  (1,'MSI GeForce GTX 1080 Ti','images/produit/gtx1080ti.jpg','Carte-Graphique','MSI','20','599.99'),
  (2,'Intel Core i7-6700K','images/produit/intel7.jpg','CPU','Intel core','100','350'),
  (3,'ASUS ROG STRIX X99','images/produit/asus.jpg','Carte-Mere','ASUS-MB','50','349.99'),
  (4,'Intel Core i5 7400K','images/produit/intel5.jpg','CPU','Intel core','100','199.99'),
  (5,'Corsair RAM 16GO','images/produit/ram.jpg','RAM','Corsair','40','100'),
  (6,'Geforce GTX 980','images/produit/gtx980.jpg','Carte-Graphique','NVIDIA','20','300'),
  (7,'Kingston 4GO DDR4','images/produit/ram3.jpg','RAM','Kingston','40','25'),
  (8,'ASRock 775i65G R3.0','images/produit/asrock.jpg','Carte-Mere','ASRock','40','64'),
  (9,'ASUS X99-WS/IPMI','images/produit/x99.jpg','Carte-Mere','ASUS-MB','20','449'),
  (10,'MSI A320M GAMING PRO','images/produit/msia320.jpg','Carte-Mere','MSI-MB','40','78'),
  (11,'AMD A10-7870K','images/produit/amda.jpg','CPU','AMD','40','78'),
  (12,'HyperX Fury 16 Go (2x 8Go)','images/produit/ram3.jpg','RAM','HyperX','40','152'),
  (13,'ASUS 210-SL-TC1GD3-L','images/produit/geforce210.jpg','Carte-Graphique','NVIDIA','40','32');

insert into UTILISATEUR (uti_nom,uti_prenom,uti_email,login,passwordd,grp_id)
  values
('Pinelli','Vincent','Corsepowa@gmail.com','toto','toto',1),
('Lejeune','Axel','Bretoncon@gmail.com','titi','titi',1),
('Jendli','Mohammed','Algerger@gmail.com','tata','tata',1),
('Denis','Roger','Rabbit@gmail.com','pofpof','pofpof',2),
('Rivai','Pierre','Present@gmail.com','pufpuf','pufpuf',2),
('Solo','Anakin','Kenobig@gmail.com','poufpouf','poufpouf',2),
('Briquet','Light','DeathNote@gmail.com','aze','aze',2),
('Maison','Auguste','Stgermain@gmail.com','tgo','tgo',3),
('Dupont','Julien','Mangaka@gmail.com','tdf','tdf',3),
('Deplage','Mathilde','SWAnaking@gmail.com','pifpif','pifpif',3);
