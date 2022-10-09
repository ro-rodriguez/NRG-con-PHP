-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 08:45:56
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dw3_rodriguez_elsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios`
--

CREATE TABLE `beneficios` (
  `beneficio_id` int(10) UNSIGNED NOT NULL,
  `item` mediumtext NOT NULL,
  `combo_fk` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `beneficios`
--

INSERT INTO `beneficios` (`beneficio_id`, `item`, `combo_fk`) VALUES
(1, 'Aumenta la síntesis de la proteína muscular.', 1),
(2, 'Acelera los procesos de recuperación post ejercicio.', 1),
(3, 'Ayuda al aumento de masa muscular.', 1),
(4, 'Aumento de fuerza y potencia.', 1),
(5, 'Aumenta el anabolismo muscular.', 1),
(6, 'Mejor rendimiento y mayor resistencia.', 1),
(7, 'Contribuye a conciliar el sueño reparador.', 1),
(8, 'Mejora los niveles de energía.', 2),
(9, 'Previene las lesiones.', 2),
(10, 'Mayor rendimiento deportivo.', 2),
(11, 'Acelera la recuperación muscular después del ejercicio.', 2),
(12, 'Ralentiza la disminución de la potencia muscular en deportes de altitud.', 2),
(13, 'Mejora la permeabilidad muscular.', 2),
(14, 'Asimilación rápida.', 2),
(15, 'Compensa las necesidades diarias de nutrientes.', 3),
(16, 'Buena fuente de minerales y antioxidantes.', 3),
(17, 'Apoya el metabolismo energetico.', 3),
(18, 'Ayuda al funcionamiento normal del sistema inmunitario', 3),
(19, 'Provee acción antioxidante.', 3),
(20, 'Ayuda a reducir el cansancio y la fatiga.', 3),
(21, 'Reduce el riesgo de osteoporosis.', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combos`
--

