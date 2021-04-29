CREATE DATABASE [if NOT exists] emp_serv;
CREATE TABLE employes
(
    noemp int(4) primary key NOT NULL,
    nom varchar(20),
    prenom varchar(20),
    emploi varchar(20),
    sup int(4),
    embauche date,
    sal decimal(9,2),
    comm decimal(9,2),
    noserv int(2) NOT NULL
);
CREATE TABLE services
(
    noserv int(2) NOT NULL,
    service varchar(20),
    ville varchar(20),
    primary key (noserv)
);

ALTER TABLE employes
ADD CONSTRAINT FOREIGN KEY (noserv) REFERENCES services(noserv);
ALTER TABLE employes
ADD CONSTRAINT FOREIGN KEY (sup) REFERENCES employes(noemp);

INSERT INTO services(noserv,service,ville) 
VALUES 
(1,'DIRECTION','PARIS'),
(2,'LOGISTIQUE','SECLIN'),
(3,'VENTES','ROUBAIX'),
(4,'FORMATION',"VILLENEUVE D'ASCQ"),
(5,'INFORMATIQUE','LILLE'),
(6,'COMPTABILITE','LILLE'),
(7,'TECHNIQUE','ROUBAIX');

INSERT INTO employe(noemp,nom,prenom,emploi,sup,embauche,sal,comm,noserv)
VALUES
(1000,'LEROY','PAUL','PRESIDENT',NULL,'1987-10-25',55005.5,NULL,1),
(1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,'1987-10-25',12351.24,NULL,1);
(1101,'DUMONT','LOUIS','VENDEUR',1300,'1987-10-25',9047.9, 0.0, 1),
(1102,'MINET','MARC','VENDEUR',1300,'1987-10-25',8085.81,17230,1),
(1104,'NYS','ETIENNE','TECHNICIEN',1200,'1987-10-25',12342.23,NULL,1),
(1105,'DENIMAL','JEROME','COMPTABLE',1600,'1987-10-25',15746.57,NULL,1),
(1200,'LEMAIRE','GUY','DIRECTEUR',1000,'1987-03-11',36303.63,NULL,2),
(1201,'MARTIN','JEAN','TECHNICIEN',1200,'1987-06-25',11235.12,NULL,2),
(1202,'DUPONT','JACQUES','TECHNICIEN',1200,'1988-10-30',10313.03,NULL,2),
(1300,'LENOIR','GERARD','DIRECTEUR',1000,'1987-04-02',31353.14,13071,3),
(1301,'GERARD','ROBERT','VENDEUR',1300,'1999-04-16',7694.77,12430,3),
(1303,'MASURE','EMILE','TECHNICIEN',1200,'1988-06-17',10451.05,NULL,3),
(1500,'DUPONT','JEAN','DIRECTEUR',1000,'1987-10-23',28434.84,NULL,5),
(1501,'DUPIRE','PIERRE','ANALYSTE',1500,'1984-10-24',23102.31,NULL,5),
(1502,'DURAND','BERNARD','PROGRAMMEUR',1500,'1987-07-30',13201.32,NULL,5),
(1503,'DELNATTE','LUC','PUPITREUR',1500,'1999-01-15',8801.01,NULL,5),
(1600,'LAVARE','PAUL','DIRECTEUR',1000,'1991-12-13',31238.12,NULL,5),
(1601,'CARON','ALAIN','COMPTABLE',1600,'1985-09-16',33003.3,NULL,5),
(1602,'DUBOIS','JULES','VENDEUR',1300,'1990-12-20',9520.95,35535,5),
(1603,'MOREL','ROBERT','COMPTABLE',1600,'1985-07-18',33003.3,NULL,5),
(1604,'HAVET','ALAIN','VENDEUR',1300,'1991-01-01',9388.94,33415,5),
(1605,'RICHARD','JULES','COMPTABLE',1600,'1985-10-22',33503.35,NULL,6),
(1615,'DUPREZ','JEAN','BALAYEUR',1000,'1998-10-22',6000.6,NULL,6);

