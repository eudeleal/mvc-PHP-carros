CREATE DATABASE concessionaria DEFAULT CHARACTER SET utf8;
USE concessionaria;

CREATE TABLE Motores
(
    MotoresId INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    potencia VARCHAR (3),
    qntCilindradas INTEGER
);

CREATE TABLE carros
(
    chassi INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR (255),
    modelo VARCHAR (255),
    cor VARCHAR (255),
    MotorId INTEGER NOT NULL,
    FOREIGN KEY (MotorId) REFERENCES Motores(MotorId)
);