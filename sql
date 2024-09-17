CREATE TABLE Categories (
	catId int NOT NUll AUTO_INCREMENT,
    catName varchar(255) UNIQUE NOT NULL,
    catImg varchar(255) ,
    PRIMARY KEY (catID)
);
CREATE TABLE Menus (
	menuId int NOT NULL AUTO_INCREMENT,
    menuName varchar(255) UNIQUE NOT NULL,
    menuCategory varchar(255) NOT NULL,
    menuDescription varchar(1000) NOT NULL,
    menuPrice int NOT NULL, 
    menuImage varchar(255) NOT NULL,
    PRIMARY KEY(menuID),
    FOREIGN KEY (menuCategory) REFERENCES Categories(catName)
);
CREATE TABLE Promotions(
	promId int NOT NULL AUTO_INCREMENT,
    prmoName varchar(255) NOT NULL UNIQUE,
    promDescription varchar(1000),
    startDate DATE NOT NULL ,
    endDate DATE NOT NULL ,
    promImage varchar(255) NOT NULL,
    PRIMARY KEY (promID)
);
CREATE TABLE Gc_Events(
	eventId int NOT NULL AUTO_INCREMENT,
    eventName varchar(255) NOT NULL UNIQUE,
    eventDescription varchar(1000),
    eventDate DATE NOT NULL ,
    eventTime TIME not null,
    promImage varchar(255) NOT NULL,
    PRIMARY KEY (eventId)
);
CREATE TABLE AdminUsers(
	userName varchar(100) NOT NULL UNIQUE,
    userType varchar(10) NOT NULL,
    userImg varchar(100) NOT NULL,
    userPassword varchar(100) NOT NULL,
    userStates varchar(50) NOT NULL,
    PRIMARY KEY (userName)
);
CREATE TABLE Customers(
	cusname varchar(100) NOT NULL,
    cusEmail varchar(255) NOT NULL UNIQUE,
    cusAddress varchar(500) NOT NULL,
    cusMobile Varchar(12) NOT NULL UNIQUE,
    cusUsername varchar(50) NOT NULL UNIQUE,
    cusPassword varchar(100) NOT NULL,
    CONSTRAINT pk_cus PRIMARY KEY (cusUsername , cusEmail)
 );
 CREATE TABLE Cus_Favourite(
 	customer varchar(50) NOT NULL,
   	menuID int ,
    FOREIGN KEY (customer) REFERENCES Customers(cusUsername),
    FOREIGN KEY (menuID) REFERENCES Menus(menuId)
  );