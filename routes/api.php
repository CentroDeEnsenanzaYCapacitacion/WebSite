<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/friends', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/02/05-pedro-colab-1.jpg",
            "name" => "Pedro Reyes",
            "reviews" => 28,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "2",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/07-mariana-colab-1.jpg",
            "name" => "Mariana Camacho",
            "reviews" => 43,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "3",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-abena-colab-3.jpg",
            "name" => "Abena Anim-Somuah",
            "reviews" => 20,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "4",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/04/02-lilly-colab-1.jpg",
            "name" => "Liliana López",
            "reviews" => 70,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "5",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/04-mary-gaby-colab-2.jpg",
            "name" => "Mary Gaby Hubard",
            "reviews" => 67,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 5
        ],
        [
            "id" => "6",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/066-gus-colab.jpg",
            "name" => "Gustavo Guzmán",
            "reviews" => 34,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "7",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/03-maria-colab-2.jpg",
            "name" => "María Pellicer",
            "reviews" => 53,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "8",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/12-ana-colab.jpg",
            "name" => "Ana Lorenzana",
            "reviews" => 16,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "9",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/11-amigo-colab.jpg",
            "name" => "Anna Condax",
            "reviews" => 27,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "10",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/08-amigo-colab.jpg",
            "name" => "Joséphine Dorr",
            "reviews" => 25,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "11",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/09-nat-colab.jpg",
            "name" => "Nathalie Baaklini",
            "reviews" => 67,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "12",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/10-amigo-colab.jpg",
            "name" => "Toshie Watabe",
            "reviews" => 85,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ],
        [
            "id" => "13",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
            "name" => "Cristina Salmerón",
            "reviews" => 33,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "lists" => 0
        ]
    ]);
});

Route::get('/friends/id', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/02/05-pedro-colab-1.jpg",
            "name" => "Pedro Reyes",
            "reviews" => 28,
            "lists" => 0,
            "description" => "Un experto en tacos (con dos libros publicados sobre este tema) y comida callejera. Pedro es un antojadizo de tiempo completo, director creativo en Paladar, Academy Chair en 50 Best Bars y co-host del programa de Radio Chilango Glotones.",
            "favorites" => [
                [
                    "question" => "El restaurante que más he visitado en mi vida",
                    "answer" => "El Parnita",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/07-el-parnita.jpg"
                ],
                [
                    "question" => "El trago que mejor preparo",
                    "answer" => "Bloody Mary",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/08-Bloody-Mary.jpg"
                ],
                [
                    "question" => "Soy experto cocinando",
                    "answer" => "Carne en su jugo",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/09-Carne-en-su-jugo.jpg"
                ],

            ],
            "reviews" => [
                [
                    "id" => "1",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Al-Andalus-ft.png",
                    "name" => "Al Andalus",
                    "description" => "Comida libanesa tradicional",
                    "address" => "Calle de Mesones 171, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
                    "area" => "Roma",
                    "coords" => "19.428735184680622, -99.12912366932098"
                ],
                [
                    "id" => "2",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Alelifi.png",
                    "name" => "Alelí",
                    "description" => "Cocina de brasa del chef Oswaldo Oliva",
                    "address" => "Sinaloa 141, Roma Nte., Cuauhtémoc, Ciudad de México, México",
                    "area" => "Centro",
                    "coords" => "19.420461627491115, -99.17010367116512"
                ],
                [
                    "id" => "3",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-900x735-alfredo-di-roma.jpg",
                    "name" => "Alfredo di Roma",
                    "description" => "Una de las mejores pastas en la ciudad",
                    "address" => "Campos Elíseos 218, Polanco, Polanco IV Secc, Miguel Hidalgo",
                    "area" => "Condesa",
                    "coords" => "19.42803827286433, -99.19370423067905"
                ],
                [
                    "id" => "4",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-1600x1600-ardente.jpg",
                    "name" => "Ardente",
                    "description" => "Auténtica pizzería napolitana",
                    "address" => "C. Laredo 13, Hipódromo, Cuauhtémoc",
                    "area" => "Polanco",
                    "coords" => "19.41376509474552, -99.17100953067903"
                ],
            ],
            "lists" => [
                [
                  "id" => "1",
                  "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                  "title" => "Para cenar en domingo",
                  "description" => "El domingo puede ser un día complicado para encontrar negocios abiertos en algunas zonas de la ciudad, sobre todo en la noche. Pero eso no significa que tengas que quedarte con hambre.",
                  "is_feature" => true,
                  "title2" => "Para cenar en domingo",
                  "id_friend_creator" => 3,
                  "name_friend_creator" => "Pedro Gonzalez"
                ],
                [
                  "id" => "2",
                  "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-pastas.jpg",
                  "title" => "Buenas pastas",
                  "description" => "Estos restaurantes son para curarse el antojo de pasta. Lugares que han creado recetas apegadas a la tradición italiana o innovadoras por sus ingredientes atípicos que, sin embargo, le van tan bien a un bocado cremoso.",
                  "is_feature" => false,
                  "title2" => "Buenas pastas",
                  "date" => ""
                ],
              ]
        ]
    ]);
});

