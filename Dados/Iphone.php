<?php

$iphones = [
    1 => new Product(
        1,
        'Apple',
        'iPhone 16',
        './assets/img/iphone/iphone/iphone-16-branco.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '1179 x 2556 pixels',
            'camera' => '48 Mp + 12 Mp',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '3561 mAh',
            'cor' => 'Branco, Preto, Rosa, Ultramarine, Verde-acizentado',
            'sistema-operacional' => 'iOS',
            'peso' => '170 gramas',
            'processador' => 'A18'
        ],
        'iphone/16',
        ''
    ),
    2 => new Product(
        2,
        'Apple',
        'iPhone 16 Plus',
        './assets/img/iphone/iphone/iphone-16-plus-roxo.png',
        [
            'tela' => '6.7 Super Retina XDR OLED',
            'resolucao' => '1290 x 2796 pixels',
            'camera' => '48 Mp + 12 Mp',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '4674 mAh',
            'cor' => 'Branco, Preto, Rosa, Ultramarine, Verde-acizentado',
            'sistema-operacional' => 'iOS',
            'peso' => '199 gramas',
            'processador' => 'A18'
        ],
        'iphone/16-plus',
        ''
    ),
    3 => new Product(
        3,
        'Apple',
        'iPhone 16 Pro',
        './assets/img/iphone/iphone/iphone-16-pro-titanio-natural.png',
        [
            'tela' => '6.3 Super Retina XDR OLED',
            'resolucao' => '2622 x 1206 pixels',
            'camera' => '48 Mp + 12 Mp + 48 Mp',
            'armazenamento' => '128GB, 256GB, 512GB, 1TB',
            'bateria' => '3582 mAh',
            'cor' => 'Desert Titanium, Black Titanium, White Titanium, Natural Titanium',
            'sistema-operacional' => 'iOS',
            'peso' => '199 gramas',
            'processador' => 'A18 Pro'
        ],
        'iphone/16-pro',
        ''
    ),
    4 => new Product(
        4,
        'Apple',
        'iPhone 16 Pro Max',
        './assets/img/iphone/iphone/iphone-16-pro-max-titanio-natural.png',
        [
            'tela' => '6.9 Super Retina XDR OLED',
            'resolucao' => '2868 x 1320 pixels',
            'camera' => '48 Mp + 12 Mp + 48 Mp',
            'armazenamento' => '256GB, 512GB, 1TB',
            'bateria' => '4685 mAh',
            'cor' => 'Desert Titanium, Black Titanium, White Titanium, Natural Titanium',
            'sistema-operacional' => 'iOS',
            'peso' => '227 gramas',
            'processador' => 'A18 Pro'
        ],
        'iphone/16-pro-max',
        ''
    ),
    5 => new Product(
        5,
        'Apple',
        'iPhone 15',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2556 x 1179 pixels',
            'camera' => '48 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '3349 mAh',
            'cor' => 'Pink, Azul Ice, Preto, Amarelo, Verde',
            'sistema-operacional' => 'iOS',
            'peso' => '171 gramas',
            'processador' => 'A16 Bionic'
        ],
        'iphone/15',
        ''
    ),
    6 => new Product(
        6,
        'Apple',
        'iPhone 15 Plus',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '6.7 Super Retina XDR OLED',
            'resolucao' => '2796 x 1290 pixels',
            'camera' => '48 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '4383 mAh',
            'cor' => 'Pink, Azul Ice, Preto, Amarelo, Verde',
            'sistema-operacional' => 'iOS',
            'peso' => '201 gramas',
            'processador' => 'A16 Bionic'
        ],
        'iphone/15-plus',
        ''
    ),
    7 => new Product(
        7,
        'Apple',
        'iPhone 15 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2556 x 1179 pixels',
            'camera' => '48 MP + 12 MP + 48 MP',
            'armazenamento' => '128GB, 256GB, 512GB, 1TB',
            'bateria' => '3274 mAh',
            'cor' => 'Natural Titanium, Black Titanium, White Titanium, Blue Titanium',
            'sistema-operacional' => 'iOS',
            'peso' => '187 gramas',
            'processador' => 'A17 Pro'
        ],
        'iphone/15-pro',
        ''
    ),
    8 => new Product(
        8,
        'Apple',
        'iPhone 15 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.7 Super Retina XDR OLED',
            'resolucao' => '2796 x 1290 pixels',
            'camera' => '48 MP + 12 MP + 48 MP',
            'armazenamento' => '256GB, 512GB, 1TB',
            'bateria' => '4441 mAh',
            'cor' => 'Natural Titanium, Black Titanium, White Titanium, Blue Titanium',
            'sistema-operacional' => 'iOS',
            'peso' => '221 gramas',
            'processador' => 'A17 Pro'
        ],
        'iphone/15-pro-max',
        ''
    ),
    9 => new Product(
        9,
        'Apple',
        'iPhone 14',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2532 x 1170 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '3279 mAh',
            'cor' => 'Lilás, Preto, Branco, Vermelho, Amarelo, Azul',
            'sistema-operacional' => 'iOS',
            'peso' => '172 gramas',
            'processador' => 'A15 Bionic'
        ],
        'iphone/14',
        ''
    ),
    10 => new Product(
        10,
        'Apple',
        'iPhone 14 Plus',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '6.7 Super Retina XDR OLED',
            'resolucao' => '2778 x 1284 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '4325 mAh',
            'cor' => 'Lilás, Preto, Branco, Vermelho, Amarelo, Azul',
            'sistema-operacional' => 'iOS',
            'peso' => '203 gramas',
            'processador' => 'A15 Bionic'
        ],
        'iphone/14-plus',
        ''
    ),
    11 => new Product(
        11,
        'Apple',
        'iPhone 14 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2556 x 1179 pixels',
            'camera' => '48 MP + 12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB, 1TB',
            'bateria' => '3200 mAh',
            'cor' => 'Deep Purple, Preto, Branco, Dourado',
            'sistema-operacional' => 'iOS',
            'peso' => '206 gramas',
            'processador' => 'A16 Bionic'
        ],
        'iphone/14-pro',
        ''
    ),
    12 => new Product(
        12,
        'Apple',
        'iPhone 14 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.7 Super Retina XDR OLED',
            'resolucao' => '2796 x 1290 pixels',
            'camera' => '48 MP + 12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB, 1TB',
            'bateria' => '4323 mAh',
            'cor' => 'Deep Purple, Preto, Branco, Dourado',
            'sistema-operacional' => 'iOS',
            'peso' => '240 gramas',
            'processador' => 'A16 Bionic'
        ],
        'iphone/14-pro-max',
        ''
    ),
    15 => new Product(
        15,
        'Apple',
        'iPhone 13',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2532 x 1170 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '3227 mAh',
            'cor' => 'Rosa, Branco, Preto, Azul, Verde',
            'sistema-operacional' => 'iOS',
            'peso' => '174 gramas',
            'processador' => 'A15 Bionic'
        ],
        'iphone/13',
        ''
    ),
    16 => new Product(
        16,
        'Apple',
        'iPhone 13 mini',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '5.4 Super Retina XDR OLED',
            'resolucao' => '2340 x 1080 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '2438 mAh',
            'cor' => 'Rosa, Branco, Preto, Azul, Verde',
            'sistema-operacional' => 'iOS',
            'peso' => '141 gramas',
            'processador' => 'A15 Bionic'
        ],
        'iphone/13-mini',
        ''
    ),
    17 => new Product(
        17,
        'Apple',
        'iPhone 13 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Super Retina XDR OLED ProMotion',
            'resolucao' => '2532 x 1170 pixels',
            'camera' => '12 MP + 12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB, 1TB',
            'bateria' => '3095 mAh',
            'cor' => 'Preto, Branco, Dourado, Verde, Azul Sierra',
            'sistema-operacional' => 'iOS',
            'peso' => '204 gramas',
            'processador' => 'A15 Bionic'
        ],
        'iphone/13-pro',
        ''
    ),
    18 => new Product(
        18,
        'Apple',
        'iPhone 13 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.7 Super Retina XDR OLED ProMotion',
            'resolucao' => '2778 x 1284 pixels',
            'camera' => '12 MP + 12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB, 1TB',
            'bateria' => '4352 mAh',
            'cor' => 'Preto, Branco, Dourado, Verde, Azul Sierra',
            'sistema-operacional' => 'iOS',
            'peso' => '240 gramas',
            'processador' => 'A15 Bionic'
        ],
        'iphone/13-pro-max',
        ''
    ),
    19 => new Product(
        19,
        'Apple',
        'iPhone 12',
        './assets/img/iphone-16-preto2.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2532 x 1170 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '64GB, 128GB, 256GB',
            'bateria' => '2815 mAh',
            'cor' => 'Branco, Preto, Azul, Verde, Roxo, Vermelho',
            'sistema-operacional' => 'iOS',
            'peso' => '164 gramas',
            'processador' => 'A14 Bionic'
        ],
        'iphone/12',
        ''
    ),
    20 => new Product(
        20,
        'Apple',
        'iPhone 12 mini',
        './assets/img/iphone-16-plus-branco.png',
        [
            'tela' => '5.4 Super Retina XDR OLED',
            'resolucao' => '2340 x 1080 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '64GB, 128GB, 256GB',
            'bateria' => '2227 mAh',
            'cor' => 'Branco, Preto, Azul, Verde, Roxo, Vermelho',
            'sistema-operacional' => 'iOS',
            'peso' => '135 gramas',
            'processador' => 'A14 Bionic'
        ],
        'iphone/12-mini',
        ''
    ),
    21 => new Product(
        21,
        'Apple',
        'iPhone 12 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png',
        [
            'tela' => '6.1 Super Retina XDR OLED',
            'resolucao' => '2532 x 1170 pixels',
            'camera' => '12 MP + 12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '2815 mAh',
            'cor' => 'Azul Oceano, Branco, Dourado, Preto',
            'sistema-operacional' => 'iOS',
            'peso' => '189 gramas',
            'processador' => 'A14 Bionic'
        ],
        'iphone/12-pro',
        ''
    ),
    22 => new Product(
        22,
        'Apple',
        'iPhone 12 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.7 Super Retina XDR OLED',
            'resolucao' => '2778 x 1284 pixels',
            'camera' => '12 MP + 12 MP + 12 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '3687 mAh',
            'cor' => 'Azul Oceano, Branco, Dourado, Preto',
            'sistema-operacional' => 'iOS',
            'peso' => '228 gramas',
            'processador' => 'A14 Bionic'
        ],
        'iphone/12-pro-max',
        ''
    ),
    23 => new Product(
        23,
        'Apple',
        'iPhone 11',
        './assets/img/iphone/11/iphone-11-branco.jpg',
        [
            'tela' => '6.1 Liquid Retina LCD',
            'resolucao' => '1792 x 828 pixels',
            'camera' => '12 MP + 12 MP',
            'armazenamento' => '64GB, 128GB, 256GB',
            'bateria' => '3110 mAh',
            'cor' => 'Branco, Verde, Lilás, Preto, Vermelho, Amarelo',
            'sistema-operacional' => 'iOS',
            'peso' => '194 gramas',
            'processador' => 'A13 Bionic'
        ],
        'iphone/11',
        ''
    ),
    24 => new Product(
        24,
        'Apple',
        'iPhone 11 Pro',
        './assets/img/iphone/11/iphone-11-pro-preto.jpg',
        [
            'tela' => '5.8 Super Retina XDR OLED',
            'resolucao' => '2436 x 1125 pixels',
            'camera' => '12 MP + 12 MP + 12 MP',
            'armazenamento' => '64GB, 256GB, 512GB',
            'bateria' => '3046 mAh',
            'cor' => 'Verde, Branco, Preto, Dourado',
            'sistema-operacional' => 'iOS',
            'peso' => '188 gramas',
            'processador' => 'A13 Bionic'
        ],
        'iphone/11-pro',
        ''
    ),
    25 => new Product(
        25,
        'Apple',
        'iPhone 11 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png',
        [
            'tela' => '6.5 Super Retina XDR OLED',
            'resolucao' => '2688 x 1242 pixels',
            'camera' => '12 MP + 12 MP + 12 MP',
            'armazenamento' => '64GB, 256GB, 512GB',
            'bateria' => '3969 mAh',
            'cor' => 'Verde, Branco, Preto, Dourado',
            'sistema-operacional' => 'iOS',
            'peso' => '226 gramas',
            'processador' => 'A13 Bionic'
        ],
        'iphone/11-pro-max',
        ''
    )
];
