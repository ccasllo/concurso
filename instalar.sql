 creacion tabla de respuestas */
create table concurso.respuestas_concurso(
id MEDIUMINT NOT NULL AUTO_INCREMENT
,id_colegio integer
,colegio varchar(100) null
,Prueba varchar(10) null
,unidad integer
,numero_pregunta integer
,calificacion integer
,PRIMARY KEY (id)
);


/* GRAFICO COLUMNS */
CREATE TABLE CONCURSO.GRAFICO_COLUMNAS
(ID INTEGER
,CADENA1 VARCHAR(30) NULL
,CADENA2 VARCHAR(30) NULL
,CADENA3 VARCHAR(30) NULL
,CADENA4 VARCHAR(30) NULL
,CADENA5 VARCHAR(30) NULL
,PRIMARY KEY(ID)
);

delete from CONCURSO.GRAFICO_COLUMNAS ;

INSERT INTO CONCURSO.GRAFICO_COLUMNAS (ID,CADENA1,CADENA2,CADENA3,CADENA4,CADENA5)
VALUES (1,'{
        name: '' '
,' '',
        data: ['
,'],
		    y:'
,',
            drilldown: '' '
,' ''
    },');



delete from concurso.usuarios_qm
where rol in (4,5);

INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('261', 'Concurso', 'GIMNASIO IRAGUA', '-1', '2345', '9870', 'GIMNASIO IRAGUA', 'GIMNASIO_IRAGUA', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('262', 'Concurso', 'COLOMBO GALES SCHOOL', '-2', '0845', '9870', 'COLOMBO GALES SCHOOL', 'COLOMBO_GALES_SCHOOL', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('263', 'Concurso', 'COLEGIO NUEVA YORK', '-3', '2308', '9870', 'COLEGIO NUEVA YORK', 'COLEGIO_NUEVA_YORK', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('264', 'Concurso', 'ABRAHAM LINCOLN', '-4', '2085', '9870', 'ABRAHAM LINCOLN', 'ABRAHAM_LINCOLN', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('265', 'Concurso', 'COLEGIO MAYOR DE LOS ANDES', '-5', '8340', '9870', 'COLEGIO MAYOR DE LOS ANDES', 'COLEGIO_MAYOR_DE_LOS_ANDES', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('266', 'Concurso', 'GIMNASIO VERMONT', '-6', '2345', '9870', 'GIMNASIO VERMONT', 'GIMNASIO_VERMONT', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('267', 'Concurso', 'GIMNASIO DE LOS CERROS', '-7', '2347', '9870', 'GIMNASIO DE LOS CERROS', 'GIMNASIO_DE_LOS_CERROS', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('268', 'Concurso', 'MARYMOUNT', '-8', '4770', '9870', 'MARYMOUNT', 'MARYMOUNT', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('269', 'Concurso', 'GIMNASIO DEL NORTE', '-9', '2475', '9870', 'GIMNASIO DEL NORTE', 'GIMNASIO_DEL_NORTE', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('270', 'Concurso', 'GIMNASIO LOS CEREZOS', '-10', '4347', '9870', 'GIMNASIO LOS CEREZOS', 'GIMNASIO_LOS_CEREZOS', '4');
INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('271', 'Concurso', 'GIMNASIO FEMENINO', '-11', '2005', '9870', 'GIMNASIO FEMENINO', 'GIMNASIO_FEMENINO', '4');

INSERT INTO `concurso`.`usuarios_qm` (`id_usuario`, `seccion`, `estudiante`, `id`, `codigo`, `documento`, `usuario`, `correo`, `rol`)
VALUES ('272', 'Concurso', 'ESTUDIANTE', '-12', '1234', '1111', 'ESTUDIANTE', 'ESTUDIANTE', '5');
