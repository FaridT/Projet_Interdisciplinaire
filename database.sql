CREATE DATABASE IF NOT EXISTS projet_interdisciplinaire;
use projet_interdisciplinaire;
create table IF NOT EXISTS joueur(
				adresse_mac varchar(20),
				score double,
				primary key (adresse_mac)
				);
create table IF NOT EXISTS reponse(
				mac varchar(20),
				pourcentage_sante varchar(6),
				pourcentage_education  varchar(6),
				pourcentage_environnement  varchar(6),
				pourcentage_finance varchar(6),
				pourcentage_defense  varchar(6),
				foreign key(mac) references joueur(adresse_mac)
				);