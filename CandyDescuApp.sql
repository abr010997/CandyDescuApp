/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - candydecuapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`candydecuapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `candydecuapp`;

/*Table structure for table `cd_cliente_tb` */

DROP TABLE IF EXISTS `cd_cliente_tb`;

CREATE TABLE `cd_cliente_tb` (
  `cd_cli_cedula` int(11) NOT NULL,
  `cd_cli_nombre` varchar(50) DEFAULT NULL,
  `cd_cli_ape1` varchar(50) DEFAULT NULL,
  `cd_cli_ape2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cd_cli_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_cliente_tb` */

insert  into `cd_cliente_tb`(`cd_cli_cedula`,`cd_cli_nombre`,`cd_cli_ape1`,`cd_cli_ape2`) values 
(504080437,'Alberth','Espinoza','Ortiz');

/*Table structure for table `cd_factura_tb` */

DROP TABLE IF EXISTS `cd_factura_tb`;

CREATE TABLE `cd_factura_tb` (
  `cd_fac_numfactura` int(11) NOT NULL,
  `cd_fac_fecha` date DEFAULT NULL,
  `cd_cli_cedula` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_fac_numfactura`),
  KEY `cd_factura_cedula_tb` (`cd_cli_cedula`),
  CONSTRAINT `cd_factura_cedula_tb` FOREIGN KEY (`cd_cli_cedula`) REFERENCES `cd_cliente_tb` (`cd_cli_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_factura_tb` */

insert  into `cd_factura_tb`(`cd_fac_numfactura`,`cd_fac_fecha`,`cd_cli_cedula`) values 
(1,'2018-10-02',504080437);

/*Table structure for table `cd_historialjuego_tb` */

DROP TABLE IF EXISTS `cd_historialjuego_tb`;

CREATE TABLE `cd_historialjuego_tb` (
  `cd_hi_id` int(11) NOT NULL,
  `cd_usu_cedula` int(11) DEFAULT NULL,
  `cd_cli_cedula` int(11) DEFAULT NULL,
  `cd_fac_numfactura` int(11) DEFAULT NULL,
  `cd_fac_fecha` datetime DEFAULT NULL,
  `cd_hi_numcomprobante` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_hi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_historialjuego_tb` */

insert  into `cd_historialjuego_tb`(`cd_hi_id`,`cd_usu_cedula`,`cd_cli_cedula`,`cd_fac_numfactura`,`cd_fac_fecha`,`cd_hi_numcomprobante`) values 
(0,NULL,NULL,1,NULL,NULL);

/*Table structure for table `cd_info_usu_td` */

DROP TABLE IF EXISTS `cd_info_usu_td`;

CREATE TABLE `cd_info_usu_td` (
  `cd_usu_cedula` int(11) DEFAULT NULL,
  `cd_usu_telefono` varchar(50) DEFAULT NULL,
  `cd_usu_correo` varchar(50) DEFAULT NULL,
  `cd_usu_usuario` varchar(50) DEFAULT NULL,
  `cd_usu_contraseña` varchar(50) DEFAULT NULL,
  `cd_usu_idpuesto` int(11) DEFAULT NULL,
  KEY `cd_usuario_cedula_tb` (`cd_usu_cedula`),
  KEY `cd_usuario_puesto_tb` (`cd_usu_idpuesto`),
  CONSTRAINT `cd_usuario_cedula_tb` FOREIGN KEY (`cd_usu_cedula`) REFERENCES `cd_usuario_tb` (`cd_usu_cedula`),
  CONSTRAINT `cd_usuario_puesto_tb` FOREIGN KEY (`cd_usu_idpuesto`) REFERENCES `cd_puestos_tb` (`cd_usu_idpuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_info_usu_td` */

/*Table structure for table `cd_infohistorial_tb` */

DROP TABLE IF EXISTS `cd_infohistorial_tb`;

CREATE TABLE `cd_infohistorial_tb` (
  `cd_hi_numcomprobante` int(11) DEFAULT NULL,
  `cd_inf_premio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_infohistorial_tb` */

/*Table structure for table `cd_puestos_tb` */

DROP TABLE IF EXISTS `cd_puestos_tb`;

CREATE TABLE `cd_puestos_tb` (
  `cd_usu_idpuesto` int(11) NOT NULL,
  `cd_descripcion_pues` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cd_usu_idpuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_puestos_tb` */

insert  into `cd_puestos_tb`(`cd_usu_idpuesto`,`cd_descripcion_pues`) values 
(1,'Administrador'),
(2,'Cajero');

/*Table structure for table `cd_usuario_tb` */

DROP TABLE IF EXISTS `cd_usuario_tb`;

CREATE TABLE `cd_usuario_tb` (
  `cd_usu_cedula` int(11) NOT NULL,
  `cd_usu_nombre` varchar(50) DEFAULT NULL,
  `cd_usu_ape1` varchar(50) DEFAULT NULL,
  `cd_usu_ape2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cd_usu_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cd_usuario_tb` */

insert  into `cd_usuario_tb`(`cd_usu_cedula`,`cd_usu_nombre`,`cd_usu_ape1`,`cd_usu_ape2`) values 
(504080437,'Alberth','Espinoza','Ortiz');

/* Trigger structure for table `cd_factura_tb` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `cd_factura_tb_bi` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `cd_factura_tb_bi` BEFORE INSERT ON `cd_factura_tb` FOR EACH ROW 
  BEGIN
    IF NEW.cd_fac_fecha is null then
	SET NEW.cd_fac_fecha = SYSDATE();
    end if;
  END */$$


DELIMITER ;

/* Trigger structure for table `cd_factura_tb` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `cd_historialjuego_tb_ai` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `cd_historialjuego_tb_ai` AFTER INSERT ON `cd_factura_tb` FOR EACH ROW BEGIN
	insert into `cd_historialjuego_tb` SET `cd_fac_numfactura` = NEW.`cd_fac_numfactura`;
    END */$$


DELIMITER ;

/* Function  structure for function  `fn_existe_usuario` */

/*!50003 DROP FUNCTION IF EXISTS `fn_existe_usuario` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `fn_existe_usuario`(
  idusuario int(11),  
  usuario   varchar(50),
  clave     varchar(50)  
  ) RETURNS varchar(1) CHARSET latin1
BEGIN
  DECLARE vNoMoreRows Integer;
  DECLARE vExiste VARCHAR(1);
  Declare cExiste cursor for
  select 'S' 
  from `cd_info_usu_td` 
  where `cd_usu_cedula`   = idusuario
  and `cd_usu_usuario`    = usuario 
  and `cd_usu_contraseña` = clave;
  declare continue Handler for not found set vNoMoreRows = 1;
  open cExiste;
  myloop : loop
	fetch cExiste into vExiste;
	if vNoMoreRows then
		leave myloop;
	end if;
  end loop;
  CLose cExiste;  
  if vExiste is null then
	select 'N' into vExiste;
  end if;
  return vExiste;
eND */$$
DELIMITER ;

/* Function  structure for function  `fn_obt_usuario_id` */

/*!50003 DROP FUNCTION IF EXISTS `fn_obt_usuario_id` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `fn_obt_usuario_id`(
  usuario varchar(50),
  clave varchar(50)  
  ) RETURNS int(11)
BEGIN
  declare vNoMoreRows integer;
  declare vID int(11);
  Declare cID cursor for
  select `cd_usu_cedula` 
  from `cd_info_usu_td` 
  where `cd_usu_usuario`  = usuario
  and `cd_usu_contraseña` = clave ;
  declare continue handler for not found set vNoMoreRows = 1;
  open cID;
  myloop : loop
	fetch cID into vID;
	if vNoMoreRows then
		leave myloop;
	end if;
  end loop;
  close cID;
  if vID is null then
	select null into vID;
  end if;
  return vID;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_cd_puestos_registra` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_cd_puestos_registra` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cd_puestos_registra`(
  in id_puesto  int(11),     -- ID Puesto
  in des_puesto varchar(50), -- Nombre de puesto
  OUT msg VARCHAR(100)	     -- Mensaje de retorno
  )
BEGIN
  IF id_puesto IS NOT NULL THEN
	IF `cd_puestos_tb`.`cd_usu_idpuesto` = id_puesto then
		SELECT 'Ya existe ese ID de puesto, favor ingresar otro ID.' INTO msg;
	else
		insert into `cd_puestos_tb` ( 
		`cd_usu_idpuesto`, `cd_descripcion_pues`) values ( 
								id_puesto, des_puesto );
		SELECT 'Puesto registrado existosamente.' INTO msg;
	end if;
  ELSE
	SELECT 'Resgistro ID no debe ser nulo, favor ingresar datos.' INTO msg;
  END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_cd_usuario_registra` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_cd_usuario_registra` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cd_usuario_registra`(
  in usu_cedula   int(11),     -- Cédula
  in usu_nombre   varchar(50), -- Nombre
  in usu_ape1     varchar(50), -- Apellido Paterno
  in usu_ape2     varchar(50), -- Apellido Materno
  in usu_telefono varchar(50), -- Telefono
  in usu_correo   varchar(50), -- Correo
  in usu_usuario  varchar(50), -- Usuario 
  in usu_clave    varchar(50), -- Clave
  in usu_idpuesto int(11),     -- Puesto
  out msg         varchar(100) -- Provee un mensaje, usando la misma variable en php
  )
BEGIN
  if usu_cedula is not null then
	if `cd_usuario_tb`.`cd_usu_cedula` = usu_cedula || `cd_info_usu_td`.`cd_usu_cedula` = usu_cedula then
		SELECT 'Número de cédula ya existente.' INTO msg; -- Provee un mensaje, usando la misma variable en php
	else
		insert into `cd_usuario_tb` ( 
		`cd_usu_cedula`, `cd_usu_nombre`,
		`cd_usu_ape1`, `cd_usu_ape2` ) values ( 
						   usu_cedula, usu_nombre, 
						   usu_ape1, usu_ape2 );
		if `cd_puestos_tb`.`cd_usu_idpuesto` = cd_usu_idpuesto then
			insert into `cd_info_usu_td` ( 
			`cd_usu_cedula`, `cd_usu_telefono`, 
			`cd_usu_correo`, `cd_usu_usuario`, 
			`cd_usu_contraseña`, `cd_usu_idpuesto` ) values ( 
								      usu_cedula,  usu_telefono, 
								      usu_correo, usu_usuario, 
								      usu_clave, usu_idpuesto );
		else
			SELECT 'No exsite puesto de trabajador, favor solicitar actualizar.' INTO msg; -- Provee un mensaje, usando la misma variable en php
		end if;
		SELECT 'Usuario fue registrado existosamente.' INTO msg; -- Provee un mensaje, usando la misma variable en php
	end if;
  else
	select 'Número de cédula es requerido, por favor digitarla.' into msg; -- Provee un mensaje, usando la misma variable en php
  end if;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
