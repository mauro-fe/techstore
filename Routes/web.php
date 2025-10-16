<?php

use App\Core\Router;


// Login público (sem slug e sem /admin)
Router::add('GET',  '/login',  'Admin\AuthController@loginForm');
Router::add('POST', '/login',  'Admin\AuthController@login');
Router::add('GET',  '/logout', 'Admin\AuthController@logout');

// Painel (segue protegido com requireAuth)
Router::add('GET',  '/admin',                    'Admin\DashboardController@index');
Router::add('GET',  '/admin/produtos',           'Admin\ProdutoController@index');
Router::add('POST', '/admin/produtos',           'Admin\ProdutoController@store');
Router::add('POST', '/admin/produtos/{id}/edit', 'Admin\ProdutoController@update');
Router::add('POST', '/admin/produtos/{id}/del',  'Admin\ProdutoController@destroy');
Router::add('GET', '/admin/dashboard', 'Admin\DashboardController@index');


Router::add('GET',  '/admin/pedidos',            'Admin\PedidoController@index');
Router::add('GET',  '/admin/pedidos/{id}',       'Admin\PedidoController@show');
Router::add('POST', '/admin/pedidos/{id}/confirm', 'Admin\PedidoController@confirm');
Router::add('POST', '/admin/pedidos/{id}/paid',  'Admin\PedidoController@markPaid');
Router::add('POST', '/admin/pedidos/{id}/cancel', 'Admin\PedidoController@cancel');

// Site público (se quiser sem slug também)
Router::add('GET', '/',                'Site\HomeController@index');
Router::add('GET', '/produto/{slug}',  'Site\ProductController@show');
Router::add('POST', '/pedido/retirar',  'Site\OrderController@createPickup');

// Lista de categorias
Router::add('GET', '/categoria/{slug}', 'Site\ProductController@index');

// Página de produto
Router::add('GET', '/produto/{slug}', 'Site\ProductController@show');
