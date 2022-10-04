<?php

function getJuegos()
{

    $lista = array(
        array(
            'serial' => '10001',
            'nombre' => 'Grand Theft Auto V',
            "etiquetas" => array("Shooter","Accion","Multijugador"),
            "descripcion" => "La tan esperada tercera entrega del clasico de Valve resulto ser en realidad un placeholder de un trabajo practico.",
            "precio" => 500,
            "calificacion" => 10,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "QkkoHAzjnUs"
        ),
        array(
            'serial' => '10002',
            'nombre' => 'Batman: Arkham Knight',
            "etiquetas" => array("Multijugador","Estrategia","Hack and Slash"),
            "descripcion" => "A re que es gratis. El MOBA mas jugado del mundo ahora es pago, unite a esta aventura.",
            "precio" => 1000,
            "calificacion" => 8.5,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "dxa34RatmSc"
        ),
        array(
            'serial' => '10003',
            'nombre' => 'Crash Bandicoot N. Sane Trilogy',
            "etiquetas" => array("Supervivencia", "Multijugador"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "F7G91RjVmvk"
        ),
        array(
            'serial' => '10004',
            'nombre' => 'Red Dead Redemption 2',
            "etiquetas" => array("+18", "Terror Psicologico"),
            "descripcion" => "La tan esperada tercera entrega del clasico de Valve resulto ser en realidad un placeholder de un trabajo practico.",
            "precio" => 500,
            "calificacion" => 10,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "gmA6MrX81z4"
        ),
        array(
            'serial' => '10005',
            'nombre' => 'DOOM ETERNAL',
            "etiquetas" => array("Shooter", "Accion"),
            "descripcion" => "A re que es gratis. El MOBA mas jugado del mundo ahora es pago, unite a esta aventura.",
            "precio" => 1000,
            "calificacion" => 8.5,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "6SRj82vc1Jg"
        ),
        array(
            'serial' => '10006',
            'nombre' => 'Dragon Ball Fighter Z',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "YNAfOG4GfFQ"
        ),
        array(
            'serial' => '10007',
            'nombre' => 'NARUTO SHIPPUDEN: Ultimate Ninja STORM 4',
            "etiquetas" => array("RPG","Estrategia"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "9Vm4m15r2Xc"
        ),
        array(
            'serial' => '10008',
            'nombre' => 'FIFA 23',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "o3V-GvvzjE4"
        ), 
        array(
            'serial' => '10009',
            'nombre' => 'Elden Ring',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "e5wwSxl0atc"
        ), 
        array(
            'serial' => '10010',
            'nombre' => 'Minecraft',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "MmB9b5njVbA"
        ), 
        array(
            'serial' => '10011',
            'nombre' => 'ARK: Survival Evolved',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "FW9vsrPWujI"
        ), 
        array(
            'serial' => '10012',
            'nombre' => 'Payday 2 ',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "Gb-_DKC6wc4", 
        ),  
        array(
                'serial' => '10013',
                'nombre' => 'Hollow Knight ',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "UAO2urG23S4"
        ), 
        array(
            'serial' => '10014',
            'nombre' => 'Call of Duty: Modern Warfare II',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "r72GP1PIZa0" 
              ),  
              array(
                    'serial' => '10015',  
                    'nombre' => 'Goat Simulator',
                    "etiquetas" => array("Carreras","Accion"),
                    "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
                    "precio" => 300,
                    "calificacion" => 7.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "12/12/2020",
                    "trailer" => "dvWGLcdI8o8"
              ),  
              array(
                    'serial' => '10016',
                    'nombre' => 'The Sims 4',
                    "etiquetas" => array("Carreras","Accion"),
                    "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
                    "precio" => 300,
                    "calificacion" => 7.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "12/12/2020",
                    "trailer" => "z00mK3Pxc8w"
              ),  
              array(
                    'serial' => '10017',
    
                    'nombre' => 'Terraria',
                    "etiquetas" => array("Carreras","Accion"),
                    "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
                    "precio" => 300,
                    "calificacion" => 7.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "12/12/2020",
                    "trailer" => "w7uOhFTrrq0"
    ),  array(
                'serial' => '10018',
                'nombre' => 'Mortal Kombat 11 ',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment. Se ejecuta en una versión muy modificada de Unreal Engine 3, ​ es la undécima entrega principal de la serie Mortal Kombat y una secuela de 2015 Mortal Kombat X.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "7zwQPJmg-Kg"
    ),   array(
                'serial' => '10019',
                'nombre' => 'God of War',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "AN3jEjjcZ-k"
    ),    array(
                'serial' => '10020',
                'nombre' => 'Frostpunk ',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Frostpunk es el primer juego de supervivencia de una sociedad. Como dirigente de la última ciudad del mundo, tu deber será el de lidiar tanto con los ciudadanos como con la infraestructura.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "qqEpSOFDXGA"
    ),    array(
        'serial' => '10021',
        'nombre' => 'Phasmophobia ',
        "etiquetas" => array("Carreras","Accion"),
        "descripcion" => "El jugador toma el control de un miembro de un grupo de hasta cuatro jugadores, en los roles de cazadores de fantasmas que exploran entornos urbanos y son contratados para lidiar con fantasmas que habitan diferentes instalaciones abandonadas como hogares, escuelas, prisiones y asilos.",
        "precio" => 300,
        "calificacion" => 7.8,
        "desarrollador" => "X Software",
        "lanzamiento" => "12/12/2020",
        "trailer" => "sRa9oeo5KiY"
    ),    array(
                'serial' => '10022',
    
                'nombre' => 'Subnautica',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Desciende a las profundidades de un mundo submarino alienígena lleno de belleza y peligros. Crea equipamiento, pilota submarinos, terraforma el terreno, y burla los peligros para explorar exhuberantes arrecifes de coral, volcanes, sistemas de cuevas y más - Todo mientras intentas sobrevivir.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "Rz2SNm8VguE"
            ),    array(
                'serial' => '10023',
    
                'nombre' => 'HITMAN 3',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "La muerte te espera. El Agente 47 regresa en HITMAN 3, el espectacular cierre de la trilogía de Mundo del asesinato.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "R_Ob-fupzKg"
            ), array(
            'serial' => '10024',

            'nombre' => 'The Elder Scrolls V: Skyrim',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "Skyrim Special Edition, ganador de más de 200 premios al Juego del año, da vida a la fantasía épica con un nivel de detalle asombroso. La Special Edition incluye el juego aclamado por la crítica.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "X1p-_CNtL9w"
            ), array(
                'serial' => '10025',
    
                'nombre' => 'Darkest Dungeon II',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Darkest Dungeon II es un gran viaje maldito de exploración de mazmorras. Forma un grupo, equipa tu carruaje y recorre un paisaje decadente en un último intento por evitar el apocalipsis. Sin embargo, los mayores peligros a los que te enfrentarás quizá sean internos...",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "sJ6Gdd-pSPA"
            ), array(
                'serial' => '10026',
    
                'nombre' => 'Moonbreaker ',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Moonbreaker es un videojuego de simulación de juego de tablero por turnos donde impera la estrategia, diseñado para ser una verdadera experiencia con miniaturas digitales en el extenso universo de ciencia ficción.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "JI_9z90CFoA"
            ), array(
                    'serial' => '10027',
                    'nombre' => 'Outer Wilds',
                    "etiquetas" => array("Carreras","Accion"),
                    "descripcion" => "Outer Wilds, nombrado juego del año 2019 por Giant Bomb, Polygon, Eurogamer y The Guardian, es un galardonado título de mundo abierto, que se desarrolla en un enigmático sistema solar confinado a un bucle temporal infinito.",
                    "precio" => 300,
                    "calificacion" => 7.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "12/12/2020",
                    "trailer" => "d6LGnVCL1_A"
            ), array(
                'serial' => '10028',
    
                'nombre' => 'Neon Abyss ',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Neon Abyss es un juego de plataformas y acción roguelike donde, como parte del Grim Squad de Hades, te abrirás camino a tiros a través de Abyss. Infinitas sinergias y un sistema de evolución de mazmorras único hacen de cada partida un nuevo desafío. ¡Prepárate para desatar el infierno!",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "lJlAFNplZiA"
            ), array(
        'serial' => '10029',
        'nombre' => 'XCOM 2',
        "etiquetas" => array("Carreras","Accion"),
        "descripcion" => "Los alienígenas dominan la Tierra y prometen un futuro brillante para la humanidad mientras ocultan sus siniestros planes. Ponte en la piel del líder de una guerrilla y, con todo en contra, prende la llama de la resistencia mundial para acabar con la amenaza alienígena y salvar a la especie humana de la extinción.",
        "precio" => 300,
        "calificacion" => 7.8,
        "desarrollador" => "X Software",
        "lanzamiento" => "12/12/2020",
        "trailer" => "jVf-lCVYI6k"
            ), array(
            'serial' => '10030',

            'nombre' => 'Totally Accurate Battle Simulator',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "Lidera a wobblers rojos o azules llegados de tiempos remotos, lugares aterradores y mundos de fantasía, y observa como luchan con un motor físico de locura. Crea tus propios wobblers con el creador de unidades y lucha contra tus amigos en el modo multijugador en línea.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "ah6OVetEmFQ"
            ), array(
        'serial' => '10031',
        'nombre' => 'The Binding of Isaac Rebirth',
        "etiquetas" => array("Carreras","Accion"),
        "descripcion" => "The Binding of Isaac(o simplemente Isaac) es un videojuego independiente de rol de acción y de mazmorras (dungeon crawler) roguelike hecho en Adobe Flash, desarrollado por Edmund McMillen (diseño) y Florian Himsl (programación) y publicado por Edmund. Siendo Isaac, el jugador intenta escapar de su propia madre, la cual piensa que debe de sacrificar a su hijo para completar su tarea dada por Dios.",
        "precio" => 300,
        "calificacion" => 7.8,
        "desarrollador" => "X Software",
        "lanzamiento" => "12/12/2020",
        "trailer" => "Z6_C2ppkdVc"
            ), array(
            'serial' => '10032',
            'nombre' => 'MUNDO GATURRO',
            "etiquetas" => array("Carreras","Accion"),
            "descripcion" => "Mundo Gaturro es un juego en línea multijugador para niños basada en el personaje Gaturro. El sitio fue desarrollado en el año 2010 por la empresa argentina QB9 Entertainment, mismo año que se lanzó una adaptación cinematográfica sobre dicho personaje de historietas y animado.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "51i3q1VJ3Ww"
            ), array(
                'serial' => '10033',
    
                'nombre' => 'Club Penguin',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Club Penguin es un juego online multijugador masivo o MMO, que consiste en un mundo virtual que contiene una serie de juegos y actividades online. Fue creado por New Horizon Interactive. Los jugadores utilizan avatares de pingüinos animados y juegan en un mundo abierto de temática antártica.",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "C3AdqjClPD4"
            ) , array(
                'serial' => '10034',
                'nombre' => 'Counter-Strike: Global Offensive',
                "etiquetas" => array("Carreras","Accion"),
                "descripcion" => "Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionero cuando salió hace más de 20 años. CS:GO incluye nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de Counter-Strike (de_dust2, etc.)",
                "precio" => 300,
                "calificacion" => 7.8,
                "desarrollador" => "X Software",
                "lanzamiento" => "12/12/2020",
                "trailer" => "edYCtaNueQY"
                ), array(
                    'serial' => '10035',
                    'nombre' => 'Valorant',
                    "etiquetas" => array("Carreras","Accion"),
                    "descripcion" => "Valorant es un hero shooter en primera persona ambientado en un futuro próximo.Los jugadores asumen el control de agentes, personajes que provienen de una gran cantidad de países y culturas de todo el mundo. En el modo de juego principal, los jugadores se unen al equipo atacante o defensor con cada equipo que tiene cinco jugadores.",
                    "precio" => 300,
                    "calificacion" => 7.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "12/12/2020",
                    "trailer" => "Ey770ez6ROk"
                ) 
);

    return $lista;

}

//Esta funcion devuelve una array de juegos aleatorios, el parametro es la cantidad de juegos que va a tener el array
function getAleatorios($cantidad){
    $lista_cortada = array();
    $lista_mezclada = getJuegos();
    shuffle ($lista_mezclada);
    
    for($i = 0; $i < $cantidad; $i++){
      array_push($lista_cortada, $lista_mezclada[$i]);
    }
    return $lista_cortada;
    
}

function getEtiquetas(){
    
    $lista_juegos = getJuegos();
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

function getJuegoBySerial($serial)
{

    $juego = null;
    $contador = 0;
    $juegos = getJuegos();

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
function getJuegoByEtiqueta($etiqueta)
{
    $lista_completa = getJuegos();
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
        
        $juegos = getJuegoByEtiqueta($etiqueta);
        
        foreach($juegos as $juego){
            
            if(!in_array($lista_similares, $juego) and $juego != $juego_sitio){
                
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
