<?php

/*
function getJuegos()
{

    $lista = array(
        array(
            'serial' => '10001',
            'nombre' => 'Grand Theft Auto V',
            "etiquetas" => array("Mundo Abierto","Accion","Multijugador"),
            "descripcion" => "Grand Theft Auto V para PC ofrece a los jugadores la opción de explorar el galardonado mundo de Los Santos y el condado de Blaine con una resolución de 4K y disfrutar del juego a 60 fotogramas por segundo.",
            "precio" => 4500,
            "calificacion" => 8.3,
            "desarrollador" => "Rockstar Games",
            "lanzamiento" => "14/04/2015",
            "trailer" => "QkkoHAzjnUs"
        ),
        array(
            'serial' => '10002',
            'nombre' => 'Batman: Arkham Knight',
            "etiquetas" => array("Accion","Mundo Abierto"),
            "descripcion" => "Batman™: Arkham Knight es la épica conclusión de la galardonada trilogía de Arkham, creada por Rocksteady Studios. El título, desarrollado en exclusiva para plataformas de nueva generación, presenta la espectacular versión del batmóvil imaginada por Rocksteady.",
            "precio" => 3800,
            "calificacion" => 8.7,
            "desarrollador" => "Rocksteady Studios",
            "lanzamiento" => "23/06/2015",
            "trailer" => "dxa34RatmSc"
        ),
        array(
            'serial' => '10003',
            'nombre' => 'Crash Bandicoot N. Sane Trilogy',
            "etiquetas" => array("Plataformero", "Aventura"),
            "descripcion" => "¡Vuelve Crash Bandicoot™, tu marsupial favorito! Mejorado, embelesado y listo para bailar con la colección de juegos La trilogía. Revive tus momentos favoritos con Crash Bandicoot™, Crash Bandicoot™ 2: Cortex Strikes Back y Crash Bandicoot™ 3: Warped.",
            "precio" => 6000,
            "calificacion" => 8.0,
            "desarrollador" => "Vicarious Visions",
            "lanzamiento" => "29/06/2018",
            "trailer" => "F7G91RjVmvk"
        ),
        array(
            'serial' => '10004',
            'nombre' => 'Red Dead Redemption 2',
            "etiquetas" => array("Mundo Abierto", "Aventura","Accion"),
            "descripcion" => "Con más de 175 premios al Juego del año y más de 250 valoraciones perfectas, Red Dead Redemption 2 es la épica historia de Arthur Morgan y la banda de Van der Linde, que huyen por toda América en el albor de una nueva era. ",
            "precio" => 9000,
            "calificacion" => 8.6,
            "desarrollador" => "Rockstar Games",
            "lanzamiento" => "05/12/2019",
            "trailer" => "gmA6MrX81z4"
        ),
        array(
            'serial' => '10005',
            'nombre' => 'DOOM Eternal',
            "etiquetas" => array("Shooter", "Accion"),
            "descripcion" => "Los ejércitos del infierno han invadido la Tierra. Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones para detener la destrucción definitiva de la humanidad. No le tienen miedo a nada... salvo a ti.",
            "precio" => 6000,
            "calificacion" => 8.8,
            "desarrollador" => "id Software",
            "lanzamiento" => "20/03/2020",
            "trailer" => "6SRj82vc1Jg"
        ),
        array(
            'serial' => '10006',
            'nombre' => 'Dragon Ball Fighter Z',
            "etiquetas" => array("Pelea","Anime","Multijugador"),
            "descripcion" => "DRAGON BALL FighterZ nace de lo que hace a la serie DRAGON BALL tan famosa: luchas espectaculares e interminables con luchadores superpoderosos.",
            "precio" => 9000,
            "calificacion" => 7.4,
            "desarrollador" => "Arc System Works",
            "lanzamiento" => "26/01/2018",
            "trailer" => "YNAfOG4GfFQ"
        ),
        array(
            'serial' => '10007',
            'nombre' => 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 4',
            "etiquetas" => array("Anime","Pelea","Multijugador"),
            "descripcion" => "¡Con el nuevo título de la aclamada saga STORM emprenderás un viaje impresionante y lleno de color! ¡Benefíciate de un sistema de combate totalmente renovado y prepárate para sumergirte en los combates más épicos que hayas visto nunca!",
            "precio" => 9000,
            "calificacion" => 7.7,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2016",
            "trailer" => "9Vm4m15r2Xc"
        ),
        array(
            'serial' => '10008',
            'nombre' => 'FIFA 23',
            "etiquetas" => array("Deporte","Multijugador"),
            "descripcion" => "FIFA 23 nos acerca a The World's Game con la tecnología HyperMotion2 que ofrece una experiencia de juego aún más realista, la FIFA World Cup™ masculina y femenina disponibles durante la temporada, clubes femeninos, función de juego cruzado* y mucho más.",
            "precio" => 9000,
            "calificacion" => 4.7,
            "desarrollador" => "X Software",
            "lanzamiento" => "26/9/2022",
            "trailer" => "o3V-GvvzjE4"
        ), 
        array(
            'serial' => '10009',
            'nombre' => 'Elden Ring',
            "etiquetas" => array("RPG","Mundo Abierto","Accion"),
            "descripcion" => "EL NUEVO JUEGO DE ROL Y ACCIÓN DE AMBIENTACIÓN FANTÁSTICA. Álzate, Sinluz, y que la gracia te guíe para abrazar el poder del Círculo de Elden y encumbrarte como señor del Círculo en las Tierras Intermedias.",
            "precio" => 9000,
            "calificacion" => 9.6,
            "desarrollador" => "X Software",
            "lanzamiento" => "25/2/2022",
            "trailer" => "e5wwSxl0atc"
        ), 
        array(
            'serial' => '10010',
            'nombre' => 'Minecraft',
            "etiquetas" => array("Mundo Abierto","Supervivencia","Multijugador"),
            "descripcion" => "Minecraft es un videojuego de construcción de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson, y posteriormente desarrollado por Mojang Studios.",
            "precio" => 3000,
            "calificacion" => 9.3,
            "desarrollador" => "Mojang",
            "lanzamiento" => "18/11/2011",
            "trailer" => "MmB9b5njVbA"
        ), 
        array(
            'serial' => '10011',
            'nombre' => 'ARK: Survival Evolved',
            "etiquetas" => array("Supervivencia","Accion","Mundo Abierto"),
            "descripcion" => "Juega como un hombre o una mujer desnudo, congelándote y muriéndote de hambre en una isla misteriosa. Debes cazar, cosechar, crear objetos, cultivar, y construir refugios para sobrevivir. Usa tu habilidad y astucia para matar, domesticar, criar y cabalgar dinosaurios y otras criaturas primitivas.",
            "precio" => 3000,
            "calificacion" => 7.0,
            "desarrollador" => "X Software",
            "lanzamiento" => "29/8/2017",
            "trailer" => "FW9vsrPWujI"
        ), 
        array(
            'serial' => '10012',
            'nombre' => 'Payday 2',
            "etiquetas" => array("Shooter","Multijugador"),
            "descripcion" => "PAYDAY 2 es un juego de acción cooperativo para cuatro jugadores que, una vez más, permite a los jugadores ponerse en la piel del equipo original de PAYDAY - Dallas, Hoxton, Wolf y Chains - mientras descienden por Washington DC en una épica ola de crímenes.",
            "precio" => 3000,
            "calificacion" => 6.7,
            "desarrollador" => "X Software",
            "lanzamiento" => "13/8/2013",
            "trailer" => "Gb-_DKC6wc4", 
        ),  
        array(
                'serial' => '10013',
                'nombre' => 'Hollow Knight ',
                "etiquetas" => array("Mundo Abierto","Aventura","Plataformero"),
                "descripcion" => "¡Forja tu propio camino en Hollow Knight! Una aventura épica a través de un vasto reino de insectos y héroes que se encuentra en ruinas. Explora cavernas tortuosas, combate contra criaturas corrompidas y entabla amistad con extraños insectos.",
                "precio" => 2200,
                "calificacion" => 9.1,
                "desarrollador" => "Team Cherry",
                "lanzamiento" => "24/02/2017",
                "trailer" => "UAO2urG23S4"
        ), 
        array(
            'serial' => '10014',
            'nombre' => 'Call of Duty: Modern Warfare II',
            "etiquetas" => array("Shooter","Accion","Multijugador"),
            "descripcion" => "En Call of Duty®: Modern Warfare® II, los jugadores se verán inmersos en un conflicto a escala global sin precedentes que incluye el regreso de Operadores icónicos de la fuerza operativa 141.",
            "precio" => 9000,
            "calificacion" => 8.5,
            "desarrollador" => "X Software",
            "lanzamiento" => "28/10/2022",
            "trailer" => "r72GP1PIZa0" 
              ),  
              array(
                    'serial' => '10015',  
                    'nombre' => 'Goat Simulator',
                    "etiquetas" => array("Mundo Abierto","Simulacion"),
                    "descripcion" => "Goat Simulator es un juego de perspectiva en tercera persona abierta en la que el jugador controla a una cabra. El jugador es libre para explorar el mundo del juego, un entorno suburbano, como una cabra. La cabra puede saltar, correr, golpear cosas y lamer objetos. ",
                    "precio" => 1500,
                    "calificacion" => 6.6,
                    "desarrollador" => "Coffee Stain Studios",
                    "lanzamiento" => "01/04/2014",
                    "trailer" => "dvWGLcdI8o8"
              ),  
              array(
                    'serial' => '10016',
                    'nombre' => 'The Sims 4',
                    "etiquetas" => array("Simulacion","Supervivencia"),
                    "descripcion" => "Disfruta del poder de crear y controlar a personas en un mundo virtual donde no hay reglas. ¡Ejerce tu poder con total libertad, diviértete y juega a la vida!",
                    "precio" => 3000,
                    "calificacion" => 7.0,
                    "desarrollador" => "Electronic Arts",
                    "lanzamiento" => "02/09/2014",
                    "trailer" => "z00mK3Pxc8w"
              ),  
              array(
                    'serial' => '10017',
                    'nombre' => 'Terraria',
                    "etiquetas" => array("Mundo Abierto","Multijugador","Supervivencia"),
                    "descripcion" => "¡Cava, lucha, explora, construye! Con este juego de aventuras repleto de acción nada es imposible. ¡Pack de Cuatro también disponible!",
                    "precio" => 3000,
                    "calificacion" => 8.7,
                    "desarrollador" => "Re-Logic",
                    "lanzamiento" => "16/05/2011",
                    "trailer" => "w7uOhFTrrq0"
    ),  array(
                'serial' => '10018',
                'nombre' => 'Mortal Kombat 11 ',
                "etiquetas" => array("Pelea","Accion","Multijugador"),
                "descripcion" => "Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment. Se ejecuta en una versión muy modificada de Unreal Engine 3, ​ es la undécima entrega principal de la serie Mortal Kombat y una secuela de 2015 Mortal Kombat X.",
                "precio" => 9000,
                "calificacion" => 8.8,
                "desarrollador" => "Warner Bros Games",
                "lanzamiento" => "23/04/2019",
                "trailer" => "7zwQPJmg-Kg"
    ),   array(
                'serial' => '10019',
                'nombre' => 'God of War',
                "etiquetas" => array("Accion","Aventura","Mundo Abierto"),
                "descripcion" => "Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también.",
                "precio" => 3000,
                "calificacion" => 9.5,
                "desarrollador" => "Santa Monica",
                "lanzamiento" => "20/04/2018",
                "trailer" => "AN3jEjjcZ-k"
    ),    array(
                'serial' => '10020',
                'nombre' => 'Frostpunk ',
                "etiquetas" => array("Supervivencia","Estrategia"),
                "descripcion" => "Frostpunk es el primer juego de supervivencia de una sociedad. Como dirigente de la última ciudad del mundo, tu deber será el de lidiar tanto con los ciudadanos como con la infraestructura.",
                "precio" => 4500,
                "calificacion" => 8.4,
                "desarrollador" => "11 bit studios",
                "lanzamiento" => "24/04/2018",
                "trailer" => "qqEpSOFDXGA"
    ),    array(
        'serial' => '10021',
        'nombre' => 'Phasmophobia ',
        "etiquetas" => array("Estrategia","Multijugador"),
        "descripcion" => "El jugador toma el control de un miembro de un grupo de hasta cuatro jugadores, en los roles de cazadores de fantasmas que exploran entornos urbanos y son contratados para lidiar con fantasmas que habitan diferentes instalaciones abandonadas como hogares, escuelas, prisiones y asilos.",
        "precio" => 2000,
        "calificacion" => 8.0,
        "desarrollador" => "Kinetic Games",
        "lanzamiento" => "18/09/2020",
        "trailer" => "sRa9oeo5KiY"
    ),    array(
                'serial' => '10022',
                'nombre' => 'Subnautica',
                "etiquetas" => array("Supervivencia","Simulacion","Aventura","Mundo Abierto"),
                "descripcion" => "Desciende a las profundidades de un mundo submarino alienígena lleno de belleza y peligros. Crea equipamiento, pilota submarinos, terraforma el terreno, y burla los peligros para explorar exhuberantes arrecifes de coral, volcanes, sistemas de cuevas y más - Todo mientras intentas sobrevivir.",
                "precio" => 4500,
                "calificacion" => 8.8,
                "desarrollador" => "Unknown Worlds",
                "lanzamiento" => "16/12/2014",
                "trailer" => "Rz2SNm8VguE"
            ),    array(
                'serial' => '10023',
                'nombre' => 'HITMAN 3',
                "etiquetas" => array("Shooter","Accion","Estrategia"),
                "descripcion" => "La muerte te espera. El Agente 47 regresa en HITMAN 3, el espectacular cierre de la trilogía de Mundo del asesinato.",
                "precio" => 9000,
                "calificacion" => 8.7,
                "desarrollador" => "X Software",
                "lanzamiento" => "20/1/2021",
                "trailer" => "R_Ob-fupzKg"
            ), array(
            'serial' => '10024',
            'nombre' => 'The Elder Scrolls V: Skyrim',
            "etiquetas" => array("RPG","Aventura","Accion","Mundo Abierto"),
            "descripcion" => "Skyrim Special Edition, ganador de más de 200 premios al Juego del año, da vida a la fantasía épica con un nivel de detalle asombroso. La Special Edition incluye el juego aclamado por la crítica.",
            "precio" => 3000,
            "calificacion" => 9.3,
            "desarrollador" => "Bethesda",
            "lanzamiento" => "11/11/2011",
            "trailer" => "X1p-_CNtL9w"
            ), array(
                'serial' => '10025',
                'nombre' => 'Darkest Dungeon II',
                "etiquetas" => array("RPG","Estrategia","Roguelike"),
                "descripcion" => "Darkest Dungeon II es un gran viaje maldito de exploración de mazmorras. Forma un grupo, equipa tu carruaje y recorre un paisaje decadente en un último intento por evitar el apocalipsis. Sin embargo, los mayores peligros a los que te enfrentarás quizá sean internos...",
                "precio" => 3800,
                "calificacion" => 8.9,
                "desarrollador" => "Red Hook",
                "lanzamiento" => "26/10/2021",
                "trailer" => "sJ6Gdd-pSPA"
            ), array(
                'serial' => '10026',
                'nombre' => 'Moonbreaker ',
                "etiquetas" => array("Estrategia","Multijugador"),
                "descripcion" => "Moonbreaker es un videojuego de simulación de juego de tablero por turnos donde impera la estrategia, diseñado para ser una verdadera experiencia con miniaturas digitales en el extenso universo de ciencia ficción.",
                "precio" => 4500,
                "calificacion" => 8.3,
                "desarrollador" => "Unknown Worlds",
                "lanzamiento" => "29/09/2022",
                "trailer" => "JI_9z90CFoA"
            ), array(
                    'serial' => '10027',
                    'nombre' => 'Outer Wilds',
                    "etiquetas" => array("Aventura","Simulacion"),
                    "descripcion" => "Outer Wilds, nombrado juego del año 2019 por Giant Bomb, Polygon, Eurogamer y The Guardian, es un galardonado título de mundo abierto, que se desarrolla en un enigmático sistema solar confinado a un bucle temporal infinito.",
                    "precio" => 3800,
                    "calificacion" => 8.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "28/5/2019",
                    "trailer" => "d6LGnVCL1_A"
            ), array(
                'serial' => '10028',
                'nombre' => 'Neon Abyss ',
                "etiquetas" => array("Plataformero","Shooter","Roguelike"),
                "descripcion" => "Neon Abyss es un juego de plataformas y acción roguelike donde, como parte del Grim Squad de Hades, te abrirás camino a tiros a través de Abyss. Infinitas sinergias y un sistema de evolución de mazmorras único hacen de cada partida un nuevo desafío. ¡Prepárate para desatar el infierno!",
                "precio" => 3000,
                "calificacion" => 8.1,
                "desarrollador" => "X Software",
                "lanzamiento" => "14/07/2020",
                "trailer" => "lJlAFNplZiA"
            ), array(
        'serial' => '10029',
        'nombre' => 'XCOM 2',
        "etiquetas" => array("Estrategia","Accion"),
        "descripcion" => "Los alienígenas dominan la Tierra y prometen un futuro brillante para la humanidad mientras ocultan sus siniestros planes. Ponte en la piel del líder de una guerrilla y, con todo en contra, prende la llama de la resistencia mundial para acabar con la amenaza alienígena y salvar a la especie humana de la extinción.",
        "precio" => 9000,
        "calificacion" => 8.7,
        "desarrollador" => "Firaxis Games",
        "lanzamiento" => "05/02/2016",
        "trailer" => "jVf-lCVYI6k"
            ), array(
            'serial' => '10030',
            'nombre' => 'Totally Accurate Battle Simulator',
            "etiquetas" => array("Accion","Simulacion","Multijugador"),
            "descripcion" => "Lidera a wobblers rojos o azules llegados de tiempos remotos, lugares aterradores y mundos de fantasía, y observa como luchan con un motor físico de locura. Crea tus propios wobblers con el creador de unidades y lucha contra tus amigos en el modo multijugador en línea.",
            "precio" => 3000,
            "calificacion" => 8.3,
            "desarrollador" => "Landfall",
            "lanzamiento" => "04/11/2014",
            "trailer" => "ah6OVetEmFQ"
            ), array(
        'serial' => '10031',
        'nombre' => 'The Binding of Isaac Rebirth',
        "etiquetas" => array("Shooter","Roguelike"),
        "descripcion" => "The Binding of Isaac(o simplemente Isaac) es un videojuego independiente de rol de acción y de mazmorras (dungeon crawler) roguelike hecho en Adobe Flash, desarrollado por Edmund McMillen (diseño) y Florian Himsl (programación) y publicado por Edmund. Siendo Isaac, el jugador intenta escapar de su propia madre, la cual piensa que debe de sacrificar a su hijo para completar su tarea dada por Dios.",
        "precio" => 2200,
        "calificacion" => 8.8,
        "desarrollador" => "X Software",
        "lanzamiento" => "1/3/2010",
        "trailer" => "Z6_C2ppkdVc"
            ), array(
            'serial' => '10032',
            'nombre' => 'Mundo Gaturro',
            "etiquetas" => array("Mundo Abierto","Multijugador","Free to play"),
            "descripcion" => "Mundo Gaturro es un juego en línea multijugador para niños basada en el personaje Gaturro. El sitio fue desarrollado en el año 2010 por la empresa argentina QB9 Entertainment, mismo año que se lanzó una adaptación cinematográfica sobre dicho personaje de historietas y animado.",
            "precio" => 0,
            "calificacion" => 8.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2010",
            "trailer" => "51i3q1VJ3Ww"
            ), array(
                'serial' => '10033',
    
                'nombre' => 'Club Penguin',
                "etiquetas" => array("Mundo Abierto","Multijugador","Free to play"),
                "descripcion" => "Club Penguin es un juego online multijugador masivo o MMO, que consiste en un mundo virtual que contiene una serie de juegos y actividades online. Fue creado por New Horizon Interactive. Los jugadores utilizan avatares de pingüinos animados y juegan en un mundo abierto de temática antártica.",
                "precio" => 0,
                "calificacion" => 9.9,
                "desarrollador" => "X Software",
                "lanzamiento" => "24/10/2005",
                "trailer" => "C3AdqjClPD4"
            ) , array(
                'serial' => '10034',
                'nombre' => 'Counter-Strike: Global Offensive',
                "etiquetas" => array("Shooter","Accion","Multijugador","Free to play"),
                "descripcion" => "Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionero cuando salió hace más de 20 años. CS:GO incluye nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de Counter-Strike (de_dust2, etc.)",
                "precio" => 0,
                "calificacion" => 8.3,
                "desarrollador" => "X Software",
                "lanzamiento" => "21/8/2012",
                "trailer" => "edYCtaNueQY"
                ), array(
                    'serial' => '10035',
                    'nombre' => 'Valorant',
                    "etiquetas" => array("Multijugador","Accion","Estrategia","Shooter","Free to play"),
                    "descripcion" => "Valorant es un hero shooter en primera persona ambientado en un futuro próximo.Los jugadores asumen el control de agentes, personajes que provienen de una gran cantidad de países y culturas de todo el mundo. En el modo de juego principal, los jugadores se unen al equipo atacante o defensor con cada equipo que tiene cinco jugadores.",
                    "precio" => 0,
                    "calificacion" => 8.0,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "02/6/2020",
                    "trailer" => "Ey770ez6ROk"
                ),
                array(
                    'serial' => '10036',
                    'nombre' => 'NBA 2K23',
                    "etiquetas" => array("Deporte","Multijugador"),
                    "descripcion" => "Ponte a la altura de las circunstancias en NBA 2K23. Demuestra tu talento en Mi CARRERA. Empareja a All-Stars con leyendas eternas en MyTEAM. Construye tu propia dinastía en Mi GM, o guía a la NBA en una nueva dirección con Mi LIGA.",
                    "precio" => 9000,
                    "calificacion" => 5.7,
                    "desarrollador" => "2K",
                    "lanzamiento" => "08/09/2022",
                    "trailer" => "p0YT85W2GL0"
                )
);

    return $lista;

}
*/

