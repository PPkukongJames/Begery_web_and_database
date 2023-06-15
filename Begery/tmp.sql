CREATE TABLE Userr(
    UserID int NOT NULL PRIMARY KEY,
    Password varchar(100) NOT NULL,
    Email varchar(100) NOT NULL,
    Fname varchar(100),
    Sname varchar(100),
    Anum varchar(100),
    Street varchar(100),
    District varchar(100),
    Province varchar(100),
    Zipcode int
    );

CREATE TABLE Phone(
    UserID int NOT NULL,
    Phone int NOT NULL,
    PRIMARY KEY (UserID, Phone)
    );

CREATE TABLE Search(
    UserID int NOT NULL,
    Brno int NOT NULL,
    PRIMARY KEY (UserID, Brno)
    );

CREATE TABLE Buyer(
    UserID int NOT NULL PRIMARY KEY
    );

CREATE TABLE Baker(
    Bno int NOT NULL PRIMARY KEY,
    UserID int NOT NULL,
    SSN int NOT NULL,
    Salary int
    );


CREATE TABLE Review(
    Brno int NOT NULL,
    UserID int NOT NULL,
    Rating int,
    PRIMARY KEY (UserID, Brno)
    );

CREATE TABLE Maker(
    Brno int NOT NULL,
    Bno int NOT NULL,
    PRIMARY KEY (Bno, Brno)
    );

CREATE TABLE Make_detail(
    Brno int NOT NULL PRIMARY KEY,
    MFG date,
    EXP date
    );

CREATE TABLE Bread(
    Brno int NOT NULL PRIMARY KEY,
    Brname varchar(100),
    Brnum int,
    Price int,
    Tracknumber varchar(100)
    );

CREATE TABLE Track(
    Tracknumber varchar(100) NOT NULL PRIMARY KEY,
    UserID int NOT NULL,
    Date date,
    Status varchar(100)
    );

CREATE TABLE White_Bread(
    Brno int NOT NULL PRIMARY KEY
    );


CREATE TABLE Whole_Wheat_Bread(
    Brno int NOT NULL PRIMARY KEY
    );

CREATE TABLE Croissant(
    Brno int NOT NULL PRIMARY KEY
    );

CREATE TABLE Baguette(
    Brno int NOT NULL PRIMARY KEY
    );

ALTER TABLE phone ADD FOREIGN KEY (UserID) 
REFERENCES userr (UserID);

ALTER TABLE search ADD FOREIGN KEY (UserID) 
REFERENCES userr (UserID);

ALTER TABLE search ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

ALTER TABLE buyer ADD FOREIGN KEY (UserID) 
REFERENCES userr (UserID);

ALTER TABLE baker ADD FOREIGN KEY (UserID) 
REFERENCES userr (UserID);

ALTER TABLE review ADD FOREIGN KEY (UserID) 
REFERENCES buyer (UserID);

ALTER TABLE review ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

ALTER TABLE maker ADD FOREIGN KEY (Bno) 
REFERENCES baker (Bno);

ALTER TABLE maker ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

ALTER TABLE make_detail ADD FOREIGN KEY (Brno) 
REFERENCES maker (Brno);

ALTER TABLE bread ADD FOREIGN KEY (Tracknumber) 
REFERENCES track (Tracknumber);

ALTER TABLE track ADD FOREIGN KEY (UserID) 
REFERENCES buyer (UserID);

ALTER TABLE white_bread ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

ALTER TABLE whole_wheat_bread ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

ALTER TABLE croissant ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

ALTER TABLE baguette ADD FOREIGN KEY (Brno) 
REFERENCES bread (Brno);

