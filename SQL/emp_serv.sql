<<<<<<< HEAD
create database [if not exists] emp_serv;
create table employes
(
    noemp int(4) primary key not null,
    nom varchar(20),
    prenom varchar(20),
    emploi varchar(20),
    sup int(4),
    embauche date,
    sal decimal(9,2),
    comm decimal(9,2),
    noserv int(2) not null
);
create table services
(
    noserv int(2) not null,
    service varchar(20),
    ville varchar(20),
    primary key (noserv)
);

alter table employes
add constraint foreign key (noserv) references services(noserv);
alter table employes
add constraint foreign key (sup) references employes(noemp);

insert into services(noserv,service,ville) 
values 
(1,'DIRECTION','PARIS'),
(2,'LOGISTIQUE','SECLIN'),
(3,'VENTES','ROUBAIX'),
(4,'FORMATION',"VILLENEUVE D'ASCQ"),
(5,'INFORMATIQUE','LILLE'),
(6,'COMPTABILITE','LILLE'),
(7,'TECHNIQUE','ROUBAIX');

insert into employe(noemp,nom,prenom,emploi,sup,embauche,sal,comm,noserv)
values
(1000,'LEROY','PAUL','PRESIDENT',null,'1987-10-25',55005.5,null,1),
(1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,'1987-10-25',12351.24,null,1);
(1101,'DUMONT','LOUIS','VENDEUR',1300,'1987-10-25',9047.9, 0.0, 1),
(1102,'MINET','MARC','VENDEUR',1300,'1987-10-25',8085.81,17230,1),
(1104,'NYS','ETIENNE','TECHNICIEN',1200,'1987-10-25',12342.23,null,1),
(1105,'DENIMAL','JEROME','COMPTABLE',1600,'1987-10-25',15746.57,null,1),
(1200,'LEMAIRE','GUY','DIRECTEUR',1000,'1987-03-11',36303.63,null,2),
(1201,'MARTIN','JEAN','TECHNICIEN',1200,'1987-06-25',11235.12,null,2),
(1202,'DUPONT','JACQUES','TECHNICIEN',1200,'1988-10-30',10313.03,null,2),
(1300,'LENOIR','GERARD','DIRECTEUR',1000,'1987-04-02',31353.14,13071,3),
(1301,'GERARD','ROBERT','VENDEUR',1300,'1999-04-16',7694.77,12430,3),
(1303,'MASURE','EMILE','TECHNICIEN',1200,'1988-06-17',10451.05,null,3),
(1500,'DUPONT','JEAN','DIRECTEUR',1000,'1987-10-23',28434.84,null,5),
(1501,'DUPIRE','PIERRE','ANALYSTE',1500,'1984-10-24',23102.31,null,5),
(1502,'DURAND','BERNARD','PROGRAMMEUR',1500,'1987-07-30',13201.32,null,5),
(1503,'DELNATTE','LUC','PUPITREUR',1500,'1999-01-15',8801.01,null,5),
(1600,'LAVARE','PAUL','DIRECTEUR',1000,'1991-12-13',31238.12,null,5),
(1601,'CARON','ALAIN','COMPTABLE',1600,'1985-09-16',33003.3,null,5),
(1602,'DUBOIS','JULES','VENDEUR',1300,'1990-12-20',9520.95,35535,5),
(1603,'MOREL','ROBERT','COMPTABLE',1600,'1985-07-18',33003.3,null,5),
(1604,'HAVET','ALAIN','VENDEUR',1300,'1991-01-01',9388.94,33415,5),
(1605,'RICHARD','JULES','COMPTABLE',1600,'1985-10-22',33503.35,null,6),
(1615,'DUPREZ','JEAN','BALAYEUR',1000,'1998-10-22',6000.6,null,6);

