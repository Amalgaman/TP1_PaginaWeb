-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 02:06:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegos_tp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `serial` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(420) NOT NULL,
  `precio` float NOT NULL,
  `calificacion` float NOT NULL,
  `desarrollador` varchar(50) NOT NULL,
  `lanzamiento` date NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `etiquetas` varchar(100) NOT NULL,
  `portada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`serial`, `nombre`, `descripcion`, `precio`, `calificacion`, `desarrollador`, `lanzamiento`, `trailer`, `etiquetas`, `portada`) VALUES
(1, 'Grand Theft Auto V', 'Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine con una resolución de 4K y disfrutar del juego a 60 fotogramas por segundo.', 4500, 8.3, 'Rockstar Games', '2015-04-14', 'https://www.youtube.com/embed/QkkoHAzjnUs', 'Mundo Abierto-Accion-Multijugador', 'img/portadas/por_10001.jpg'),
(2, 'Batman: Arkham Knight', 'Batman™: Arkham Knight es la épica conclusión de la galardonada trilogía de Arkham, creada por Rocksteady Studios. El título, desarrollado en exclusiva para plataformas de nueva generación, presenta la espectacular versión del batmóvil imaginada por Rocksteady.', 3800, 8.7, 'Rocksteady Studios', '2015-06-23', 'https://www.youtube.com/embed/dxa34RatmSc', 'Mundo Abierto-Accion', 'img/portadas/por_10002.jpg'),
(3, 'Crash Bandicoot N. Sane Trilogy', '¡Vuelve Crash Bandicoot™, tu marsupial favorito! Mejorado, embelesado y listo para bailar con la colección de juegos La trilogía. Revive tus momentos favoritos con Crash Bandicoot™, Crash Bandicoot™ 2: Cortex Strikes Back y Crash Bandicoot™ 3: Warped.', 6000, 8, 'Rockstar Games', '2018-06-29', 'https://www.youtube.com/embed/F7G91RjVmvk', 'Plataformero-Aventura', 'img/portadas/por_10003.jpg'),
(4, 'Red Dead Redemption 2', 'Con más de 175 premios al Juego del año y más de 250 valoraciones perfectas, Red Dead Redemption 2 es la épica historia de Arthur Morgan y la banda de Van der Linde, que huyen por toda América en el albor de una nueva era. ', 9000, 8.6, 'Rockstar Games', '2019-12-05', 'https://www.youtube.com/embed/gmA6MrX81z4', 'Mundo Abierto-Accion-Aventura', 'img/portadas/por_10004.jpg'),
(5, 'DOOM Eternal', 'Los ejércitos del infierno han invadido la Tierra. Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones para detener la destrucción definitiva de la humanidad. No le tienen miedo a nada... salvo a ti.', 6000, 8.8, 'id Software', '2020-03-20', 'https://www.youtube.com/embed/6SRj82vc1Jg', 'Shooter-Accion', 'img/portadas/por_10005.jpg'),
(6, 'Dragon Ball Fighter Z', 'DRAGON BALL FighterZ nace de lo que hace a la serie DRAGON BALL tan famosa: luchas espectaculares e interminables con luchadores superpoderosos.', 9000, 7.4, 'Arc System Works', '2018-01-26', 'https://www.youtube.com/embed/YNAfOG4GfFQ', 'Pelea-Anime-Multijugador', 'img/portadas/por_10006.jpg'),
(7, 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 4', '¡Con el nuevo título de la aclamada saga STORM emprenderás un viaje impresionante y lleno de color! ¡Benefíciate de un sistema de combate totalmente renovado y prepárate para sumergirte en los combates más épicos que hayas visto nunca!', 9000, 7.7, 'X Software', '2016-12-12', 'https://www.youtube.com/embed/9Vm4m15r2Xc', 'Anime-Pelea-Multijugador', 'img/portadas/por_10007.jpg'),
(8, 'FIFA 23', 'FIFA 23 nos acerca a The Worlds Game con la tecnología HyperMotion2 que ofrece una experiencia de juego aún más realista, la FIFA World Cup™ masculina y femenina disponibles durante la temporada, clubes femeninos, función de juego cruzado* y mucho más.', 9000, 4.7, 'X Software', '2022-09-26', 'https://www.youtube.com/embed/9Vm4m15r2Xc', 'Deporte-Multijugador', 'img/portadas/por_10008.jpg'),
(9, 'Elden Ring', 'EL NUEVO JUEGO DE ROL Y ACCIÓN DE AMBIENTACIÓN FANTÁSTICA. Álzate, Sinluz, y que la gracia te guíe para abrazar el poder del Círculo de Elden y encumbrarte como señor del Círculo en las Tierras Intermedias.', 9000, 9.6, 'From Software', '2022-02-25', 'https://www.youtube.com/embed/9Vm4m15r2Xc', 'RPG-Mundo Abierto-Accion', 'img/portadas/por_10009.jpg'),
(10, 'Minecraft', 'Minecraft es un videojuego de construcción de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson, y posteriormente desarrollado por Mojang Studios.', 3000, 9.3, 'Mojang', '2011-11-18', 'https://www.youtube.com/embed/MmB9b5njVbA', 'Mundo Abierto-Supervivencia-Multijugador', 'img/portadas/por_10010.jpg'),
(11, 'ARK: Survival Evolved', 'Juega como un hombre o una mujer desnudo, congelándote y muriéndote de hambre en una isla misteriosa. Debes cazar, cosechar, crear objetos, cultivar, y construir refugios para sobrevivir. Usa tu habilidad y astucia para matar, domesticar, criar y cabalgar dinosaurios y otras criaturas primitivas.', 3000, 7, 'X Software', '2017-08-29', 'https://www.youtube.com/embed/FW9vsrPWujI', 'Supervivencia-Accion-Mundo Abierto', 'img/portadas/por_10011.jpg'),
(12, 'Payday 2', 'PAYDAY 2 es un juego de acción cooperativo para cuatro jugadores que, una vez más, permite a los jugadores ponerse en la piel del equipo original de PAYDAY - Dallas, Hoxton, Wolf y Chains - mientras descienden por Washington DC en una épica ola de crímenes.', 3000, 6.7, 'X Software', '2013-08-13', 'https://www.youtube.com/embed/Gb-_DKC6wc4', 'Shooter-Multijugador', 'img/portadas/por_10012.jpg'),
(13, 'Hollow Knight', '¡Forja tu propio camino en Hollow Knight! Una aventura épica a través de un vasto reino de insectos y héroes que se encuentra en ruinas. Explora cavernas tortuosas, combate contra criaturas corrompidas y entabla amistad con extraños insectos.', 2200, 9.1, 'Team Cherry', '2017-02-24', 'https://www.youtube.com/embed/UAO2urG23S4', 'Mundo Abierto-Aventura-Plataformero', 'img/portadas/por_10013.jpg'),
(14, 'Call of Duty: Modern Warfare II', 'En Call of Duty®: Modern Warfare® II, los jugadores se verán inmersos en un conflicto a escala global sin precedentes que incluye el regreso de Operadores icónicos de la fuerza operativa 141.', 9000, 8.5, 'X Software', '2022-10-28', 'https://www.youtube.com/embed/r72GP1PIZa0', 'Shooter-Multijugador-Accion', 'img/portadas/por_10014.jpg'),
(15, 'Goat Simulator', 'Goat Simulator es un juego de perspectiva en tercera persona abierta en la que el jugador controla a una cabra. El jugador es libre para explorar el mundo del juego, un entorno suburbano, como una cabra. La cabra puede saltar, correr, golpear cosas y lamer objetos. ', 1500, 6.6, 'Coffee Stain Studios', '2014-04-01', 'https://www.youtube.com/embed/dvWGLcdI8o8', 'Mundo Abierto-Simulacion', 'img/portadas/por_10015.jpg'),
(16, 'The Sims 4', 'Disfruta del poder de crear y controlar a personas en un mundo virtual donde no hay reglas. ¡Ejerce tu poder con total libertad, diviértete y juega a la vida!', 3000, 7, 'Electronic Arts', '2014-09-02', 'https://www.youtube.com/embed/z00mK3Pxc8w', 'Supervivencia-Simulacion', 'img/portadas/por_10016.jpg'),
(17, 'Terraria', '¡Cava, lucha, explora, construye! Con este juego de aventuras repleto de acción nada es imposible. ¡Pack de Cuatro también disponible!', 3000, 8.3, 'Re-Logic', '2011-05-16', 'https://www.youtube.com/embed/w7uOhFTrrq0', 'Supervivencia-Mundo Abierto-Multijugador', 'img/portadas/por_10017.jpg'),
(18, 'Mortal Kombat 11', 'Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment. Se ejecuta en una versión muy modificada de Unreal Engine 3, es la undécima entrega principal de la serie Mortal Kombat y una secuela de 2015 Mortal Kombat X.', 9000, 8.8, 'Warner Bros. Games', '2019-04-23', 'https://www.youtube.com/embed/7zwQPJmg-Kg', 'Pelea-Accion-Multijugador', 'img/portadas/por_10018.jpg'),
(19, 'God of War', 'Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también.', 8300, 9.5, 'Santa Monica','2018-04-20', 'https://www.youtube.com/embed/AN3jEjjcZ-k', 'Aventura-Accion-Mundo Abierto', 'img/portadas/por_10019.jpg'),
(20, 'Frostpunk', 'Frostpunk es el primer juego de supervivencia de una sociedad. Como dirigente de la última ciudad del mundo, tu deber será el de lidiar tanto con los ciudadanos como con la infraestructura.', 4500, 8.4, '11 bit Studios', '2018-04-24', 'https://www.youtube.com/embed/qqEpSOFDXGA', 'Supervivencia-Estrategia', 'img/portadas/por_10020.jpg'),
(21, 'Phasmophobia', 'El jugador toma el control de un miembro de un grupo de hasta cuatro jugadores, en los roles de cazadores de fantasmas que exploran entornos urbanos y son contratados para lidiar con fantasmas que habitan diferentes instalaciones abandonadas como hogares, escuelas, prisiones y asilos.', 2000, 8, 'Kinetic Games', '2020-09-18', 'https://www.youtube.com/embed/sRa9oeo5KiY', 'Multijugador-Estrategia', 'img/portadas/por_10021.jpg'),
(22, 'Subnautica', 'Desciende a las profundidades de un mundo submarino alienígena lleno de belleza y peligros. Crea equipamiento, pilota submarinos, terraforma el terreno, y burla los peligros para explorar exhuberantes arrecifes de coral, volcanes, sistemas de cuevas y más - Todo mientras intentas sobrevivir.', 4500, 8.8, 'Unknown Worlds', '2014-12-16', 'https://www.youtube.com/embed/Rz2SNm8VguE', 'Supervivencia-Simulacion-Aventura-Mundo Abierto', 'img/portadas/por_10022.jpg'),
(23, 'HITMAN 3', 'La muerte te espera. El Agente 47 regresa en HITMAN 3, el espectacular cierre de la trilogía de Mundo del asesinato.', 9000, 8.7, 'X Software', '2021-01-20', 'https://www.youtube.com/embed/R_Ob-fupzKg', 'Shooter-Accion-Estrategia', 'img/portadas/por_10023.jpg'),
(24, 'The Elder Scrolls V: Skyrim', 'Skyrim Special Edition, ganador de más de 200 premios al Juego del año, da vida a la fantasía épica con un nivel de detalle asombroso. La Special Edition incluye el juego aclamado por la crítica.', 3000, 9.3, 'Bethesda', '2011-11-11', 'https://www.youtube.com/embed/X1p-_CNtL9w', 'RPG-Aventura-Accion-Mundo Abierto', 'img/portadas/por_10024.jpg'),
(25, 'Darkest Dungeon II', 'Darkest Dungeon II es un gran viaje maldito de exploración de mazmorras. Forma un grupo, equipa tu carruaje y recorre un paisaje decadente en un último intento por evitar el apocalipsis. Sin embargo, los mayores peligros a los que te enfrentarás quizá sean internos...', 3800, 8.9, 'Red Hook', '2011-10-26', 'https://www.youtube.com/embed/sJ6Gdd-pSPA', 'RPG-Estrategia-Roguelike', 'img/portadas/por_10025.jpg'),
(26, 'Moonbreaker', 'Moonbreaker es un videojuego de simulación de juego de tablero por turnos donde impera la estrategia, diseñado para ser una verdadera experiencia con miniaturas digitales en el extenso universo de ciencia ficción.', 4500, 8.3, 'Unknown Worlds', '2022-09-29', 'https://www.youtube.com/embed/JI_9z90CFoA', 'Estrategia-Multijugador', 'img/portadas/por_10026.jpg'),
(27, 'Outer Wilds', 'Outer Wilds, nombrado juego del año 2019 por Giant Bomb, Polygon, Eurogamer y The Guardian, es un galardonado título de mundo abierto, que se desarrolla en un enigmático sistema solar confinado a un bucle temporal infinito.', 3800, 8.8, 'X Software', '2019-05-28', 'https://www.youtube.com/embed/d6LGnVCL1_A', 'Aventura-Simulacion', 'img/portadas/por_10027.jpg'),
(28, 'Neon Abyss', 'Neon Abyss es un juego de plataformas y acción roguelike donde, como parte del Grim Squad de Hades, te abrirás camino a tiros a través de Abyss. Infinitas sinergias y un sistema de evolución de mazmorras único hacen de cada partida un nuevo desafío. ¡Prepárate para desatar el infierno!', 3000, 8.1, 'X Software', '2020-07-14', 'https://www.youtube.com/embed/lJlAFNplZiA', 'Plataformero-Shooter-Roguelike', 'img/portadas/por_10028.jpg'),
(29, 'XCOM 2', 'Los alienígenas dominan la Tierra y prometen un futuro brillante para la humanidad mientras ocultan sus siniestros planes. Ponte en la piel del líder de una guerrilla y, con todo en contra, prende la llama de la resistencia mundial para acabar con la amenaza alienígena y salvar a la especie humana de la extinción.', 4700, 9, 'Firaxis Games', '2016-02-05', 'https://www.youtube.com/embed/jVf-lCVYI6k', 'Estrategia-Accion', 'img/portadas/por_10029.jpg'),
(30, 'Totally Accurate Battle Simulator', 'Lidera a wobblers rojos o azules llegados de tiempos remotos, lugares aterradores y mundos de fantasía, y observa como luchan con un motor físico de locura. Crea tus propios wobblers con el creador de unidades y lucha contra tus amigos en el modo multijugador en línea.', 3000, 8.3, 'Landfall', '2014-11-04', 'https://www.youtube.com/embed/ah6OVetEmFQ', 'Accion-Simulacion-Multijugador', 'img/portadas/por_10030.jpg'),
(31, 'Totally Accurate Battle Simulator', 'Lidera a wobblers rojos o azules llegados de tiempos remotos, lugares aterradores y mundos de fantasía, y observa como luchan con un motor físico de locura. Crea tus propios wobblers con el creador de unidades y lucha contra tus amigos en el modo multijugador en línea.', 3000, 8.3, 'Landfall', '2014-11-04', 'https://www.youtube.com/embed/ah6OVetEmFQ', 'Accion-Simulacion-Multijugador', 'img/portadas/por_10031.jpg'),
(32, 'The Binding of Isaac Rebirth', 'The Binding of Isaac(o simplemente Isaac) es un videojuego independiente de rol de acción y de mazmorras (dungeon crawler) roguelike hecho en Adobe Flash, desarrollado por Edmund McMillen (diseño) y Florian Himsl (programación) y publicado por Edmund. Siendo Isaac, el jugador intenta escapar de su propia madre, la cual piensa que debe de sacrificar a su hijo para completar su tarea dada por Dios.', 2200, 8.8, 'X Software', '2010-03-01', 'https://www.youtube.com/embed/Z6_C2ppkdVc', 'Shooter-Roguelike', 'img/portadas/por_10032.jpg'),
(33, 'NBA 2K23', 'Ponte a la altura de las circunstancias en NBA 2K23. Demuestra tu talento en Mi CARRERA. Empareja a All-Stars con leyendas eternas en MyTEAM. Construye tu propia dinastía en Mi GM, o guía a la NBA en una nueva dirección con Mi LIGA.', 9000, 5.7, '2K', '2022-09-08', 'https://www.youtube.com/embed/p0YT85W2GL0', 'Deporte-Multijugador', 'img/portadas/por_10033.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
