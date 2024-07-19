-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2024 a las 23:19:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rapconnect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raperos`
--

CREATE TABLE `raperos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `spotify` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `raperos`
--

INSERT INTO `raperos` (`id`, `nombre`, `descripcion`, `image`, `spotify`, `youtube`) VALUES
(1, 'ALCOLIRYKOZ', 'ALCOLIRYKOZ   En 1999 en el barrio Aranjuez, Medellín, Colombia, inició lo que hoy conocemos como Alcolirykoz, y fue en el 2005 cuando se configuró la alineación que hasta hoy conserva la banda. ‘Gambeta’, ‘Kaztro’ y ‘Fazeta’ lograron hacer todo con nada. Un proyecto honesto y disciplinado que revolucionó el sonido y la forma de ver el Hip Hop en Colombia. Música bien hecha, temáticas cotidianas narradas con ingenio y una propuesta audiovisual muy original. Seis producciones musicales hacen parte de la discografía de una de las agrupaciónes con mayor proyección en la escena independiente del país, que se ganó a pulso el respeto de la escena musical colombiana y latinoamericana.   “Creímos en lo de acá, ahora hasta tus padres oyen rap”', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSEhMVFRUVEhUVFRUWFxUVFRUVFRUWFhUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGislHx0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS4tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQE', 'https://open.spotify.com/intl-es/artist/3ygJTpJJIK7eEeC2EFRl9D', 'https://www.youtube.com/channel/UCMYPtnaZAFHETOknwvqw2qQ'),
(3, 'Tomas parr', 'Thomas Parr, conocido en la escena del rap colombiano por su nombre artístico, es un rapero y compositor que ha capturado la atención de los fanáticos del género con su estilo distintivo y letras introspectivas. Originario de Colombia, Parr se ha destacado por su habilidad para fusionar elementos del rap tradicional con influencias modernas, creando un sonido único que resuena tanto en su país natal como en la escena internacional.\n\nA lo largo de su carrera, Thomas Parr ha abordado temas variados en sus letras, desde experiencias personales y sociales hasta comentarios sobre la vida urbana. Su estilo lírico se caracteriza por una mezcla de reflexión profunda y agudeza crítica, lo que le permite conectar con una amplia audiencia y ofrecer un comentario social significativo.\n\nParr ha lanzado varios proyectos que han sido bien recibidos por críticos y fanáticos, consolidándose como una figura importante en el panorama del rap en Colombia. Su música no solo refleja su experiencia personal y perspectiva, sino que también destaca por su capacidad para abordar cuestiones relevantes de manera artística y poderosa.', '', 'https://open.spotify.com/intl-es/artist/4RdDhaLXcAbihjh7haTXbB', 'https://www.youtube.com/@thomasparr173'),
(4, 'Granuja', 'Granuja es un artista colombiano que ha ganado reconocimiento por su talento en el rap y su enfoque innovador en la producción musical. Con una carrera que abarca varios años, Granuja se ha convertido en una figura influyente en la escena del rap latinoamericano, conocido por sus letras introspectivas y su estilo lírico crudo.  Su música aborda temas variados, desde reflexiones personales y sociales hasta comentarios sobre la realidad urbana. La habilidad de Granuja para transmitir emociones genuinas a través de sus letras y su capacidad para experimentar con diferentes sonidos lo han posicionado como un artista relevante en el ámbito del rap en español.  Además de su trabajo como rapero, Granuja también se involucra en la producción musical, lo que le permite tener un control creativo completo sobre su música. Su enfoque en la calidad de producción y su compromiso con la autenticidad han contribuido a su éxito y a su influencia en la evolución del rap en Latinoamérica.  Granuja continúa siendo una voz distintiva en el rap colombiano y latinoamericano, y su trabajo sigue resonando con sus seguidores y colegas en la industria musical.', '', 'https://open.spotify.com/intl-es/artist/5KBPxIED8ejHkvhs4KCzyS', 'https://www.youtube.com/@granuja666'),
(5, 'Crudo means Raw', 'Crudo, cuyo nombre artístico es Crudo Means Raw, es un influyente rapero colombiano cuya música refleja una visión auténtica y sin filtros de la vida urbana y las experiencias personales. Su estilo se caracteriza por un enfoque directo y sin concesiones, abordando temas como la lucha social, la identidad personal y las realidades del entorno en el que se desarrolla.  Crudo es conocido por su habilidad para crear letras que impactan y provocan reflexión, a menudo utilizando un lenguaje crudo y realista que desafía las convenciones del rap. Su música se distingue por una producción que combina beats contundentes con un flow distintivo, lo que le permite expresar su mensaje de manera efectiva y poderosa.  Además de su trabajo como rapero, Crudo también está involucrado en la producción de su música, lo que le permite tener un control creativo sobre cada aspecto de su trabajo. Su enfoque en la autenticidad y la originalidad ha contribuido a su creciente popularidad y al respeto que ha ganado en la escena del rap latinoamericano.  Crudo Means Raw sigue siendo una figura clave en la evolución del rap en Colombia y más allá, y su música continúa resonando con aquellos que buscan un sonido auténtico y una perspectiva sincera sobre la vida y la sociedad.', '', 'https://open.spotify.com/intl-es/artist/3fQP5a7SIC91kV4N8AOy53', 'https://www.youtube.com/results?search_query=crudo+means+raw'),
(6, 'N. Harden', 'N. Harden, conocido también como Nate Harden, es un artista de rap y productor musical que se ha destacado en la escena del hip-hop por su estilo lírico distintivo y sus producciones innovadoras. Con una carrera que abarca varias colaboraciones y proyectos solistas, Harden ha ganado reconocimiento por su habilidad para combinar letras introspectivas con ritmos modernos y originales.  En sus trabajos, Harden suele explorar temas como la auto-reflexión, la lucha personal y las realidades del entorno urbano, creando un sonido que resuena con una audiencia amplia y diversa. Su enfoque en la autenticidad y la innovación lo ha establecido como una figura influyente en el género.', '', 'https://open.spotify.com/intl-es/artist/6oqagavQDMpR3KKeX4eqjL', 'https://www.youtube.com/@n.hardem'),
(7, 'Tomas parr', 'aaa', '', 'aaa', 'https://www.youtube.com/results?search_query=crudo+means+raw');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `raperos`
--
ALTER TABLE `raperos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `raperos`
--
ALTER TABLE `raperos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