insert into employes(noemp,nom,prenom,emploi,sup,embauche,sal,comm,noserv)
values
(1105,'DENIMAL','JEROME','COMPTABLE',1600,'1987-10-25',15746.57,null,1),
(1102,'MINET','MARC','VENDEUR',1300,'1987-10-25',8085.81,17230,1),
(1101,'DUMONT','LOUIS','VENDEUR',1300,'1987-10-25',9047.9, 0.0, 1),
(1104,'NYS','ETIENNE','TECHNICIEN',1200,'1987-10-25',12342.23,null,1),
(1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,'1987-10-25',12351.24,null,1),
(1000,'LEROY','PAUL','PRESIDENT',null,'1987-10-25',55005.5,null,1),
(1202,'DUPONT','JACQUES','TECHNICIEN',1200,'1988-10-30',10313.03,null,2),
(1201,'MARTIN','JEAN','TECHNICIEN',1200,'1987-06-25',11235.12,null,2),
(1200,'LEMAIRE','GUY','DIRECTEUR',1000,'1987-03-11',36303.63,null,2),
(1301,'GERARD','ROBERT','VENDEUR',1300,'1999-04-16',7694.77,12430,3),
(1303,'MASURE','EMILE','TECHNICIEN',1200,'1988-06-17',10451.05,null,3),
(1300,'LENOIR','GERARD','DIRECTEUR',1000,'1987-04-02',31353.14,13071,3),
(1603,'MOREL','ROBERT','COMPTABLE',1600,'1985-07-18',33003.3,null,5),
(1601,'CARON','ALAIN','COMPTABLE',1600,'1985-09-16',33003.3,null,5),
(1503,'DELNATTE','LUC','PUPITREUR',1500,'1999-01-15',8801.01,null,5),
(1502,'DURAND','BERNARD','PROGRAMMEUR',1500,'1987-07-30',13201.32,null,5),
(1501,'DUPIRE','PIERRE','ANALYSTE',1500,'1984-10-24',23102.31,null,5),
(1604,'HAVET','ALAIN','VENDEUR',1300,'1991-01-01',9388.94,33415,5),
(1602,'DUBOIS','JULES','VENDEUR',1300,'1990-12-20',9520.95,35535,5),
(1600,'LAVARE','PAUL','DIRECTEUR',1000,'1991-12-13',31238.12,null,5),
(1500,'DUPONT','JEAN','DIRECTEUR',1000,'1987-10-23',28434.84,null,5),
(1605,'RICHARD','JULES','COMPTABLE',1600,'1985-10-22',33503.35,null,6),
(1615,'DUPREZ','JEAN','BALAYEUR',1000,'1998-10-22',6000.6,null,6);

/*-1-*/
select * from services;
/*-2-*/
select noserv, service, ville from services;
/*-3-*/
select noserv, service from services;
/*-4-*/
select * from employes;
/*-5-*/
select emploi from employes;
/*-6-*/
select distinct emploi from employes;
/*-7-*/
select * from employes where noserv=3;
/*-8-*/
select noemp, nom, prenom, noserv from employes where emploi = "TECHNICIEN";
/*-9-*/
select noserv, service from services where noserv > 2;
/*-10-*/
select noserv, service from services where noserv <= 2;
/*-11-*/
select * from employes where comm < sal;
select * from employes where comm < sal or comm is null;
/*-12-*/
select * from employes where comm is null or comm = 0;
/*-13-*/
select * from employes where comm is not null order by comm;
/*-14-*/
select * from employes where sup is not null;
/*-15-*/
select * from employes where sup is null;
/*-16-*/
select nom, emploi, sal, noserv from employes where noserv = 5 and sal > 20000;
/*-17-*/
select * from employes where noserv = 6 and emploi = "VENDEUR" and sal >= 9500;
/*-18-*/
select * from employes where emploi = "PRESIDENT" or emploi = "DIRECTEUR";
/*-19-*/
select * from employes where emploi = "DIRECTEUR" and noserv != 3;
/*-20-*/
select * from employes where (noserv = 1 and emploi = "TECHNICIEN") or emploi = "DIRECTEUR";
/*-21-*/
select * from employes where noserv = 1 and (emploi = "TECHNICIEN" or emploi = "DIRECTEUR");
/*-22-*/
select * from employes where noserv = 1 and (emploi = "DIRECTEUR" or emploi = "TECHNICIEN");
/*-23-*/
select * from employes where noserv = 1 and emploi != "DIRECTEUR" and emploi != "TECHNICIEN";
/*-24-*/
select * from employes where emploi in ('TECHNICIEN','COMPTABLE','VENDEUR');
/*-25-*/
select * from employes where emploi not in ('TECHNICIEN', 'COMPTABLE', 'VENDEUR');
/*-26-*/
select * from employes where emploi = 'DIRECTEUR' and noserv in (2,4,5);
/*-27-*/
select * from employes where sup is not null and noserv not in (1,3,5);
/*-28-*/
select * from employes where sal between 20000 and 40000;
/*-29-*/
select * from employes where sal not between 20000 and 40000;
/*-30-*/
select * from employes where emploi != 'DIRECTEUR' and embauche between '1988-01-01' and '1988-12-31';
select * from employes where emploi != 'DIRECTEUR' and embauche like '1988%';
/*-31-*/
select * from employes where emploi = 'DIRECTEUR' and noserv between 2 and 5;
/*-32-*/
select * from employes where nom like 'M%';
/*-33-*/
select * from employes where nom like '%T';
/*-34-*/
select * from employes where nom like '%E%E%';
/*-35-*/
select * from employes where nom like '%E%' and nom not like '%E%E%';
/*-36-*/
select * from employes where nom like '%N%' and nom like '%O%';
/*-37-*/
select * from employes where nom like '_____N';
/*-38-*/
select * from employes where nom like '__R%';
/*-39-*/
select * from employes where nom not like '_____';
/*-40-*/
select nom, prenom, noserv, sal from employes where noserv = 3 order by sal asc;
/*-41-*/
select nom, prenom, noserv, sal from employes where noserv = 3 order by sal desc;
/*-42-*/
select nom, prenom, noserv, sal from employes where noserv = 3 order by 4 asc;
select nom, prenom, noserv, sal from employes where noserv = 3 order by 4 desc;
/*-43-*/
select nom, prenom, noserv, sal, emploi from employes order by emploi asc, sal desc;
/*-44-*/
select nom, prenom, noserv, sal, emploi from employes order by 5 asc, 4 desc;
/*-45-*/
select nom, prenom, noserv, comm from employes where noserv = 3 order by comm;
/*-46-*/
select nom, prenom, noserv, comm from employes where noserv = 3 and comm order by comm desc;
/*-47-*/
select nom, prenom, emploi, service from employes join services on employes.noserv = services.noserv;
/*-48-*/
select nom, emploi, employes.noserv, service from employes join services on employes.noserv = services.noserv;
/*-49-*/
select nom, emploi, s.noserv, service from employes as e join services as s on e.noserv = s.noserv;
/*-50-*/
select nom, emploi, services.* from employes join services on employes.noserv = services.noserv;
/*-51-*/
select e1.nom as nomEmploye, e1.embauche as embaucheEmploye, e1.sup as numeroSuperieur, e2.noemp as numeroEmploye, e2.nom as nomChef, e2.embauche as embaucheChef
from employes as e1 left join employes as e2 on e1.sup = e2.noemp
where e1.embauche < e2.embauche order by e1.nom,e2.nom;

