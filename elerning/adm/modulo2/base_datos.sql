CREATE TABLE cuestionario
(
  id_cuestionario INTEGER AUTO_INCREMENT,
  nombre_cuestionario VARCHAR(255),
  fecha DATE,
  PRIMARY KEY (id_cuestionario)
)ENGINE = InnoDB;

CREATE TABLE pregunta
(
  id_pregunta INTEGER AUTO_INCREMENT,
  nombre_pregunta VARCHAR(255),
  id_cuestionario INTEGER,
  PRIMARY KEY (id_pregunta),
  FOREIGN KEY (id_cuestionario) REFERENCES cuestionario (id_cuestionario) on delete cascade on update cascade
)ENGINE = InnoDB;


CREATE TABLE eleccion
(
  id_eleccion INTEGER AUTO_INCREMENT,
  es_correcto TINYINT(1) DEFAULT 0,
  nombre_eleccion VARCHAR(255),
  id_pregunta INTEGER ,
  PRIMARY KEY (id_eleccion),
  FOREIGN KEY (id_pregunta) REFERENCES pregunta (id_pregunta) on delete cascade on update cascade
)ENGINE = InnoDB;


CREATE TABLE cuestionario_pr
(
  id_cuestionario INTEGER AUTO_INCREMENT,
  nombre_cuestionario VARCHAR(255),
  fecha DATE,
  PRIMARY KEY (id_cuestionario)
)ENGINE = InnoDB;

CREATE TABLE pregunta_pr
(
  id_pregunta INTEGER AUTO_INCREMENT,
  nombre_pregunta VARCHAR(255),
  id_cuestionario INTEGER,
  PRIMARY KEY (id_pregunta),
  FOREIGN KEY (id_cuestionario) REFERENCES cuestionario_pr (id_cuestionario) on delete cascade on update cascade
)ENGINE = InnoDB;

CREATE TABLE respuesta_pr
(
  id_respuesta INTEGER AUTO_INCREMENT,
  respuesta TEXT,
  id_pregunta INTEGER ,
  PRIMARY KEY (id_respuesta),
  FOREIGN KEY (id_pregunta) REFERENCES pregunta_pr (id_pregunta) on delete cascade on update cascade
)ENGINE = InnoDB;



