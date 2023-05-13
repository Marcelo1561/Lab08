CREATE DATABASE	Eval02

USE Eval02

CREATE TABLE Producto(Producto_id INT PRIMARY KEY AUTO_INCREMENT,
Nombre VARCHAR	(80),
Descripcion VARCHAR(250),
Stock	INT NOT NULL,
PrecioVenta DECIMAL(8, 2));

INSERT INTO	Producto(Nombre,Descripcion,Stock,PrecioVenta)

VALUES	('Mouse','Mouse de escritorio', 15, 49.99);


SELECT * FROM Producto