Route::get('/restaurants/id', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Al-Andalus-ft.png",
            "name" => "Al Andalus",
            "description" => "Comida libanesa tradicional",
            "address" => "Calle de Mesones 171, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
            "area" => "Roma",
            "id_area" => "4",
            "social_link" => "https://instagram.com/@user",
            "google_maps_link" => "https://www.google.com/maps/place/Babero/@19.419748,-99.1683227,15z/data=!4m2!3m1!1s0x0:0x6681679d37ec0a9c?sa=X&ved=1t:2428&ictx=111",
            "site_link" => "https://www.rico.guide/restaurantes/fonda-margarita/",
            "quote_text" => "Ideal para llevar a algún visitante de la ciudad que aterrice en un vuelomuy temprano.",
            "coords" => "19.428735184680622, -99.12912366932098",
            "reviews" => [
                [
                "id" => 19,
                "id_friend" => 43,
                "restaurant_id" => 1,
                "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                "name_colaborador" => "Juan Agusto",
                "review" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                ],
                [
                "id" => 20,
                "id_friend" => 44,
                "restaurant_id" => 1,
                "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                "name_colaborador" => "Jorge Lopez",
                "review" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                ]
            ],
            "lists" => [
                [
                "id" => 22,
                "name" => "Lista de prueba",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Al-Andalus-ft.png",
                "description" => "Esta es una linea de prueba"
                ],
                [
                "id" => 23,
                "name" => "Lista de prueba 2",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Al-Andalus-ft.png",
                "description" => "Esta es una linea de prueba 2"
                ]
            ]
        ]
    ]);
});


Route::get('/list/id', function () {
    return response()->json([
    [
      "id" => "3",
      "image_url" => "https=>//www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-negocios.jpg",
      "title" => "Comida de negocios",
      "description" => "Para una comida de negocios, pensamos en lugares tranquilos, de servicio eficaz y comida decente. Algunos con un poco más de ruido que otros, pero sabemos que hay tratos de negocios donde un par de tragos y el buen ambiente siempre facilitan las cosas.",
      "is_feature" => false,
      "title2" => "Comida de negocios",
      "id_friend_creator" => 3,
      "name_friend_creator" => "Pedro Gonzalez",
      "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
      "date" => "",
      "restautants" => [
        [
          "id" => "4",
          "image_url" => "https=>//www.rico.guide/wp-content/uploads/2024/07/00-principal-1600x1600-ardente.jpg",
          "name" => "Ardente",
          "description" => "Auténtica pizzería napolitana",
          "address" => "C. Laredo 13, Hipódromo, Cuauhtémoc",
          "area" => "Polanco",
          "id_area" => 4,
          "coords" => "19.41376509474552, -99.17100953067903"
        ]  ,
        [
          "id" => "5",
          "image_url" => "https=>//www.rico.guide/wp-content/uploads/2024/05/00-principal-Au-Pied-de-Cochonf1.png",
          "name" => "Au Pied de Cochon",
          "description" => "Comida francesa 24/7",
          "address" => "Campos Elíseos 218, Polanco, Miguel Hidalgo, Ciudad de México",
          "area" => "Roma",
          "id_area" => 8,
          "coords" => "19.42772359009942, -99.19341404233022"
        ],
        [
          "id" => "6",
          "image_url" => "https=>//www.rico.guide/wp-content/uploads/2024/05/00-principal-Azul-Historicofi.png",
          "name" => "Azul Histórico",
          "description" => "Cocina mexicana de Ricardo Muñoz Zurita",
          "address" => "Isabel La Católica 30, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
          "area" => "Condesa",
          "id_area" => 9,
          "coords" => "19.4330817113784, -99.13620741349538"
        ]
      ]
    ]
    ]);
});


