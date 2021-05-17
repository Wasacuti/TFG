CREATE TABLE `tfg-bd`.`clientes` ( `cod_cte` INT(3) NOT NULL AUTO_INCREMENT , `nombre_cte` VARCHAR(32) NOT NULL , `correo_cte` VARCHAR(64) NOT NULL , `password_cte` VARCHAR(32) NOT NULL ,'telefono_cte' INT(10) NOT NULL,'direccion_cte' VARCHAR(256)  NOT NULL, PRIMARY KEY (`cod_cte`)) ENGINE = InnoDB;

INSERT INTO `clientes` (nombre_cte, correo_cte,password_cte,telefono_cte,direccion_cte) VALUES ('MarioPerez','mario@gmail.com','password',84848484,  'Heredia Costa RICA' );


CREATE TABLE `tfg-bd`.`administradores` ( `cod_administrador` INT(3) NOT NULL AUTO_INCREMENT , `nombre_admin` VARCHAR(32) NOT NULL , `correo_admin` VARCHAR(64) NOT NULL , `password_admin` VARCHAR(32) NOT NULL , PRIMARY KEY (`cod_administrador`)) ENGINE = InnoDB;



/*Tabla de factura*/ Create table `tfg-bd` `factura`(
codigo_factura int primary key, id_cliente varchar(15) not null, fecha date not null, direccion nvarchar (200) not null, idestado int not null, total int not null, constraint factura_cliente foreign key(id_cliente) references clientes (identificacion),
constraint factura_estado foreign key(idestado) references estado(id_estado) -);



CREATE TABLE IF NOT EXISTS `Productos`(
    id_producto INT (5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    marca_id INT (5) NOT  NULL ,
    modelo VARCHAR (256) NOT  NULL,
    cantidad_disponible INT (5) NOT NULL,
    precio  FLOAT  NOT NULL,
    descripcion VARCHAR (512)NOT NULL ,
    imagen VARCHAR (256) NOT NULL ,
    categoria_id int (5) NOT  NULL,
    inventario TINYINT(1) NOT NULL,
    CONSTRAINT categoria_producto FOREIGN KEY (categoria_id) REFERENCES Categoria(id_categoria),
    CONSTRAINT marca_producto FOREIGN KEY (marca_id) REFERENCES Marca(id_marca)


)

CREATE TABLE IF NOT EXISTS `Categoria`(
    id_categoria INT (5) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    categoria_nombre VARCHAR (256) NOT  NULL 

);

CREATE TABLE IF NOT EXISTS `Marca`(
    id_marca INT (5) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    marca_nombre VARCHAR (256) NOT  NULL 

);


-- CREATE TABLE `tfg-bd`.`categoria` ( `id_categoria` INT(5) NOT NULL AUTO_INCREMENT , `categoria_nombre` VARCHAR(256) NOT NULL , PRIMARY KEY (`id_categoria`)) ENGINE = InnoDB;


CREATE TABLE `Pedidos` (
    id_pedido INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    cliente_id int(5) NOT NULL,
    fecha DATETIME NOT NULL DEFAULT current_timestamp() ,
    CONSTRAINT pedido_clientes FOREIGN KEY (cliente_id) REFERENCES clientes (id_cliente)



);

---Este fue capturado de PHP MY ADMIN 
CREATE TABLE `pedidos` (
 `id_pedido` int(5) NOT NULL  PRIMARY KEY  AUTO_INCREMENT,
 `cliente_id` int(5) NOT NULL,
 `fecha` datetime NOT NULL DEFAULT current_timestamp(),
 CONSTRAINT `pedido_clientes` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4



CREATE TABLE `Detalle_Pedidos` (
    id_detalle INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    producto_id int(5) NOT NULL,
    pedido_id int(5) NOT NULL,
    cantidad int(5) NOT NULL,
    precio FLOAT ,
    total FLOAT ,
    
    CONSTRAINT pedido_detalle FOREIGN KEY (pedido_id) REFERENCES pedidos (id_pedido),
    CONSTRAINT pedido_producto FOREIGN KEY (producto_id) REFERENCES productos (id_producto)


);


ALTER TABLE `productos` CHANGE `marca` `marca_id` INT(5) NOT NULL;
ALTER TABLE `productos` CHANGE ADD CONSTRAINT marca_producto FOREIGN KEY (marca_id) REFERENCES marca (id_marca),

ALTER TABLE `productos` CHANGE ADD CONSTRAINT categoria_producto FOREIGN KEY (categoria_id) REFERENCES Categoria (id_categoria),





---ADD CONSTRAINT FK_PersonOrder
---FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);


ALTER TABLE Productos ADD inventario TINYINT(1) NOT NULL; 