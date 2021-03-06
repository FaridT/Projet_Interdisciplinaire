CREATE DATABASE IF NOT EXISTS projet_interdisciplinaire1;
use projet_interdisciplinaire1;

create table IF NOT EXISTS joueur(
				adresse_mac varchar(20),
				primary key (adresse_mac)
				);
				
create table IF NOT EXISTS question(
				id_question int NOT NULL AUTO_INCREMENT ,
				libelle varchar(300),
				primary key (id_question)
				);
INSERT INTO `question` (`libelle`) VALUES
('A votre avis, selon le budget 2015, combien de votre  argent a été dépensé dans les  domaines suivants : '),
('Si vous étiez Ministre des finances, combien dépenseriez-vous dans les domaines suivants : ' );
				
create table IF NOT EXISTS budget(
				annee int,
				bud_sante float,
				bud_education  float,
				bud_environnement  float,
				bud_finance float,
				bud_defense  float,
				bud_autre  float,
				primary key (annee)
				);		
INSERT INTO `budget` (`annee`, `bud_sante`, `bud_education`, `bud_environnement`, `bud_finance`, `bud_defense`, `bud_autre`) VALUES
(2016, 10, 31, 10, 5, 10, 34);				
				
create table IF NOT EXISTS reponse(
				id_repense int NOT NULL AUTO_INCREMENT,
				adresse_mac varchar(20),
				rep_sante float,
				rep_education  float,
				rep_environnement  float,
				rep_finance float,
				rep_defense  float,
				rep_autre  float,
				id_question  int,
				annee  int,
				primary key (id_repense),
				foreign key(adresse_mac) references joueur(adresse_mac),
				foreign key(id_question) references question(id_question),
				foreign key(annee) references budget(annee)
				);
				
create table IF NOT EXISTS scenario(
				id_scenario int NOT NULL AUTO_INCREMENT,
				montant float,
				impot float,
				primary key (id_scenario)
				);	
INSERT INTO `scenario` (`montant`) VALUES
(30100),
(30500),
(30700),
(40000),
(30100),
(30500),
(30800),
(40000),
(40100),
(40500),
(40750),
(40100),
(40300),
(40500),
(40700),
(50000),
(50100),
(50500),
(50700),
(50000),
(50100),
(50500),
(50700),
(60000),
(60100),
(60500),
(60700),
(60000),
(60100),
(60500),
(60700),
(70000),
(70100),
(70500),
(70700),
(70000),
(70100),
(70500),
(70700),
(80000),
(80100),
(80500),
(80700),
(80000),
(80100),
(80500),
(80700),
(90000),
(90100),
(90500),
(90700),
(90000),
(90100),
(90500),
(90700),
(100000),
(150000),
(160000),
(170000),
(180000),
(200000),
(250000);
create table IF NOT EXISTS question_scenario(
				id_question int ,
				id_scenario int,
				primary key (id_question,id_scenario),
				foreign key(id_question) references question(id_question),
				foreign key(id_scenario) references scenario(id_scenario)
				);

create table IF NOT EXISTS score(
				date_score date ,
				score float,
				primary key (date_score)
				);

create table IF NOT EXISTS score_joueur_scenario(
				id_scenario int  ,
				date_score date ,
				adresse_mac varchar(20),
				primary key (adresse_mac,id_scenario,date_score),
				foreign key(adresse_mac) references joueur(adresse_mac),
				foreign key(id_scenario) references scenario(id_scenario),
				foreign key(date_score) references score(date_score)
				);				