INSERT INTO employes(noemp,nom,prenom,emploi,sup,embauche,sal,comm,noserv)
VALUES
(1105,'DENIMAL','JEROME','COMPTABLE',1600,'1987-10-25',15746.57,NULL,1),
(1102,'MINET','MARC','VENDEUR',1300,'1987-10-25',8085.81,17230,1),
(1101,'DUMONT','LOUIS','VENDEUR',1300,'1987-10-25',9047.9, 0.0, 1),
(1104,'NYS','ETIENNE','TECHNICIEN',1200,'1987-10-25',12342.23,NULL,1),
(1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,'1987-10-25',12351.24,NULL,1),
(1000,'LEROY','PAUL','PRESIDENT',NULL,'1987-10-25',55005.5,NULL,1),
(1202,'DUPONT','JACQUES','TECHNICIEN',1200,'1988-10-30',10313.03,NULL,2),
(1201,'MARTIN','JEAN','TECHNICIEN',1200,'1987-06-25',11235.12,NULL,2),
(1200,'LEMAIRE','GUY','DIRECTEUR',1000,'1987-03-11',36303.63,NULL,2),
(1301,'GERARD','ROBERT','VENDEUR',1300,'1999-04-16',7694.77,12430,3),
(1303,'MASURE','EMILE','TECHNICIEN',1200,'1988-06-17',10451.05,NULL,3),
(1300,'LENOIR','GERARD','DIRECTEUR',1000,'1987-04-02',31353.14,13071,3),
(1603,'MOREL','ROBERT','COMPTABLE',1600,'1985-07-18',33003.3,NULL,5),
(1601,'CARON','ALAIN','COMPTABLE',1600,'1985-09-16',33003.3,NULL,5),
(1503,'DELNATTE','LUC','PUPITREUR',1500,'1999-01-15',8801.01,NULL,5),
(1502,'DURAND','BERNARD','PROGRAMMEUR',1500,'1987-07-30',13201.32,NULL,5),
(1501,'DUPIRE','PIERRE','ANALYSTE',1500,'1984-10-24',23102.31,NULL,5),
(1604,'HAVET','ALAIN','VENDEUR',1300,'1991-01-01',9388.94,33415,5),
(1602,'DUBOIS','JULES','VENDEUR',1300,'1990-12-20',9520.95,35535,5),
(1600,'LAVARE','PAUL','DIRECTEUR',1000,'1991-12-13',31238.12,NULL,5),
(1500,'DUPONT','JEAN','DIRECTEUR',1000,'1987-10-23',28434.84,NULL,5),
(1605,'RICHARD','JULES','COMPTABLE',1600,'1985-10-22',33503.35,NULL,6),
(1615,'DUPREZ','JEAN','BALAYEUR',1000,'1998-10-22',6000.6,NULL,6);

/*-1-*/
SELECT * FROM services;

/*-2-*/
SELECT noserv, service, ville FROM services;

/*-3-*/
SELECT noserv, service FROM services;

/*-4-*/
SELECT * FROM employes;

/*-5-*/
SELECT emploi FROM employes;

/*-6-*/
SELECT DISTINCT emploi FROM employes;

/*-7-*/
SELECT * FROM employes WHERE noserv=3;

/*-8-*/
SELECT noemp, nom, prenom, noserv FROM employes WHERE emploi = "TECHNICIEN";

/*-9-*/
SELECT noserv, service FROM services WHERE noserv > 2;

/*-10-*/
SELECT noserv, service FROM services WHERE noserv <= 2;

/*-11-*/
SELECT * FROM employes WHERE comm < sal;

SELECT * FROM employes WHERE comm < sal OR comm IS NULL;

/*-12-*/
SELECT * FROM employes WHERE comm IS NULL OR comm = 0;

/*-13-*/
SELECT * FROM employes WHERE comm IS NOT NULL ORDER BY comm;

/*-14-*/
SELECT * FROM employes WHERE sup IS NOT NULL;

/*-15-*/
SELECT * FROM employes WHERE sup IS NULL;

/*-16-*/
SELECT nom, emploi, sal, noserv FROM employes WHERE noserv = 5 AND sal > 20000;

/*-17-*/
SELECT * FROM employes WHERE noserv = 6 AND emploi = "VENDEUR" AND sal >= 9500;

