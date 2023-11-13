CREATE DATABASE Lab1;

CREATE TABLE Persona (
    ID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    NumeroIdentificacion VARCHAR(20),
    Direccion VARCHAR(100),
    Telefono VARCHAR(20)
);

INSERT INTO Persona VALUES (1, 'Angel', 'Patiño', '1234567899', 'Santo Domingo - Ecuador', '0999444422');
