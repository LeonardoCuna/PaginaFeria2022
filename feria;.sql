CREATE DATABASE feria;
USE feria;

CREATE TABLE charla(
    id INT(4) PRIMARY KEY AUTO_INCREMENT,
    orientacion VARCHAR(40) NOT NULL,
    profesional VARCHAR(40) NOT NULL,
    profesion VARCHAR(70) NOT NULL,
    hora TIME
)Engine=InnoDB;

CREATE TABLE alumno(
cedula INT(8) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
mail VARCHAR(40) NOT NULL,
celular INT(9) NOT NULL,
liceo VARCHAR(25) NOT NULL,
orientacion VARCHAR(25) NOT NULL
)Engine=InnoDB;

CREATE TABLE inscribe(
    cedula INT(8),
    id INT(4),
    PRIMARY KEY(cedula,id),
    FOREIGN KEY(cedula) REFERENCES alumno(cedula),
    FOREIGN KEY(id) REFERENCES charla(id)
)Engine=InnoDB;
