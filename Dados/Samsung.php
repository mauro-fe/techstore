<?php

$samsungs = [
    // NOTA: Galaxy S25 FE ainda não foi lançado oficialmente
    // Especificações baseadas em vazamentos e rumores
    1 => new Product(
        1,
        'Samsung',
        'S25 FE',
        './assets/img/samsung/s25fe-azul.jpg',
        [
            'tela' => '6.7" Super AMOLED',
            'resolucao' => '2340 x 1080 pixels (FHD+)',
            'camera' => '50 MP + 12 MP + 8 MP',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '4700 mAh',
            'cor' => 'Azul, Verde, Grafite, Violeta',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '190 gramas',
            'processador' => 'Exynos 2400e'
        ],
        'samsung/s25-fe',
        ''
    ),
    2 => new Product(
        2,
        'Samsung',
        'S25',
        './assets/img/samsung/samsung-s25.jpg',
        [
            'tela' => '6.2" Dynamic AMOLED 2X',
            'resolucao' => '2340 x 1080 pixels (FHD+)',
            'camera' => '50 MP + 12 MP + 10 MP',
            'armazenamento' => '128GB, 256GB, 512GB',
            'bateria' => '4000 mAh (25W)',
            'cor' => 'Azul-marinho, Azul-gelo, Prata, Verde, JetBlack',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '162 gramas',
            'processador' => 'Snapdragon 8 Elite for Galaxy'
        ],
        'samsung/s25',
        ''
    ),
    3 => new Product(
        3,
        'Samsung',
        'S25 PLUS',
        './assets/img/samsung/s25-plus-azul-marinho.jpg',
        [
            'tela' => '6.7" Dynamic AMOLED 2X',
            'resolucao' => '3120 x 1440 pixels (QHD+)',
            'camera' => '50 MP + 12 MP + 10 MP',
            'armazenamento' => '256GB, 512GB',
            'bateria' => '4900 mAh (45W)',
            'cor' => 'Azul-marinho, Azul-gelo, Prata, Verde, JetBlack',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '190 gramas',
            'processador' => 'Snapdragon 8 Elite for Galaxy'
        ],
        'samsung/s25-plus',
        ''
    ),
    4 => new Product(
        4,
        'Samsung',
        'S25 ULTRA',
        './assets/img/samsung/samsung-galaxy-s25-ultra-cinza.png',
        [
            'tela' => '6.9" Dynamic AMOLED 2X',
            'resolucao' => '3120 x 1440 pixels (QHD+)',
            'camera' => '200 MP + 50 MP + 10 MP + 50 MP',
            'armazenamento' => '256GB, 512GB, 1TB',
            'bateria' => '5000 mAh (45W)',
            'cor' => 'Titânio Azul, Titânio Preto, Titânio Cinza, Titânio Prata, Titânio JetBlack',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '228 gramas',
            'processador' => 'Snapdragon 8 Elite for Galaxy'
        ],
        'samsung/s25-ultra',
        ''
    ),
    5 => new Product(
        5,
        'Samsung',
        'A06',
        './assets/img/samsung/a06-verde-claro.jpg',
        [
            'tela' => '6.7" PLS LCD',
            'resolucao' => '1600 x 720 pixels (HD+)',
            'camera' => '50 MP + 2 MP',
            'armazenamento' => '128GB',
            'bateria' => '5000 mAh (25W)',
            'cor' => 'Azul Escuro, Branco, Verde Claro',
            'sistema-operacional' => 'Android 14 (One UI 6)',
            'peso' => '189 gramas',
            'processador' => 'MediaTek Helio G85'
        ],
        'samsung/a06',
        ''
    ),
    6 => new Product(
        6,
        'Samsung',
        'A16',
        './assets/img/samsung/a16-branco.jpg',
        [
            'tela' => '6.7" Super AMOLED',
            'resolucao' => '2340 x 1080 pixels (FHD+)',
            'camera' => '50 MP + 5 MP + 2 MP',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '5000 mAh',
            'cor' => 'Azul Escuro, Branco, Verde Claro, Dourado',
            'sistema-operacional' => 'Android 14 (One UI 6)',
            'peso' => '200 gramas',
            'processador' => 'MediaTek Dimensity 6300 (5G) / Helio G85 (4G)'
        ],
        'samsung/a16',
        ''
    ),
    7 => new Product(
        7,
        'Samsung',
        'A26',
        './assets/img/samsung/a26-preto.jpg',
        [
            'tela' => '6.7" Super AMOLED',
            'resolucao' => '2340 x 1080 pixels (FHD+)',
            'camera' => '50 MP + 8 MP + 2 MP',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '5000 mAh (25W)',
            'cor' => 'Preto, Branco, Verde, Rosa Pêssego',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '190 gramas',
            'processador' => 'Exynos 1380 (Global) / Exynos 1280 (Brasil)'
        ],
        'samsung/a26',
        ''
    ),
    8 => new Product(
        8,
        'Samsung',
        'A36',
        './assets/img/samsung/a36-violeta.jpg',
        [
            'tela' => '6.7" Super AMOLED',
            'resolucao' => '2340 x 1080 pixels (FHD+)',
            'camera' => '50 MP + 8 MP + 5 MP',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '5000 mAh (45W)',
            'cor' => 'Violeta, Preto, Branco, Verde Claro',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '162 gramas',
            'processador' => 'Snapdragon 6 Gen 3'
        ],
        'samsung/a36',
        ''
    ),
    9 => new Product(
        9,
        'Samsung',
        'A56',
        './assets/img/samsung/a56-rosa.jpg',
        [
            'tela' => '6.7" Super AMOLED',
            'resolucao' => '2340 x 1080 pixels (FHD+)',
            'camera' => '50 MP + 12 MP + 5 MP',
            'armazenamento' => '128GB, 256GB',
            'bateria' => '5000 mAh (45W)',
            'cor' => 'Rosa, Cinza Claro, Grafite, Verde Oliva',
            'sistema-operacional' => 'Android 15 (One UI 7)',
            'peso' => '180 gramas',
            'processador' => 'Exynos 1580'
        ],
        'samsung/a56',
        ''
    ),
];
