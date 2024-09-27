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
    eventImage varchar(255) NOT NULL,
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
    cusId int NOT NULL AUTO_INCREMENT,
	cusname varchar(100) NOT NULL,
    cusEmail varchar(255) NOT NULL UNIQUE,
    cusAddress varchar(500) NOT NULL,
    cusMobile Varchar(12) NOT NULL UNIQUE,
    cusUsername varchar(50) NOT NULL UNIQUE,
    cusPassword varchar(100) NOT NULL,
    CONSTRAINT pk_cus PRIMARY KEY (cusId , cusUsername , cusEmail)
 );
 CREATE TABLE Cus_Favourite(
 	customer int NOT NULL,
   	menuID int ,
    FOREIGN KEY (customer) REFERENCES Customers(cusId),
    FOREIGN KEY (menuID) REFERENCES Menus(menuId)
  );
CREATE TABLE Bills (
	billId int NOT NULL AUTO_INCREMENT,
    cusId int NOT NULL,
    subTotal int NOT NULL,
    billdate date NOT NULL,
    billtime time NOT NULL,
    billStatus varchar(20) DEFAULT 'get order',
    PRIMARY KEY (billId),
    FOREIGN KEY (cusId) REFERENCES Customers(cusId)
);
CREATE TABLE billorder (
	orderId int NOT NULL AUTO_INCREMENT,
    billId int NOT NULL,
    menuId int NOT NULL,
    qty int NOT NULL,
    orderStatus varchar(20) DEFAULT 'get order',
    PRIMARY KEY (orderId),
    FOREIGN KEY (billId) REFERENCES Bills(billId),
    FOREIGN KEY (menuId) REFERENCES Menus(menuId)
)



  INSERT INTO `categories`(`catName`, `catImg`) VALUES
('Rice', 'rice.jpg'),
('Noodles', 'noodles.jpg'),
('Kottu', 'kottu.jpg'),
('Sri Lankan', 'srilankan.jpg'),
('Soup', 'soup.jpg'),
('Salad', 'salad.jpg'),
('Chinese', 'chinese.jpg'),
('Desserts', 'desserts.jpg'),
('Beverages', 'beverages.jpg');