/*-18-*/
SELECT * FROM employes WHERE emploi = "PRESIDENT" OR emploi = "DIRECTEUR";

/*-19-*/
SELECT * FROM employes WHERE emploi = "DIRECTEUR" AND noserv != 3;

/*-20-*/
SELECT * FROM employes WHERE (noserv = 1 AND emploi = "TECHNICIEN") OR emploi = "DIRECTEUR";

/*-21-*/
SELECT * FROM employes WHERE noserv = 1 AND (emploi = "TECHNICIEN" OR emploi = "DIRECTEUR");

/*-22-*/
SELECT * FROM employes WHERE noserv = 1 AND (emploi = "DIRECTEUR" OR emploi = "TECHNICIEN");

/*-23-*/
SELECT * FROM employes WHERE noserv = 1 AND emploi != "DIRECTEUR" AND emploi != "TECHNICIEN";

/*-24-*/
SELECT * FROM employes WHERE emploi IN ('TECHNICIEN','COMPTABLE','VENDEUR');

/*-25-*/
SELECT * FROM employes WHERE emploi NOT IN ('TECHNICIEN', 'COMPTABLE', 'VENDEUR');

/*-26-*/
SELECT * FROM employes WHERE emploi = 'DIRECTEUR' AND noserv IN (2,4,5);

/*-27-*/
SELECT * FROM employes WHERE sup IS NOT NULL AND noserv NOT IN (1,3,5);

/*-28-*/
SELECT * FROM employes WHERE sal BETWEEN 20000 AND 40000;

/*-29-*/
SELECT * FROM employes WHERE sal NOT BETWEEN 20000 AND 40000;

/*-30-*/
SELECT * FROM employes WHERE emploi != 'DIRECTEUR' AND embauche BETWEEN '1988-01-01' AND '1988-12-31';

SELECT * FROM employes WHERE emploi != 'DIRECTEUR' AND embauche LIKE '1988%';

/*-31-*/
SELECT * FROM employes WHERE emploi = 'DIRECTEUR' AND noserv BETWEEN 2 AND 5;

/*-32-*/
SELECT * FROM employes WHERE nom LIKE 'M%';

/*-33-*/
SELECT * FROM employes WHERE nom LIKE '%T';

/*-34-*/
SELECT * FROM employes WHERE nom LIKE '%E%E%';

/*-35-*/
SELECT * FROM employes WHERE nom LIKE '%E%' AND nom NOT LIKE '%E%E%';

/*-36-*/
SELECT * FROM employes WHERE nom LIKE '%N%' AND nom LIKE '%O%';

/*-37-*/
SELECT * FROM employes WHERE nom LIKE '_____N';

/*-38-*/
SELECT * FROM employes WHERE nom LIKE '__R%';

/*-39-*/
SELECT * FROM employes WHERE nom NOT LIKE '_____';

/*-40-*/
SELECT nom, prenom, noserv, sal FROM employes WHERE noserv = 3 ORDER BY sal ASC;

/*-41-*/
SELECT nom, prenom, noserv, sal FROM employes WHERE noserv = 3 ORDER BY sal DESC;

/*-42-*/
SELECT nom, prenom, noserv, sal FROM employes WHERE noserv = 3 ORDER BY 4 ASC;

SELECT nom, prenom, noserv, sal FROM employes WHERE noserv = 3 ORDER BY 4 DESC;

/*-43-*/
SELECT nom, prenom, noserv, sal, emploi FROM employes ORDER BY emploi ASC, sal DESC;

/*-44-*/
SELECT nom, prenom, noserv, sal, emploi FROM employes ORDER BY 5 ASC, 4 DESC;

/*-45-*/
SELECT nom, prenom, noserv, comm FROM employes WHERE noserv = 3 ORDER BY comm;

/*-46-*/
SELECT nom, prenom, noserv, comm FROM employes WHERE noserv = 3 AND comm ORDER BY comm DESC;

/*-47-*/
SELECT nom, prenom, emploi, service FROM employes JOIN services ON employes.noserv = services.noserv;

/*-48-*/
SELECT nom, emploi, employes.noserv, service FROM employes JOIN services ON employes.noserv = services.noserv;

