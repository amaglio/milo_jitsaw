<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'slider1' => [
            'extends' => '_layouts.comunidad', 
            'path' => '/{filename}',
            'items' => [
                [
                    'filename' => 'solo-los-mas-valientes-correrian-en-alguna-de-estas-competencias-a-una-le-dicen-la-mas-cruel', 
                    'titulo' => 'Sólo los más valientes correrían en alguna de estas extremas competencias',
                    'titulo_portada' => 'Sólo los más valientes correrían en alguna de estas extremas competencias. A una le
                    dicen “la más cruel”.',
                    'imagen' => '/assets/images/comunidad/mas-valientes.jpg',
                    'imagen_cuadrada' => '/assets/images/comunidad/mas-valientes-cuadrada.jpg',
                    'body' => file_get_contents('source/_comunidad/mas-valientes.html') 
                ],
                [
                    'filename' => 'estas-eran-las-pelotas-de-futbol-que-usabamos-antes',
                    'titulo' => 'Estas eran las pelotas de fútbol que usábamos antes',
                    'titulo_portada' => 'Estas eran las pelotas de fútbol que usábamos antes',
                    'imagen' => '/assets/images/comunidad/pelotas.jpg',
                    'imagen_cuadrada' => '/assets/images/comunidad/pelotas-cuadrada.png',
                    'body' => file_get_contents('source/_comunidad/pelotas-usabamos-antes.html') 
                ],
                [
                    'filename' => 'barcelona-debe-ser-por-lejos-la-mejor-ciudad-para-regalonear-junto-a-tu-hij',
                    'titulo' => 'Barcelona debe ser -por lejos- la mejor ciudad para regalonear junto a tu hij@',
                    'titulo_portada' => 'Barcelona debe ser -por lejos- la mejor ciudad para regalonear junto a tu hij@',
                    'imagen' => '/assets/images/comunidad/barcelona-hijos.jpg',
                    'imagen_cuadrada' => '/assets/images/comunidad/barcelona-hijos-cuadrada.png',
                    'body' => file_get_contents('source/_comunidad/barcelona-hijos.html') 
                ],
                [
                    'filename' => 'los-mejores-golazos-de-la-historia-para-nosotros-claro',
                    'titulo' => 'Los mejores golazos de la historia (para nosotros, claro)',
                    'titulo_portada' => 'Los mejores golazos de la historia (para nosotros, claro)',
                    'imagen' => '/assets/images/comunidad/golazos.jpg',
                    'imagen_cuadrada' => '/assets/images/comunidad/golazos-cuadrada.jpg',
                    'body' => file_get_contents('source/_comunidad/golazos.html') 
                ],
                [
                    'filename' => 'completa-este-quiz-y-descubre-cuantos-kms-aguantarias-en-una-maraton',
                    'titulo' => 'Completa este quiz y descubre cuántos kms. aguantarías en una maratón',
                    'titulo_portada' => 'Completa este quiz y descubre cuántos kms. aguantarías en una maratón',
                    'imagen' => '/assets/images/comunidad/marathon.jpg',
                    'imagen_cuadrada' => '/assets/images/comunidad/marathon-cuadrada.jpg',
                    'body' => file_get_contents('source/_comunidad/marathon.html') 
                ],
                [
                    'filename' => 'estos-son-algunos-de-los-paises-que-participaran-junto-a-chile-en-la-proxima-milo-champions-cup-2019',
                    'titulo' => 'Estos son algunos de los países que participarán junto a Chile en la próxima MILO Champions Cup 2019',
                    'titulo_portada' => 'Estos son algunos de los países que participarán junto a Chile en la próxima MILO Champions Cup 2019',
                    'imagen' => '/assets/images/comunidad/copa_milo.jpg',
                    'imagen_cuadrada' => '/assets/images/comunidad/copa_milo-cuadrada.jpg',
                    'body' => file_get_contents('source/_comunidad/copa_milo.html') 
                ]   
            ],
        ],
        'slider2' => [
            'extends' => '_layouts.comunidad', 
            'path' => '/{filename}',
            'items' => [
                [
                    'filename' => 'Puerto Montt vibró con la llegada de la Copa MILO Chile', 
                    'titulo' => 'Puerto Montt vibró con la llegada de la Copa MILO Chile',
                    'imagen_cuadrada' => '/assets/images/comunidad/puerto-mont.jpg' 
                ],
                [
                    'filename' => 'Así vivimos la primera fecha de la Copa MILO en Santiago', 
                    'titulo' => 'Así vivimos la primera fecha de la Copa MILO en Santiago',
                    'imagen_cuadrada' => '/assets/images/comunidad/vivimos_copa.jpg' 
                ],
                [
                    'filename' => 'Conoce la historia de Damián Uribe', 
                    'titulo' => 'Conoce la historia de Damián Uribe',
                    'imagen_cuadrada' => '/assets/images/comunidad/damia-uribe.jpg' 
                ],
                [
                    'filename' => 'Ellos entendieron la importancia de la Tarjeta Verde Espíritu MILO', 
                    'titulo' => 'Ellos entendieron la importancia de la Tarjeta Verde Espíritu MILO',
                    'imagen_cuadrada' => '/assets/images/comunidad/espiritu-milo.jpg' 
                ],
                [
                    'filename' => 'Este fue uno de los momentos más emocionantes que vivimos en la final de Santiago', 
                    'titulo' => 'Este fue uno de los momentos más emocionantes que vivimos en la final de Santiago',
                    'imagen_cuadrada' => '/assets/images/comunidad/final_santiago.jpg' 
                ],
                [
                    'filename' => 'Osorno: ¡gracias por dejarlo todo en la cancha!', 
                    'titulo' => 'Osorno: ¡gracias por dejarlo todo en la cancha!',
                    'imagen_cuadrada' => '/assets/images/comunidad/osorno.jpg' 
                ],
                [
                    'filename' => '¡Felicitaciones a todos nuestros equipos de Temuco, son gigantes!', 
                    'titulo' => '¡Felicitaciones a todos nuestros equipos de Temuco, son gigantes!',
                    'imagen_cuadrada' => '/assets/images/comunidad/temuco.jpg' 
                ],
                [
                    'filename' => '¿Reconoces a alguien en estas fotos de Temuco? ¡Etiquétalo!', 
                    'titulo' => '¿Reconoces a alguien en estas fotos de Temuco? ¡Etiquétalo!',
                    'imagen_cuadrada' => '/assets/images/comunidad/reconoce-etiqueta.jpg' 
                ],
                [
                    'filename' => 'Nuestros equipos de Concepción nos enseñaron lo más valioso del fútbol', 
                    'titulo' => 'Nuestros equipos de Concepción nos enseñaron lo más valioso del fútbol',
                    'imagen_cuadrada' => '/assets/images/comunidad/nuestros-equipos.jpg' 
                ],
                [
                    'filename' => 'En Talca, gritamos juntos cada gol', 
                    'titulo' => 'En Talca, gritamos juntos cada gol',
                    'imagen_cuadrada' => '/assets/images/comunidad/talca.jpg' 
                ],
                [
                    'filename' => 'En Antofagasta, no sólo hallamos técnica, sino que valores', 
                    'titulo' => 'En Antofagasta, no sólo hallamos técnica, sino que valores',
                    'imagen_cuadrada' => '/assets/images/comunidad/antofagasta-slide2.jpg' 
                ],
                [
                    'filename' => 'Gracias Iquique por enseñarnos de garra', 
                    'titulo' => 'Gracias Iquique por enseñarnos de garra',
                    'imagen_cuadrada' => '/assets/images/comunidad/iquique.jpg' 
                ],
                [
                    'filename' => 'Revive el momento en que nuestro equipo visitó el Camp Nou y alentó al FC Barcelona ', 
                    'titulo' => 'Revive el momento en que nuestro equipo visitó el Camp Nou y alentó al FC Barcelona ',
                    'imagen_cuadrada' => '/assets/images/comunidad/fc-barcelona.jpg' 
                ],
                [
                    'filename' => 'Revive la duodécima y última fecha de la Copa MILO Chile', 
                    'titulo' => 'Revive la duodécima y última fecha de la Copa MILO Chile',
                    'imagen_cuadrada' => '/assets/images/comunidad/santiago.jpg' 
                ], 
                [
                    'filename' => 'En Osorno no existieron rivales, sólo compañeros', 
                    'titulo' => 'En Osorno no existieron rivales, sólo compañeros',
                    'imagen_cuadrada' => '/assets/images/comunidad/osorno-rivales.jpg' 
                ], 
                [
                    'filename' => 'Rancagua demostró que el apoyo es el verdadero protagonista de la Copa MILO', 
                    'titulo' => 'Rancagua demostró que el apoyo es el verdadero protagonista de la Copa MILO',
                    'imagen_cuadrada' => '/assets/images/comunidad/rancagua-protagonista.jpg' 
                ], 

            ],
        ],
        'slider3' => [
            'extends' => '_layouts.comunidad', 
            'items' => [
                [
                    'url' => 'https://www.facebook.com/117245220589/posts/10156717139715590', 
                    'titulo' => 'Copa MILO®. Campeonato de baby fútbol ¡En muchas ciudades de Chile!',
                    'imagen_cuadrada' => '/assets/images/comunidad/copa-baby-milo.png' 
                ],
                [
                    'url' => 'https://www.facebook.com/melapuedo/posts/10156874262545590', 
                    'titulo' => 'Anaís Fuentes nos enseñó que de la mano de la perseverancia, no hay meta imposible',
                    'imagen_cuadrada' => '/assets/images/comunidad/anahi-fuentes.jpg' 
                ],
                [
                    'url' => 'https://www.facebook.com/melapuedo/posts/10156874262545590', 
                    'titulo' => 'Más de 4.000 personas llegaron a gritar #MELAPUEDO a Temuco',
                    'imagen_cuadrada' => '/assets/images/comunidad/me-lapuedo-temuco.jpg'  
                ],
                [
                    'url' => 'https://www.facebook.com/melapuedo/videos/417172562452338/', 
                    'titulo' => 'Dante Carvajal nos demostró que en la vida, no hay carrera imposible',
                    'imagen_cuadrada' => '/assets/images/comunidad/dante.jpg' 
                ],
                [
                    'url' => 'https://facebook.com/melapuedo/posts/10156938608635590', 
                    'titulo' => 'Nuestros atletas en Concepción, no descansaron hasta llegar a la meta',
                    'imagen_cuadrada' => '/assets/images/comunidad/concepcion-meta.jpg' 
                ],
                [
                    'url' => 'https://www.facebook.com/117245220589/posts/10157177681415590', 
                    'titulo' => 'Antofagasta: ¡Nos vemos el 2020!',
                    'imagen_cuadrada' => '/assets/images/comunidad/antogahasta-milo.cl_.jpg' 
                ],
                [
                    'url' => 'https://www.facebook.com/melapuedo/posts/10156797036300590', 
                    'titulo' => 'Gracias por tanto Osorno! Tour Corridas 2019',
                    'imagen_cuadrada' => '/assets/images/comunidad/osonro.jpg' 
                ],
                [
                    'url' => 'https://www.milo.cl/milocorridas', 
                    'titulo' => 'Tour Corridas MILO® 2019 llegó y para   quedarse, revisa todas las fechas',
                    'imagen_cuadrada' => '/assets/images/comunidad/milo-corridas.png' 
                ],
                [
                    'url' => 'https://facebook.com/melapuedo/posts/10156340883755590', 
                    'titulo' => 'Revisa lo que fueron las Corridas MILO® en el 2018',
                    'imagen_cuadrada' => '/assets/images/comunidad/milo-2018.png' 
                ],
                [
                    'url' => 'https://facebook.com/watch/?v=979277448931565', 
                    'titulo' => 'Ellos hacen posible todo',
                    'imagen_cuadrada' => '/assets/images/comunidad/lo-hacen-posible.png' 
                ],
                [
                    'url' => 'https://facebook.com/watch/?v=2013103728988257', 
                    'titulo' => '¿Quieres una razón para participar? Escucha este mensaje ?',
                    'imagen_cuadrada' => '/assets/images/comunidad/razon-participar.png' 
                ],
                [
                    'url' => 'https://facebook.com/watch/?v=668577776862714', 
                    'titulo' => 'Nuestros competidores sí que saben de perseverancia',
                    'imagen_cuadrada' => '/assets/images/comunidad/nuestros-competidores.png' 
                ] 
            ],
        ],
        'slider4' => [
            'extends' => '_layouts.comunidad', 
            'items' => [
                [
                    'url' => 'https://facebook.com/watch/?v=1717439398366183', 
                    'titulo' => '¿Cómo hubieses reaccionado tú?',
                    'imagen_cuadrada' => '/assets/images/comunidad/reaccionado-tu.png' 
                ],
                [
                    'url' => 'https://facebook.com/watch/?v=1882185951866926', 
                    'titulo' => 'Gracias por demostrarnos que somos un gran equipo',
                    'imagen_cuadrada' => '/assets/images/comunidad/gran-equipo.png' 
                ],
                [
                    'url' => 'https://www.facebook.com/117245220589/posts/10156845378210590', 
                    'titulo' => '¿Cuál vaso crees que se llena primero?',
                    'imagen_cuadrada' => '/assets/images/comunidad/cual-vaso.jpg'  
                ],
                [
                    'url' => 'https://www.facebook.com/117245220589/posts/10156834195465590', 
                    'titulo' => '¿Cómo sería tu apodo de corredor/ra?',
                    'imagen_cuadrada' => '/assets/images/comunidad/apodo.jpg' 
                ],
                [
                    'url' => 'https://www.facebook.com/watch/?v=546091095911427', 
                    'titulo' => '¿Cómo crees que termina el video? Escribe en los comentarios tu suposición',
                    'imagen_cuadrada' => '/assets/images/comunidad/termina-video.png' 
                ],
                [
                    'url' => 'https://www.facebook.com/watch/?v=334496014083801', 
                    'titulo' => '¡Los 5 valores que compartimos con el FC Barcelona!',
                    'imagen_cuadrada' => '/assets/images/comunidad/barcelona.png' 
                ],
                [
                    'url' => 'https://www.facebook.com/watch/?v=244631466426846', 
                    'titulo' => 'Te desafiamos a entrenar tu mente con este puzzle: ¿Te la puedes?',
                    'imagen_cuadrada' => '/assets/images/comunidad/puzzle.png' 
                ],
                [
                    'url' => 'https://facebook.com/watch/?v=382051445913216', 
                    'titulo' => 'Conoce la historia de Cristal Salazar, una verdadera guerrera',
                    'imagen_cuadrada' => '/assets/images/comunidad/cristal_salazar.png' 
                ] 
            ],
        ],
        'slider5' => [
            'extends' => '_layouts.comunidad', 
            'items' => [
                [
                    'url' => 'https://facebook.com/watch/?v=1456793554474973', 
                    'titulo' => 'Así vivió el viaje nuestro equipo ganador del concurso Cajita MILO-FCB',
                    'imagen_cuadrada' => '/assets/images/comunidad/cajita-milo.png' 
                ],
                [
                    'url' => 'https://www.facebook.com/watch/?v=360991978039893', 
                    'titulo' => 'Rocío y Bruno de la Fundación Fútbol Más vivieron la experiencia de sus vidas en la Academia del FCB',
                    'imagen_cuadrada' => '/assets/images/comunidad/rocio-bruno.png' 
                ],
                [
                    'url' => 'https://facebook.com/melapuedo/videos/1142809215868057/', 
                    'titulo' => 'Esta es la verdadera clave del éxito de  nuestros ganadores',
                    'imagen_cuadrada' => '/assets/images/comunidad/exito-ganadores.png'  
                ],
                [
                    'url' => 'https://www.facebook.com/117245220589/posts/10157119361810590', 
                    'titulo' => 'Conoce al equipo que representó a MILO Chile en la MILO Champions Cup',
                    'imagen_cuadrada' => '/assets/images/comunidad/milo-champion.jpg' 
                ],
                [
                    'url' => 'https://www.facebook.com/melapuedo/photos/a.202998755589/10156668872805590', 
                    'titulo' => 'Carmen Gloria Gutiérrez y Guido Delgado ganaron un kit MILO®',
                    'imagen_cuadrada' => '/assets/images/comunidad/carmen-gloria.png' 
                ],
                [
                    'url' => 'https://www.facebook.com/watch/?v=1342199929248996', 
                    'titulo' => 'Juan Manuel y su hijo Martín ¡ganaron una camiseta del FCB firmada por sus jugadores!',
                    'imagen_cuadrada' => '/assets/images/comunidad/juan-camiseta-barcelona.png' 
                ], 
                [
                    'url' => 'https://www.facebook.com/melapuedo/photos/a.202998755589/10156607318185590', 
                    'titulo' => 'María Hernández, Elizabeth Oyarzo y Jimena Jiménez ganaron poleras MILO®',
                    'imagen_cuadrada' => '/assets/images/comunidad/NOTICIAS_foto-C3_MILO-1.png' 
                ] 
            ],
        ]
    ]
];
