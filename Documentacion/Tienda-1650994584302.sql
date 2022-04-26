
CREATE TABLE cesta
(
  id         INT    NOT NULL,
  fechaCad   DATE   NOT NULL,
  codCliente BIGINT NOT NULL DEFAULT PK,
  PRIMARY KEY (id)
) COMMENT 'cesta con los productos a comprar';

CREATE TABLE cliente
(
  idCliente   BIGINT NOT NULL DEFAULT PK COMMENT 'Si no es PK será único',
  tarjetaCred        NULL    ,
  idUser      BIGINT NOT NULL,
  direccion          NULL    ,
  PRIMARY KEY (idCliente)
) COMMENT 'cliente para hacer los pedidos';

CREATE TABLE consola
(
  id      INT     NOT NULL,
  codPro  INT     NOT NULL,
  modelo  VARCHAR NULL    ,
  espacio TINYINT NULL     COMMENT 'Capacidad en GB',
  color   VARCHAR NULL    ,
  lector  BOOLEAN NOT NULL COMMENT 'Lector físico de los juegos (BR,tarjetas,...)',
  PRIMARY KEY (id)
) COMMENT 'Propiedades de un producto consola';

CREATE TABLE estado
(
  codigo      INT     NOT NULL,
  descripcion VARCHAR NOT NULL,
  PRIMARY KEY (codigo)
) COMMENT 'punto del proceso de reparación';

CREATE TABLE juego
(
  id        INT     NOT NULL,
  PEGI      TINYINT NULL     COMMENT 'Mínimo de edad para poder jugar',
  codPro    INT     NOT NULL,
  horas     INT     NULL     COMMENT 'Horas de juego',
  idConsola INT     NOT NULL,
  PRIMARY KEY (id)
) COMMENT 'producto juego con sus datos caractarísticos';

CREATE TABLE pedido
(
  codPedido BIGINT NOT NULL DEFAULT PK,
  precio    DOUBLE NULL    ,
  PRIMARY KEY (codPedido)
) COMMENT 'Tabla con los pedidos realizados. Si baja el stock';

CREATE TABLE pedidoCliente
(
                   NULL    ,
  email     BIGINT NOT NULL DEFAULT PK,
  codPedido BIGINT NOT NULL DEFAULT PK
);

CREATE TABLE periferico
(
  id        INT NOT NULL COMMENT 'Clave primaria del complemento',
  codPro    INT NOT NULL,
  idConsola INT NOT NULL,
  PRIMARY KEY (id)
) COMMENT 'Complemento de una consola o juego';

CREATE TABLE producto
(
  id          INT     NOT NULL,
  nombre      VARCHAR NOT NULL,
  imagen      VARCHAR NULL    ,
  stock       INT     NULL    ,
  precio      INT     NULL    ,
  descripcion VARCHAR NULL    ,
  PRIMARY KEY (id)
) COMMENT 'Tabla con los productos disponibles';

CREATE TABLE productoCesta
(
  cantidad INT    NOT NULL,
  idCesta  INT    NOT NULL DEFAULT PK,
  idPro    BIGINT NOT NULL,
                  NOT NULL,
  id       INT    NOT NULL,
  PRIMARY KEY ()
) COMMENT 'Tabla intermédia entre cliente y cesta';

CREATE TABLE productoRep
(
  codPro       BIGINT  NOT NULL COMMENT 'codigo producto',
  descripcion  TEXT    NULL    ,
  rutaImagenes VARCHAR NULL     COMMENT 'imagenes realizadas previamente para verificar el estado del dispositivo. Sirve para verificar que no hemos causado daños extra durante las reparaciones.',
  idCliente    BIGINT  NOT NULL DEFAULT PK COMMENT 'Si no es PK será único',
  PRIMARY KEY (codPro)
) COMMENT 'Producto a reparar. Independiente de producto normal';

CREATE TABLE pruductoPedido
(
  cantidad  INT    NOT NULL,
  idPro     INT    NOT NULL,
  codPedido BIGINT NOT NULL DEFAULT PK
) COMMENT 'Tabla intermedia con los datos de los pedidos y los productos.';

