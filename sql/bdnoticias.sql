DROP DATABASE IF EXISTS noticias;
CREATE DATABASE noticias;

USE noticias;

DROP TABLE IF EXISTS noticia;
DROP TABLE IF EXISTS usuario;

CREATE TABLE noticia(
    id_Noticia INT PRIMARY KEY AUTO_INCREMENT,
    Epigrafe TEXT,
    Imagen VARCHAR(255),
    Titular VARCHAR(255),
    Subtitulo VARCHAR(255),
    Cuerpo TEXT,
    Cierre TEXT,
    Date_update		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Date_register	timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usuario(
    nombre varchar(255),
    contra varchar(255)
);

INSERT INTO usuario (nombre,contra) VALUES ('admin','i84fjahfbsu83421njhsa');
