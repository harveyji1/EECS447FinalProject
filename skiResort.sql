-- --------------------------------------------------------

-- Jino Ski Resort Datatbase 
-- Created By: Audrey Pino & Harvey Ji

-- --------------------------------------------------------

--
-- Table structure for table 'RESORT'
--

DROP TABLE IF EXISTS RESORT;
CREATE TABLE IF NOT EXISTS RESORT(
    RESORTNAME varchar(50) NOT NULL,
    PHONENUM VARCHAR(20) DEFAULT NULL,
    ADDRESS VARCHAR(100) DEFAULT NULL,
    PRIMARY KEY (RESORTNAME),
    KEY RESORTNAME (RESORTNAME)
);

--
-- Data for table 'RESORT'
--

INSERT INTO RESORT (RESORTNAME, PHONENUM, ADDRESS) VALUES ('Crested Butte Mountain Resort', '9702517021', '12 Snowmass Rd, Crested Butte, CO 81225');
INSERT INTO RESORT (RESORTNAME, PHONENUM, ADDRESS) VALUES ('Winter Park Resort', '9707265514', '85 Parsenn Rd, Winter Park, CO 80482');
INSERT INTO RESORT (RESORTNAME, PHONENUM, ADDRESS) VALUES ('Breckenridge Ski Resort', '9704535000', '1599 Ski Hill Rd, Breckenridge, CO 80424');
INSERT INTO RESORT (RESORTNAME, PHONENUM, ADDRESS) VALUES ('Park City Mountain Resort', '4356498111', '1345 Lowell Ave. Park City, UT 84060');
INSERT INTO RESORT (RESORTNAME, PHONENUM, ADDRESS) VALUES ('Big Sky Resort', '8005484486', '50 Big Sky Resort Rd, Big Sky, MT 59716');
INSERT INTO RESORT (RESORTNAME, PHONENUM, ADDRESS) VALUES ('Jackson Hole Mountain Resort', '3077332292', '3395 Cody Ln, Teton Village, WY 83025');

-- --------------------------------------------------------

--
-- Table structure for table 'EMPLOYEE'
--

DROP TABLE IF EXISTS EMPLOYEE;
CREATE TABLE IF NOT EXISTS EMPLOYEE(
    EMPLOYEEID INT NOT NULL,
    EMPLOYEENAME VARCHAR(50) DEFAULT NULL,
    SALARY DECIMAL(10,2) DEFAULT NULL,
    RESORTNAME VARCHAR(50) DEFAULT NULL,
    EMAIL VARCHAR(50) DEFAULT NULL,
    PASSWORD VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (EMPLOYEEID),
    KEY EMPLOYEEID (EMPLOYEEID),
    KEY RESORTNAME (RESORTNAME)
);

--
-- Data for table 'EMPLOYEE'
--

INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (4298, 'Mina Campos', 8942.35, 'Crested Butte Mountain Resort', 'minac3049@yahoo.com', 'mina123');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (3890, 'Alani Kirby', 11586.42, 'Winter Park Resort', 'alani.kirby@email.com', 'alani456');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (6012, 'Nicolas Higgins', 6799.17, 'Breckenridge Ski Resort', 'nhiggins7642@outlook.com', 'nicolas789');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (9954, 'Shawn Swanson', 22379.99, 'Park City Mountain Resort', 'shawnswanson1234@gmail.com', 'shawn1234');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (3987, 'Jonah Johnson', 3250.5, 'Big Sky Resort', 'jonahj9687@yahoo.com', 'jonah5678');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (6045, 'Maxim Garner', 18670.76, 'Jackson Hole Mountain Resort', 'maxim.garner@email.com', 'maxim9012');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (899, 'Ethen Fleming', 9432.88, 'Crested Butte Mountain Resort', 'ethenf2345@hotmail.com', 'ethen3456');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (398, 'Frankie Dixon', 5781.22, 'Winter Park Resort', 'frankied1234@outlook.com', 'frankie789');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (8484, 'Janae Woods', 13578.93, 'Breckenridge Ski Resort', 'janaew8754@yahoo.com', 'janae1234');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (5141, 'Dayton Patterson', 19344.11, 'Park City Mountain Resort', 'dayton.patterson@email.com', 'dayton5678');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (3826, 'Enzo Keller', 11732.67, 'Big Sky Resort', 'enzok5421@gmail.com', 'enzo9012');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (6330, 'Keenan Gamble', 8865.99, 'Jackson Hole Mountain Resort', 'keenang2938@hotmail.com', 'keenan3456');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (9214, 'Darwin Marquez', 22569.83, 'Crested Butte Mountain Resort', 'darwinm4389@yahoo.com', 'darwin789');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (3195, 'Brylee Duran', 9980.12, 'Winter Park Resort', 'bryleed1267@outlook.com', 'brylee1234');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (4798, 'Jadon Schmidt', 15689.24, 'Breckenridge Ski Resort', 'jadon.schmidt@email.com', 'jadon5678');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (8179, 'Lillian Thompson', 2780.79, 'Park City Mountain Resort', 'lillian.t5678@yahoo.com', 'lillian9012');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (2736, 'Fatima Livingston', 17595.05, 'Big Sky Resort', 'fatima.livingston@hotmail.com', 'fatima3456');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (2285, 'Brennen Curtis', 7563.46, 'Jackson Hole Mountain Resort', 'brennen.curtis1234@gmail.com', 'brennen789');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (2286, 'Cael Calhoun', 10814.29, 'Crested Butte Mountain Resort', 'cael.calhoun@email.com', 'cael1234');
INSERT INTO EMPLOYEE (EMPLOYEEID, EMPLOYEENAME, SALARY, RESORTNAME, EMAIL, PASSWORD) VALUES (5182, 'Aleah Lyons', 29766.62, 'Winter Park Resort', 'aleah.lyons3456@hotmail.com', 'aleah5678');


-- --------------------------------------------------------

--
-- Table structure for table 'SKIER'
--

DROP TABLE IF EXISTS SKIER;
CREATE TABLE IF NOT EXISTS SKIER(
    SSN INT NOT NULL,
    NAME VARCHAR(50) DEFAULT NULL,
    DOB DATE DEFAULT NULL,
    EMAIL VARCHAR(50) DEFAULT NULL,
    PASSWORD VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (SSN)
);

--
-- Data for table 'SKIER'
-- 

INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (207518473, 'Kassandra Norman', '2005-09-23', 'knorman5987@gmail.com', 'sunny123');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (986152987, 'Ibrahim Wilkins', '1978-11-08', 'ibrahimw3245@outlook.com', 'beachgirl7');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (524799808, 'Madeline Lin', '1996-07-12', 'madelinel4312@yahoo.com', '1234abcd');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (710408578, 'Ezequiel Ruiz', '1989-02-15', 'eruiz5634@hotmail.com', 'bluebird8');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (984927589, 'Raven Villa', '2002-12-28', 'ravenv8912@email.com', 'pizzalover1');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (399347918, 'Keira Kelley', '1972-06-05', 'keirak2376@gmail.com', 'starrynight6');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (812698174, 'Leilani James', '1991-04-19', 'leilanij6534@outlook.com', 'happydog2');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (537166321, 'Nayeli Santiago', '1965-10-31', 'nayelis4523@yahoo.com', 'kitten123');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (971548607, 'Martin York', '1987-01-27', 'martiny9876@gmail.com', 'football99');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (816684312, 'Alvaro Callahan', '1993-08-04', 'acallahan7643@hotmail.com', 'summerfun4');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (293756861, 'Kaylynn Peterson', '1977-03-18', 'kaylynn.petersen@email.com', 'iloveyou22');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (678237710, 'Semaj Farrell', '1963-09-12', 'sfarrell2451@yahoo.com', 'carpediem7');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (462082133, 'Dayton Rubio', '1983-05-06', 'drubio5421@outlook.com', 'sunshine5');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (879693238, 'Hannah Mullins', '2000-01-15', 'hannahm3456@hotmail.com', 'rainbow99');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (320661190, 'Jeffery Padilla', '1999-11-02', 'jpadilla6879@yahoo.com', 'coffee4me');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (675739159, 'Kristina Lutz', '1975-12-23', 'kristinal2987@gmail.com', 'musiclover3');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (162930576, 'Ansley Powell', '1984-06-16', 'apowell5432@outlook.com', 'greeneyes2');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (701245392, 'Lukas Mendoza', '1971-02-08', 'lmendoza8674@hotmail.com', 'doglover1');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (985461021, 'Kylan Valdez', '2007-03-29', 'kylanv4572@yahoo.com', 'butterfly9');
INSERT INTO SKIER (SSN, NAME, DOB, EMAIL, PASSWORD) VALUES (730831056, 'Rowan Barber', '1990-09-07', 'rowanb2309@email.com', 'mountain7');