/*-49-*/
SELECT nom, emploi, s.noserv, service FROM employes AS e JOIN services AS s ON e.noserv = s.noserv;

/*-50-*/
SELECT nom, emploi, services.* FROM employes JOIN services ON employes.noserv = services.noserv;

/*-51-*/
SELECT e1.nom AS nomEmploye, e1.embauche AS embaucheEmploye, e1.sup AS numeroSuperieur, e2.noemp AS numeroEmploye, e2.nom AS nomChef, e2.embauche AS embaucheChef
FROM employes AS e1 LEFT JOIN employes AS e2 ON e1.sup = e2.noemp
WHERE e1.embauche < e2.embauche ORDER BY e1.nom,e2.nom;

SELECT e1.nom AS nomEmploye, e1.embauche AS embaucheEmploye, e1.sup AS numeroSuperieur, e2.noemp AS numeroEmploye, e2.nom AS nomChef, e2.embauche AS embaucheChef
FROM employes AS e1 INNER JOIN employes AS e2 ON e1.sup = e2.noemp
WHERE e1.embauche < e2.embauche ORDER BY e1.nom,e2.nom;

/*-52-*/
SELECT prenom FROM employes WHERE emploi = 'DIRECTEUR'
UNION 
SELECT prenom FROM employes WHERE emploi = 'TECHNICIEN' AND noserv = 1;

/*-53-*/
SELECT services.noserv FROM services WHERE noserv NOT IN (SELECT services.noserv FROM services JOIN employes ON services.noserv = employes.noserv);

SELECT services.noserv FROM employes RIGHT JOIN services ON employes.noserv = services.noserv WHERE employes.noserv IS NULL;

/*-54-*/
SELECT DISTINCT services.noserv, services.service FROM employes LEFT JOIN services ON employes.noserv = services.noserv WHERE employes.noserv IS NOT NULL;

/*-55-*/
SELECT * FROM employes WHERE employes.noserv IN (SELECT services.noserv FROM services WHERE ville = 'LILLE');

SELECT employes.*, services.ville FROM employes,services 
WHERE employes.noserv IN (SELECT s1.noserv FROM services AS s1 WHERE ville = 'LILLE') AND employes.noserv = services.noserv;

/*-56-*/
SELECT * FROM employes AS e1 WHERE e1.nom != 'DUBOIS' AND exists (SELECT * FROM employes AS e2 WHERE e1.sup = e2.sup AND e2.nom = 'DUBOIS');

SELECT * FROM employes WHERE sup = ( SELECT sup FROM employes WHERE nom = 'DUBOIS' ) AND nom != 'DUBOIS';

SELECT e2.* FROM employes AS e1 JOIN employes AS e2 ON e1.sup = e2.sup WHERE e1.nom = 'DUBOIS' AND e2.nom != e1.nom;

/*-57-*/
SELECT * FROM employes WHERE embauche IN (SELECT embauche FROM employes WHERE nom = 'DUMONT');

/*-58-*/
SELECT nom, e1.embauche FROM employes e1 WHERE embauche < (SELECT e2.embauche FROM employes e2 WHERE nom = 'MINET') ORDER BY embauche;

/*-59-*/
SELECT nom, prenom, embauche FROM employes WHERE embauche < all(SELECT e2.embauche FROM employes e2 WHERE e2.noserv = 6);

SELECT nom, prenom, embauche FROM employes WHERE embauche < (SELECT MIN(e2.embauche) FROM employes AS e2 WHERE e2.noserv = 6);

/*-60-*/
SELECT nom, prenom, sal FROM employes WHERE sal > (SELECT MIN(e2.sal) FROM employes e2 WHERE e2.noserv = 3) ORDER BY sal;

SELECT nom, prenom, sal FROM employes e1 WHERE EXISTS ( SELECT * FROM employes e2 WHERE e2.noserv = 3 AND e1.sal > e2.sal) ORDER BY sal;

/*-61-*/
SELECT nom, e1.noserv, emploi, sal FROM employes e1 INNER JOIN services s1 ON e1.noserv = s1.noserv 
WHERE s1.ville IN (SELECT ville FROM employes e2 INNER JOIN services s2 ON e2.noserv = s2.noserv WHERE nom = 'HAVET');

