<?php

include "Products.php";

$iphones = [
    1 => new Product(
        1,
        'Apple',
        'iPhone 16',
        './assets/img/iphone/iphone/iphone-16-verde.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',

        ],
        '16'
    ),

    2 => new Product(
        2,
        'Apple',
        'iPhone 16 Pro',
        './assets/img/iphone/iphone/iphone-16-pro.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',
        ],
        '16-pro'
    ),
    3 => new Product(
        3,
        'Apple',
        'iPhone 16 Pro Max',
        './assets/img/iphone/iphone/iphone-16-pro-max-natutaltitanium.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',
        ],
        '16-pro-max'
    ),
    4 => new Product(
        4,
        'Apple',
        'iPhone 16 Plus',
        './assets/img/iphone/iphone/iphone-16-plus-roxo.png',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',
        ],
        '16-plus'
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
        ],
        '15'
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

        ],
        '15-pro'
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
        ],
        '15-pro-max'
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
        ],
        '15-plus'
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
        ],
        '14'
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
        ],
        '14-pro'
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
        ],
        '14-pro-max'
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

        ],
        '14-plus'
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
        ],
        '13'
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

        ],
        '13-pro'

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
        ],
        '13-pro-max'
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
        ],
        '13-mini'
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

        ],
        '12'
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
        ],
        '12-pro'
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

        ],
        '12-pro-max'
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
        ],
        '12-mini'
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
        ],
        '11'
    ),

    24 => new Product(
        10,
        'Apple',
        'iPhone 11 Pro',
        './assets/img/iphone/11/iphone-11-pro-preto.jpg',
        [
            'tela' => '6.1 Liquid Retina LCD',

            'Processador' => 'A13 Bionic',

            'camera' => 'dupla (12MP Wide + Ultra-Wide) Frontal: 12MP',

            'Armazenamento' => '64GB, 128GB, 256GB',

            'Bateria' => 'Até 17h de reprodução de vídeo',
        ],
        '11-pro'
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
        ],
        '11-pro-max'
    ),

];

$samsungs = [
    1 => new Product(
        1,
        'Samsung',
        's24 ultra',
        './assets/img/samsung/samsung-galaxy-s25-ultra-cinza.png',
        [],
        ''
    )
];

$xiaomis = [
    1 => new Product(
        1,
        'Xiaomi',
        '15 Ultra',
        './assets/img/xiaomi-15-ultra-preto.png',
        [],
        ''
    )
];

$realmes = [
    1 => new Product(
        1,
        'Realme',
        'c75',
        './assets/img/realme-c75-dourado-2.png',
        [],
        ''
    )
];