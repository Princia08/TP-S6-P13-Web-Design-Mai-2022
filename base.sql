create database dangernet;
use dangernet;

-- create table user
-- (
-- 	id int not null auto_increment primary key,
-- 	nom varchar(50),
-- 	dtn date,

-- ) 

create table rechauffement
(
	id int not null auto_increment primary key,
	nom varchar(50),
	photo varchar(50),
	description text,
	url varchar(150)
);


insert into rechauffement values(NULL,'gaz a effet de serre','gaz.jpg','
Certains scientifiques remettent egalement en cause l origine humaine du rechauffement 
climatique, en expliquant que le CO2 rejete dans l atmosphEre par les activites humaines 
n affecte pas reellement le climat et l ecosysteme.','gaz-a-effet-de-serre')
