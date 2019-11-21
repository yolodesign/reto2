

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

INSERT INTO categorias (nombre) values ('Informatica y Electronica');
INSERT INTO categorias (nombre) values ('Alimentacion y Bebidas');
INSERT INTO categorias (nombre) values ('Coches');
INSERT INTO categorias (nombre) values ('Juguetes');
INSERT INTO categorias (nombre) values ('Deportes');
INSERT INTO categorias (nombre) values ('Moda');
INSERT INTO categorias (nombre) values ('Moviles');
INSERT INTO categorias (nombre) values ('Musica');



/* ==================================================== */
/* 4 - INSERT ETIQUETAS */
/* ==================================================== */


INSERT INTO etiquetas (usos,nombre,id_categoria) VALUES (100,'yolo',1);




/* ==================================================== */
/* 5 - INSERT PRODUCTOS */
/* ==================================================== */
/*Informatica y Electronica*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Mac','Macbook finales 2008 en buen estado algún arañazo y lo que ahí en la foto se vende con cargador largo de 2 metros muy poco uso','mac.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Cargador Movil','Pues cargador para cargar un portatil HP 2134x','cargador.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Arreglo ordenadores','Ofrezco mis servicios como informatico para arreglo de ordenador, puedo ir a casa o tengo un pequeño local para trabajar','arreglo.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('MSI','Preparate para sentir todo el poder del juego con el potente ordenador portatil de MSI GF63 Thin 9SC. Un portatil gaming dotado con un procesador Coffeelake i7, 16GB de RAM, 512GB SSD de almacenamiento, y todo bajo una potente grafica NVIDIA','msi.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Cascos','Cascos por conexion jack que sirven para movil, PC o play/Xbox','cascospc.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('NVidia 1080','Tremenda grafica para tremendos jugadores, a que esperas?','1080.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('NVidia 1070','Casi una tremenda grafica pero para autenticos jugadores, a que esperas?','1070.jpg','dir_prueba',NOW(),1,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Pantalla AOC','Experiencia de juego envolvente con curvatura 1500R. El C24G1 cuenta con un panel VA Full HD con curvatura 1500R, carece de marco e incluye un soporte ergonomico. Dispone de 144 Hz, FreeSync y tiempo de respuesta de la imagen en movimiento (MPRT) de 1 ms, ademas de multiples caracteristicas especificas para juegos.','aoc.jpg','dir_prueba',NOW(),1,1);

/*Alimentacion y Bebidas*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Monster','Bebida energetica que te pone como un toro, perfecta para usarla despues de entrenar, antes o durante, o mientras haces cualquier otra cosa.(RedBull barato)','monster.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Red Bull','Bebida energetica que te pone como un toro, perfecta para usarla despues de entrenar, antes o durante, o mientras haces cualquier otra cosa.','redbull.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Manzanas','Tienes hambre? mira las pintas de estas manzanas y no te niegues a darte un capricho, recogidas de mis manzanos.','manzanas.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Naranjas','Quieres un zumo fresquito verdad? Pues aprovecha que estan de oferta','naranjas.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Chocolate','Rico chocolate, aunque no te pases comiendolo','chocolates.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Sprite','Una fusion de algo con limon y gas pero que esta de muerte','sprite.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Agua Manantial','Pues agua del rio','aguamanantial.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Agua 2.0','Agua del rio pero procesada y embotellada','cabreiroa.jpg','dir_prueba',NOW(),2,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Platanos','Quieres un platano? (/0.0)/','platanos.jpg','dir_prueba',NOW(),2,1);

/*Coches*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Mercedes','Prueba este nuevo modelo del famoso coche Mercedes CLA con 450 caballos y cosas nuevas que te impresionaran','cla.jpg','dir_prueba',NOW(),3,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Toyota','El mejor coche del mercado en la actualidad, no lo crees? pruebalo gratis','toyota.jpg','dir_prueba',NOW(),3,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('BMW','El coche mas seguro del mundo actualmente, encima parece una bala','m3.jpg','dir_prueba',NOW(),3,1);

/*Juguetes*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Excavadora','Llevalo a la playa y veras que bien te lo pasas jugando en la arena','excavadora.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Playmobil','Muñecos de plastico','playmobil.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Action man','Muñeco de plastico','actionman.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Barbie','Muñeca de plastico','barbie.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Hot Wheels','Circuitos de coches para carreras','hotw.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Granja Pinypon','Granja con animales, huertas y npcs','granja.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Moto','Apropiada para mayores de 3 años','moto.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Carrito','Carrito para llevar al bebe de plastico(dlc aparte)','carrito.jpg','dir_prueba',NOW(),4,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Coche teleridigido','coche con un mando','cochetele.jpg','dir_prueba',NOW(),4,1);


/*Deportes*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Balon futbol','Balon para jugar al futbol','balon.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Camiseta Madrid','Camiseta del equipo todopoderoso','cmadrid.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Zapatillas tacon','Zapatillas para agarrarte mejor al cesped','zapatillas.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Bicicleta','Bici para poder llegar antes a los sitios','bicicleta.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Tabla Snow','Recomendado uso solo en la nieve','tablasnow.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Raqueta','Para tenis o padel, lo que mas te apetezca','raqueta.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Casco bici','Seguridad ante todo','casco.jpg','dir_prueba',NOW(),5,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Pesas','De 2kg cada una, perfectas para principiantes','pesas.jpg','dir_prueba',NOW(),5,1);

/*Moda*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Vestido','Que se hacerca el verano y empieza a hacer calorcito','vestido.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Camiseta','Barata y bonita','camiseta.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Chaqueta vaquera','Mas bonita de lo que abriga','chaquetavaquera.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Pantalones','Mira por si son tu talla, de ofertas','pantalon.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Zapatos','Es justo lo que necesitas para combinar a juego con tu traje','zapatos.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Medias','Cuidado no las rajes','medias.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Colonia','Duchate primero','onemillion.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Collar','A juego con tus ojos','collar.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Pinta uñas','De todos los colores que ves en la imagen','pintauñas.jpg','dir_prueba',NOW(),6,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Bolso','grande o pequeño','bolso.jpg','dir_prueba',NOW(),6,1);


/*Moviles*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('S10','Un Samsung mas','s10.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Pocophone','Señoras y señores, estan ante el mejor movil del mercado de la actualidad','pocophone.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('P20','Esto es un producto','p20.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Iphone10','Un Iphone mas','iphone10.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Iphone11','Wololo un iphone con 3 camaras','iphone11.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Motorola','Estos moviles aunque no lo parezca siguen en el mercado mas fuertes que nunca','motorola.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Cascos Movil','Para escuchar musica o lo que quieras','cascos.jpg','dir_prueba',NOW(),7,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Cargador Movil','Seguro que si estas viendo esto es por que eres un poco desastre','cargadormovil.jpg','dir_prueba',NOW(),7,1);


/*Musica*/

INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Iron Maiden','Disco del grupo Iron Maide','iron.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Megadeth','Disco del grupo Megadeth','megadethr.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Metallica','Disco del grupo Metallica','metallica.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Slayer','Disco del grupo Slayer','slayer.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Motorhead','Disco del grupo Motorhead','motorhead.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Angelus Apatrida','Disco del grupo Angelus Apatrida','angelus.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Guitarra','Guitarra academi para principiantes','guitarra.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Bateria','Bateria electrica para casa con cascos incluidos','bateria.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Bajo','Castillo','bajo.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Anthrax','Disco del grupo Anthrax','anthrax.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Ozzy','Disco del grupo Ozzy','ozzy.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Overkill','Disco del grupo Overkill','overkill.jpg','dir_prueba',NOW(),8,1);
INSERT INTO productos (nombre,descripcion,foto,direccion,fecha,id_categoria,id_perfiles) values ('Megadeth','Molo mucho y salgo dos veces. Viva Megadeth','megadeth.jpg','dir_prueba',NOW(),8,1);