select e1.nom as nomEmploye, e1.embauche as embaucheEmploye, e1.sup as numeroSuperieur, e2.noemp as numeroEmploye, e2.nom as nomChef, e2.embauche as embaucheChef
from employes as e1 inner join employes as e2 on e1.sup = e2.noemp
where e1.embauche < e2.embauche order by e1.nom,e2.nom;
/*-52-*/
select prenom from employes where emploi = 'DIRECTEUR'
union 
select prenom from employes where emploi = 'TECHNICIEN' and noserv = 1;
/*-53-*/
select services.noserv from services where noserv not in (select services.noserv from services join employes on services.noserv = employes.noserv);
select services.noserv from employes right join services on employes.noserv = services.noserv where employes.noserv is null;
/*-54-*/
select distinct services.noserv, services.service from employes left join services on employes.noserv = services.noserv where employes.noserv is not null;
/*-55-*/
select * from employes where employes.noserv in (select services.noserv from services where ville = 'LILLE');
select employes.*, services.ville from employes,services where employes.noserv in (select s1.noserv from services as s1 where ville = 'LILLE') and employes.noserv = services.noserv;
/*-56-*/
select * from employes as e1 where e1.nom != 'DUBOIS' and exists (select * from employes as e2 where e1.sup = e2.sup and e2.nom = 'DUBOIS');
select * from employes where sup = ( select sup from employes where nom = 'DUBOIS' ) and nom != 'DUBOIS';
select e2.* from employes as e1 join employes as e2 on e1.sup = e2.sup where e1.nom = 'DUBOIS' and e2.nom != e1.nom;
/*-57-*/
select * from employes where embauche in (select embauche from employes where nom = 'DUMONT');
/*-58-*/
select nom, e1.embauche from employes e1 where embauche < (select e2.embauche from employes e2 where nom = 'MINET') order by embauche;
/*-59-*/
select nom, prenom, embauche from employes where embauche < all(select e2.embauche from employes e2 where e2.noserv = 6);
select nom, prenom, embauche from employes where embauche < (select min(e2.embauche) from employes as e2 where e2.noserv = 6);
/*-60-*/
select nom, prenom, sal from employes where sal > (select min(e2.sal) from employes e2 where e2.noserv = 3) order by sal;
select nom, prenom, sal from employes e1 where exists ( select * from employes e2 where e2.noserv = 3 and e1.sal > e2.sal) order by sal;
/*-61-*/
select nom, e1.noserv, emploi, sal from employes e1 inner join services s1 on e1.noserv = s1.noserv 
where s1.ville in (select ville from employes e2 inner join services s2 on e2.noserv = s2.noserv where nom = 'HAVET');