SELECT nom, noserv, emploi, sal FROM employes NATURAL JOIN services
WHERE ville IN (SELECT ville FROM services NATURAL JOIN employes WHERE nom = 'HAVET');

/*-62-*/
SELECT * FROM employes WHERE noserv = 1 AND emploi IN (SELECT emploi FROM employes WHERE noserv = 3);

/*-63-*/
SELECT * FROM employes WHERE noserv = 1 AND emploi NOT IN (SELECT emploi FROM employes WHERE noserv = 3);

/*-64-*/
SELECT nom, prenom, emploi, sal FROM employes 
WHERE emploi IN (SELECT emploi FROM employes WHERE nom = 'CARON') AND sal > (SELECT sal FROM employes WHERE nom = 'CARON');

/*-65-*/
SELECT * FROM employes 
WHERE noserv = 1 AND emploi IN (SELECT e1.emploi FROM employes e1 INNER JOIN services s1 ON e1.noserv = s1.noserv WHERE s1.service = 'VENTES');

/*-66-*/
SELECT * FROM employes e1 INNER JOIN services s1 ON e1.noserv = s1.noserv 
WHERE ville = 'LILLE' AND emploi IN (SELECT emploi FROM employes WHERE nom = 'RICHARD') AND nom != 'RICHARD' ORDER BY nom;

/*-67-*/
SELECT * FROM employes WHERE sal > (SELECT AVG(sal) FROM employes) ORDER BY noserv;

/*-68-*/
SELECT * FROM employes e1 INNER JOIN services s1 ON e1.noserv = s1.noserv 
WHERE service = 'INFORMATIQUE' AND DATE_FORMAT(e1.embauche,'%Y') 
IN (SELECT DATE_FORMAT(e2.embauche,'%Y') FROM employes e2 INNER JOIN services s2 ON e2.noserv = s2.noserv WHERE s2.service = 'VENTES');

/*-69-*/
SELECT e1.nom, e1.emploi, s1.service FROM employes e1 
INNER JOIN employes e2 ON e1.sup = e2.noemp  
INNER JOIN services s1 ON e1.noserv = s1.noserv 
WHERE e1.noserv != e2.noserv;

/*-70-*/
SELECT e2.nom, e2.prenom, s1.service, e2.sal FROM employes e1 
INNER JOIN employes e2 ON e1.sup = e2.noemp  
INNER JOIN services s1 ON e1.noserv = s1.noserv GROUP BY e2.nom ORDER BY 4 DESC;

/*-71-*/
SELECT nom, emploi, ROUND(sal,2) AS Revenu FROM employes ORDER BY sal DESC;

/*-72-*/
SELECT nom, sal, comm FROM employes WHERE comm > sal * 2;

/*-73-*/
SELECT nom, prenom, emploi, ROUND(IFNULL(comm,0)*100/sal,2) AS '% Commissions' FROM employes WHERE emploi = 'VENDEUR' ORDER BY 4 DESC;

/*-74-*/
SELECT nom, emploi, service, ROUND(sal*12,0) AS 'Revenu annuel' FROM employes INNER JOIN services ON employes.noserv = services.noserv WHERE emploi = 'VENDEUR';

/*-75-76-77-*/
SELECT nom, prenom, emploi, sal AS Salaire, ROUND(IFNULL(comm,0),0) AS 'Gain mensuel', ROUND(sal/12,0) AS 'Revenu mensuel' FROM employes WHERE noserv IN (3,5,6);

/*-78-*/
SELECT nom, emploi, ROUND(sal/22,2) AS 'Salaire journalier', ROUND(sal/22/8,2) AS 'Salaire horaire' FROM employes WHERE noserv IN (3,5,6);

/*-79-*/
SELECT nom, emploi, TRUNCATE(sal/22,2) AS 'Salaire journalier', TRUNCATE(sal/22/8,2) AS 'Salaire horaire' FROM employes WHERE noserv IN (3,5,6);

/*-80-*/
SELECT CONCAT(rpad(service, (SELECT MAX(LENGTH(service)) FROM services),' '),' ----> ',ville) AS 'Service et Ville' FROM services;

