CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    Firstname varchar(200) NOT NULL,
    Lastname varchar(200) NOT NULL,
    Email varchar(200) NOT NULL,
    Phone varchar(10) NOT NULL,
    Age YEAR NOT NULL,
    Password varchar(200) NOT NULL
);