select nom, noserv, emploi, sal from employes natural join services
where ville in (select ville from services natural join employes where nom = 'HAVET');
/*-62-*/
select * from employes where noserv = 1 and emploi in (select emploi from employes where noserv = 3);
/*-63-*/
select * from employes where noserv = 1 and emploi not in (select emploi from employes where noserv = 3);
/*-64-*/
select nom, prenom, emploi, sal from employes 
where emploi in (select emploi from employes where nom = 'CARON') and sal > (select sal from employes where nom = 'CARON');
/*-65-*/
select * from employes 
where noserv = 1 and emploi in (select e1.emploi from employes e1 inner join services s1 on e1.noserv = s1.noserv where s1.service = 'VENTES');
/*-66-*/
select * from employes e1 inner join services s1 on e1.noserv = s1.noserv 
where ville = 'LILLE' and emploi in (select emploi from employes where nom = 'RICHARD') and nom != 'RICHARD' order by nom;
/*-67-*/
select * from employes where sal > (select avg(sal) from employes) order by noserv;
/*-68-*/
select * from employes e1 inner join services s1 on e1.noserv = s1.noserv 
where service = 'INFORMATIQUE' and DATE_FORMAT(e1.embauche,'%Y') 
in (select DATE_FORMAT(e2.embauche,'%Y') from employes e2 inner join services s2 on e2.noserv = s2.noserv where s2.service = 'VENTES');
/*-69-*/
select e1.nom, e1.emploi, s1.service from employes e1 
inner join employes e2 on e1.sup = e2.noemp  
inner join services s1 on e1.noserv = s1.noserv 
where e1.noserv != e2.noserv;
/*-70-*/
select e2.nom, e2.prenom, s1.service, e2.sal from employes e1 
inner join employes e2 on e1.sup = e2.noemp  
inner join services s1 on e1.noserv = s1.noserv group by e2.nom order by 4 desc;
/*-71-*/
select nom, emploi, round(sal,2) as Revenu from employes order by sal desc;
/*-72-*/
select nom, sal, comm from employes where comm > sal * 2;
/*-73-*/
select nom, prenom, emploi, round(comm*100/sal,2) as '% Commissions' from employes where emploi = 'VENDEUR' order by 4 desc;
/*-74-*/
select nom, emploi, service, round(sal*12,0) as 'Revenu annuel' from employes inner join services on employes.noserv = services.noserv where emploi = 'VENDEUR';
/*-75-76-77-*/
select nom, prenom, emploi, sal as Salaire, round(ifnull(comm,0),0) as 'Gain mensuel', round(sal/12,0) as 'Revenu mensuel' from employes where noserv in (3,5,6);
/*-78-*/
select nom, emploi, round(sal/22,2) as 'Salaire journalier', round(sal/22/8,2) as 'Salaire horaire' from employes where noserv in (3,5,6);
/*-79-*/
select nom, emploi, truncate(sal/22,2) as 'Salaire journalier', truncate(sal/22/8,2) as 'Salaire horaire' from employes where noserv in (3,5,6);
/*-80-*/
select concat(rpad(service,12,' '),' ----> ',ville) as 'Service et Ville' from services;
/*-81-*/
select @ce := @ce + 1 as 'code emploi', nom, emploi, from employes, (select @ce := 0) as code_emploi;
/*-82-*/
select noemp, left(lpad(nom,length(nom)+5,'*****'),5) as nom, noserv from employes where noserv = 1;
/*-83-*/
select substring(service,1,5) from services;
/*-84-*/
select * from employes where embauche like '1988%';
/*-85-*/
select upper(nom) as NOM, left(upper(nom),1) as N, lower(nom) as nom from employes;
/*-86-*/
select locate('M', nom) as M, locate('E', nom) as E, nom from employes;
/*-87-*/
select length(service) as 'service nb lettre', service from services;
/*-88-*/
select nom, emploi, sal, left(RPAD('',sal/55000*30,'▬'),30) as 'Histogramme des salaires' from employes order by sal desc;
/*-89-*/
select nom, emploi, embauche from employes where noserv = 6;
/*-90-*/
select nom, emploi, DATE_FORMAT(embauche,'%d-%m-%y') as embauche from employes where noserv = 6;
/*-91-*/
select nom, emploi, DATE_FORMAT(embauche,'%a %d %M %Y') as embauche from employes where noserv = 6;
/*-92-*/
select nom, emploi, DATE_FORMAT(embauche,'%a %d %b %y') as embauche from employes where noserv = 6;
/*-93-*/
select nom, emploi, DATE_FORMAT(embauche,'%y %b %d') as embauche from employes where noserv = 6;
/*-94-*/
select nom, emploi, DATE_FORMAT(embauche,'%W-%d-%M-%Y') as embauche from employes where noserv = 6;
/*-95-*/
select employes.*, datediff(sysdate(), embauche) as "Jours d'anciennete" from employes;
/*-96-*/
select employes.*, TIMESTAMPDIFF(MONTH, embauche, SYSDATE()) as "Mois d'anciennete" from employes;
/*-97-*/

/*-98-*/

/*-99-*/
select datediff(sysdate(),'1994-06-26') as 'n jours';
/*-100-*/
select TIMESTAMPDIFF(MONTH,'1994-06-26',sysdate()) as 'n mois';
/*-101-*/
select round(avg(sal+comm),2) as 'Revenus moyen' from employes where emploi = 'VENDEUR';
/*-102-*/
select emploi, round(avg(sal+ifnull(comm,0)),2) as 'Revenus moyen' from employes group by emploi;
/*-103-*/
select sum(sal) 'somme salaires', sum(comm) 'somme commissions' from employes where emploi = 'VENDEUR';
/*-104-*/

