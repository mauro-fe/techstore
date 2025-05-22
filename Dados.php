<?php

include "Products.php";

$iphone = [
    1 => new Product(
        1,
        'Apple',
        'iPhone 16',
        './assets/img/iphone-16-preto2.png'
    ),

    2 => new Product(
        2,
        'Apple',
        'iPhone 16 Pro',
        './assets/img/iphone-16-pro-titanio-deserto.png'
    ),
    3 => new Product(
        3,
        'Apple',
        'iPhone 16 Pro Max',
        './assets/img/iphone-15-pro-max-dourado.png'
    ),
    4 => new Product(
        4,
        'Apple',
        'iPhone 16 Plus',
        './assets/img/iphone-16-plus-branco.png'
    )
];

$samsung = [
    1 => new Product(
        1,
        'Samsung',
        's24 ultra',
        './assets/img/samsung-galaxy-s25-ultra-cinza.png'
    )
];

$xiaomi = [
    1 => new Product(
        1,
        'Xiaomi',
        '15 Ultra',
        './assets/img/xiaomi-15-ultra-preto.png'
    )
];

$realme = [
    1 => new Product(
        1,
        'Realme',
        'c75',
        './assets/img/realme-c75-dourado-2.png'
    )
];