Route::get('/areas', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-roma2.jpg",
            "name" => "Roma",
            "restaurants" => 39
        ],
        [
            "id" => "2",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-san-miguel-chapultepec.jpg",
            "name" => "Chapultepec",
            "restaurants" => 3
        ],
        [
            "id" => "3",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-condesa.jpg",
            "name" => "Condesa",
            "restaurants" => 15
        ],
        [
            "id" => "4",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-centro.jpg",
            "name" => "Centro",
            "restaurants" => 10
        ],
        [
            "id" => "5",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-coyoacan.jpg",
            "name" => "Coyoacán",
            "restaurants" => 1
        ],
        [
            "id" => "6",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-Cuauhtemoc.jpg",
            "name" => "Cuauhtémoc",
            "restaurants" => 5
        ],
        [
            "id" => "7",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-napoles.jpg",
            "name" => "Narvarte / Del Valle",
            "restaurants" => 4
        ],
        [
            "id" => "8",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-san-angel.jpg",
            "name" => "San Ángel",
            "restaurants" => 1
        ],
        [
            "id" => "9",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-juarez.jpg",
            "name" => "Juárez",
            "restaurants" => 11
        ],
        [
            "id" => "10",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-polanco.jpg",
            "name" => "Polanco",
            "restaurants" => 10
        ],
        [
            "id" => "11",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-santa-maria.jpg",
            "name" => "Santa María La Ribera",
            "restaurants" => 1
        ],
        [
            "id" => "12",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-pedregal.jpg",
            "name" => "Pedregal",
            "restaurants" => 2
        ],
        [
            "id" => "13",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-doctores.jpg",
            "name" => "Doctores",
            "restaurants" => 1
        ]
    ]);
});

