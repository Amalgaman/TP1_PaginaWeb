<?php

function getJuegos()
{

    $lista = array(
        array(
            'serial' => '10001',
            'portada' => 'img/ejemplo1.jpg',
            'nombre' => 'Half Life 3',
            "etiqueta1" => "Shooter",
            "etiqueta2" => "Accion",
            "descripcion" => "La tan esperada tercera entrega del clasico de Valve resulto ser en realidad un placeholder de un trabajo practico.",
            "precio" => 500,
            "calificacion" => 10,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "PKkZpXPBWQA"
        ),
        array(
            'serial' => '10002',
            'portada' => 'img/ejemplo2.jpg',
            'nombre' => 'League of Legends',
            "etiqueta1" => "Multijugador",
            "etiqueta2" => "Estrategia",
            "descripcion" => "A re que es gratis. El MOBA mas jugado del mundo ahora es pago, unite a esta aventura.",
            "precio" => 1000,
            "calificacion" => 8.5,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020",
            "trailer" => "vtFhDrMIZjE"
        ),
        array(
            'serial' => '10003',
            'portada' => 'img/ejemplo3.jpeg',
            'nombre' => 'Minecraft 2',
            "etiqueta1" => "Supervivencia",
            "etiqueta2" => "Multijugador",
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020"
        ),
        array(
            'serial' => '10004',
            'portada' => 'img/ejemplo4.jpeg',
            'nombre' => 'ROBLOX 2',
            "etiqueta1" => "+18",
            "etiqueta2" => "Terror Psicologico",
            "descripcion" => "La tan esperada tercera entrega del clasico de Valve resulto ser en realidad un placeholder de un trabajo practico.",
            "precio" => 500,
            "calificacion" => 10,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020"
        ),
        array(
            'serial' => '10005',
            'portada' => 'img/ejemplo5.png',
            'nombre' => 'DOOM: Blender Port',
            "etiqueta1" => "Shooter",
            "etiqueta2" => "Accion",
            "descripcion" => "A re que es gratis. El MOBA mas jugado del mundo ahora es pago, unite a esta aventura.",
            "precio" => 1000,
            "calificacion" => 8.5,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020"
        ),
        array(
            'serial' => '10006',
            'portada' => 'img/ejemplo6.jpeg',
            'nombre' => 'Blooodborn Kart',
            "etiqueta1" => "Carreras",
            "etiqueta2" => "Accion",
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020"
        ),
        array(
            'serial' => '10007',
            'portada' => 'img/ejemplo7.jpg',
            'nombre' => 'Final Fantasy VII Remake: The Demake',
            "etiqueta1" => "RPG",
            "etiqueta2" => "Estrategia",
            "descripcion" => "El mejor juego se supervivencia para niños rata, ahora con mas figuras geometricas, como curvas y conos.",
            "precio" => 300,
            "calificacion" => 7.8,
            "desarrollador" => "X Software",
            "lanzamiento" => "12/12/2020"
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