CREATE TABLE `combos` (
  `combo_id` int(10) UNSIGNED NOT NULL,
  `titulo_identificacion` varchar(150) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `titulo_imagen` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `imagen_descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `combos`
--

INSERT INTO `combos` (`combo_id`, `titulo_identificacion`, `titulo`, `titulo_imagen`, `imagen`, `imagen_descripcion`) VALUES
(1, 'volumen', 'Combo Ganar Volumen', 'Whey Protein + Creatine + Carbohidrato', 'combo1.jpg', 'Combo para aumentar volumen, fuerza y masa muscular'),
(2, 'resistencia', 'Combo Más Resistencia', 'Whey Protein + Amino Energy', 'combo2.jpg', 'Combo para aumentar energía y vitalidad'),
(3, 'nutricion', 'Combo Mejorar Nutrición', 'Multivitamin + Calcio + Colageno', 'combo3.jpg', 'Combo nutricional con vitaminas, minerales, calcio y colageno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `principal`
--

CREATE TABLE `principal` (
  `principal_id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `imagen_descripcion` varchar(255) NOT NULL,
  `texto` mediumtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `boton` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `principal`
--

INSERT INTO `principal` (`principal_id`, `imagen`, `imagen_descripcion`, `texto`, `url`, `boton`) VALUES
(1, 'imagen1.jpg', 'elaboracion del producto en la fabrica', 'Conocé la ciencia detrás de nuestros productos', 'index.php?s=nosotros', 'nosotros'),
(2, 'imagen2.jpg', 'Presentación de la proteina Serious Mass en un gimnasio', 'Conocé nuestros productos y sus beneficios', 'index.php?s=productos', 'productos'),
(3, 'imagen3.jpg', 'Presentación de un combo nutricional', 'Combos personalizados de acuerdo a tu objetivo', 'index.php?s=productos#combo', 'combos'),
(4, 'imagen4.jpg', 'Mujer tomando un batido proteico', 'Conocé resultados de clientes', 'index.php?s=testimonios', 'testimonios'),
(5, 'imagen5.jpg', 'Nutricionista en una consulta nutricional', 'Conocé tu mejor versión con NRG', '#asesoramiento', 'consulta'),
(6, 'imagen6.jpg', 'Mujer comunicandose a través de la computadora', 'Para conocer más acerca de nuestros productos, ¡contactanos!', 'index.php?s=contacto', 'contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto_id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `imagen_descripcion` varchar(255) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `peso` varchar(45) NOT NULL,
  `texto` mediumtext NOT NULL,
  `precio` int(11) NOT NULL,
  `porcion` int(11) NOT NULL,
  `porciones_envase` int(11) NOT NULL,
  `valor_energetico` int(11) NOT NULL,
  `carbohidratos` int(11) NOT NULL,
  `proteinas` int(11) NOT NULL,
  `grasas_totales` int(11) NOT NULL,
  `grasas_saturadas` int(11) NOT NULL,
  `grasas_trans` int(11) NOT NULL,
  `fibra` int(11) NOT NULL,
  `sodio` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto_id`, `imagen`, `imagen_descripcion`, `titulo`, `peso`, `texto`, `precio`, `porcion`, `porciones_envase`, `valor_energetico`, `carbohidratos`, `proteinas`, `grasas_totales`, `grasas_saturadas`, `grasas_trans`, `fibra`, `sodio`, `fecha`) VALUES
(1, 'prod1.jpg', 'Whey Protein, suplemento proteico para el incremento de la masa muscular', 'Whey Protein', '2 kg', 'Es un suplemento elaborado a base de mejor proteína de suero lácteo. Producto apto para celíacos con certificación Sin Tacc. Es ideal para todos aquellos que requieren de un aporte extra de proteínas en su dieta habitual. Su excelente aporte de aminoácidos favorece el desarrollo de masa muscular y también mejora la capacidad de recuperación de los músculos luego del entrenamiento.', 2990, 40, 50, 138, 4, 29, 1, 0, 0, 1, 182, '2021-11-14'),
(2, 'prod2.jpg', 'Vegan Protein, el suplemento proteico ideal para veganos', 'Vegan Protein', '1 kg', 'Es un suplemento elaborado a base de proteína de soja, con excelente sabor a almendras y libre de gluten (Sin Tacc). Es una proteína isolada de rápida absorción y cada scoop aporta 34 gramos de proteína. Podés prepararlo con leche de soja, de almendras o la que más te guste. NRG certifica que este producto está elaborado con granos de soja no modificados genéticamente.', 3290, 40, 25, 136, 4, 26, 1, 0, 0, 1, 175, '2021-11-14'),
(3, 'prod3.jpg', 'Animo Energy, el suplemento a base de aminoácidos para el incremento de la masa muscular', 'Amino Energy', '270 gr', 'Es un suplemento a base de aminoácidos, libre de gluten (sin tacc). Es un producto ideal para todas aquellas personas que buscan seguir una dieta sana, de control/pérdida de peso o para deportistas que requieren de un aporte extra de proteínas. Los aminoácidos contribuyen al desarrollo de la masa muscular, generan fuerza y energía, ideal para suplementar entrenamientos intensos.', 2590, 5, 60, 20, 0, 0, 0, 0, 0, 0, 0, '2021-11-14'),
(4, 'prod4.jpg', 'Suplemento dietario Creatine a base de creatina para el aumento de la intensidad y fuerza', 'Creatine', '300 gr', 'Es un suplemento dietario a base de Creatina 100% pura que provee energía para ejercicios de alta intensidad y contribuye al crecimiento de la masa muscular. Apto para celíacos (sin tacc).La Creatina se almacena en el músculo como fosfocreatina, sirve como un aporte instantáneo de energía para ejercicios de alta intensidad y breve duración, retarda la formación de ácido láctico.', 2990, 5, 60, 20, 0, 0, 0, 0, 0, 0, 0, '2021-11-14'),
(5, 'prod5.jpg', 'Multivitamin suplemento vitaminico a base de vitaminas, minerales y ginseng, ideal para reforzar el sistema inmunologico', 'Multivitamin', '180 gr (60 comprimidos)', 'Suplemento dietario a base de vitaminas, minerales y ginseng. Libre de gluten (sin tacc). Fórmula ideada para proveer una combinación equilibrada de Vitaminas lipo e hidrosolubles y Minerales con Ginseng. Contiene vitamina A, complejo vitamínico B, ácido fólico, vitamina C, vitamina E y minerales como el magnesio, calcio, zinc y Ginseng.', 1290, 1, 60, 0, 0, 0, 0, 0, 0, 0, 0, '2021-11-14'),
(6, 'prod6.jpg', 'Colageno hidrolizado con vitamina C para la regeneración osea y muscular', 'Colageno', '250 gr', 'Es una combinación de colágeno hidrolizado y Vitamina C, que contribuye a su formación. Se reconoce al colágeno como la proteína que forma el tejido conectivo y que da la elasticidad y regeneración de la piel, huesos y articulaciones. De gran utilidad en personas que sufren deterioro de los tejidos bien sea debido a la edad (en general a partir de los 40 años)', 1590, 5, 60, 20, 0, 0, 0, 0, 0, 0, 0, '2021-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_tienen_sabor`
--

CREATE TABLE `productos_tienen_sabor` (
  `producto_fk` int(10) UNSIGNED NOT NULL,
  `sabor_fk` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_tienen_sabor`
--

INSERT INTO `productos_tienen_sabor` (`producto_fk`, `sabor_fk`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(4, 5),
(4, 6),
(5, 1),
(5, 6),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `nombre`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabor`
--

CREATE TABLE `sabor` (
  `sabor_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sabor`
--

INSERT INTO `sabor` (`sabor_id`, `nombre`) VALUES
(1, 'frutilla'),
(2, 'vainilla'),
(3, 'chocolate'),
(4, 'almendras'),
(5, 'neutro'),
(6, 'citrico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `tema_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `imagen_descripcion` varchar(255) NOT NULL,
  `id_for_boton` varchar(45) NOT NULL,
  `parrafo` mediumtext NOT NULL,
  `leer_mas` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`tema_id`, `titulo`, `imagen`, `imagen_descripcion`, `id_for_boton`, `parrafo`, `leer_mas`) VALUES
(1, 'Somos Calidad', 'staf.jpg', 'La mejor nutricion para deportistas y amateurs con suplementos NRG', 'post-1', 'Somos una empresa alimenticia dedicada a la elaboración de suplementos nutricionales. Nos encanta lo que hacemos y tenemos 20 años en el mercado haciendo del mundo un lugar mas saludable y feliz. Usamos tecnología de primer nivel y aportamos innovación a cada producto.', 'Hace 10 años incursionamos en la elaboración de suplementos nutricionales, que tienen como finalidad complementar la alimentación y aportar beneficios espefícos para mejorar el rendimiento, la recuperación muscular y el desarrollo físico. No obstante, nos enorgullece poder decir que calidad y precio van de la mano en nuestra variada gama de productos y siempre adaptándose a tus requerimientos alimenticios: vegano, vegetariano, sin gluten para que todo el mundo pueda beneficiarse de ello.'),
(2, 'Somos Ciencia', 'ciencia.jpg', 'El equipo cientifico de NRG esta compuesto por destacados expertos en los campos de nutricion, ciencia y salud', 'post-2', 'El desarrollo de nuestros productos se realiza junto a un equipo especializado de medicos, nutricionistas e ingenieros alimenticios que, sumado a nuestro conocimiento en sabores y texturas adquiridos a lo largo de estos años, nos permite brindar la más alta calidad en nutrición.', 'Nuestros productos son efectivos junto a un estilo de vida activo y saludable, porque son elaborados con los mejores ingredientes provenientes de diversas partes del mundo, usamos tecnologia de primer nivel y aportamos innovación a cada producto. Nuestros productos están elaborados en las propias instalaciones del grupo, en instalaciones de última generación, ahorrándonos y ahorrándote al mismo tiempo el coste extra de figuras intermediarias, y asegurando la calidad en todo el proceso, con los productos de la mayor pureza.'),
(3, 'Libres de Gluten', 'gluten.jpg', 'Productos NRG para personas con intolerancia al Gluten. Todos los suplementos son sin TACC especialmente para celiacos', 'post-3', 'Con el aumento de personas con intolerancia al gluten, decidimos desarrollar todos los productos libres de gluten, siguiendo con las normativas vigentes y aprobaciones de la Dirección General de Higiene y Seguridad Alimentaria del Gobierno de la Ciudad de Buenos Aires para su venta.', 'Nuestro objetivo es buscar la más alta calidad a corto, mediano y largo plazo en todas nuestras actividades y de forma sostenida. De la misma forma con nuestros clientes, empleados, proveedores y socios. Por otro lado, nuestros productos aportan múltiples beneficios nutricionales derivados del grano de la quinoa, uno de los alimentos vegetales que provee todos los aminoácidos esenciales. Así tambien aportan vitaminas A, D2, E, B12 y calcio. Además, no contienen sacarosa añadida, ni conservantes, ni lactosa y lo más importante que son libre de gluten.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `testimonio_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `texto` mediumtext NOT NULL,
  `localidad` varchar(120) NOT NULL,
  `provincia` varchar(120) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `imagen_descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `usuario_fk` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`testimonio_id`, `nombre`, `texto`, `localidad`, `provincia`, `profesion`, `imagen`, `imagen_descripcion`, `fecha`, `usuario_fk`) VALUES
(1, 'Luis Carrillo Muñoz', 'Hace más de 10 años que tomo los suplementos NRG, he tenido resultados satisfactorios en cuanto energia y rendimiento, y me siento fenomenal', 'El talar', 'Buenos Aires', 'Empresario', 'luiscarrillo.jpg', 'foto de Luis Carrillo, persona que nos cuenta su experiencia con los productos NRG', '2021-11-15', 1),
(2, 'Tatiana Gimenez', 'Antes me costaba recuperarme del entrenamiento, ahora que tomo NRG como recuperador después del ejercicio he mejorado mis resultados y he definido musculatura', 'Avellaneda', 'Buenos Aires', 'Vendedora', 'tatianagimenez.jpg', 'foto de Tatiana Gimenez, persona que nos cuenta su experiencia con los productos NRG', '2021-11-14', 2),
(3, 'Fernando Vasquez', 'La nutrición NRG me da la confianza de conseguir mi mejor versión. Siempre siento que puedo dar más en mis entrenamientos', 'Tandil', 'Buenos Aires', 'Policia', 'fernandovasquez.jpg', 'foto de Fernando Vasquez, persona que nos cuenta su experiencia con los productos NRG', '2021-11-13', 3),
(4, 'Luciano Mauri', 'Soy ciclista hace mas de 10 años y desde que tomó NRG he logrado excelentes resultados en competencias, los suplementos nutricionales juegan un papel importante en la vida de un deportista', 'CABA', 'Buenos Aires', 'Ciclista', 'lucianomauri.jpg', 'foto de Luciano Mauri, persona que nos cuenta su experiencia con los productos NRG', '2021-11-12', 4),
(5, 'Mariana Rodriguez', 'NRG me ha permitido obtener resultados extraordinarios en fuerza y resistencia. Entreno todos los días en el gimnasio y me siento fantastica', 'La Plata', 'Buenos Aires', 'Estudiante', 'marianarodriguez.jpg', 'foto de Mariana consumidora de los productos NRG', '2021-11-11', 5),
(6, 'Gaston Diaz', 'Llevo cinco años tomando NRG y los resultados que obtuve fueron increibles, me ha permitido tener un estilo de vida saludable con un excelente físico', 'San Miguel', 'Buenos Aires', 'Crossfiter', 'gastondiaz.jpg', 'foto de Gaston Diaz consumidor de los productos NRG', '2021-11-10', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_fk` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `email`, `password`, `rol_fk`) VALUES
(1, 'luis_carrillo@gmail.com', '$2y$10$AG5a.gyJW7A7PiZ1dX9V7.N8h7n5LMwNs6x0PQlS5cduwLflxrPB6', 2),
(2, 'tatiana_gimenez@gmail.com', '$2y$10$RsE7j/FVS7nIzydOAv823.nyUVqIUwUukK8es2QNlNd4ycXFC3Xbe', 2),
(3, 'fernando_vasquez@gmail.com', '$2y$10$u.A6RqyBEOQBA/URIRZWDe7GCCj26NnTmYy6.4lXbF4O2Y4/tIVEO', 2),
(4, 'luciano_mauri@gmail.com', '$2y$10$QKjnV1sI0FUU4nlzH1cy0e9CRhX5fJmgob6IQ67zDhkiCieYRl14i', 2),
(5, 'mariana_rodriguezo@gmail.com', '$2y$10$CSuBtpkOAxmJH8bzZkwuG.aTNWAM9JcNng6d/aJaEWoLowhoGZRn.', 2),
(6, 'gaston_diaz@gmail.com', '$2y$10$I/2kLTQnUMA19we8u0OgvuW5VZ865lgFucINsfNfC0QPJNE1mL506', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD PRIMARY KEY (`beneficio_id`),
  ADD KEY `fk_benficios_combos1_idx` (`combo_fk`);

--
-- Indices de la tabla `combos`
--
ALTER TABLE `combos`
  ADD PRIMARY KEY (`combo_id`);

--
-- Indices de la tabla `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`principal_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto_id`);

--
-- Indices de la tabla `productos_tienen_sabor`
--
ALTER TABLE `productos_tienen_sabor`
  ADD PRIMARY KEY (`producto_fk`,`sabor_fk`),
  ADD KEY `fk_productos_has_sabor_sabor1_idx` (`sabor_fk`),
  ADD KEY `fk_productos_has_sabor_productos1_idx` (`producto_fk`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `sabor`
--
ALTER TABLE `sabor`
  ADD PRIMARY KEY (`sabor_id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`tema_id`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`testimonio_id`,`usuario_fk`),
  ADD KEY `fk_testimonios_usuarios1_idx` (`usuario_fk`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuarios_roles1_idx` (`rol_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  MODIFY `beneficio_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `combos`
--
ALTER TABLE `combos`
  MODIFY `combo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `principal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `producto_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sabor`
--
ALTER TABLE `sabor`
  MODIFY `sabor_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `tema_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `testimonio_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD CONSTRAINT `fk_benficios_combos1` FOREIGN KEY (`combo_fk`) REFERENCES `combos` (`combo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_tienen_sabor`
--
ALTER TABLE `productos_tienen_sabor`
  ADD CONSTRAINT `fk_productos_has_sabor_productos1` FOREIGN KEY (`producto_fk`) REFERENCES `productos` (`producto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_has_sabor_sabor1` FOREIGN KEY (`sabor_fk`) REFERENCES `sabor` (`sabor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD CONSTRAINT `fk_testimonios_usuarios1` FOREIGN KEY (`usuario_fk`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles1` FOREIGN KEY (`rol_fk`) REFERENCES `roles` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
