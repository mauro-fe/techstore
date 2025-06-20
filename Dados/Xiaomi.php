<?php

$xiaomis = [
    1 => new Product(
        1,
        'Xiaomi',
        'NOTE 14',
        './assets/img/xiaomi/note14-coral-green.jpg',
        [
            'tela' => '6.67" AMOLED (120Hz)',
            'resolucao' => '2400 x 1080 pixels (FHD+)',
            'camera' => '108 MP + 2 MP (4G) / 50 MP Sony LYT-600 + 2 MP (5G)',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '5500 mAh (33W - 4G) / 5110 mAh (45W - 5G)',
            'cor' => 'Verde Coral, Preto, Branco, Roxo',
            'sistema-operacional' => 'Android 14 (HyperOS)',
            'peso' => '190 gramas',
            'processador' => 'Helio G99-Ultra (4G) / Dimensity 7025-Ultra (5G)'
        ],
        'xiaomi/note-14',
        ''
    ),
    2 => new Product(
        2,
        'Xiaomi',
        'NOTE 14 PRO',
        './assets/img/xiaomi/note14-pro-roxo-lavanda.jpg',
        [
            'tela' => '6.67" OLED Curva (120Hz)',
            'resolucao' => '2712 x 1220 pixels (1.5K)',
            'camera' => '200 MP Samsung HP3 + 8 MP + 2 MP',
            'armazenamento' => '256GB, 512GB',
            'bateria' => '5500 mAh (45W)',
            'cor' => 'Roxo Lavanda, Preto, Azul, Verde',
            'sistema-operacional' => 'Android 14 (HyperOS)',
            'peso' => '190 gramas',
            'processador' => 'MediaTek Dimensity 7300-Ultra'
        ],
        'xiaomi/note-14-pro',
        ''
    ),
    3 => new Product(
        3,
        'Xiaomi',
        'NOTE 14 PRO PLUS',
        './assets/img/xiaomi/note14-pro-plus-preto.jpg',
        [
            'tela' => '6.67" OLED Curva (120Hz)',
            'resolucao' => '2712 x 1220 pixels (1.5K)',
            'camera' => '50 MP + 50 MP telefoto + 32 MP ultrawide',
            'armazenamento' => '256GB, 512GB',
            'bateria' => '6200 mAh (90W)',
            'cor' => 'Preto, Azul, Prata, Verde',
            'sistema-operacional' => 'Android 14 (HyperOS)',
            'peso' => '210 gramas',
            'processador' => 'Snapdragon 7s Gen 3'
        ],
        'xiaomi/note-14-pro-plus',
        ''
    ),
    4 => new Product(
        4,
        'Xiaomi',
        '15 Ultra',
        './assets/img/xiaomi/15-ultra-black-silver.jpg',
        [
            'tela' => '6.73" AMOLED (120Hz)',
            'resolucao' => '3200 x 1440 pixels (2K)',
            'camera' => '50 MP + 50 MP + 200 MP periscópio + 50 MP ultrawide (Leica)',
            'armazenamento' => '256GB, 512GB, 1TB',
            'bateria' => '5410 mAh (90W/80W wireless)',
            'cor' => 'Preto, Prata, Azul, Branco',
            'sistema-operacional' => 'Android 15 (HyperOS 2)',
            'peso' => '223 gramas',
            'processador' => 'Snapdragon 8 Elite'
        ],
        'xiaomi/15-ultra',
        ''
    ),
    5 => new Product(
        5,
        'Xiaomi',
        'POCO M7 PRO',
        './assets/img/xiaomi/poco-m7-pro-violeta.jpg',
        [
            'tela' => '6.67" AMOLED (120Hz)',
            'resolucao' => '2400 x 1080 pixels (FHD+)',
            'camera' => '50 MP Sony LYT-600 (OIS) + 2 MP',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '5110 mAh (45W)',
            'cor' => 'Violeta, Preto, Verde, Azul',
            'sistema-operacional' => 'Android 14 (HyperOS)',
            'peso' => '190 gramas',
            'processador' => 'MediaTek Dimensity 7025-Ultra'
        ],
        'xiaomi/poco-m7-pro',
        ''
    ),
    6 => new Product(
        6,
        'Xiaomi',
        'POCO X7',
        './assets/img/xiaomi/poco-x7-cinza.jpg',
        [
            'tela' => '6.67" AMOLED CrystalRes (120Hz)',
            'resolucao' => '2712 x 1220 pixels (1.5K)',
            'camera' => '50 MP Sony IMX882 + 8 MP',
            'armazenamento' => '256GB, 512GB',
            'bateria' => '5110 mAh (45W)',
            'cor' => 'Cinza Prata, Preto com Amarelo, Verde',
            'sistema-operacional' => 'Android 14 (HyperOS)',
            'peso' => '185.5g (plástico) / 190g (PU)',
            'processador' => 'MediaTek Dimensity 7300-Ultra'
        ],
        'xiaomi/poco-x7',
        ''
    ),
    7 => new Product(
        7,
        'Xiaomi',
        'POCO X7 PRO',
        './assets/img/xiaomi/poco-x7-pro-verde.jpg',
        [
            'tela' => '6.67" AMOLED CrystalRes (120Hz)',
            'resolucao' => '2712 x 1220 pixels (1.5K)',
            'camera' => '50 MP (OIS) + 8 MP ultrawide',
            'armazenamento' => '256GB, 512GB',
            'bateria' => '6000 mAh (90W)',
            'cor' => 'Verde, Preto, Amarelo, Homem de Ferro Edition',
            'sistema-operacional' => 'Android 14 (HyperOS)',
            'peso' => '195 gramas',
            'processador' => 'MediaTek Dimensity 8400-Ultra'
        ],
        'xiaomi/poco-x7-pro',
        ''
    ),
    // NOTA: POCO F7 ainda não foi lançado oficialmente (previsão junho 2025)
    // Especificações baseadas em vazamentos e rumores
    // 8 => new Product(
    //     8,
    //     'Xiaomi',
    //     'POCO F7',
    //     './assets/img/xiaomi/poco-f7-preto.jpg',
    //     [
    //         'tela' => '6.67" OLED (120Hz)',
    //         'resolucao' => '2712 x 1220 pixels (1.5K)',
    //         'camera' => '50 MP + 8 MP',
    //         'armazenamento' => '256GB, 512GB',
    //         'bateria' => '6000 mAh (90W)',
    //         'cor' => 'Preto, Azul, Verde',
    //         'sistema-operacional' => 'Android 15 (HyperOS 2)',
    //         'peso' => '200 gramas',
    //         'processador' => 'Snapdragon 8s Elite'
    //     ],
    //     'xiaomi/poco-f7',
    //     ''
    // ),
    9 => new Product(
        9,
        'Xiaomi',
        'POCO F7 PRO',
        './assets/img/xiaomi-f7-pro.png',
        [
            'tela' => '6.67" AMOLED Flow (120Hz)',
            'resolucao' => '3200 x 1440 pixels (2K)',
            'camera' => '50 MP (OIS) + 8 MP ultrawide',
            'armazenamento' => '256GB, 512GB',
            'bateria' => '6000 mAh (90W)',
            'cor' => 'Azul, Preto, Prata',
            'sistema-operacional' => 'Android 15 (HyperOS 2)',
            'peso' => '206 gramas',
            'processador' => 'Snapdragon 8 Gen 3'
        ],
        'xiaomi/poco-f7-pro',
        ''
    ),

    // NOTA: POCO F7 Ultra lançado em março de 2025
    // Adicionado como 10º produto na lista
    // 10 => new Product(
    //     10,
    //     'Xiaomi',
    //     'POCO F7 ULTRA',
    //     './assets/img/xiaomi/poco-f7-ultra-preto.jpg',
    //     [
    //         'tela' => '6.67" Flow AMOLED (120Hz)',
    //         'resolucao' => '3200 x 1440 pixels (2K)',
    //         'camera' => '50 MP (OIS) + 50 MP telefoto + 32 MP ultrawide',
    //         'armazenamento' => '256GB, 512GB',
    //         'bateria' => '5300 mAh (120W/50W wireless)',
    //         'cor' => 'Preto, Amarelo',
    //         'sistema-operacional' => 'Android 15 (HyperOS 2)',
    //         'peso' => '209 gramas',
    //         'processador' => 'Snapdragon 8 Elite'
    //     ],
    //     'xiaomi/poco-f7-ultra',
    //     ''
    // ),
];