-- --------------------------------------------------------

--
-- Table structure for table 'TICKETS'
--

DROP TABLE IF EXISTS TICKETS;
CREATE TABLE IF NOT EXISTS TICKETS(
    TICKETID INT NOT NULL,
    SKIERNAME VARCHAR(50) DEFAULT NULL,
    PURCHASEDDATE DATETIME DEFAULT NULL,
    EXPIRATIONDATE DATE DEFAULT NULL,
    RESORTNAME VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (TICKETID),
    KEY SKIERNAME (SKIERNAME),
    KEY RESORTNAME (RESORTNAME)
);

--
-- Data for table 'TICKETS'
--

INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (2075, 'Kassandra Norman', '2023-02-19 14:26:55', '2023-08-10', 'Crested Butte Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (9861, 'Ibrahim Wilkins', '2023-03-07 10:45:33', '2023-11-20', 'Winter Park Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (6021, 'Madeline Lin', '2023-04-08 17:39:21', '2023-07-25', 'Breckenridge Ski Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (9287, 'Ezequiel Ruiz', '2023-02-12 9:18:47', '2023-08-28', 'Park City Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (1728, 'Raven Villa', '2023-04-01 13:55:29', '2023-07-17', 'Big Sky Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (4268, 'Keira Kelley', '2023-03-24 20:06:11', '2023-10-31', 'Copper Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (3750, 'Leilani James', '2023-02-27 8:22:08', '2023-07-31', 'Copper Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (9016, 'Nayeli Santiago', '2023-04-13 11:49:17', '2023-12-01', 'Winter Park Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (6543, 'Martin York', '2023-03-04 15:37:42', '2023-10-29', 'Breckenridge Ski Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (4928, 'Alvaro Callahan', '2023-02-16 12:14:59', '2023-12-23', 'Park City Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (8365, 'Kaylynn Peterson', '2023-04-10 18:27:05', '2023-11-13', 'Big Sky Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (2609, 'Semaj Farrell', '2023-03-29 16:50:01', '2023-09-25', 'Jackson Hole Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (9031, 'Dayton Rubio', '2023-02-23 22:02:47', '2023-09-02', 'Crested Butte Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (1456, 'Hannah Mullins', '2023-04-03 9:33:12', '2023-12-18', 'Winter Park Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (7913, 'Jeffery Padilla', '2023-03-19 11:56:55', '2023-11-02', 'Breckenridge Ski Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (5874, 'Kristina Lutz', '2023-02-15 19:43:01', '2023-12-10', 'Park City Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (3501, 'Ansley Powell', '2023-04-06 14:08:38', '2023-08-16', 'Big Sky Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (6184, 'Lukas Mendoza', '2023-03-11 8:51:24', '2023-08-04', 'Jackson Hole Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (2634, 'Kylan Valdez', '2023-02-20 17:15:53', '2023-09-30', 'Crested Butte Mountain Resort');
INSERT INTO TICKETS (TICKETID, SKIERNAME, PURCHASEDDATE, EXPIRATIONDATE, RESORTNAME) VALUES (9172, 'Rowan Barber', '2023-04-14 12:27:09', '2023-07-15', 'Winter Park Resort');

-- --------------------------------------------------------

--
-- Table structure for table 'LIFTS'
--

DROP TABLE IF EXISTS LIFTS;
CREATE TABLE IF NOT EXISTS LIFTS(
    LIFTNAME VARCHAR(50) NOT NULL,
    RESORTNAME VARCHAR(50) NOT NULL,
    PRIMARY KEY (LIFTNAME, RESORTNAME),
    KEY LIFTNAME (LIFTNAME),
    KEY RESORTNAME (RESORTNAME)
);

--
-- Data for table 'LIFTS'
--

INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Silver Queen Express', 'Crested Butte Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Red Lady Express', 'Crested Butte Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Painter Boy', 'Crested Butte Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Eskimo Express', 'Winter Park Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Zephyr Express', 'Winter Park Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Challenger Lift', 'Winter Park Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Arrow Lift', 'Winter Park Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('BreckConnect Gondola', 'Breckenridge Ski Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Colorado SuperChair', 'Breckenridge Ski Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Imperial Express SuperChair', 'Breckenridge Ski Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Quicksilver SuperChair', 'Breckenridge Ski Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Payday', 'Park City Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Crescent', 'Park City Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Quicksilver Gondola', 'Park City Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Lone Peak Tram', 'Big Sky Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Swift Current', 'Big Sky Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Ramcharger 8', 'Big Sky Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Aerial Tram', 'Jackson Hole Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Bridger Gondola', 'Jackson Hole Mountain Resort');
INSERT INTO LIFTS (LIFTNAME, RESORTNAME) VALUES ('Teewinot Chairlift', 'Jackson Hole Mountain Resort');

-- --------------------------------------------------------

--
-- Table structure for table 'CHAIRLIFT'
--

DROP TABLE IF EXISTS CHAIRLIFT;
CREATE TABLE IF NOT EXISTS CHAIRLIFT(
    LIFTNAME VARCHAR(50) NOT NULL,
    SEATCAPACITY INT DEFAULT NULL,
    PRIMARY KEY (LIFTNAME),
    KEY LIFTNAME (LIFTNAME)
);

--
-- Data for table 'CHAIRLIFT'
--

INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Silver Queen Express', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Red Lady Express', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Painter Boy', 3);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Eskimo Express', 6);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Zephyr Express', 6);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Challenger Lift', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Arrow Lift', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Colorado SuperChair', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Imperial Express SuperChair', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Quicksilver SuperChair', 6);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Payday', 6);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Crescent', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Swift Current', 4);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Ramcharger 8', 8);
INSERT INTO CHAIRLIFT (LIFTNAME, SEATCAPACITY) VALUES ('Teewinot Chairlift', 4);

-- --------------------------------------------------------

--
-- Table structure for table 'GONDOLA'
--

DROP TABLE IF EXISTS GONDOLA;
CREATE TABLE IF NOT EXISTS GONDOLA(
    LIFTNAME VARCHAR(50) NOT NULL,
    GONDOLACAPACITY INT DEFAULT NULL,
    PRIMARY KEY (LIFTNAME),
    KEY LIFTNAME (LIFTNAME)
);

--
-- Data for table 'GONDOLA'
--

INSERT INTO GONDOLA (LIFTNAME, GONDOLACAPACITY) VALUES ('BreckConnect Gondola', 8);
INSERT INTO GONDOLA (LIFTNAME, GONDOLACAPACITY) VALUES ('Quicksilver Gondola', 8);
INSERT INTO GONDOLA (LIFTNAME, GONDOLACAPACITY) VALUES ('Lone Peak Tram', 15);
INSERT INTO GONDOLA (LIFTNAME, GONDOLACAPACITY) VALUES ('Aerial Tram', 100);
INSERT INTO GONDOLA (LIFTNAME, GONDOLACAPACITY) VALUES ('Bridger Gondola', 8);

-- --------------------------------------------------------