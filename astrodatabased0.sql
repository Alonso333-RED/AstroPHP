SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE IF NOT EXISTS `astros` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(600) NOT NULL,
  `type` varchar(50) NOT NULL,
  `diameter` float NOT NULL,
  `mass` float NOT NULL,
  `discovery_year` int(10) UNSIGNED NOT NULL,
  `discovered_by` varchar(100) NOT NULL,
  `temperature` float NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `astros` (`id`, `name`, `description`, `type`, `diameter`, `mass`, `discovery_year`, `discovered_by`, `temperature`, `image`) VALUES
(1, 'Sol', 'La estrella es de tipo espectral G2V y constituye el centro del Sistema Solar, siendo la fuente principal de luz y energía que recibe la Tierra. Está compuesta principalmente de hidrógeno, con trazas de helio y elementos más pesados. Su enorme gravedad mantiene a los planetas en órbita y regula fenómenos como las tormentas solares. Gracias a su radiación, permite la fotosíntesis y el mantenimiento de la vida en la Tierra, además de influir en el clima y las condiciones atmosféricas de nuestro planeta. ', 'Estrella enana amarilla', 1, 1, 0, 'Desconocido', 5505, 'Sol.jpg'),
(2, 'Mercurio', 'Mercurio es el planeta más cercano al Sol, de tamaño pequeño y superficie rocosa llena de cráteres debido a la constante exposición a meteoritos y cometas. Carece de una atmósfera significativa, por lo que las temperaturas varían de forma extrema entre el día y la noche. Su densidad es alta y posee un núcleo metálico que genera un débil campo magnético. Debido a su proximidad al Sol, Mercurio se mueve rápidamente en su órbita y su superficie refleja luz solar intensa, haciéndolo difícil de observar desde la Tierra sin telescopio.', 'Planeta rocoso', 4880, 0.00017, 0, 'Desconocido', 167, 'Mercurio.jpg'),
(3, 'Venus', 'Venus es el segundo planeta del Sistema Solar, con un tamaño y masa similares a los de la Tierra. Su atmósfera es extremadamente densa y está compuesta principalmente de dióxido de carbono, lo que provoca un efecto invernadero muy intenso y temperaturas superficiales capaces de fundir plomo. Posee nubes de ácido sulfúrico que generan presión atmosférica altísima y un clima infernal. Su rotación es lenta y retrógrada, y su superficie muestra volcanes, vastas planicies y cráteres, lo que evidencia una geología activa a lo largo del tiempo.', 'Planeta rocoso', 12.104, 0.000815, 0, 'Desconocido', 464, 'Venus.jpg'),
(4, 'Tierra', 'La Tierra es el tercer planeta del Sistema Solar, un mundo rocoso con abundantes océanos y una atmósfera rica en oxígeno, lo que la hace única por albergar vida conocida. Su superficie presenta continentes, montañas, ríos y mares, mientras que su clima y ciclos climáticos permiten la existencia de ecosistemas diversos. La gravedad mantiene la atmósfera y los océanos en su lugar, y la interacción con la Luna influye en las mareas. La Tierra es un planeta dinámico, con actividad tectónica y volcanes que modelan continuamente su paisaje.', 'Planeta rocoso', 12.742, 0.000003, 0, 'Desconocido', 15, 'Tierra.jpg'),
(5, 'Marte', 'Marte es el cuarto planeta del Sistema Solar, conocido como el planeta rojo por el óxido de hierro que cubre su superficie. Presenta montañas, valles y casquetes polares que cambian con las estaciones. Su atmósfera es delgada y compuesta principalmente de dióxido de carbono. Aunque no se ha confirmado vida, hay evidencias de agua pasada. Su terreno accidentado y su color característico lo hacen uno de los planetas más interesantes de observar desde la Tierra.', 'Planeta rocoso', 6.779, 0.00000032, 0, 'Desconocido', -63, 'Marte.jpg'),
(6, 'Júpiter', 'Júpiter es el quinto planeta del Sistema Solar y el más grande. Es un gigante gaseoso compuesto principalmente de hidrógeno y helio, con un sistema de anillos muy tenue y visibles solo con telescopios. Presenta una atmósfera dinámica con tormentas gigantes, como la Gran Mancha Roja, vientos intensos y nubes en bandas de colores. Posee numerosas lunas, incluyendo Ganímedes, la más grande del Sistema Solar. Su enorme gravedad influye en otros planetas y asteroides, y protege a la Tierra de impactos cósmicos.', 'Planeta gigante gaseoso', 139820, 0.0009543, 0, 'Desconocido', -108, 'Jupiter.jpg'),
(7, 'Saturno', 'Saturno es el sexto planeta del Sistema Solar, un gigante gaseoso famoso por su impresionante sistema de anillos compuestos de hielo y polvo. Su atmósfera está formada principalmente por hidrógeno y helio, con tormentas y vientos extremadamente rápidos. Posee numerosas lunas, destacando Titán, con su propia atmósfera densa. Su tamaño y gravedad lo hacen el segundo planeta más masivo después de Júpiter, y sus anillos, visibles incluso con telescopios pequeños, lo convierten en uno de los objetos más espectaculares del Sistema Solar.', 'Planeta gigante gaseoso', 120536, 0.0002857, 0, 'Desconocido', -139, 'Saturno.jpg'),
(8, 'Urano', 'Urano es el séptimo planeta del Sistema Solar, un gigante gaseoso cuya atmósfera está compuesta principalmente de hidrógeno, helio y metano, lo que le da su característico color azul verdoso. Presenta un sistema de anillos estrechos y oscuros, y numerosas lunas con diversidad geológica. Su rotación es peculiar, ya que gira prácticamente de lado respecto a su órbita. Las temperaturas en su superficie son extremadamente bajas y sus vientos alcanzan velocidades impresionantes, convirtiéndolo en uno de los planetas más fríos y curiosos del Sistema Solar.', 'Planeta gigante gaseoso', 50724, 0.0000437, 1781, 'William Herschel', -197, 'Urano.png'),
(9, 'Neptuno', 'Neptuno es el octavo planeta del Sistema Solar, un gigante gaseoso con atmósfera formada principalmente por hidrógeno, helio y metano, lo que le da su color azul intenso. Es famoso por sus fuertes vientos, los más rápidos del Sistema Solar, y por tormentas gigantes que atraviesan su atmósfera. Posee un sistema de anillos tenues y varias lunas, siendo Tritón la más grande, con actividad geológica y géiseres de nitrógeno. Su distancia al Sol lo convierte en un planeta frío y distante, y su estudio ayuda a comprender la formación y dinámica de los planetas exteriores.', 'Planeta gigante gaseoso', 49244, 0.0000515, 1846, 'Johann Galle', -201, 'Neptuno.jpeg'),
(10, 'Plutón', 'Plutón es un planeta enano del cinturón de Kuiper, compuesto principalmente de hielo y roca. Su superficie es muy variada e incluye planicies de nitrógeno congelado, montañas de hielo y regiones oscuras ricas en carbono. Posee una delgada atmósfera que se expande cuando se acerca al Sol y se congela al alejarse. Tiene cinco lunas conocidas, siendo Caronte la más grande, casi del tamaño de Plutón. Su estudio ha revelado una geología activa y compleja, demostrando que incluso los cuerpos pequeños del Sistema Solar pueden tener características sorprendentes y dinámicas.', 'Planeta enano', 2376.6, 0.000000683, 1930, 'Clyde Tombaugh', -229, 'Pluton.png'),
(14, '55 Cancri e', 'Exoplaneta tipo super-Tierra orbitando muy cerca de su estrella (a ~0.01544 AU), completando una órbita en menos de 18 horas. Su diámetro (~23900 km) es ~1.9-2 veces el de la Tierra y su masa (~8 masas terrestres) lo convierte en un mundo extremadamente denso y rocoso. Se cree que su superficie puede estar parcialmente derretida, con una costa de magma permanente en su lado diurno, alcanzando temperaturas de más de 2400 °C. Es potencialmente un \'mundo-magma\', inhóspito para vida tal como la conocemos.', 'Super-Tierra', 23900, 0.000024, 2004, 'McArthur et al.', 2426.85, '55_Cancri_e.jpg');


ALTER TABLE `astros`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `astros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
