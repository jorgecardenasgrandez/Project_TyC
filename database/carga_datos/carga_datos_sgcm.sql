-- TABLAS DE SOPORTE --

insert into departamentos (nombre) values ('cajamarca'),('loreto'),
	('piura'),('tumbes'),('amazonas'),('lambayeque'),('san martin'),('ucayali'),
	('la libertad'),('ancash'),('lima'),('huanuco'),('pasco'),('junin'),
	('ica'),('huancavelica'),('ayacucho'),('apurimac'),('cusco'),('madre de dios'),
	('puno'),('arequipa'),('moquegua'),('tacna');
    
insert into provincias (nombre,departamento_id) values ('cajabamba',1),('jaen',1),
	('maynas',2),('putumayo',2),('ayabaca',3),('paita',3),
	('tumbes',4),('zarumilla',4),('bagua',5),('chachapoyas',5),
	('chiclayo',6),('ferreñafe',6),('bellavista',7),('huallaga',7),('lima',11),('barranca',11),
    ('cajatambo',11),('canta',11),('canete',11),('huaral',11),('huarochiri',11),
    ('huaura',11),('oyon',11),('yauyos',11);
    
insert into distritos (nombre,provincia_id) values ('lima',15),('ancon',15),
	('ate',15),('villa maria del triunfo',15),('san juan de miraflores',15),
    ('el agustino',15),('villa el salvador',15),('san juan de lurigancho',15);
    
insert into frecuencias (descripcion,detalle) values ('diaria','lunes a viernes'),
	('interdiario A','lunes - miercoles - viernes'), ('interdiario B','martes y jueves'),
    ('interdiario C', 'lunes y miercoles'), ('interdiario D','miercoles y viernes'), 
    ('especial 1','lunes - martes - miercoles'),('especial 2','jueves y viernes'), 
    ('especial 3','lunes y viernes');
insert into frecuencias(descripcion,detalle,observacion) values('semanal J', 'jueves','un dia a la semana');

insert into turnos (descripcion, horaInicio, horaFin) values ('mañana','08:30:00','13:00:00');
insert into turnos (descripcion, horaInicio, horaFin) values ('tarde','13:00:00','17:30:00'),
	('noche','17:30:00','22:00:00');
    
insert into familiaprofesionals (nombrefp) values ('cuero y calzado'),('hosteleria y turismo'),
	('textil y confeccion'),('estetica personal'),('computacion informatica'),('artesania y manualidades');
    
insert into opcionocupacionals (nombreOO,fp_id) values ('confeccion textil',3),('peluqueria',4),
	('asistente de panaderia y pasteleria',2);
    
insert into modulos (nombreMod, duracion,oo_id,estado) values ('confeccion de articulos textiles',300,1,1),
	('confeccion de prendas de vestir-dama (falda y pantalon)',300,1,1),
    ('confeccion de prendas para ninos. tejido a maquina',300,1,0),
    ('curso de capacitacion: pestañas 3d y extensiones',300,2,1),
    ('peinados',300,2,1),('curso de capacitacion: maquillaje para eventos',144,2,0),
    ('elaboracion de productos de pasteleria (buffet)',300,3,1),
    ('curso de capacitacion: tallados en fruta y verduras',48,3,1),
    ('curso de capacitacion: ensamblado de tortas en masa elastica',60,3,0);
    
-- CARGA DE DATOS DE ALUMNOS Y USUARIOS--

insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('70992942','Carlo Fernando','Lopez','Caballero','m','soltero','univ. incompleto','1995-06-17',
    'estudiante uni','946898021','mrks.95617@gmail.com','av. sucre 110',4,1);
insert into usuarios (usuario,password,usuario_type,estado) values ('mrks.95617@gmail.com','70992942','alumno','desconectado');

insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('70115689','Luz Estrella','Malca','Chuquilin','f','soltera','tecnico','1995-03-28',
    'cajera','991920054','luz.malca10@gmail.com','av. vidal 500',5,1);
insert into usuarios (usuario,password,usuario_type,estado) values ('luz.malca10@gmail.com','70115689','alumno','desconectado');

insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122314','Carmen Luisa','Reyes','Blas','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','carmenluisa-reyes@gmail.com','av. cordova 230',4,0);
insert into usuarios (usuario,password,usuario_type,estado) values ('carmenluisa-reyes@gmail.com','69122314','alumno','desconectado');

insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122301','Daniel','Polca','Zuli','m','casado','univ. completo','1990-05-17',
    'abogada','986804190','daniel@gmail.com','av. cordova 230',4,0);
insert into usuarios (usuario,password,usuario_type,estado) values ('daniel@gmail.com','69122301','alumno','desconectado');

insert into alumnos (dni,nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122302','Jesus','Martel','Colan','m','soltero','univ. completo','1990-05-17',
    'abogada','986804190','jesus@gmail.com','av. cordova 230',4,0);
insert into usuarios (usuario,password,usuario_type,estado) values ('jesus@gmail.com','69122302','alumno','desconectado');

insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122303','Jairo','Rosales','Maquiavelo','m','soltero','univ. completo','1990-05-17',
    'abogada','986804190','jairo@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('jairo@gmail.com','69122303','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122304','Carlos','Palma','Tavarez','m','casado','univ. completo','1990-05-17',
    'abogada','986804190','carlospalma@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('carlospalma@gmail.com','69122304','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122305','German','Collantes','Lopez','m','casado','univ. completo','1990-05-17',
    'abogada','986804190','german@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('german@gmail.com','69122305','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122306','Laura','Rase','Cerna','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','laura@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('laura@gmail.com','69122306','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122307','Rosali','Suarez','Carbajal','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','rosali@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('rosali@gmail.com','69122307','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122308','Carol','Puente','Tami','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','carol@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('carol@gmail.com','69122308','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122309','Ana','Cirilo','Chavez','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','ana@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('ana@gmail.com','69122309','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122310','Mariajose','Medrano','Mamani','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','mariajose@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('mariajose@gmail.com','69122310','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122311','Lucia','Chaname','Espinoza','f','casada','univ. completo','1990-05-17',
    'abogada','986804190','lucia@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('lucia@gmail.com','69122311','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122312','Pool','Cardenaz','Cano','m','casado','univ. completo','1990-05-17',
    'abogada','986804190','pool@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('pool@gmail.com','69122312','alumno','desconectado');
    
insert into alumnos (dni, nombres, apePaterno, apeMaterno,sexo,ecivil,gradoInstruccion, fnacimiento,
	ocupacion,telefono,correo,domicilio,distrito_id,estado_alumno)
    values ('69122313','Gilberto','Santa','Rosa','m','casado','univ. completo','1990-05-17',
    'abogada','986804190','gilberto@gmail.com','av. cordova 230',4,0);
    insert into usuarios (usuario,password,usuario_type,estado) values ('gilberto@gmail.com','69122313','alumno','desconectado');
    
-- CARGA DE DATOS DE PROFESORES Y USUARIOS --

insert into profesors (nom_prof,apePaterno_prof,apeMaterno_prof,sexo_prof,fechaNac_prof,domicilio,distritoDom_id,estado_prof,dni,correo)
	values ('Beatriz Jane','Caballero','Quispe','f','1971-11-23','av. sucre 110 tablada de lurin',4,1,'74856989','beatrizj@gmail.com');
insert into profesors (nom_prof,apePaterno_prof,apeMaterno_prof,sexo_prof,fechaNac_prof,domicilio,distritoDom_id,estado_prof,dni,correo)
	values ('Enedina','Lapa','Juarez','f','1982-01-15','av. jose granda 130',4,1,'75869584','enedina@gmail.com'),
    ('Doris','Suarez','Francia','f','1970-05-21','jr. ignacion canales 210',7,1,'74145236','suaf@gmail.com'),
    ('Silvia','Espinoza','Huaynalaya','f','1980-10-02','av. miguel grau 750',6,0,'77889944','esph@gmail.com');
    
insert into usuarios (usuario,password,usuario_type,estado) values ('beatrizj@gmail.com','74856989','profesor','desconectado');
insert into usuarios (usuario,password,usuario_type,estado) values ('enedina@gmail.com','75869584','profesor','desconectado');
insert into usuarios (usuario,password,usuario_type,estado) values ('suaf@gmail.com','74145236','profesor','desconectado');
insert into usuarios (usuario,password,usuario_type,estado) values ('esph@gmail.com','77889944','profesor','desconectado');

-- CARGA DE DATOS DE GRUPOS --

insert into grupos (fecInicio,fecFin,profesor_id,modulo_id,turno_id,frecuencia_id) values 
	('2018-03-24','2018-05-24',14,2,1,2),('2018-03-13','2018-07-19',14,2,1,3);
insert into grupos (fecInicio,fecFin,profesor_id,modulo_id,turno_id,frecuencia_id) values 
	('2018-03-24','2018-05-24',14,1,2,2),('2018-03-13','2018-07-19',14,1,2,3);

-- CARGA DE DATOS DE MATRICULAS --
-- GRUPO 3 --
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478069','69122301',3),('2018-10-22',25,'0478070','69122302',3),
    ('2018-10-21',20,'0478071','69122303',3),('2018-10-22',25,'0478072','69122304',3);
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478073','69122305',3),('2018-10-22',25,'0478074','69122306',3),
    ('2018-10-21',20,'0478075','69122307',3),('2018-10-22',25,'0478076','69122308',3);
-- GRUPO 4 --
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478077','69122309',4),('2018-10-22',25,'0478078','69122310',4),
    ('2018-10-21',20,'0478075','69122311',4);
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478079','69122312',4),('2018-10-22',25,'0478080','69122313',4);
-- GRUPO 5 --
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478081','69122314',5),('2018-10-22',25,'0478082','70115689',5);
-- GRUPO 6 --
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478083','70992942',6);
    
-- Matricula adicional para usuario alumno daniel --
insert into matriculas (fecMat,montoLabo,numReciboPago,estudiante_dni,grupo_id) 
	values ('2018-10-22',25,'0478084','69122301',5);
    
-- CARGA DE DATOS DE NOMINAS --
-- PARA GRUPO 3 --
insert into nominas (nota1,nota2,nota3,observacion,matricula_id) values (15,13,14,'le falta mas practica',3),
	(18,18,18,'buena estudiante',5);
insert into nominas (nota1,nota2,nota3,observacion,matricula_id) values (15,20,18,'le falta mas practica',7),
	(18,19,19,'buena estudiante',9);

insert into usuarios (usuario,password,usuario_type,estado) values ('administradorCetpro@gmail.com','admi','profesor','desconectado');

select * from usuarios;
select * from nominas;
select * from profesors;
select * from matriculas;
select * from modulos;
select * from grupos;
select * from frecuencias;
select * from turnos;
select * from distritos;
select * from provincias;
select * from alumnos;
select * from departamentos;