=======
create database [if not exists] emp_serv;
create table employes
(
    noemp int(4) primary key not null,
    nom varchar(20),
    prenom varchar(20),
    emploi varchar(20),
    sup int(4),
    embauche date,
    sal decimal(9,2),
    comm decimal(9,2),
    noserv int(2) not null
);
create table services
(
    noserv int(2) not null,
    service varchar(20),
    ville varchar(20),
    primary key (noserv)
);

alter table employes
add constraint foreign key (noserv) references services(noserv);
alter table employes
add constraint foreign key (sup) references employes(noemp);

insert into services(noserv,service,ville) 
values 
(1,'DIRECTION','PARIS'),
(2,'LOGISTIQUE','SECLIN'),
(3,'VENTES','ROUBAIX'),
(4,'FORMATION',"VILLENEUVE D'ASCQ"),
(5,'INFORMATIQUE','LILLE'),
(6,'COMPTABILITE','LILLE'),
(7,'TECHNIQUE','ROUBAIX');

insert into employe(noemp,nom,prenom,emploi,sup,embauche,sal,comm,noserv)
values
(1000,'LEROY','PAUL','PRESIDENT',null,'1987-10-25',55005.5,null,1),
(1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,'1987-10-25',12351.24,null,1);
(1101,'DUMONT','LOUIS','VENDEUR',1300,'1987-10-25',9047.9, 0.0, 1),
(1102,'MINET','MARC','VENDEUR',1300,'1987-10-25',8085.81,17230,1),
(1104,'NYS','ETIENNE','TECHNICIEN',1200,'1987-10-25',12342.23,null,1),
(1105,'DENIMAL','JEROME','COMPTABLE',1600,'1987-10-25',15746.57,null,1),
(1200,'LEMAIRE','GUY','DIRECTEUR',1000,'1987-03-11',36303.63,null,2),
(1201,'MARTIN','JEAN','TECHNICIEN',1200,'1987-06-25',11235.12,null,2),
(1202,'DUPONT','JACQUES','TECHNICIEN',1200,'1988-10-30',10313.03,null,2),
(1300,'LENOIR','GERARD','DIRECTEUR',1000,'1987-04-02',31353.14,13071,3),
(1301,'GERARD','ROBERT','VENDEUR',1300,'1999-04-16',7694.77,12430,3),
(1303,'MASURE','EMILE','TECHNICIEN',1200,'1988-06-17',10451.05,null,3),
(1500,'DUPONT','JEAN','DIRECTEUR',1000,'1987-10-23',28434.84,null,5),
(1501,'DUPIRE','PIERRE','ANALYSTE',1500,'1984-10-24',23102.31,null,5),
(1502,'DURAND','BERNARD','PROGRAMMEUR',1500,'1987-07-30',13201.32,null,5),
(1503,'DELNATTE','LUC','PUPITREUR',1500,'1999-01-15',8801.01,null,5),
(1600,'LAVARE','PAUL','DIRECTEUR',1000,'1991-12-13',31238.12,null,5),
(1601,'CARON','ALAIN','COMPTABLE',1600,'1985-09-16',33003.3,null,5),
(1602,'DUBOIS','JULES','VENDEUR',1300,'1990-12-20',9520.95,35535,5),
(1603,'MOREL','ROBERT','COMPTABLE',1600,'1985-07-18',33003.3,null,5),
(1604,'HAVET','ALAIN','VENDEUR',1300,'1991-01-01',9388.94,33415,5),
(1605,'RICHARD','JULES','COMPTABLE',1600,'1985-10-22',33503.35,null,6),
(1615,'DUPREZ','JEAN','BALAYEUR',1000,'1998-10-22',6000.6,null,6);

