

/* ==================================================== */
/* 1- INSERT USUARIOS */
/* ==================================================== */

INSERT INTO usuarios (usuario,contrasena) values ('yolodesign.jas@gmail.com','Yolo2000');


/* ==================================================== */
/* 2 - INSERT PERFILES */
/* ==================================================== */
 
INSERT INTO perfiles (nombre,apellido,correo,sexo,valoracion,opinion, telefono,foto,fechaNacimiento,id_usuario) values ('yolo','design','yolodesign.jas@gmail.com','otro',999,'Son los jefes del proyecto, valoracion positiva', 687740992,'foto','1996-12-22',1);



/* ==================================================== */
/* 3 - INSERT CATEGORIAS */
/* ==================================================== */

INSERT INTO categorias (nombre) values ('yolo');
INSERT INTO categorias (nombre) values ('alimentación y bebidas');
INSERT INTO categorias (nombre) values ('agricultura');
INSERT INTO categorias (nombre) values ('bebé');
INSERT INTO categorias (nombre) values ('belleza');
INSERT INTO categorias (nombre) values ('bricolaje y herramientas');
INSERT INTO categorias (nombre) values ('coche');
INSERT INTO categorias (nombre) values ('coleccionismo');
INSERT INTO categorias (nombre) values ('despiece coche');
INSERT INTO categorias (nombre) values ('despiece moto');
INSERT INTO categorias (nombre) values ('electronica');
INSERT INTO categorias (nombre) values ('electrodomesticos');
INSERT INTO categorias (nombre) values ('empleo');
INSERT INTO categorias (nombre) values ('equipaje');
INSERT INTO categorias (nombre) values ('formación');
INSERT INTO categorias (nombre) values ('handmade');
INSERT INTO categorias (nombre) values ('hogar y cocina');
INSERT INTO categorias (nombre) values ('iluminación');
INSERT INTO categorias (nombre) values ('industria y ciencia');
INSERT INTO categorias (nombre) values ('infromática');
INSERT INTO categorias (nombre) values ('inmobiliaria');
INSERT INTO categorias (nombre) values ('instrumentos musicales');
INSERT INTO categorias (nombre) values ('jardín');
INSERT INTO categorias (nombre) values ('joyería');
INSERT INTO categorias (nombre) values ('juguetes y juegos');
INSERT INTO categorias (nombre) values ('libros');
INSERT INTO categorias (nombre) values ('moda');
INSERT INTO categorias (nombre) values ('moto');
INSERT INTO categorias (nombre) values ('moto accesorios');
INSERT INTO categorias (nombre) values ('muebles y decoración');
INSERT INTO categorias (nombre) values ('música');
INSERT INTO categorias (nombre) values ('oficina y papelería');
INSERT INTO categorias (nombre) values ('otros');
INSERT INTO categorias (nombre) values ('peliculas y series tv');
INSERT INTO categorias (nombre) values ('productos para mascotas');
INSERT INTO categorias (nombre) values ('relojes');
INSERT INTO categorias (nombre) values ('ropa y accesorios');
INSERT INTO categorias (nombre) values ('salud y cuidado personal');
INSERT INTO categorias (nombre) values ('servicios');
INSERT INTO categorias (nombre) values ('software');
INSERT INTO categorias (nombre) values ('videojuegos');
INSERT INTO categorias (nombre) values ('zapatos y complementos');


/* ==================================================== */
/* 4 - INSERT ETIQUETAS */
/* ==================================================== */


INSERT INTO etiquetas (usos,nombre,id_categoria) VALUES (100,'yolo',1);




/* ==================================================== */
/* 5 - INSERT PRODUCTOS */
/* ==================================================== */
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('yolo','Esto es un producto de prueba','coche.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('manzana','Esto es un producto','coche.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('maiz','de prueba','coche.jpg','dir_prueba',NOW(),3,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('pañales','producto de prueba','coche.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('biberon','Esto es','coche.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('maquillaje','Esto es una prueba','coche.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('yolo','Esto es un producto de prueba','coche.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('pera','Esto es un producto','coche.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('tractor','de prueba','coche.jpg','dir_prueba',NOW(),3,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('cuna','producto de prueba','coche.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('juguetes','Esto es','coche.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('pintalabios','Esto es una prueba','coche.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('yolo','Esto es un producto de prueba','coche.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('sabana','Esto es un producto','coche.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('nenuko','de prueba','coche.jpg','dir_prueba',NOW(),3,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('sandia','producto de prueba','coche.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('manguera','Esto es','coche.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('eye-line','Esto es una prueba','coche.jpg','dir_prueba',NOW(),5,1);




