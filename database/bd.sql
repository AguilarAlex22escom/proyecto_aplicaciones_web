CREATE DATABASE proyecto_web;

USE proyecto_web;

/*Table structure for table 'alumno' */

/*DROP TABLE IF EXISTS 'alumno';*/

CREATE TABLE alumno (
  codigoPostal varchar(5) NOT NULL,
  numeroCelular numeric(10) NOT NULL,
  correoElectronico varchar(128) UNIQUE NOT NULL, 
  escuelaProcedencia varchar(30) NOT NULL,
  entidadFederativa varchar(16) NOT NULL,
  promedio decimal(4,2) NOT NULL,
  numeroDeOpcion varchar(15) NOT NULL,
  discapacidad varchar(13) NOT NULL,
  /* horarioCorrespondiente date NOT NULL,
  laboratorioCorrespondiente numeric(1) NOT NULL, */
  /* boleta varchar(10) NOT NULL,
  nombres varchar(64) NOT NULL,
  primerApellido varchar(64) NOT NULL,
  segundoApellido varchar(64) DEFAULT NULL, */
  PRIMARY KEY (correoElectronico)
); /* ENGINE=InnoDB DEFAULT CHARSET=utf8; */

/*Data for the table 'alumno' */

/* insert  into alumno values 
('','','','','','','',''); */