insert into employes(noemp,nom,prenom,emploi,sup,embauche,sal,comm,noserv)
values
(1105,'DENIMAL','JEROME','COMPTABLE',1600,'1987-10-25',15746.57,null,1),
(1102,'MINET','MARC','VENDEUR',1300,'1987-10-25',8085.81,17230,1),
(1101,'DUMONT','LOUIS','VENDEUR',1300,'1987-10-25',9047.9, 0.0, 1),
(1104,'NYS','ETIENNE','TECHNICIEN',1200,'1987-10-25',12342.23,null,1),
(1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,'1987-10-25',12351.24,null,1),
(1000,'LEROY','PAUL','PRESIDENT',null,'1987-10-25',55005.5,null,1),
(1202,'DUPONT','JACQUES','TECHNICIEN',1200,'1988-10-30',10313.03,null,2),
(1201,'MARTIN','JEAN','TECHNICIEN',1200,'1987-06-25',11235.12,null,2),
(1200,'LEMAIRE','GUY','DIRECTEUR',1000,'1987-03-11',36303.63,null,2),
(1301,'GERARD','ROBERT','VENDEUR',1300,'1999-04-16',7694.77,12430,3),
(1303,'MASURE','EMILE','TECHNICIEN',1200,'1988-06-17',10451.05,null,3),
(1300,'LENOIR','GERARD','DIRECTEUR',1000,'1987-04-02',31353.14,13071,3),
(1603,'MOREL','ROBERT','COMPTABLE',1600,'1985-07-18',33003.3,null,5),
(1601,'CARON','ALAIN','COMPTABLE',1600,'1985-09-16',33003.3,null,5),
(1503,'DELNATTE','LUC','PUPITREUR',1500,'1999-01-15',8801.01,null,5),
(1502,'DURAND','BERNARD','PROGRAMMEUR',1500,'1987-07-30',13201.32,null,5),
(1501,'DUPIRE','PIERRE','ANALYSTE',1500,'1984-10-24',23102.31,null,5),
(1604,'HAVET','ALAIN','VENDEUR',1300,'1991-01-01',9388.94,33415,5),
(1602,'DUBOIS','JULES','VENDEUR',1300,'1990-12-20',9520.95,35535,5),
(1600,'LAVARE','PAUL','DIRECTEUR',1000,'1991-12-13',31238.12,null,5),
(1500,'DUPONT','JEAN','DIRECTEUR',1000,'1987-10-23',28434.84,null,5),
(1605,'RICHARD','JULES','COMPTABLE',1600,'1985-10-22',33503.35,null,6),
(1615,'DUPREZ','JEAN','BALAYEUR',1000,'1998-10-22',6000.6,null,6);

/*-1-*/
select * from services;
/*-2-*/
select noserv, service, ville from services;
/*-3-*/
select noserv, service from services;
/*-4-*/
select * from employes;
/*-5-*/
select emploi from employes;
/*-6-*/
select distinct emploi from employes;
/*-7-*/
select * from employes where noserv=3;
/*-8-*/
select noemp, nom, prenom, noserv from employes where emploi = "TECHNICIEN";
/*-9-*/
select noserv, service from services where noserv > 2;
/*-10-*/
select noserv, service from services where noserv <= 2;
/*-11-*/
select * from employes where comm < sal;
select * from employes where comm < sal or comm is null;
/*-12-*/
select * from employes where comm is null or comm = 0;
/*-13-*/
select * from employes where comm is not null order by comm;
/*-14-*/
select * from employes where sup is not null;
/*-15-*/
select * from employes where sup is null;
/*-16-*/
select nom, emploi, sal, noserv from employes where noserv = 5 and sal > 20000;
/*-17-*/
select * from employes where noserv = 6 and emploi = "VENDEUR" and sal >= 9500;
/*-18-*/
select * from employes where emploi = "PRESIDENT" or emploi = "DIRECTEUR";
/*-19-*/
select * from employes where emploi = "DIRECTEUR" and noserv != 3;
/*-20-*/
select * from employes where (noserv = 1 and emploi = "TECHNICIEN") or emploi = "DIRECTEUR";
/*-21-*/
select * from employes where noserv = 1 and (emploi = "TECHNICIEN" or emploi = "DIRECTEUR");
/*-22-*/
select * from employes where noserv = 1 and (emploi = "DIRECTEUR" or emploi = "TECHNICIEN");
/*-23-*/
select * from employes where noserv = 1 and emploi != "DIRECTEUR" and emploi != "TECHNICIEN";
/*-24-*/
select * from employes where emploi in ('TECHNICIEN','COMPTABLE','VENDEUR');
/*-25-*/
select * from employes where emploi not in ('TECHNICIEN', 'COMPTABLE', 'VENDEUR');
/*-26-*/
select * from employes where emploi = 'DIRECTEUR' and noserv in (2,4,5);
/*-27-*/
select * from employes where sup is not null and noserv not in (1,3,5);
/*-28-*/
select * from employes where sal between 20000 and 40000;
/*-29-*/
select * from employes where sal not between 20000 and 40000;
/*-30-*/
select * from employes where emploi != 'DIRECTEUR' and embauche between '1988-01-01' and '1988-12-31';
select * from employes where emploi != 'DIRECTEUR' and embauche like '1988%';
/*-31-*/
select * from employes where emploi = 'DIRECTEUR' and noserv between 2 and 5;
/*-32-*/
select * from employes where nom like 'M%';
/*-33-*/
select * from employes where nom like '%T';
/*-34-*/
select * from employes where nom like '%E%E%';
/*-35-*/
select * from employes where nom like '%E%' and nom not like '%E%E%';
/*-36-*/
select * from employes where nom like '%N%' and nom like '%O%';
/*-37-*/
select * from employes where nom like '_____N';
/*-38-*/
select * from employes where nom like '__R%';
/*-39-*/
select * from employes where nom not like '_____';
/*-40-*/
select nom, prenom, noserv, sal from employes where noserv = 3 order by sal asc;
/*-41-*/
select nom, prenom, noserv, sal from employes where noserv = 3 order by sal desc;
/*-42-*/
select nom, prenom, noserv, sal from employes where noserv = 3 order by 4 asc;
select nom, prenom, noserv, sal from employes where noserv = 3 order by 4 desc;
/*-43-*/
select nom, prenom, noserv, sal, emploi from employes order by emploi asc, sal desc;
/*-44-*/
select nom, prenom, noserv, sal, emploi from employes order by 5 asc, 4 desc;
/*-45-*/
select nom, prenom, noserv, comm from employes where noserv = 3 order by comm;
/*-46-*/
select nom, prenom, noserv, comm from employes where noserv = 3 and comm order by comm desc;
/*-47-*/
select nom, prenom, emploi, service from employes join services on employes.noserv = services.noserv;
/*-48-*/
select nom, emploi, employes.noserv, service from employes join services on employes.noserv = services.noserv;
/*-49-*/
select nom, emploi, s.noserv, service from employes as e join services as s on e.noserv = s.noserv;
/*-50-*/
select nom, emploi, services.* from employes join services on employes.noserv = services.noserv;
/*-51-*/
select e1.nom as nomEmploye, e1.embauche as embaucheEmploye, e1.sup as numeroSuperieur, e2.noemp as numeroEmploye, e2.nom as nomChef, e2.embauche as embaucheChef
from employes as e1 left join employes as e2 on e1.sup = e2.noemp
where e1.embauche < e2.embauche order by e1.nom,e2.nom;

