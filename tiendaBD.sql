-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 07, 2022 at 02:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarProducto` (IN `SPIdProducto` INT)  BEGIN

	SELECT * FROM PRODUCTO P
    WHERE SPIdProducto = P.ID_PRODUCTO;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarCarrito` (IN `SPIDCarrito` INT)  BEGIN
    DELETE FROM CARRITO
    WHERE	ID_CARRITO = SPIDCarrito;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarCarritoProducto` (IN `SPIDProducto` INT)  BEGIN
	DELETE FROM CARRITO
    WHERE ID_PRODUCTO = SPIDProducto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarDireccion` (IN `SPIDDireccion` INT)  BEGIN
	DELETE FROM DIRECCIONES
    WHERE ID_DIRECCION = SPIDDireccion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarLocalizacion` (IN `SPIDLocalizacion` INT)  BEGIN
	DELETE FROM LOCALIZACIONES
    WHERE ID_LOCALIZACION = SPIDLocalizacion;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPersona` (IN `SPIDPersona` INT)  BEGIN
	DELETE FROM PERSONA
    WHERE ID_PERSONA = SPIDPersona;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProducto` (IN `SPIDProducto` INT)  BEGIN
	DELETE FROM PRODUCTO
    WHERE	ID_PRODUCTO = SPIDProducto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarCarrito` (IN `SPIDPersona` INT, IN `SPIDProducto` INT, IN `SPIVA` FLOAT, IN `SPTotal` FLOAT, IN `SPTotalProductos` FLOAT)  BEGIN
	INSERT INTO CARRITO 
    (ID_PERSONA,ID_PRODUCTO,IVA,TOTAL,TOTAL_PRODUCTOS)
    VALUES
  (SPIDPersona,SPIDProducto,SPIVA,SPTotal,SPTotalProductos);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarDirecciones` (IN `SPPais` VARCHAR(80), IN `SPProvincia` VARCHAR(100), IN `SPCanton` VARCHAR(120), IN `SPDistrito` VARCHAR(120), IN `SPDireccionExacta` INT(200))  BEGIN
	INSERT INTO DIRECCIONES
    (PAIS,PROVINCIA,CANTON,DISTRITO,DIRECCION_EXACTA)
    VALUES
    (SPPais,SPProvincia,SPCanton,SPDistrito,SPDireccionExacta);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarFactura` (IN `SPIDCarrito` INT, IN `SPIDPersona` INT)  BEGIN
	INSERT INTO FACTURAS (ID_CARRITO,ID_PERSONA)
    VALUES (SPIDCarrito,SPIDPersona);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarImagenProducto` (IN `SPImagen` BLOB)  BEGIN
	INSERT INTO IMAGENESPRODUCTO (IMAGEN) 
    VALUES (SPImagen);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarInventario` (IN `SPIDLocatizacion` INT, IN `SPIDProducto` INT, IN `SPIDProveedor` INT)  BEGIN
	INSERT INTO INVENTARIO 
    (ID_LOCALIZACION,ID_PRODUCTO,ID_PROVEEDOR)
    VALUES (SPIDLocatizacion,ID_PRODUCTO,ID_PROVEEDOR);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarLocalizaciones` (IN `SPNombre` VARCHAR(200))  BEGIN
	INSERT INTO LOCALIZACIONES (NOMBRE)
    VALUES (SPNombre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPersona` (IN `SPApellido` VARCHAR(30), IN `SPCedula` VARCHAR(10), IN `SPIDDireccion` INT, IN `SPIDUsuario` INT, IN `SPNombre` VARCHAR(30), IN `SPTelefono` VARCHAR(10))  BEGIN
	INSERT INTO PERSONA (APELLIDO,CEDULA,ID_DIRECCION,ID_USUARIO,NOMBRE,TELEFONO) VALUES
    (SPApellido,SPCedula,SPIDDireccion,SPIDUsuario,SPNombre,SPTelefono);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProducto` (IN `SPNombre` VARCHAR(200), IN `SPMarca` VARCHAR(200), IN `SPModelo` VARCHAR(200), IN `SPDescripcion` VARCHAR(200), IN `SPPrecio` FLOAT, IN `SPCantidad` INT, IN `SPCalificacion` INT, IN `SPCategoria` VARCHAR(50))  BEGIN

	INSERT INTO PRODUCTO (NOMBRE,MARCA,MODELO,DESCRIPCION,PRECIO,CANTIDAD,CALIFICACION,CATEGORIA) 
    VALUES (SPNombre,SPMarca,SPModelo,SPDescripcion,SPPrecio,SPCantidad,SPCalificacion,SPCategoria);
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarProveedores` (IN `SPNombre` VARCHAR(200), IN `SPActivo` BOOLEAN)  BEGIN
	INSERT INTO PROVEEDORES (NOMBRE, ACTIVO)
    VALUES (SPNombre,SPActivo);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario` (IN `SPCorreo` VARCHAR(200), IN `SPContrasena` VARCHAR(200), IN `SPTipoUsuario` INT(2), IN `SPActivo` BOOLEAN)  BEGIN
	
    INSERT INTO USUARIOS 
    (CORREO,CONTRASENA,TIPO_USUARIO,ACTIVO)
    VALUES 
   (SPCorreo,MD5(SPContrasena),SPTipoUsuario,SPActivo);
   
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Login` (IN `SPCorreo` VARCHAR(200), IN `SPConstrasena` VARCHAR(200))  BEGIN

	SELECT	CORREO, TIPO_USUARIO
    FROM	USUARIOS
    WHERE	CORREO = SPCorreo
    AND		CONTRASENA = MD5(SPConstrasena);
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarLocalizaciones` ()  BEGIN
	SELECT * FROM LOCALIZACIONES;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarPersona` (IN `SPCorreo` VARCHAR(200))  BEGIN
	SELECT 	P.ID_PERSONA,P.NOMBRE,P.APELLIDO,
    		P.TELEFONO,P.CEDULA,D.PAIS,D.PROVINCIA,
            D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA
    FROM	PERSONA P, DIRECCIONES D, USUARIOS U
    WHERE	P.ID_DIRECCION = D.ID_DIRECCION
    AND		P.ID_USUARIO = U.ID_USUARIO
    AND		U.CORREO = SPCorreo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarPersonas` ()  BEGIN
	SELECT 	P.ID_PERSONA,P.NOMBRE,P.APELLIDO,
    		P.TELEFONO,P.CEDULA,D.PAIS,D.PROVINCIA,
            D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA
    FROM	PERSONA P, DIRECCIONES D
    WHERE	P.ID_DIRECCION = D.ID_DIRECCION;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarProdRelacionados` (IN `SPNombre` VARCHAR(200))  BEGIN

	SELECT * FROM PRODUCTO P
    WHERE P.NOMBRE = SPNombre;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarProductos` ()  BEGIN
	SELECT 	P.ID_PRODUCTO,P.NOMBRE,P.MARCAP,P.MODELO,
    P.DESCRIPCION,P.PRECIO,P.CANTIDAD,P.CALIFICACION,
    P.CATEGORIA,I.IMAGEN
    FROM 	PRODUCTO P, IMAGENESPRODUCTO I
    WHERE	P.ID_IMAGEN = I.ID_IMAGEN;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarProveedoresActivos` ()  BEGIN
	SELECT * FROM PROVEEDORES P
    WHERE P.ACTIVO = 1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `ID_CARRITO` int(11) NOT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL,
  `TOTAL_PRODUCTOS` float DEFAULT NULL,
  `IVA` float DEFAULT NULL,
  `TOTAL` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `ID_DIRECCION` int(11) NOT NULL,
  `PAIS` varchar(80) DEFAULT NULL,
  `PROVINCIA` varchar(100) DEFAULT NULL,
  `CANTON` varchar(120) DEFAULT NULL,
  `DISTRITO` varchar(120) DEFAULT NULL,
  `DIRECCION_EXACTA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE `facturas` (
  `ID_FACTURA` int(11) NOT NULL,
  `ID_PERSONA` int(11) DEFAULT NULL,
  `ID_CARRITO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imagenesproducto`
--

CREATE TABLE `imagenesproducto` (
  `ID_IMAGEN` int(11) NOT NULL,
  `IMAGEN` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `ID_INVENTARIO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL,
  `ID_LOCALIZACION` int(11) DEFAULT NULL,
  `ID_PROVEEDOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `localizaciones`
--

CREATE TABLE `localizaciones` (
  `ID_LOCALIZACION` int(11) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `ID_PERSONA` int(11) NOT NULL,
  `ID_DIRECCION` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `APELLIDO` varchar(30) DEFAULT NULL,
  `TELEFONO` varchar(10) DEFAULT NULL,
  `CEDULA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL,
  `MARCA` varchar(200) DEFAULT NULL,
  `MODELO` varchar(200) DEFAULT NULL,
  `DESCRIPCION` varchar(200) DEFAULT NULL,
  `PRECIO` float DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `CALIFICACION` int(11) DEFAULT NULL,
  `CATEGORIA` varchar(50) DEFAULT NULL,
  `ID_IMAGEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `NOMBRE`, `MARCA`, `MODELO`, `DESCRIPCION`, `PRECIO`, `CANTIDAD`, `CALIFICACION`, `CATEGORIA`, `ID_IMAGEN`) VALUES
(1, 'IPHONE', 'APPLE', 'SE', 'Celular de la marca Apple', 399000, 20, 7, 'Celular', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `ID_PROVEEDOR` int(11) NOT NULL,
  `NOMBRE` varchar(200) DEFAULT NULL,
  `ACTIVO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `CORREO` varchar(200) NOT NULL,
  `CONTRASENA` varchar(200) NOT NULL,
  `TIPO_USUARIO` varchar(200) NOT NULL,
  `ACTIVO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `CORREO`, `CONTRASENA`, `TIPO_USUARIO`, `ACTIVO`) VALUES
(2, 'ADMIN@ADMIN.COM', '0192023a7bbd73250516f069df18b500', '3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID_CARRITO`),
  ADD KEY `FK__CID_PERSONA` (`ID_PERSONA`),
  ADD KEY `FK__CID_PRODUCTO` (`ID_PRODUCTO`);

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`ID_DIRECCION`);

