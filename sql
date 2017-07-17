CREATE TABLE alumnos ( codigo int(11) NOT NULL auto_increment, nombre varchar(40) default NULL, mail varchar(50) default NULL, codigocurso int(11) default NULL, PRIMARY KEY (`codigo`) )

CREATE TABLE cursos ( id_curso int(11) NOT NULL auto_increment, nombre_curso varchar(40) default NULL, PRIMARY KEY (`id_curso`) )