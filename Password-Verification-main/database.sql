CREATE DATABASE users;
CREATE TABLE details(
  Name varchar(20) Primary key,
  Password varchar(20),
  Username varchar(20) unique 
  );