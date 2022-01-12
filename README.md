Notas e consideracións:

* Creación dun blog seguindo a arquitectura MVC.

* Consta dunha área privada e outra pública (que será o contido dentro da carpeta public exclusivamente).

* Unha vez creada a estrutura de cartafoles, creamos unha bbdd dende a liña de comandos (chamada blog) (https://www.inmotionhosting.com/support/server/databases/create-a-mysql-database/) e tamén un usuario (admin admin).

* Crear táboa na bbdd co comando (dentro do entorno mysql):

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(16) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `fecha_acceso` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `usuarios` tinyint(1) NOT NULL DEFAULT '0',
  `noticias` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


* Crear a táboa onde irán as noticias 
* Completar os ficheiros co código.

Para crear novos usuarios:

    USE cms;

INSERT INTO usuarios VALUES
    (1,"admin","$2y$12$yZxvSwfonS8ulWkktpjQee/cQa9/EmBNWcGBtEFiNcqySg2iYMmzC",null,1,1,1),  
    (2,"operador1","$2y$12$XVoRAG98xTBPKwacO0n72eX0voLxIW0A6FuPY3osPDXGXr2vGqCD6",null,1,0,1),
    (3,"operador2","$2y$12$NWgP1SN9dNppwnT5D1dag.lwJaihisp8CIQvGFZ0oJmlU//qNLWBO",null,0,0,1);

    (contrasinais: admin, admin1, admin2. Creouse un hash con código php para encriptar as contrasinais)



INSERT INTO usuarios VALUES
    (4,"superadmin","$2y$10$XHmM63XAkDG5XsTXQfo/iuVWO0QXiQ.mfNjkI4Fozxhm9SBrcQB/K",null,1,1,1);
    

    (contrasinal:superadmin)