Route::get('/lists', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
            "title" => "Para cenar en domingo",
            "description" => "El domingo puede ser un día complicado para encontrar negocios abiertos en algunas zonas de la ciudad, sobre todo en la noche. Pero eso no significa que tengas que quedarte con hambre.",
            "is_feature" => true,
            "title2" => "Para cenar en domingo",
            "date" => "",
            "id_friend_creator" => 1,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "2",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-pastas.jpg",
            "title" => "Buenas pastas",
            "description" => "Estos restaurantes son para curarse el antojo de pasta. Lugares que han creado recetas apegadas a la tradición italiana o innovadoras por sus ingredientes atípicos que, sin embargo, le van tan bien a un bocado cremoso.",
            "is_feature" => false,
            "title2" => "Buenas pastas",
            "date" => "",
            "id_friend_creator" => 1,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "3",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-negocios.jpg",
            "title" => "Comida de negocios",
            "description" => "Para una comida de negocios, pensamos en lugares tranquilos, de servicio eficaz y comida decente. Algunos con un poco más de ruido que otros, pero sabemos que hay tratos de negocios donde un par de tragos y el buen ambiente siempre facilitan las cosas.",
            "is_feature" => false,
            "title2" => "Comida de negocios",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "4",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-healthy.jpg",
            "title" => "Con opciones saludables",
            "description" => "Encontrar lugares saludables no es fácil. Por suerte, estos restaurantes ofrecen una variedad de platillos elaborados con menos grasa y con opciones para personas vegetarianas y veganas.",
            "is_feature" => true,
            "title2" => "Para mantener la vida healthy",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "5",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-arquitectura-y-diseno.jpg",
            "title" => "Con propuesta de arquitectura y diseño",
            "description" => "Además de su propuesta gastronómica, estos restaurantes son espacios en donde el diseño y la arquitectura son protagonistas.",
            "is_feature" => false,
            "title2" => "Con propuesta de arquitectura y diseño",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "6",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-desayuno-post-run.jpg",
            "title" => "Desayunito post-run",
            "description" => "No existe nada mejor que terminar una buena corrida en un restaurante que tiene buen café, un menú delicioso y el espacio perfecto para echar sobremesa con tu running club.",
            "is_feature" => false,
            "title2" => "Desayunito post-run",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "7",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-en-familia.jpg",
            "title" => "En plan familiar",
            "description" => "Estos restaurantes te harán disfrutar dos placeres de la vida al mismo tiempo: pasar tiempo con tu familia y disfrutar de los mejores platillos en la ciudad.",
            "is_feature" => false,
            "title2" => "Para armar un plan familiar",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "8",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-sobremesa.jpg",
            "title" => "Eterna sobremesa",
            "description" => "A estos restaurantes uno llega sin prisa. A empezar la comida con una cerveza, que se transformará en un vinito, luego en un carajillo y si la plática lo permite… hasta en una cuba. Estos lugares son para hacer lo que más nos gusta a los mexicanos: sobremesa.",
            "is_feature" => false,
            "title2" => "Eterna sobremesa",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "9",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-milanesa.jpg",
            "title" => "Las mejores milanesas",
            "description" => "Desde las clásicas empanizadas acompañadas por papas fritas hasta en taco o torta, no te puedes perder estas milanesas en la ciudad.",
            "is_feature" => false,
            "title2" => "Las mejores milanesas",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "10",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cruda.jpg",
            "title" => "Lugares para curar la cruda",
            "description" => "Para esos días que te estás muriendo y crees que no sobrevivirás… seleccionamos los mejores lugares para revivir, curar la cruda (y chance conectarla) en la ciudad.",
            "is_feature" => false,
            "title2" => "Lugares para curar la cruda",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "11",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-darosafi.png",
            "title" => "Para ir a una date",
            "description" => "Porque son lugares íntimos, con platos para compartir (entre dos o más), con buena música y buen ambiente, seleccionamos estos restaurantes en los que siempre es cómodo ir a una primera cita. ",
            "is_feature" => false,
            "title2" => "Para ir a una date",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "12",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-tavernafi.png",
            "title" => "Para ir con amigos",
            "description" => "Restaurantes donde las mesas grandes no son un problema, el servicio es eficiente y los platillos vastos.",
            "is_feature" => false,
            "title2" => "Para ir con amigos",
            "date" => "24 mayo 2024",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "13",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-pizza.jpg",
            "title" => "Pizza, pizza, pizza",
            "description" => "Una masa de buena calidad, salsa fresca con mucho sabor a tomate… y los toppings que al comensal se le antoje.",
            "is_feature" => false,
            "title2" => "Pizza, pizza, pizza",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "14",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-cantinas.jpg",
            "title" => "Recorrido de cantinas",
            "description" => "Ninguna guía por la CDMX estaría completa sin un lista de sus mejores cantinas. Estos sitios clásicos han forjado la historia cultural y gastronómica de la ciudad y también hay algunas opciones modernas que no tienen desperdicio.",
            "is_feature" => false,
            "title2" => "Recorrido de cantinas",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "15",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-lugares-turisticos.jpg",
            "title" => "Restaurantes cerca delugares turísticos",
            "description" => "Terminar un día de turisteo en estos restaurantes te hará querer recorrer la ciudad todos los fines de semana.",
            "is_feature" => true,
            "title2" => "Restaurantes cerca delugares turísticos",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "16",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-masala-y-maizfi.png",
            "title" => "Restaurantes con buenas cartas de vino",
            "description" => "En la Ciudad de México cada vez nos gusta más tomar vino. Pero más allá de eso, nos gusta que nos sorprendan: con etiquetas poco conocidas, con pequeños productores, con joyas de precio-calidad. Estos restaurantes hacen un esfuerzo genuino por curar una buena selección en cuanto a vinos se refiere, y por eso merecen una mención especial. ",
            "is_feature" => false,
            "title2" => "Restaurantes con buenas cartas de vino",
            "date" => "24 mayo 2024",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "17",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-amigos-foraneos.jpg",
            "title" => "Sugerencias para amigos foráneos",
            "description" => "Cuando los amigos o familiares de fuera vienen de visita a la ciudad, dan ganas de llevarlos a una mezcla de lugares: los nuevos, los clásicos, los divertidos y por no dejar… a un par de restaurantes de comida mexicana.",
            "is_feature" => false,
            "title2" => "Sugerencias para amigos foráneos",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "18",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-post-fiesta2.jpg",
            "title" => "Un antojo después de la fiesta",
            "description" => "Nada como atascarse en el munchies después de la fiesta, aunque luego no es tan fácil dar con algo abierto. Por eso seleccionamos varios restaurantes que están abiertos hasta altas horas de la noche, que ni siquiera cierran o que incluso abren muy temprano.",
            "is_feature" => false,
            "title2" => "Para después de la fiesta",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "19",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-musica.jpg",
            "title" => "Ven por la comida, quédate por la música",
            "description" => "En estos lugares la música impone la atmósfera y es casi tan importante como el menú mismo. Seguramente llegarás a comer, pero terminarás quedándote por su playlist, cuidadosamente curada para que la pases bien en una larga sobremesa.",
            "is_feature" => false,
            "title2" => "Ven por la comida, quédate por la música",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ],
        [
            "id" => "20",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-nigiris.jpg",
            "title" => "Nigiris frescos y bien hechos",
            "description" => "Entre menos ingredientes tiene un platillo… mejor tiene que ser su calidad. Así que para que un nigiri te vuele la cabeza, tiene que tener un extraordinario pescado y un arroz perfectamente bien preparado. En estos restaurantes lo logran.",
            "is_feature" => false,
            "title2" => "Nigiris frescos y bien hechos",
            "date" => "",
            "id_friend_creator" => 3,
            "name_friend_creator" => "Pedro Gonzalez",
            "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
        ]
    ]);
});

