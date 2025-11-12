
<?php

use Services\PageServices;

$router->mount('', function() use($router) {
    $router->setNamespace('\Services');
    $router->get('/', 'PageServices@getHome');
});

$router->mount('/login', function() use($router){
    $router->setNamespace('\Services');
    $router->get('/', 'PageServices@getLogin');
    $router->post('/auth', 'PageServices@postAutentication');
});

$router->mount('/about', function() use($router){
    $router->setNamespace('\Services');
    $router->get('/', 'PageServices@getAbout');
});

$router->mount('/produtos', function() use($router){
    $router->setNamespace('\Services');
    $router->get('/','PageServices@getProdutos');
});

// --- NOVO BLOCO DE ROTA PARA DETALHES DO PRODUTO (Corrigido) ---
// Esta rota corresponde ao link do botão "Ver Detalhes": href="/produto/detalhes/ID"
$router->mount('/produto', function() use($router){
    $router->setNamespace('\Services');
    
    // Rota que mostra a página de detalhes de um produto específico
    $router->get('/detalhes/{id}', 'PageServices@getDetalhesProduto');
});

// --- BLOCO DO CARRINHO (Mantido se você precisar do botão "Comprar (Direto)") ---
$router->mount('/carrinho', function() use($router){
    $router->setNamespace('\Services');
    
    // Rota para adicionar um produto direto ao carrinho
    $router->get('/adicionar/{id}', 'PageServices@addProdutoCarrinho');
});