<?php

function getJuegos()
{

    $lista = array(
        array(
            'serial' => '10001',
            'portada' => 'img/ejemplo1.jpg',
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
            'portada' => 'img/ejemplo2.jpg',
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
            'portada' => 'img/ejemplo3.jpeg',
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
            'portada' => 'img/ejemplo4.jpeg',
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
            'portada' => 'img/ejemplo5.png',
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
            'portada' => 'img/ejemplo6.jpeg',
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
            'portada' => 'img/ejemplo7.jpg',
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
            'portada' => 'img/ejemplo6.jpeg',
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
            'portada' => 'img/ejemplo6.jpeg',
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
            'portada' => 'img/ejemplo6.jpeg',
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
            'portada' => 'img/ejemplo6.jpeg',
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
            'portada' => 'img/ejemplo6.jpeg',
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
                'portada' => 'img/ejemplo6.jpeg',
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
            'portada' => 'img/ejemplo6.jpeg',
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
                    'portada' => 'img/ejemplo6.jpeg',
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
                    'portada' => 'img/ejemplo6.jpeg',
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
                    'portada' => 'img/ejemplo6.jpeg',
                    'nombre' => 'Terraria',
                    "etiquetas" => array("Carreras","Accion"),
                    "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
                    "precio" => 300,
                    "calificacion" => 7.8,
                    "desarrollador" => "X Software",
                    "lanzamiento" => "12/12/2020",
                    "trailer" => "w7uOhFTrrq0"
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