CREATE TABLE reparacion
(
  idReparacion          NOT NULL,
  descripcion  LONGTEXT NOT NULL COMMENT 'Descripción problema',
  idTecnico             NOT NULL,
  idCliente    BIGINT   NOT NULL DEFAULT PK COMMENT 'Si no es PK será único',
  codPro       BIGINT   NOT NULL COMMENT 'codigo producto',
  codEstado    INT      NOT NULL,
  PRIMARY KEY (idReparacion)
);

CREATE TABLE tecnico
(
  idTecnico           NOT NULL,
  Especialidad int    NULL    ,
  idUser       BIGINT NOT NULL,
  PRIMARY KEY (idTecnico)
);

CREATE TABLE usuario
(
  id        BIGINT NOT NULL,
  nombre           NULL    ,
  apellidos        NULL    ,
  email            NULL    ,
  PRIMARY KEY (id)
) COMMENT 'usuario del sistema. no es un cliente';

ALTER TABLE consola
  ADD CONSTRAINT FK_producto_TO_consola
    FOREIGN KEY (codPro)
    REFERENCES producto (id);

ALTER TABLE juego
  ADD CONSTRAINT FK_producto_TO_juego
    FOREIGN KEY (codPro)
    REFERENCES producto (id);

ALTER TABLE periferico
  ADD CONSTRAINT FK_producto_TO_periferico
    FOREIGN KEY (codPro)
    REFERENCES producto (id);

ALTER TABLE periferico
  ADD CONSTRAINT FK_consola_TO_periferico
    FOREIGN KEY (idConsola)
    REFERENCES consola (id);

ALTER TABLE productoCesta
  ADD CONSTRAINT FK_producto_TO_productoCesta
    FOREIGN KEY (idPro)
    REFERENCES producto (id);

ALTER TABLE pedidoCliente
  ADD CONSTRAINT FK_pedido_TO_pedidoCliente
    FOREIGN KEY (codPedido)
    REFERENCES pedido (codPedido);

ALTER TABLE pruductoPedido
  ADD CONSTRAINT FK_producto_TO_pruductoPedido
    FOREIGN KEY (idPro)
    REFERENCES producto (id);

ALTER TABLE pruductoPedido
  ADD CONSTRAINT FK_pedido_TO_pruductoPedido
    FOREIGN KEY (codPedido)
    REFERENCES pedido (codPedido);

ALTER TABLE productoCesta
  ADD CONSTRAINT FK_cesta_TO_productoCesta
    FOREIGN KEY (id)
    REFERENCES cesta (id);

ALTER TABLE cesta
  ADD CONSTRAINT FK_cliente_TO_cesta
    FOREIGN KEY (codCliente)
    REFERENCES cliente (idCliente);

ALTER TABLE pedidoCliente
  ADD CONSTRAINT FK_cliente_TO_pedidoCliente
    FOREIGN KEY (email)
    REFERENCES cliente (idCliente);

ALTER TABLE cliente
  ADD CONSTRAINT FK_usuario_TO_cliente
    FOREIGN KEY (idUser)
    REFERENCES usuario (id);

ALTER TABLE tecnico
  ADD CONSTRAINT FK_usuario_TO_tecnico
    FOREIGN KEY (idUser)
    REFERENCES usuario (id);

ALTER TABLE reparacion
  ADD CONSTRAINT FK_tecnico_TO_reparacion
    FOREIGN KEY (idTecnico)
    REFERENCES tecnico (idTecnico);

ALTER TABLE reparacion
  ADD CONSTRAINT FK_cliente_TO_reparacion
    FOREIGN KEY (idCliente)
    REFERENCES cliente (idCliente);

ALTER TABLE productoRep
  ADD CONSTRAINT FK_cliente_TO_productoRep
    FOREIGN KEY (idCliente)
    REFERENCES cliente (idCliente);

ALTER TABLE reparacion
  ADD CONSTRAINT FK_productoRep_TO_reparacion
    FOREIGN KEY (codPro)
    REFERENCES productoRep (codPro);

ALTER TABLE reparacion
  ADD CONSTRAINT FK_estado_TO_reparacion
    FOREIGN KEY (codEstado)
    REFERENCES estado (codigo);
