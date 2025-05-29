<?php

include "Products.php";

$iphones = [
    1 => new Product(
        1,
        'Apple',
        'iPhone 16',
        './assets/img/iphone/16/iphone-16-preto2.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),

    2 => new Product(
        2,
        'Apple',
        'iPhone 16 Pro',
        './assets/img/iphone/16/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    3 => new Product(
        3,
        'Apple',
        'iPhone 16 Pro Max',
        './assets/img/iphone/16/iphone-16-pro-max-douradof.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    4 => new Product(
        4,
        'Apple',
        'iPhone 16 Plus',
        './assets/img/iphone/16/iphone-16-plus-branco.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    5 => new Product(
        5,
        'Apple',
        'iPhone 15',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),

    6 => new Product(
        6,
        'Apple',
        'iPhone 15 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]

    ),
    7 => new Product(
        7,
        'Apple',
        'iPhone 15 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    8 => new Product(
        8,
        'Apple',
        'iPhone 15 Plus',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    9 => new Product(
        9,
        'Apple',
        'iPhone 14',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),

    10 => new Product(
        10,
        'Apple',
        'iPhone 14 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    11 => new Product(
        11,
        'Apple',
        'iPhone 14 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    12 => new Product(
        12,
        'Apple',
        'iPhone 14 Plus',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    15 => new Product(
        1,
        'Apple',
        'iPhone 13',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),

    16 => new Product(
        2,
        'Apple',
        'iPhone 13 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    17 => new Product(
        3,
        'Apple',
        'iPhone 13 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    18 => new Product(
        4,
        'Apple',
        'iPhone 13 mini',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    19 => new Product(
        5,
        'Apple',
        'iPhone 12',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),

    20 => new Product(
        6,
        'Apple',
        'iPhone 12 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    21 => new Product(
        7,
        'Apple',
        'iPhone 12 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    22 => new Product(
        8,
        'Apple',
        'iPhone 12 mini',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    23 => new Product(
        9,
        'Apple',
        'iPhone 11',
        './assets/img/iphone/11/iphone-11-branco.jpg',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),

    24 => new Product(
        10,
        'Apple',
        'iPhone 11 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ]
    ),
    25 => new Product(
        11,
        'Apple',
        'iPhone 11 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.1 Liquid Retina HD',
            'Processador' => 'A13 Bionic',
            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',
            'Armazenamento' => '64GB, 128GB, 256GB',
            'Bateria' => '5000mAh',
            'camera' => 'Câmera de 12 MP'
        ]
    ),

];

$samsungs = [
    1 => new Product(
        1,
        'Samsung',
        's24 ultra',
        './assets/img/samsung-galaxy-s25-ultra-cinza.png',
        []
    )
];

$xiaomis = [
    1 => new Product(
        1,
        'Xiaomi',
        '15 Ultra',
        './assets/img/xiaomi-15-ultra-preto.png',
        []
    )
];

$realmes = [
    1 => new Product(
        1,
        'Realme',
        'c75',
        './assets/img/realme-c75-dourado-2.png',
        []
    )
];