/*-81-*/
SELECT @ce := @ce + 1 AS 'code emploi', nom, emploi FROM employes, (SELECT @ce := 0) AS code_emploi;

SELECT noserv, emploi, (
    CASE noserv 
    WHEN 1 THEN '*****'
    ELSE nom
    END
) AS nom 
FROM employes;

/*-82-*/
SELECT noemp, LEFT(LPAD(nom,LENGTH(nom)+5,'*****'),5) AS nom, noserv FROM employes WHERE noserv = 1;

/*-83-*/
SELECT SUBSTRING(service,1,5) FROM services;

/*-84-*/
SELECT * FROM employes WHERE embauche LIKE '1988%';

SELECT * FROM employes WHERE DATE_FORMAT(embauche, '%Y') = 1988;

/*-85-*/
SELECT UPPER(nom) AS NOM, CONCAT(LEFT(UPPER(nom),1),' ',LEFT(UPPER(prenom),1)) AS N, lower(nom) AS nom FROM employes;

/*-86-*/
SELECT locate('M', nom) AS M, locate('E', nom) AS E, nom FROM employes;

/*-87-*/
SELECT LENGTH(service) AS 'service nb lettre', service FROM services;

/*-88-*/
SELECT nom, emploi, sal, LEFT(RPAD('',sal/55000*30,'▬'),30) AS 'Histogramme des salaires' FROM employes ORDER BY sal DESC;

/*-89-*/
SELECT nom, emploi, embauche FROM employes WHERE noserv = 6;

/*-90-*/
SELECT nom, emploi, DATE_FORMAT(embauche,'%d-%m-%y') AS embauche FROM employes WHERE noserv = 6;

/*-91-*/
SELECT nom, emploi, DATE_FORMAT(embauche,'%a %d %M %Y') AS embauche FROM employes WHERE noserv = 6;

/*-92-*/
SELECT nom, emploi, DATE_FORMAT(embauche,'%a %d %b %y') AS embauche FROM employes WHERE noserv = 6;

/*-93-*/
SELECT nom, emploi, DATE_FORMAT(embauche,'%y %b %d') AS embauche FROM employes WHERE noserv = 6;

/*-94-*/
SELECT nom, emploi, DATE_FORMAT(embauche,'%W-%d-%M-%Y') AS embauche FROM employes WHERE noserv = 6;

/*-95-*/
SELECT employes.*, DATEDIFF(SYSDATE(), embauche) AS "Jours d'anciennete" FROM employes;

/*-96-*/
SELECT employes.*, TIMESTAMPDIFF(MONTH, embauche, SYSDATE()) AS "Mois d'anciennete" FROM employes;

/*-97-*/
SELECT DATE_ADD(embauche, INTERVAL 12 YEAR) AS majorees, embauche FROM employes ORDER BY 1;

/*-98-*/
SELECT employes.*, YEAR(SYSDATE()) - YEAR(embauche) AS "annee d'anciennete" FROM employes WHERE YEAR(SYSDATE()) - YEAR(embauche) > 12 ORDER BY 10;

/*-99-*/
SELECT DATEDIFF(SYSDATE(),'1994-06-26') AS 'n jours';

/*-100-*/
SELECT TIMESTAMPDIFF(MONTH,'1994-06-26',SYSDATE()) AS 'n mois';

/*-101-*/
SELECT ROUND(AVG(sal+comm),2) AS 'Revenus moyen' FROM employes WHERE emploi = 'VENDEUR';

/*-102-*/
SELECT emploi, ROUND(AVG(sal+IFNULL(comm,0)),2) AS 'Revenus moyen' FROM employes GROUP BY emploi;

/*-103-*/
SELECT SUM(sal) 'somme salaires', SUM(comm) 'somme commissions' FROM employes WHERE emploi = 'VENDEUR';

/*-104-*/
SELECT MAX(sal) AS 'MAX', MIN(sal) AS 'MIN', (MAX(sal) - MIN(sal)) AS 'MAX - MIN' FROM employes;

/*-105-*/
SELECT YEAR(embauche) AS Annee, COUNT(noemp) AS "Nombre d'employes" FROM employes GROUP BY YEAR(embauche);

