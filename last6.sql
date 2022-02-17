-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hospitalmanagementsystem
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `access`
--

DROP TABLE IF EXISTS `access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access` (
  `Doctor_Id` char(6) NOT NULL,
  `Appoinment_Number` char(6) NOT NULL,
  `D_First_Name` varchar(20) DEFAULT NULL,
  `D_Last_Name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Doctor_Id`,`Appoinment_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access`
--

LOCK TABLES `access` WRITE;
/*!40000 ALTER TABLE `access` DISABLE KEYS */;
INSERT INTO `access` VALUES ('000001','300012','Ashen','Perera'),('000002','300013','Deepal','Attanayake'),('000003','300014','Amila','Premarathne'),('000004','300015','Malsha','Samarathunge'),('000005','300016','Kusal','Fernando'),('000006','300017','Amitha','Gamage'),('000007','300004','Lalani','Tharanga'),('000008','300018','Shamila','Uresha'),('000009','300019','Sachithra','Baddegama'),('000010','300010','Manishka','Siriwardana'),('000011','300009','Indaka','Ubeysiri'),('000012','300008','Ajantha','Rajapaksha'),('000013','300005','Krishal','Kavishka'),('000014','300007','Chamara','Rathnayaka'),('000015','300003','Damayanthi','peiris'),('000016','300006','Harsha','Gunasekara'),('000017','300020','Imitiaz','Ismail'),('000018','300002','Prabodhana','Ranaweera'),('000019','300001','Samantha','Alwis'),('000020','300011','Madura','Jayawardana');
/*!40000 ALTER TABLE `access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Admin_Id` char(6) NOT NULL,
  `User_Password` char(8) DEFAULT NULL,
  `Mobile_No` int(11) DEFAULT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('Rishard','Ahamed','No 477/2 Wellawa,kurunegala','Male',23,'600001','70000001',773309636),('Fathima','Shalha','No 12,mahiyangana road,badulla','Female',22,'600002','70000002',772900023),('Dilan','Weerasinghe','16 Wolfendhal Street Colombo 13','Male',23,'600003','70000002',717514905);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appoinment` (
  `Appoinment_Number` char(6) NOT NULL,
  `App_Date` date DEFAULT NULL,
  `Patient_Id` char(6) DEFAULT NULL,
  `Staff_Id` char(6) DEFAULT NULL,
  `Doctor_Id` char(6) DEFAULT NULL,
  PRIMARY KEY (`Appoinment_Number`),
  CONSTRAINT `Patient_Id1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Staff_Id1` FOREIGN KEY (`Staff_Id`) REFERENCES `staff` (`Staff_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Doctor_Id1` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appoinment`
--

LOCK TABLES `appoinment` WRITE;
/*!40000 ALTER TABLE `appoinment` DISABLE KEYS */;
INSERT INTO `appoinment` VALUES ('','0000-00-00','100001','200021','{Docto'),('1','2020-12-11','100001','200021','000021'),('2','2020-12-11','100001','200021','{Docto'),('3','2020-12-11','100001','200021','{Docto'),('300001','2020-03-04','100001','200001','000019'),('300002','2020-08-09','100002','200002','000018'),('300003','2020-09-12','100003','200003','000015'),('300004','2020-10-19','100004','200004','000007'),('300005','2020-05-26','100005','200005','000013'),('300006','2020-03-08','100006','200001','000016'),('300007','2020-04-09','100007','200002','000014'),('300008','2020-02-12','100008','200003','000012'),('300009','2020-11-19','100009','200004','000011'),('300010','2020-12-26','100010','200005','000010'),('300011','2020-05-04','100011','200001','000020'),('300012','2020-08-29','100012','200002','000001'),('300013','2020-06-12','100013','200003','000002'),('300014','2020-09-19','100014','200004','000003'),('300015','2020-04-26','100015','200005','000004'),('300016','2020-08-04','100016','200001','000005'),('300017','2020-10-29','100017','200002','000006'),('300018','2020-01-12','100018','200003','000008'),('300019','2020-03-19','100019','200004','000009'),('300020','2020-07-26','100020','200005','000017');
/*!40000 ALTER TABLE `appoinment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checks`
--

DROP TABLE IF EXISTS `checks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checks` (
  `Patient_Id` char(6) NOT NULL,
  `Appoinment_Number` char(6) NOT NULL,
  `P_First_Name` varchar(20) DEFAULT NULL,
  `P_Last_Name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Patient_Id`,`Appoinment_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checks`
--

LOCK TABLES `checks` WRITE;
/*!40000 ALTER TABLE `checks` DISABLE KEYS */;
INSERT INTO `checks` VALUES ('100001','300001','Amali','Pathirana'),('100002','300002','Nimal','Fernando'),('100003','300003','Bimal','Perera'),('100004','300004','Lalani','Tharanga'),('100005','300005','Chamali','Rathnayaka'),('100006','300006','Isuru','Marasinghe'),('100007','300007','Bathiya','Ranasinghe'),('100008','300008','Chamara','Somawardana'),('100009','300009','Sameera','Ariyarathna'),('100010','300010','Kamal','Gamage'),('100011','300011','Jayanthi','Rathnayaka'),('100012','300012','Anoma','Ariyadasa'),('100013','300013','Harsha','Perera'),('100014','300014','Fathima','Afra'),('100015','300015','Tharindu','Pathum'),('100016','300016','Rifshan','Nazeel'),('100017','300017','Michal','John'),('100018','300018','Evon','Fernando'),('100019','300019','Sunil','Perera'),('100020','300020','Shiromi','Pathirana');
/*!40000 ALTER TABLE `checks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Specialization` varchar(20) NOT NULL,
  `Doctor_Id` char(6) NOT NULL,
  `User_Password` char(8) NOT NULL,
  `Mobile_No` int(11) DEFAULT NULL,
  PRIMARY KEY (`Doctor_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES ('Fathima','Shalha','No 12,Mahiyangana road, Badulla.','female',22,'cardiologist','','dfghfghj',772900023),('Ashen','Perera','No 21,Mahiyangana road,Badulla','Male',27,'Orthodontist','000001','10000001',764534223),('Deepal','Attanayake','No 51,kappettipola road,kandy','Male',28,'Cardiologist','000002','10000002',774539893),('Amila','Premarathne','No 66,Gampola road,kandy','Male',30,' ENT Surgeon','000003','10000003',71539893),('Malsha','Samarathunge','No 141,Kirula Rd,Colombo 05','Female',26,'Pediatrician','000004','10000004',754009893),('Kusal','Fernando','No,93/8 3 A Lane,Ganemulla Rd,Kadawatha','Male',31,'Neurologist','000005','10000005',776009893),('Amitha','Gamage','No 22,Sudharma Mawatha,Millawa,Kurunegala','Female',29,'Psychiatrist','000006','10000006',774899931),('Krishal','Kavishka','No 96/31,Kithulwatta Rd,Borella,Colombo 08','Male',32,'Cardiologist','000007','10000007',715569893),('Shamila','Uresha','No 232/A Weliwala Rd,Kotikawatta,Angoda','Male',28,'Nephrologist','000008','10000008',760039893),('Sachithra','Baddegama','No 61/4B,Sigera Rd,Madiwela,Kotte','Male',34,'Surgeon','000009','10000009',773239893),('Manishka','Siriwardana','No 26,MankAda Road,Wellabada,Balapitiya','Male',30,'Ophthalmologist','000010','10000010',772900083),('Indaka','Ubeysiri','61,Koswatta Road,Colombo 08','Male',38,'Physician','000011','10000011',728569893),('Ajantha','Rajapaksha','283 A,Thuduwa Road,Bopitiya,Ja ela','Female',36,'surgeon','000012','10000012',724009893),('Ajith','Premarathne','No 08,Bambalapitiya Drive,Colombo 04','Male',30,'Cardiologist','000013','10000001',709764001),('Chamara','Rathnayaka','No 626 A/5,Deva Sumitrarama Rd,Eriyawetiya,Kelaniya','Male',40,'Dental Surgeon','000014','10000013',707899893),('Damayanthi','peiris','No 40,Kandy Road,Dalugama,Kelaniya','Female',26,'Oncologist','000015','10000015',724539893),('Harsha','Gunasekara','No 204/30,Dutugemunu Mw,Peliyagoda','Male',28,'Chest specialist','000016','10000016',756539893),('Imitiaz','Ismail','No 13/,BNew Town,Dehiattakandiya','Male',27,'Physician','000017','10000017',784639893),('Prabodhana','Ranaweera','No 113,Kannapiti Rd,Jaffna','Male',35,'Nuero surgeon','000018','10000018',720089893),('Samantha','Alwis','No 128,Dehiwela Road,Boralesgamuwa','Female',37,'Gynaecologist','000019','10000019',754539800),('Madura','Jayawardana','No 498,Galle Rd,Colombo 03','Male',32,'General Surgeon','000020','10000020',774539777),('Fathima','Shalha','No 12,Mahiyangana road, Badulla.','female',22,'cardiologist','000021','dfghfghj',772900023),('Fathima','Shalha','No 12,Mahiyangana road, Badulla.','male',22,'cardiologist','000025','12345678',772900023);
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor_specilization`
--

DROP TABLE IF EXISTS `doctor_specilization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor_specilization` (
  `Doctor_ID` varchar(6) DEFAULT NULL,
  `Specilization` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor_specilization`
--

LOCK TABLES `doctor_specilization` WRITE;
/*!40000 ALTER TABLE `doctor_specilization` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctor_specilization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicalrecord`
--

DROP TABLE IF EXISTS `medicalrecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicalrecord` (
  `Record_Number` char(6) NOT NULL,
  `Disease` varchar(20) DEFAULT NULL,
  `Medicines` varchar(150) DEFAULT NULL,
  `Patient_Id` char(6) DEFAULT NULL,
  `Staff_Id` char(6) DEFAULT NULL,
  `specialNote` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Record_Number`),
  KEY `Patient_Id` (`Patient_Id`),
  KEY `Staff_Id` (`Staff_Id`),
  CONSTRAINT `Patient_Id` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Staff_Id` FOREIGN KEY (`Staff_Id`) REFERENCES `staff` (`Staff_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicalrecord`
--

LOCK TABLES `medicalrecord` WRITE;
/*!40000 ALTER TABLE `medicalrecord` DISABLE KEYS */;
INSERT INTO `medicalrecord` VALUES ('400002','Back pain','ibuprofen,naproxen sodium','100002','200002',NULL),('400003','Bone Marrow Transpla','Alemtuzumab (Campath) Busulfan,Carboplatin.','100003','200003',NULL),('400004','Arrhythmia','amiodarone (Cordarone, Pacerone),flecainide (Tambocor),ibutilide ','100004','200004',NULL),('400005','Chest pain.','Nitroglycerin,Aspirin','100005','200005',NULL);
/*!40000 ALTER TABLE `medicalrecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Blood_Group` char(2) DEFAULT NULL,
  `Patient_Id` char(6) NOT NULL,
  `User_Password` char(8) NOT NULL,
  `Mobile_No` int(11) DEFAULT NULL,
  `Doctor_Id` char(6) DEFAULT NULL,
  `Record_Number` char(6) DEFAULT NULL,
  PRIMARY KEY (`Patient_Id`),
  KEY `Record_Number` (`Record_Number`),
  KEY `Doctor_Id` (`Doctor_Id`),
  CONSTRAINT `Doctor_Id` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Record_Number` FOREIGN KEY (`Record_Number`) REFERENCES `medicalrecord` (`Record_Number`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES ('Nimal','Fernando','No 258 C,Batagama South,Kandana','Male',45,'O-','100002','20000002',714690893,'000018','400002'),('Bimal','Perera','215,Suriyapaluwa,Kadawatha','Male',50,'B-','100003','20000003',760890800,'000015','400003'),('Lalani','Tharanga','55 Nambigoda Rd Muruthagama Akarawita','Female',35,'B+','100004','20000004',756890883,'000007','400004'),('Chamali','Rathnayaka','No 82/2 Negombo Rd Katunayake','Female',65,'O+','100005','20000005',756890893,'000013','400005'),('Isuru','Marasinghe','433 Galle Rd Colombo 04','Male',38,'A-','100006','20000006',700890593,'000014',NULL),('Bathiya','Ranasinghe','No 177/6A Makola South Makola Kiribathgoda','Male',55,'A+','100007','20000007',720890893,'000017',NULL),('Chamara','Somawardana','No 477/2 Rangama Wellawa','Male',70,'A+','100008','20000008',780896693,'000006',NULL),('Sameera','Ariyarathna','No 238 Silvester Road Nugegoda','Male',48,'A+','100009','20000009',729090089,'000002',NULL),('Kamal','Gamage','No 36 B Rathnayaka Mw Pelawatta Battaramulla','Male',39,'O+','100010','20000010',720440893,'000005',NULL),('Jayanthi','Rathnayaka',' No 66 Old Kesbewa Rd Nugegoda','Female',57,'B+','100011','20000011',720670893,'000013',NULL),('Anoma','Ariyadasa','No 2 Trelawney Place Colombo 04','Female',37,'B-','100012','20000012',726590893,'000010',NULL),('Harsha','Perera','12 D R Wijewardana Mw Colombo 10','Male',30,'A-','100013','20000013',720990893,'000009',NULL),('Fathima','Afra','No 209 Old Negombo Road Kanuwana Ja Ela','Female',40,'A+','100014','20000014',720330893,'000012',NULL),('Tharindu','Pathum','2 Ward Place Colombo 07','Male',44,'B-','100015','20000015',720780893,'000016',NULL),('Rifshan','Nazeel','No 49 Alfred House Gardens Colombo 03','Male',34,'O-','100016','20000016',720877793,'000011',NULL),('Michal','John','172/C/1/1 Negombo Rd Rilaulla Kandana','Male',60,'O+','100017','20000017',720660893,'000004',NULL),('Evon','Fernando','108/1 Rosmead Place Colombo','Female',40,'A-','100018','20000018',724580893,'000003',NULL),('Sunil','Perera','No 377 Negombo Rd Seeduwa','Male',45,'A+','100019','20000019',720898993,'000008',NULL),('Shiromi','Pathirana','50 Raja Mawatha Kotte Rd Nugegoda','Female',37,'B-','100020','20000020',720852893,'000001',NULL),('{ Fathima}','Shalha','No 12,Mahiyangana road, Badulla.','female',22,'A+','100021','{ a07b98',77290023,NULL,NULL),('Fathima','Shalha','No 12,Mahiyangana road, Badulla.','female',22,'A+','100022','sureka12',772900023,NULL,NULL),('Fathima','Shalha','No 12,Mahiyangana road, Badulla.','female',22,'A+','100023','12345678',772900023,NULL,NULL);
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Duty_Hours` time DEFAULT NULL,
  `Staff_Id` char(6) NOT NULL,
  `User_Password` char(8) DEFAULT NULL,
  `Mobile_No` int(11) DEFAULT NULL,
  PRIMARY KEY (`Staff_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('Gayani','Sandamali','16 Wolfendhal Street Colombo 13','Female',25,'08:00:00','200001','30000001',724009893),('Kalum','Rathnayaka','227 Stanley Thilakarathne Mw Nugegoda','Male',30,'10:00:00','200002','30000002',767009893),('Chamathsara','Navodi','No 781/B Pannipitiya Rd Pelawatta Battaramulla','Female',24,'14:00:00','200003','30000003',724559893),('Prasadi','Sachintha','No 376 Katiyala Para Kimbulapitiya','Female',29,'18:00:00','200004','30000004',724639893),('Ayesh','Rajpaksha','No 224/B Iddagodella Rd Kimbulapitiya Negombo','Male',28,'22:00:00','200005','30000005',724009885);
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-11 13:30:33