function getJuegos(PDO $conexion){

    $consulta = $conexion->prepare('
        SELECT serial, nombre, descripcion, precio, calificacion, desarrollador, lanzamiento, trailer, etiquetas
        FROM juegos
    ');

    $consulta->execute();

    $juegos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach($juegos as &$juego){
        $arrayEtiquetas = explode ('-', $juego['etiquetas']);
        $juego['etiquetas'] = $arrayEtiquetas;
        $juego['serial'] = $juego['serial']+10000;
    }

    return $juegos;
}

//Esta funcion devuelve una array de juegos aleatorios, el parametro es la cantidad de juegos que va a tener el array
function getAleatorios($cantidad,$lista_mezclada){
    $lista_cortada = array();
    shuffle ($lista_mezclada);
    
    for($i = 0; $i < $cantidad; $i++){
      array_push($lista_cortada, $lista_mezclada[$i]);
    }
    return $lista_cortada;
    
}

function getEtiquetas($lista_juegos){
    
    $lista_etiquetas = array();

    foreach ($lista_juegos as $item){
        
        foreach($item["etiquetas"] as $etiqueta)
        if(!in_array($etiqueta, $lista_etiquetas)){
            array_push($lista_etiquetas, $etiqueta);
        }
    }
    
    sort($lista_etiquetas);
    return $lista_etiquetas;
}

function getJuegoBySerial($serial,$juegos)
{

    $juego = null;
    $contador = 0;


    while( $contador < count($juegos) and is_null($juego) )
    {
        if( $juegos[$contador]['serial'] == $serial )
        {
            $juego = $juegos[$contador];
        }
        $contador++;
    }

    return $juego;

}
function getJuegoByEtiqueta($etiqueta, $lista_completa)
{

    $juegos_filtrados = array();
    $contador = 0;
    

    foreach ( $lista_completa as $item){
        
        if(in_array($etiqueta, $item["etiquetas"])){
            array_push($juegos_filtrados, $item);
        }
    }

    return $juegos_filtrados;

}
function getJuegosSimilares($etiquetas,$juego_sitio){
    
    $lista_similares = array();

    foreach($etiquetas as $etiqueta){
        
        $juegos = getJuegoByEtiqueta($etiqueta,$juego_sitio);
        
        foreach($juegos as $juego){
            
            if(!in_array($juego, $lista_similares) and $juego != $juego_sitio){
                
                array_push($lista_similares, $juego);

            }
        }  
    }

    shuffle($lista_similares); 

    if(count($lista_similares) >= 3){   
        $recorte = array();
        for($i = 0; $i < 3 ; $i++){
            array_push($recorte, $lista_similares[$i]);
        }
    $lista_similares = $recorte;    
    }

    return $lista_similares;
}
