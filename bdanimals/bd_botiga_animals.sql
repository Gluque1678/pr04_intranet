-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2015 a las 11:21:00
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_botiga_animals`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anunci`
--

DROP TABLE IF EXISTS `tbl_anunci`;
CREATE TABLE IF NOT EXISTS `tbl_anunci` (
  `anu_id` int(11) NOT NULL,
  `anu_contingut` varchar(255) NOT NULL,
  `anu_nom` varchar(25) NOT NULL,
  `anu_data` date NOT NULL,
  `anu_foto` varchar(50) NOT NULL,
  `raca_id` int(11) NOT NULL,
  `mun_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `anu_tipus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_anunci`
--

INSERT INTO `tbl_anunci` (`anu_id`, `anu_contingut`, `anu_nom`, `anu_data`, `anu_foto`, `raca_id`, `mun_id`, `contact_id`, `anu_tipus`) VALUES
(1, 'Perdido el perro de la raza Beagle en la playa de El Prat de LLobregat (zona aeroport)Responde al nombre de Tancat.', 'Perdido perro en El Prat', '2015-10-11', 'tacat.jpg', 14, 4, 1, 'Perdido'),
(2, 'Desaparecido un gato con collar y placa con el nombre de Ratlletes. Es un gato de tipo común, con rayas de color naranja.Perdido en Viladecans.', 'Perdido gato en Viladecan', '2015-10-15', 'gatocomu.jpg', 17, 9, 4, 'Perdido'),
(3, 'Perdido un perro de color negro con manchas blancas de raza Husky en Sant Cugat del Valles responde al nombre de Nala.', 'Perdido perro Sant Cugat ', '2015-10-06', 'husky.jpg', 11, 14, 9, 'Perdido'),
(4, 'Periquito de color vede perdido en Viladecans responde al nombre de Palote. \r\n', 'Periquito perdido en Vila', '2015-10-22', 'periquito.jpg', 21, 9, 2, 'Perdido'),
(5, 'Perdio un Conejo de color marron y blanco en Castelldefels (Barcelona) el dia 17-10-2015.', 'Perdido conejo en Castell', '2015-10-22', 'conejo.jpg', 23, 8, 3, 'Perdido'),
(6, 'Perdido un fura de color blanco y negro en \r\nSitges. Su nombre es Lana.', 'Perdido fura en Sitges', '2015-10-22', 'fura.jpg', 22, 15, 5, 'Perdido'),
(7, 'Perdido un humster en el Prat de LLobregat el dia 12-08-2015 que responde al nombre de Rosi', 'Humster perdido en el Pra', '2015-10-22', 'humster.jpg', 24, 4, 6, 'Perdido'),
(8, 'Perdido un tejon de color negro en Sitges tenia puesto un collar de color marron y se llama Aaron.', 'Tejon perdido en Sitges', '2015-10-22', 'tejon.jpg', 25, 15, 7, 'Perdido'),
(9, 'Encontrado gato de la raza común en Viladecans', 'Gato raza común encontrad', '2015-10-23', 'gatocomu.jpg', 17, 9, 16, 'Encontrado'),
(10, 'Perdido gato raza Bobtail en Sant Feliu de LLobregat responde al nombre de Tasky.', 'Perdido perro en Sant Fel', '2015-10-14', 'bobtail.jpg', 19, 2, 8, 'Perdido'),
(11, 'Perdido en Cornella de LLobregat un perro de color negro de raza border collier responde al nombre de Paco perdido en Cornella de Llobregat.', 'Perro perdido en Cornella', '2015-10-22', 'border collie.jpg', 12, 7, 10, 'Perdido'),
(12, 'Perdido un perro de raza Boxer en Hospitalet de llobregat responde al nombre de Pedro', 'Perro perdido Hospitalet ', '2015-10-06', 'Boxer.jpg', 8, 5, 11, 'Perdido'),
(13, 'Perdido un perro de la raza cruzado de color marron en Begues responde al nombre de Marcos.', 'Perro perdido en Begues', '2015-10-22', 'cruzado.jpg', 13, 10, 12, 'Perdido'),
(14, 'Perdido un perro de raza Golden Retriever en Begues responde al nombre de Lola', 'Perro perdido en Begues.', '2015-10-21', 'golden.jpg', 10, 10, 13, 'Perdido'),
(15, 'Perdido un perro de raza Pastor Aleman en Sant Joan Despi responde al nombre de Charlie.', 'Perdio perro Sant Joan De', '2015-10-06', 'pastor.jpg', 9, 3, 14, 'Perdido'),
(16, 'Perdido un gato de la raza Abisini de color naranja perdido en Hospitalet de LLobregat.', 'Perdido gato Hospitalet d', '2015-10-05', 'abisini.jpg', 18, 5, 15, 'Perdido'),
(17, 'Perdido un gato de color negro de la raza Persa perdido en Castellbisbal responde al nombre de Mayo.', 'Gato perdido  en Castellb', '2015-10-04', 'persa.jpg', 15, 11, 29, 'Perdido'),
(18, 'Perro encontrado raza Pastor Aleman en Sant Joan Despi.', 'Encontrado perro en Sant ', '2015-10-24', 'pastor.jpg', 9, 3, 17, 'Encontrado'),
(19, 'Encontrado gato de la raza Persa en Castellbisball.', 'Encontrado gato en Castel', '2015-10-23', 'persa.jpg', 15, 11, 18, 'Encontrado'),
(20, 'Encontrado perro raza Boxer en Hospitalet de LLobregat.', 'Encontrado perro en Hospi', '2015-10-23', 'Boxer.jpg', 8, 5, 19, 'Encontrado'),
(21, 'Encontrado perro Golden Retrieve en Sant Joan Despí', 'Encontrado perro en Sant ', '2015-10-22', 'goldenretriever.jpg', 10, 3, 20, 'Encontrado'),
(22, 'Encontrado perro raza Husky en Sant Cugat del Valles.', 'Encontrado perro Sant Cug', '2015-10-23', 'Husky.jpg', 11, 14, 21, 'Encontrado'),
(23, 'Encontrado Hamster en el Prat de LLobregat.', 'Encontrado Hamster Prat d', '2015-10-23', 'humster.jpg', 24, 4, 22, 'Encontrado'),
(24, 'Gato encontrado de la raza Abisini en Hospitalet de LLobregat.', 'Encontrado Gato Hospitale', '2015-10-23', 'abisini.jpg', 18, 5, 23, 'Encontrado'),
(25, 'Encontrado conejo en Castelldefels.', 'Encontrado Conejo en Cast', '2015-10-22', 'conejo.jpg', 23, 8, 24, 'Encontrado'),
(26, 'Encontrado un periquito en Viladecans.', 'Encontrado periquito en V', '2015-10-22', 'periquito.jpg', 21, 9, 25, 'Encontrado'),
(27, 'Perdido perro raza Pitbull marron con mancha blanca en Hospitalet de LLobregat. Se llama Brandon.', 'Perdido perro Hospitalet ', '2015-10-22', 'pitbull.jpg', 28, 5, 26, 'Perdido'),
(28, 'Perdido perro raza Doberman de color negro en Hospitalet de LLobregat. Se llama Brandon ', 'Perdido perro Hospitalet ', '2015-10-22', 'doberman.jpg', 27, 5, 27, 'Perdido'),
(29, 'Perdido perro de raza caniche de color blanco en Hospitalet de LLobretgat. Se llama Paco.', 'Perdido perro en Hospital', '2015-10-22', 'caniche.jpg', 30, 5, 28, 'Perdido'),
(30, 'Perdido perro de raza Bulldog de color marron en Cornella de LLobregat.Responde al nombre de Charlie.', 'Perdido perro en Cornella', '2015-10-23', 'bulldog.jpg', 29, 7, 29, 'Perdido'),
(31, 'Perdido un Canari de color amarillo en Hospitalet de Llobregat, responde al nombre de Lola.', 'Perdido Canari en Hospita', '2015-10-23', 'canari.jpg', 20, 5, 30, 'Perdido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacte`
--

DROP TABLE IF EXISTS `tbl_contacte`;
CREATE TABLE IF NOT EXISTS `tbl_contacte` (
  `contact_id` int(11) NOT NULL,
  `contact_nom` varchar(25) NOT NULL,
  `contact_telf` varchar(9) NOT NULL,
  `contact_adre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_contacte`
--

INSERT INTO `tbl_contacte` (`contact_id`, `contact_nom`, `contact_telf`, `contact_adre`) VALUES
(1, 'Carles Martín', '934534236', 'Av America nº 10 3º2 '),
(2, 'Antonio Gámez', '667542343', 'Carrer del Mig, 76 3r 1a'),
(3, 'Carlos Martínez', '654583454', 'Av de Juan Carlos I nº12 4ª5ª'),
(4, 'Isabel Vázquez', '698722284', 'Constitucion nª 76 9º1ª'),
(5, 'Pedro Santiesteban', '656989931', 'Avinguda Carrilet, 54 3r'),
(6, 'Sònia Gómez', '688341009', 'Gran Via de les Corts Catalanes, 12 Esc. A 3r 2a'),
(7, 'Patricia Martín', '932124654', 'Tomas Gimenez nº 23 2º2 '),
(8, 'Pedro Alonso Cabrera', '634267941', 'Rambla Badal nº1 3º1'),
(9, 'German Luque', '634578922', 'Aguas de LLobregat nº34 2º1'),
(10, 'Miguel Angel Roman', '657892345', 'Josep Molins nº12 3º4'),
(11, 'Rosa Maria Lopez Lopez', '675789876', 'gran via nº12 5º6'),
(12, 'David Marin Laos', '678123456', 'Luarca nº12 4º3'),
(13, 'Judith Luque Sanchez', '678456734', 'Prado nº23 4º1'),
(14, 'Carlos Gomez Gomez', '643564522', 'Carlos I nº23 4º2'),
(15, 'Felipe Marin Ruiz', '675768978', 'Rosa de Alejandria nº23 4º1'),
(16, 'Maria Jose Perez', '678564323', 'Madrid nº12 6º1'),
(17, 'Pedro Roca Ruiz', '654324567', 'Mina nº12 3º1'),
(18, 'Dani Laos Pez', '654678923', 'Marcelino nº12 8º1'),
(19, 'Maria Perez Pina', '675342345', 'Europa nº34 2º1'),
(20, 'Juan Luiz Martinez', '645368909', 'America nº16 1º1'),
(21, 'Felipe Ruiz Can', '675645356', 'Josep Tarradellas nº12 8º6'),
(22, 'Monica Luque Sanchez', '675645623', 'Finestrelles nº34 7º8'),
(23, 'Pablo Alonso Saez', '675345623', 'av can serra nº45 4º1'),
(24, 'Miguel Angel Muñoz', '632456732', 'Nuestra Señora nº 45 3º3'),
(25, 'Teresa Sanchez Julian', '645342345', 'Belchite nº34 5º1'),
(26, 'Anayansi Lopez Luz', '678989878', 'Mina nº23 1º1'),
(27, 'Teodoro Ruiz Sanchez', '634897689', 'Luz nº89 9º1'),
(28, 'Teodoro Ruiz Sanchez', '634897689', 'Luz nº89 9º1'),
(29, 'Raul Rodriguez Sae', '654879090', 'Servero Ochoa nº333 4º1'),
(30, 'Raul Rodriguez Sae', '654879090', 'Servero Ochoa nº333 4º1'),
(31, 'Sonia Borjas Perez', '645345445', 'Rosa nº345 1º2'),
(32, 'Sonia Borjas Perez', '645345445', 'Rosa nº345 1º2'),
(33, 'Jose Luis Rodriguez Perez', '643543423', 'santa eulalia nº98 4º3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipi`
--

DROP TABLE IF EXISTS `tbl_municipi`;
CREATE TABLE IF NOT EXISTS `tbl_municipi` (
  `municipi_id` int(11) NOT NULL,
  `municipi_nom` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_municipi`
--

INSERT INTO `tbl_municipi` (`municipi_id`, `municipi_nom`) VALUES
(1, 'Barcelona'),
(2, 'Sant Feliu de Llobregat'),
(3, 'Sant Joan d''Espí'),
(4, 'El Prat de Llobregat'),
(5, 'L''Hospitalet de Llobregat'),
(6, 'Martorell'),
(7, 'Cornellà de Llobregat'),
(8, 'Castelldefels'),
(9, 'Viladecans'),
(10, 'Begues'),
(11, 'Castellbisbal'),
(12, 'Sant Sadurní d''Anoia'),
(13, 'Rubí'),
(14, 'Sant Cugat del Vallès'),
(15, 'Sitges');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_raca`
--

DROP TABLE IF EXISTS `tbl_raca`;
CREATE TABLE IF NOT EXISTS `tbl_raca` (
  `raca_id` int(11) NOT NULL,
  `raca_nom` varchar(25) NOT NULL,
  `tipus_anim_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_raca`
--

INSERT INTO `tbl_raca` (`raca_id`, `raca_nom`, `tipus_anim_id`) VALUES
(8, 'Bòxer', 1),
(9, 'Pastor alemany', 1),
(10, 'Golden retriever', 1),
(11, 'Husky', 1),
(12, 'Border collie', 1),
(13, 'Creuat', 1),
(14, 'Beagle', 1),
(15, 'Persa', 2),
(16, 'Siamés', 2),
(17, 'Comú', 2),
(18, 'Abisini', 2),
(19, 'Bobtail', 2),
(20, 'Canari', 3),
(21, 'Periquito', 3),
(22, 'Fura', 4),
(23, 'Conill', 4),
(24, 'Hàmster', 4),
(25, 'Teixó', 4),
(26, 'Ànec', 4),
(27, 'Doberman', 1),
(28, 'Pitbull', 1),
(29, 'Bulldog', 1),
(30, 'Caniche', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_animal`
--

DROP TABLE IF EXISTS `tbl_tipus_animal`;
CREATE TABLE IF NOT EXISTS `tbl_tipus_animal` (
  `tipus_anim_id` int(11) NOT NULL,
  `tipus_anim_nom` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipus_animal`
--

INSERT INTO `tbl_tipus_animal` (`tipus_anim_id`, `tipus_anim_nom`) VALUES
(1, 'Gos'),
(2, 'Gat'),
(3, 'Ocell'),
(4, 'Altres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD PRIMARY KEY (`anu_id`),
  ADD KEY `FK_ANU_RACA` (`raca_id`),
  ADD KEY `FK_MUN_ANU` (`mun_id`),
  ADD KEY `FK_CONTACT_ANU` (`contact_id`);

--
-- Indices de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indices de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  ADD PRIMARY KEY (`municipi_id`);

--
-- Indices de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD PRIMARY KEY (`raca_id`),
  ADD KEY `FK_RACA_TIPUS_A` (`tipus_anim_id`);

--
-- Indices de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  ADD PRIMARY KEY (`tipus_anim_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  MODIFY `anu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  MODIFY `municipi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  MODIFY `raca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  MODIFY `tipus_anim_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD CONSTRAINT `RELACIO_ANU_CONTACT` FOREIGN KEY (`contact_id`) REFERENCES `tbl_contacte` (`contact_id`),
  ADD CONSTRAINT `RELACIO_ANU_MUN` FOREIGN KEY (`mun_id`) REFERENCES `tbl_municipi` (`municipi_id`),
  ADD CONSTRAINT `RELACIO_ANU_RACA` FOREIGN KEY (`raca_id`) REFERENCES `tbl_raca` (`raca_id`);

--
-- Filtros para la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD CONSTRAINT `tbl_raca_ibfk_1` FOREIGN KEY (`tipus_anim_id`) REFERENCES `tbl_tipus_animal` (`tipus_anim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