/*-106-*/
SELECT service, MIN(LENGTH(service)) AS 'n lettres' FROM services WHERE LENGTH(service) = (SELECT MIN(LENGTH(service)) FROM services);

/*-107-*/
SELECT nom, emploi, sal/12 FROM employes WHERE sal IN (SELECT MIN(sal) FROM employes);

/*-108-*/
SELECT COUNT(noemp) FROM employes WHERE noserv = 3 AND comm IS NOT NULL;

/*-109-*/
SELECT noserv, COUNT(DISTINCT emploi) 'n emploi differents' FROM employes WHERE noserv = 1;

/*-110-*/
SELECT COUNT(noemp) AS 'nb employes du s3' FROM employes WHERE noserv = 3;

/*-111-*/
SELECT s.noserv, service, ROUND(AVG(sal)) AS 'sal moyen' FROM services s 
INNER JOIN employes e ON s.noserv = e.noserv GROUP BY s.noserv;

/*-112-*/
SELECT s.noserv, service, ROUND(AVG(sal)) AS 'sal moyen' FROM employes e 
INNER JOIN services s ON s.noserv = e.noserv WHERE e.emploi != 'DIRECTEUR' AND emploi != 'PRESIDENT' GROUP BY s.noserv;

/*-113-114-*/
SELECT s.noserv, s.service, e.emploi, COUNT(e.noemp) effectifs, AVG(e.sal) 'salaire moyen' FROM employes e 
INNER JOIN services s ON e.noserv = s.noserv GROUP BY s.service, e.emploi ORDER BY 1;

SELECT s.noserv, s.service, e.emploi, COUNT(e.noemp) effectifs, AVG(e.sal) 'salaire moyen' FROM employes e 
INNER JOIN services s ON e.noserv = s.noserv GROUP BY s.noserv, e.emploi ORDER BY 1;

/*-115-*/
SELECT e.emploi, COUNT(e.noemp) effectifs, AVG (e.sal) 'salaire moyen' FROM employes e GROUP BY e.emploi HAVING COUNT(e.noemp) > 2;

/*-116-*/
SELECT s.service, e.emploi, COUNT(*) effectifs 
FROM services s INNER JOIN employes e ON s.noserv = e.noserv 
WHERE e.emploi = 'VENDEUR' GROUP BY s.noserv HAVING COUNT(*) >= 2;

/*-117-*/
SELECT s.service, AVG(IFNULL(e.comm,0)) 'comm moyenne'
FROM services s INNER JOIN employes e ON s.noserv = e.noserv
GROUP BY s.service HAVING AVG(IFNULL(e.comm,0)) > AVG(e.sal/4);

/*-118-*/----------------
SELECT emploi, AVG(sal) FROM employes GROUP BY emploi HAVING AVG(sal) >
(SELECT AVG(sal) FROM employes WHERE emploi = 'DIRECTEUR');

/*-119-*/
SELECT s.service, COUNT(if (comm IS NULL,0, NULL)) 'touche pas comm', COUNT(e.comm) 'touche comm' FROM services s 
INNER JOIN employes e ON s.noserv = e.noserv GROUP BY s.service;

/*-120-*/
SELECT emploi, COUNT(sal) 'n sal', ROUND(AVG(sal),2) 'moyenne sal', SUM(sal) 'somme sal',
       COUNT(comm) 'n comm', ROUND(AVG(IFNULL(comm,0)),2) 'moyenne comm', SUM(IFNULL(comm,0)) 'somme comm',
       (COUNT(sal) + COUNT(comm)) 'n sal & comm', ROUND(AVG(sal + IFNULL(comm,0)),2) 'moyenne sal & comm', SUM(sal + IFNULL(comm,0)) 'somme sal & comm'
FROM employes GROUP BY emploi;

/*Copie table*/
CREATE TABLE employes2 LIKE employes; 
INSERT employes2 SELECT * FROM employes;

/*-121-*/
START TRANSACTION;
UPDATE employes2 SET sal = (sal + (10/100*sal)) WHERE sal < (SELECT AVG(sal) FROM employes2);
COMMIT;