--
-- Indexes for table `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`ID_FACTURA`),
  ADD KEY `FK__FID_PERSONA` (`ID_PERSONA`),
  ADD KEY `FK__FID_CARRITO` (`ID_CARRITO`);

--
-- Indexes for table `imagenesproducto`
--
ALTER TABLE `imagenesproducto`
  ADD PRIMARY KEY (`ID_IMAGEN`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID_INVENTARIO`),
  ADD KEY `FK__IID_PRODUCTO` (`ID_PRODUCTO`),
  ADD KEY `FK__IID_LOCALIZACION` (`ID_LOCALIZACION`),
  ADD KEY `FK__IID_PROVEEDOR` (`ID_PROVEEDOR`);

--
-- Indexes for table `localizaciones`
--
ALTER TABLE `localizaciones`
  ADD PRIMARY KEY (`ID_LOCALIZACION`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_PERSONA`),
  ADD KEY `FK__PID_DIRECCION` (`ID_DIRECCION`),
  ADD KEY `FK_PID_USUARIO` (`ID_USUARIO`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `FK_ID_PRODUCTO_IMAGEN` (`ID_IMAGEN`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID_PROVEEDOR`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID_CARRITO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `ID_DIRECCION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facturas`
--
ALTER TABLE `facturas`
  MODIFY `ID_FACTURA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `ID_PERSONA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK__CID_PERSONA` FOREIGN KEY (`ID_PERSONA`) REFERENCES `persona` (`ID_PERSONA`),
  ADD CONSTRAINT `FK__CID_PRODUCTO` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`);

--
-- Constraints for table `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `FK__FID_CARRITO` FOREIGN KEY (`ID_CARRITO`) REFERENCES `carrito` (`ID_CARRITO`),
  ADD CONSTRAINT `FK__FID_PERSONA` FOREIGN KEY (`ID_PERSONA`) REFERENCES `persona` (`ID_PERSONA`);

--
-- Constraints for table `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `FK__IID_LOCALIZACION` FOREIGN KEY (`ID_LOCALIZACION`) REFERENCES `localizaciones` (`ID_LOCALIZACION`),
  ADD CONSTRAINT `FK__IID_PRODUCTO` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`),
  ADD CONSTRAINT `FK__IID_PROVEEDOR` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedores` (`ID_PROVEEDOR`);

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_PID_USUARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `FK__PID_DIRECCION` FOREIGN KEY (`ID_DIRECCION`) REFERENCES `direcciones` (`ID_DIRECCION`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_ID_PRODUCTO_IMAGEN` FOREIGN KEY (`ID_IMAGEN`) REFERENCES `imagenesproducto` (`ID_IMAGEN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