Route::get('/restaurants', function () {
    return response()->json([
        [
            "id" => "1",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Al-Andalus-ft.png",
            "name" => "Al Andalus",
            "description" => "Comida libanesa tradicional",
            "address" => "Calle de Mesones 171, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
            "area" => "Roma",
            "coords" => "19.428735184680622, -99.12912366932098"
        ],
        [
            "id" => "2",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Alelifi.png",
            "name" => "Alelí",
            "description" => "Cocina de brasa del chef Oswaldo Oliva",
            "address" => "Sinaloa 141, Roma Nte., Cuauhtémoc, Ciudad de México, México",
            "area" => "Centro",
            "coords" => "19.420461627491115, -99.17010367116512"
        ],
        [
            "id" => "3",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-900x735-alfredo-di-roma.jpg",
            "name" => "Alfredo di Roma",
            "description" => "Una de las mejores pastas en la ciudad",
            "address" => "Campos Elíseos 218, Polanco, Polanco IV Secc, Miguel Hidalgo",
            "area" => "Condesa",
            "coords" => "19.42803827286433, -99.19370423067905"
        ],
        [
            "id" => "4",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-1600x1600-ardente.jpg",
            "name" => "Ardente",
            "description" => "Auténtica pizzería napolitana",
            "address" => "C. Laredo 13, Hipódromo, Cuauhtémoc",
            "area" => "Polanco",
            "coords" => "19.41376509474552, -99.17100953067903"
        ],
        [
            "id" => "5",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Au-Pied-de-Cochonf1.png",
            "name" => "Au Pied de Cochon",
            "description" => "Comida francesa 24/7",
            "address" => "Campos Elíseos 218, Polanco, Miguel Hidalgo, Ciudad de México",
            "area" => "Roma",
            "coords" => "19.42772359009942, -99.19341404233022"
        ],
        [
            "id" => "6",
            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Azul-Historicofi.png",
            "name" => "Azul Histórico",
            "description" => "Cocina mexicana de Ricardo Muñoz Zurita",
            "address" => "Isabel La Católica 30, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
            "area" => "Condesa",
            "coords" => "19.4330817113784, -99.13620741349538"
        ]
    ]);
});