select e1.nom as nomEmploye, e1.embauche as embaucheEmploye, e1.sup as numeroSuperieur, e2.noemp as numeroEmploye, e2.nom as nomChef, e2.embauche as embaucheChef
from employes as e1 inner join employes as e2 on e1.sup = e2.noemp
where e1.embauche < e2.embauche order by e1.nom,e2.nom;
/*-52-*/
select prenom from employes where emploi = 'DIRECTEUR'
union 
select prenom from employes where emploi = 'TECHNICIEN' and noserv = 1;
/*-53-*/
select services.noserv from services where noserv not in (select services.noserv from services join employes on services.noserv = employes.noserv);
select services.noserv from employes right join services on employes.noserv = services.noserv where employes.noserv is null;
/*-54-*/
select distinct services.noserv, services.service from employes left join services on employes.noserv = services.noserv where employes.noserv is not null;
/*-55-*/
select * from employes where employes.noserv in (select services.noserv from services where ville = 'LILLE');
select employes.*, services.ville from employes,services where employes.noserv in (select s1.noserv from services as s1 where ville = 'LILLE') and employes.noserv = services.noserv;
/*-56-*/
select * from employes as e1 where e1.nom != 'DUBOIS' and exists (select * from employes as e2 where e1.sup = e2.sup and e2.nom = 'DUBOIS');
select * from employes where sup = ( select sup from employes where nom = 'DUBOIS' ) and nom != 'DUBOIS';
select e2.* from employes as e1 join employes as e2 on e1.sup = e2.sup where e1.nom = 'DUBOIS' and e2.nom != e1.nom;
/*-57-*/
select * from employes where embauche in (select embauche from employes where nom = 'DUMONT');
/*-58-*/
select nom, e1.embauche from employes e1 where embauche < (select e2.embauche from employes e2 where nom = 'MINET') order by embauche;
/*-59-*/
select nom, prenom, embauche from employes where embauche < all(select e2.embauche from employes e2 where e2.noserv = 6);
select nom, prenom, embauche from employes where embauche < (select min(e2.embauche) from employes as e2 where e2.noserv = 6);
/*-60-*/
select nom, prenom, sal from employes where sal > (select min(e2.sal) from employes e2 where e2.noserv = 3) order by sal;
select nom, prenom, sal from employes e1 where exists ( select * from employes e2 where e2.noserv = 3 and e1.sal > e2.sal) order by sal;
/*-61-*/
select nom, e1.noserv, emploi, sal from employes e1 inner join services s1 on e1.noserv = s1.noserv 
where s1.ville in (select ville from employes e2 inner join services s2 on e2.noserv = s2.noserv where nom = 'HAVET');