/*-122-*/
START TRANSACTION;
INSERT INTO employes2 (noemp, nom, prenom, embauche, sal) 
VALUES (1400, 'DEBU', 'REMI', SYSDATE(), 61000);

UPDATE employes2 SET sup = 1000, noserv = 4, comm = 0.01, emploi = 'DIRECTEUR' WHERE noemp = 1400;
COMMIT;

/*-123-*/
START TRANSACTION;
DELETE FROM employes2 WHERE emploi = 'SECRETAIRE';
COMMIT;

/*-124-*/
START TRANSACTION;
INSERT INTO employes2 (nom, prenom, noemp, embauche, sup, comm, noserv, sal)
SELECT 'MOYEN', 'TOTO', 1010, '1999-12-12', 1000, NULL, 1, AVG(sal) from employes2;
COMMIT;

/*-125-*/
START TRANSACTION;
DELETE FROM employes2 WHERE nom LIKE '%A%';
SELECT nom from employes2;
ROLLBACK;
SELECT nom from employes2;

/*-126-*/
CREATE TABLE projet 
(
    noproj int(3) NOT NULL,
    nomproj varchar(10),
    budget decimal(8,2)
);
SHOW tables;
DESCRIBE projet;

ALTER TABLE projet RENAME TO proj;

/*-127-*/
SET AUTOCOMMIT = 0;
INSERT INTO proj (noproj, nomproj, budget)
VALUES 
(101, 'alpha', 250000),
(102, 'beta', 175000),
(103, 'gamma', 950000);
COMMIT;

/*-128-*/
SET AUTOCOMMIT = 0;
UPDATE proj SET budget = 1500000 WHERE noproj = 103;
ALTER TABLE proj
MODIFY budget decimal (11,2);
COMMIT;

/*-129-*/
SET AUTOCOMMIT = 0;
ALTER TABLE employes2
ADD noproj int(3);
SELECT * from employes2;
COMMIT;

/*-130-*/
SET AUTOCOMMIT = 0;
UPDATE employes2 SET noproj = 102 WHERE noemp > 1350 and noproj IS NULL;
COMMIT;

/*-131-*/
SET AUTOCOMMIT = 0;
UPDATE employes2 SET noproj = 103 WHERE noproj IS NULL;
COMMIT;

/*-132-*/
SELECT nom, nomproj, service FROM employes2 e INNER JOIN proj p ON e.noproj = p.noproj INNER JOIN services2 s ON e.noserv = s.noserv; 

/*-mysqli emp_serv-*/
SELECT e.noemp, e.nom, e.prenom, e.emploi, e.sup, concat(e2.nom, ' ', e2.prenom) AS 'superieur', e.noserv, s.service FROM employes AS e
INNER JOIN services AS s on e.noserv = s.noserv
INNER JOIN employes AS e2 on e.sup = e2.noemp OR e.sup IS NULL
GROUP BY noemp;

ALTER TABLE employes DROP CONSTRAINT employes_ibfk_1;

SELECT e2.noemp FROM employes e INNER JOIN employes e2 ON e.sup = e2.noemp GROUP BY e2.noemp; --Employés qui ont des subalternes
SELECT s.noserv FROM services s INNER JOIN employes e ON s.noserv = e.noserv GROUP BY s.noserv; --Services qui ont des employés

SELECT DATE_FORMAT(SYSDATE(), '%Y-%m-%d');
SELECT COUNT(*) FROM services WHERE counter = DATE_FORMAT(SYSDATE(), '%Y-%m-%d');

CREATE TABLE utilisateurs
(
    id int(4) primary key NOT NULL,
    nom varchar(20),
    mdp varchar(20)
);
INSERT INTO utilisateurs (id, nom, mdp)
VALUES (1,'nomtest','mdptest');

ALTER TABLE utilisateurs MODIFY id int(4) AUTO_INCREMENT;

CREATE USER 'admin'@'localhost' IDENTIFIED BY '';
GRANT ALL ON emp_serv.employes TO 'admin'@'localhost';
GRANT ALL ON emp_serv.services TO 'admin'@'localhost';
GRANT ALL ON emp_serv.utilisateurs TO 'admin'@'localhost';