Route::get('/alldata', function () {
    return response()->json([
        "favorites" => [
            [
                "id" => 1,
                "id_friend" => 1,
                "question" => "El restaurante que más he visitado en mi vida",
                "answer" => "El Parnita",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/07-el-parnita.jpg"
            ],
            [
                "id" => 2,
                "id_friend" => 1,
                "question" => "El trago que mejor preparo",
                "answer" => "Bloody Mary",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/08-Bloody-Mary.jpg"
            ],
            [
                "id" => 3,
                "id_friend" => 1,
                "question" => "Soy experto cocinando",
                "answer" => "Carne en su jugo",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/09-Carne-en-su-jugo.jpg"
            ]
        ],
        "friends" => [
            [
                "id" => "1",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/02/05-pedro-colab-1.jpg",
                "name" => "Pedro Reyes",
                "reviews" => 28,
                "lists" => 0
            ],
            [
                "id" => "2",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/07-mariana-colab-1.jpg",
                "name" => "Mariana Camacho",
                "reviews" => 43,
                "lists" => 0
            ],
            [
                "id" => "3",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-abena-colab-3.jpg",
                "name" => "Abena Anim-Somuah",
                "reviews" => 20,
                "lists" => 0
            ],
            [
                "id" => "4",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/04/02-lilly-colab-1.jpg",
                "name" => "Liliana López",
                "reviews" => 70,
                "lists" => 0
            ],
            [
                "id" => "5",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/04-mary-gaby-colab-2.jpg",
                "name" => "Mary Gaby Hubard",
                "reviews" => 67,
                "lists" => 5
            ],
            [
                "id" => "6",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/066-gus-colab.jpg",
                "name" => "Gustavo Guzmán",
                "reviews" => 34,
                "lists" => 0
            ],
            [
                "id" => "7",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/03-maria-colab-2.jpg",
                "name" => "María Pellicer",
                "reviews" => 53,
                "lists" => 0
            ],
            [
                "id" => "8",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/12-ana-colab.jpg",
                "name" => "Ana Lorenzana",
                "reviews" => 16,
                "lists" => 0
            ],
            [
                "id" => "9",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/11-amigo-colab.jpg",
                "name" => "Anna Condax",
                "reviews" => 27,
                "lists" => 0
            ],
            [
                "id" => "10",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/08-amigo-colab.jpg",
                "name" => "Joséphine Dorr",
                "reviews" => 25,
                "lists" => 0
            ],
            [
                "id" => "11",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/09-nat-colab.jpg",
                "name" => "Nathalie Baaklini",
                "reviews" => 67,
                "lists" => 0
            ],
            [
                "id" => "12",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/10-amigo-colab.jpg",
                "name" => "Toshie Watabe",
                "reviews" => 85,
                "lists" => 0
            ],
            [
                "id" => "13",
                "image_url" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                "name" => "Cristina Salmerón",
                "reviews" => 33,
                "lists" => 0
            ]
            ],
            "areas" => [
                [
                    "id" => "1",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-roma2.jpg",
                    "name" => "Roma",
                    "restaurants" => 39
                ],
                [
                    "id" => "2",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-san-miguel-chapultepec.jpg",
                    "name" => "Chapultepec",
                    "restaurants" => 3
                ],
                [
                    "id" => "3",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-condesa.jpg",
                    "name" => "Condesa",
                    "restaurants" => 15
                ],
                [
                    "id" => "4",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-centro.jpg",
                    "name" => "Centro",
                    "restaurants" => 10
                ],
                [
                    "id" => "5",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-coyoacan.jpg",
                    "name" => "Coyoacán",
                    "restaurants" => 1
                ],
                [
                    "id" => "6",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-Cuauhtemoc.jpg",
                    "name" => "Cuauhtémoc",
                    "restaurants" => 5
                ],
                [
                    "id" => "7",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-napoles.jpg",
                    "name" => "Narvarte / Del Valle",
                    "restaurants" => 4
                ],
                [
                    "id" => "8",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zona-san-angel.jpg",
                    "name" => "San Ángel",
                    "restaurants" => 1
                ],
                [
                    "id" => "9",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-juarez.jpg",
                    "name" => "Juárez",
                    "restaurants" => 11
                ],
                [
                    "id" => "10",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-polanco.jpg",
                    "name" => "Polanco",
                    "restaurants" => 10
                ],
                [
                    "id" => "11",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-santa-maria.jpg",
                    "name" => "Santa María La Ribera",
                    "restaurants" => 1
                ],
                [
                    "id" => "12",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-pedregal.jpg",
                    "name" => "Pedregal",
                    "restaurants" => 2
                ],
                [
                    "id" => "13",
                    "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/01-zonas-doctores.jpg",
                    "name" => "Doctores",
                    "restaurants" => 1
                ]

                ],
                "lists" => [
                    [
                        "id" => "1",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                        "title" => "Para cenar en domingo",
                        "description" => "El domingo puede ser un día complicado para encontrar negocios abiertos en algunas zonas de la ciudad, sobre todo en la noche. Pero eso no significa que tengas que quedarte con hambre.",
                        "is_feature" => true,
                        "title2" => "Para cenar en domingo",
                        "date" => "",
                        "id_friend_creator" => 1,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "2",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-pastas.jpg",
                        "title" => "Buenas pastas",
                        "description" => "Estos restaurantes son para curarse el antojo de pasta. Lugares que han creado recetas apegadas a la tradición italiana o innovadoras por sus ingredientes atípicos que, sin embargo, le van tan bien a un bocado cremoso.",
                        "is_feature" => false,
                        "title2" => "Buenas pastas",
                        "date" => "",
                        "id_friend_creator" => 1,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "3",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-negocios.jpg",
                        "title" => "Comida de negocios",
                        "description" => "Para una comida de negocios, pensamos en lugares tranquilos, de servicio eficaz y comida decente. Algunos con un poco más de ruido que otros, pero sabemos que hay tratos de negocios donde un par de tragos y el buen ambiente siempre facilitan las cosas.",
                        "is_feature" => false,
                        "title2" => "Comida de negocios",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "4",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-healthy.jpg",
                        "title" => "Con opciones saludables",
                        "description" => "Encontrar lugares saludables no es fácil. Por suerte, estos restaurantes ofrecen una variedad de platillos elaborados con menos grasa y con opciones para personas vegetarianas y veganas.",
                        "is_feature" => true,
                        "title2" => "Para mantener la vida healthy",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "5",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-arquitectura-y-diseno.jpg",
                        "title" => "Con propuesta de arquitectura y diseño",
                        "description" => "Además de su propuesta gastronómica, estos restaurantes son espacios en donde el diseño y la arquitectura son protagonistas.",
                        "is_feature" => false,
                        "title2" => "Con propuesta de arquitectura y diseño",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "6",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-desayuno-post-run.jpg",
                        "title" => "Desayunito post-run",
                        "description" => "No existe nada mejor que terminar una buena corrida en un restaurante que tiene buen café, un menú delicioso y el espacio perfecto para echar sobremesa con tu running club.",
                        "is_feature" => false,
                        "title2" => "Desayunito post-run",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "7",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-en-familia.jpg",
                        "title" => "En plan familiar",
                        "description" => "Estos restaurantes te harán disfrutar dos placeres de la vida al mismo tiempo: pasar tiempo con tu familia y disfrutar de los mejores platillos en la ciudad.",
                        "is_feature" => false,
                        "title2" => "Para armar un plan familiar",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "8",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-sobremesa.jpg",
                        "title" => "Eterna sobremesa",
                        "description" => "A estos restaurantes uno llega sin prisa. A empezar la comida con una cerveza, que se transformará en un vinito, luego en un carajillo y si la plática lo permite… hasta en una cuba. Estos lugares son para hacer lo que más nos gusta a los mexicanos: sobremesa.",
                        "is_feature" => false,
                        "title2" => "Eterna sobremesa",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "9",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-milanesa.jpg",
                        "title" => "Las mejores milanesas",
                        "description" => "Desde las clásicas empanizadas acompañadas por papas fritas hasta en taco o torta, no te puedes perder estas milanesas en la ciudad.",
                        "is_feature" => false,
                        "title2" => "Las mejores milanesas",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "10",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cruda.jpg",
                        "title" => "Lugares para curar la cruda",
                        "description" => "Para esos días que te estás muriendo y crees que no sobrevivirás… seleccionamos los mejores lugares para revivir, curar la cruda (y chance conectarla) en la ciudad.",
                        "is_feature" => false,
                        "title2" => "Lugares para curar la cruda",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "11",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-darosafi.png",
                        "title" => "Para ir a una date",
                        "description" => "Porque son lugares íntimos, con platos para compartir (entre dos o más), con buena música y buen ambiente, seleccionamos estos restaurantes en los que siempre es cómodo ir a una primera cita. ",
                        "is_feature" => false,
                        "title2" => "Para ir a una date",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "12",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-tavernafi.png",
                        "title" => "Para ir con amigos",
                        "description" => "Restaurantes donde las mesas grandes no son un problema, el servicio es eficiente y los platillos vastos.",
                        "is_feature" => false,
                        "title2" => "Para ir con amigos",
                        "date" => "24 mayo 2024",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "13",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-pizza.jpg",
                        "title" => "Pizza, pizza, pizza",
                        "description" => "Una masa de buena calidad, salsa fresca con mucho sabor a tomate… y los toppings que al comensal se le antoje.",
                        "is_feature" => false,
                        "title2" => "Pizza, pizza, pizza",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "14",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-cantinas.jpg",
                        "title" => "Recorrido de cantinas",
                        "description" => "Ninguna guía por la CDMX estaría completa sin un lista de sus mejores cantinas. Estos sitios clásicos han forjado la historia cultural y gastronómica de la ciudad y también hay algunas opciones modernas que no tienen desperdicio.",
                        "is_feature" => false,
                        "title2" => "Recorrido de cantinas",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "15",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-lugares-turisticos.jpg",
                        "title" => "Restaurantes cerca delugares turísticos",
                        "description" => "Terminar un día de turisteo en estos restaurantes te hará querer recorrer la ciudad todos los fines de semana.",
                        "is_feature" => true,
                        "title2" => "Restaurantes cerca delugares turísticos",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "16",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-masala-y-maizfi.png",
                        "title" => "Restaurantes con buenas cartas de vino",
                        "description" => "En la Ciudad de México cada vez nos gusta más tomar vino. Pero más allá de eso, nos gusta que nos sorprendan: con etiquetas poco conocidas, con pequeños productores, con joyas de precio-calidad. Estos restaurantes hacen un esfuerzo genuino por curar una buena selección en cuanto a vinos se refiere, y por eso merecen una mención especial. ",
                        "is_feature" => false,
                        "title2" => "Restaurantes con buenas cartas de vino",
                        "date" => "24 mayo 2024",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "17",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-amigos-foraneos.jpg",
                        "title" => "Sugerencias para amigos foráneos",
                        "description" => "Cuando los amigos o familiares de fuera vienen de visita a la ciudad, dan ganas de llevarlos a una mezcla de lugares: los nuevos, los clásicos, los divertidos y por no dejar… a un par de restaurantes de comida mexicana.",
                        "is_feature" => false,
                        "title2" => "Sugerencias para amigos foráneos",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "18",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-post-fiesta2.jpg",
                        "title" => "Un antojo después de la fiesta",
                        "description" => "Nada como atascarse en el munchies después de la fiesta, aunque luego no es tan fácil dar con algo abierto. Por eso seleccionamos varios restaurantes que están abiertos hasta altas horas de la noche, que ni siquiera cierran o que incluso abren muy temprano.",
                        "is_feature" => false,
                        "title2" => "Para después de la fiesta",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "19",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-musica.jpg",
                        "title" => "Ven por la comida, quédate por la música",
                        "description" => "En estos lugares la música impone la atmósfera y es casi tan importante como el menú mismo. Seguramente llegarás a comer, pero terminarás quedándote por su playlist, cuidadosamente curada para que la pases bien en una larga sobremesa.",
                        "is_feature" => false,
                        "title2" => "Ven por la comida, quédate por la música",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ],
                    [
                        "id" => "20",
                        "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-nigiris.jpg",
                        "title" => "Nigiris frescos y bien hechos",
                        "description" => "Entre menos ingredientes tiene un platillo… mejor tiene que ser su calidad. Así que para que un nigiri te vuele la cabeza, tiene que tener un extraordinario pescado y un arroz perfectamente bien preparado. En estos restaurantes lo logran.",
                        "is_feature" => false,
                        "title2" => "Nigiris frescos y bien hechos",
                        "date" => "",
                        "id_friend_creator" => 3,
                        "name_friend_creator" => "Pedro Gonzalez",
                        "friend_image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-guia-cenar-en-domingo.jpg",
                    ]
                    ],
                    "restaurants" => [
                        [
                            "id" => "1",
                            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Al-Andalus-ft.png",
                            "name" => "Al Andalus",
                            "description" => "Comida libanesa tradicional",
                            "address" => "Calle de Mesones 171, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
                            "area" => "Roma",
                            "coords" => "19.428735184680622, -99.12912366932098"
                        ],
                        [
                            "id" => "2",
                            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Alelifi.png",
                            "name" => "Alelí",
                            "description" => "Cocina de brasa del chef Oswaldo Oliva",
                            "address" => "Sinaloa 141, Roma Nte., Cuauhtémoc, Ciudad de México, México",
                            "area" => "Centro",
                            "coords" => "19.420461627491115, -99.17010367116512"
                        ],
                        [
                            "id" => "3",
                            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-900x735-alfredo-di-roma.jpg",
                            "name" => "Alfredo di Roma",
                            "description" => "Una de las mejores pastas en la ciudad",
                            "address" => "Campos Elíseos 218, Polanco, Polanco IV Secc, Miguel Hidalgo",
                            "area" => "Condesa",
                            "coords" => "19.42803827286433, -99.19370423067905"
                        ],
                        [
                            "id" => "4",
                            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/07/00-principal-1600x1600-ardente.jpg",
                            "name" => "Ardente",
                            "description" => "Auténtica pizzería napolitana",
                            "address" => "C. Laredo 13, Hipódromo, Cuauhtémoc",
                            "area" => "Polanco",
                            "coords" => "19.41376509474552, -99.17100953067903"
                        ],
                        [
                            "id" => "5",
                            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Au-Pied-de-Cochonf1.png",
                            "name" => "Au Pied de Cochon",
                            "description" => "Comida francesa 24/7",
                            "address" => "Campos Elíseos 218, Polanco, Miguel Hidalgo, Ciudad de México",
                            "area" => "Roma",
                            "coords" => "19.42772359009942, -99.19341404233022"
                        ],
                        [
                            "id" => "6",
                            "image_url" => "https://www.rico.guide/wp-content/uploads/2024/05/00-principal-Azul-Historicofi.png",
                            "name" => "Azul Histórico",
                            "description" => "Cocina mexicana de Ricardo Muñoz Zurita",
                            "address" => "Isabel La Católica 30, Centro Histórico de la Cdad. de México, Centro, Cuauhtémoc, Ciudad de México",
                            "area" => "Condesa",
                            "coords" => "19.4330817113784, -99.13620741349538"
                        ]
                        ],
                        "reviews" => [
                            [
                                "id" => 19,
                                "id_friend" => 1,
                                "restaurant_id" => 1,
                                "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                                "name_friend" => "Juan Agusto",
                                "review_text" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                                ],
                                [
                                "id" => 20,
                                "id_friend" => 2,
                                "restaurant_id" => 1,
                                "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                                "name_friend" => "Jorge Lopez",
                                "review_text" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                                ],
                                [
                                    "id" => 21,
                                    "id_friend" => 1,
                                    "restaurant_id" => 1,
                                    "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                                    "name_friend" => "Juan Agusto",
                                    "review_text" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                                    ],
                                    [
                                    "id" => 22,
                                    "id_friend" => 3,
                                    "restaurant_id" => 1,
                                    "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                                    "name_friend" => "Jorge Lopez",
                                    "review_text" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                                    ],
                                    [
                                        "id" => 23,
                                        "id_friend" => 4,
                                        "restaurant_id" => 1,
                                        "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                                        "name_friend" => "Juan Agusto",
                                        "review_text" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                                        ],
                                        [
                                        "id" => 24,
                                        "id_friend" => 5,
                                        "restaurant_id" => 1,
                                        "url_friend_image" => "https://www.rico.guide/wp-content/uploads/2024/08/13-cristina-colab.jpg",
                                        "name_friend" => "Jorge Lopez",
                                        "review_text" => "Platos oaxaqueños elaborados con mucha dedicación. Es ya un clásico de Coyoacán y se presta para ir a echar unos mezcales. Los festivales de bichos que suelen hacer son una buena oportunidad para explorar platos novedosos.",
                                        ]
                        ]
    ]);
});