select nom, noserv, emploi, sal from employes natural join services
where ville in (select ville from services natural join employes where nom = 'HAVET');
/*-62-*/
select * from employes where noserv = 1 and emploi in (select emploi from employes where noserv = 3);
/*-63-*/
select * from employes where noserv = 1 and emploi not in (select emploi from employes where noserv = 3);
/*-64-*/
select nom, prenom, emploi, sal from employes 
where emploi in (select emploi from employes where nom = 'CARON') and sal > (select sal from employes where nom = 'CARON');
/*-65-*/
select * from employes 
where noserv = 1 and emploi in (select e1.emploi from employes e1 inner join services s1 on e1.noserv = s1.noserv where s1.service = 'VENTES');
/*-66-*/
select * from employes e1 inner join services s1 on e1.noserv = s1.noserv 
where ville = 'LILLE' and emploi in (select emploi from employes where nom = 'RICHARD') and nom != 'RICHARD' order by nom;
/*-67-*/
select * from employes where sal > (select avg(sal) from employes) order by noserv;
/*-68-*/
select * from employes e1 inner join services s1 on e1.noserv = s1.noserv 
where service = 'INFORMATIQUE' and DATE_FORMAT(e1.embauche,'%Y') 
in (select DATE_FORMAT(e2.embauche,'%Y') from employes e2 inner join services s2 on e2.noserv = s2.noserv where s2.service = 'VENTES');
/*-69-*/
select e1.nom, e1.emploi, s1.service from employes e1 
inner join employes e2 on e1.sup = e2.noemp  
inner join services s1 on e1.noserv = s1.noserv 
where e1.noserv != e2.noserv;
/*-70-*/
select e2.nom, e2.prenom, s1.service, e2.sal from employes e1 
inner join employes e2 on e1.sup = e2.noemp  
inner join services s1 on e1.noserv = s1.noserv group by e2.nom order by 4 desc;
/*-71-*/
select nom, emploi, round(sal,2) as Revenu from employes order by sal desc;
/*-72-*/
select nom, sal, comm from employes where comm > sal * 2;
/*-73-*/
select nom, prenom, emploi, round(comm*100/sal,2) as '% Commissions' from employes where emploi = 'VENDEUR' order by 4 desc;
/*-74-*/
select nom, emploi, service, round(sal*12,0) as 'Revenu annuel' from employes inner join services on employes.noserv = services.noserv where emploi = 'VENDEUR';
/*-75-76-77-*/
select nom, prenom, emploi, sal as Salaire, round(ifnull(comm,0),0) as 'Gain mensuel', round(sal/12,0) as 'Revenu mensuel' from employes where noserv in (3,5,6);
/*-78-*/
select nom, emploi, round(sal/22,2) as 'Salaire journalier', round(sal/22/8,2) as 'Salaire horaire' from employes where noserv in (3,5,6);
/*-79-*/
select nom, emploi, truncate(sal/22,2) as 'Salaire journalier', truncate(sal/22/8,2) as 'Salaire horaire' from employes where noserv in (3,5,6);
/*-80-*/
select concat(rpad(service,12,' '),' ----> ',ville) as 'Service et Ville' from services;
/*-81-*/
select @ce := @ce + 1 as 'code emploi', nom, emploi, from employes, (select @ce := 0) as code_emploi;
/*-82-*/
select noemp, left(lpad(nom,length(nom)+5,'*****'),5) as nom, noserv from employes where noserv = 1;
/*-83-*/
select substring(service,1,5) from services;
/*-84-*/
select * from employes where embauche like '1988%';
/*-85-*/
select upper(nom) as NOM, left(upper(nom),1) as N, lower(nom) as nom from employes;
/*-86-*/
select locate('M', nom) as M, locate('E', nom) as E, nom from employes;
/*-87-*/
select length(service) as 'service nb lettre', service from services;
/*-88-*/
select nom, emploi, sal, left(RPAD('',sal/55000*30,'▬'),30) as 'Histogramme des salaires' from employes order by sal desc;
/*-89-*/
select nom, emploi, embauche from employes where noserv = 6;
/*-90-*/
select nom, emploi, DATE_FORMAT(embauche,'%d-%m-%y') as embauche from employes where noserv = 6;
/*-91-*/
select nom, emploi, DATE_FORMAT(embauche,'%a %d %M %Y') as embauche from employes where noserv = 6;
/*-92-*/
select nom, emploi, DATE_FORMAT(embauche,'%a %d %b %y') as embauche from employes where noserv = 6;
/*-93-*/
select nom, emploi, DATE_FORMAT(embauche,'%y %b %d') as embauche from employes where noserv = 6;
/*-94-*/
select nom, emploi, DATE_FORMAT(embauche,'%W-%d-%M-%Y') as embauche from employes where noserv = 6;
/*-95-*/
select employes.*, datediff(sysdate(), embauche) as "Jours d'anciennete" from employes;
/*-96-*/
select employes.*, TIMESTAMPDIFF(MONTH, embauche, SYSDATE()) as "Mois d'anciennete" from employes;
/*-97-*/

/*-98-*/

/*-99-*/
select datediff(sysdate(),'1994-06-26') as 'n jours';
/*-100-*/
select TIMESTAMPDIFF(MONTH,'1994-06-26',sysdate()) as 'n mois';
/*-101-*/
select round(avg(sal+comm),2) as 'Revenus moyen' from employes where emploi = 'VENDEUR';
/*-102-*/
select emploi, round(avg(sal+ifnull(comm,0)),2) as 'Revenus moyen' from employes group by emploi;
/*-103-*/
select sum(sal) 'somme salaires', sum(comm) 'somme commissions' from employes where emploi = 'VENDEUR';
/*-104-*/

>>>>>>> 4dd7b61 (maj)
