<?php
namespace Services; 
use Controller\TemplateRender;
class PageServices{
    public function getHome(){
        TemplateRender::run()->renderMake('pages::home', [
           "title" => "Pagina Inicial",
            "nome_usuario" => "Mauro",
            
        ]);
    }
    public function getLogin(){
        TemplateRender::run()->renderMake('pages::login', ['nome_usuario' => "Mauro"]);
    }
    public function getAbout(){
        TemplateRender::run()->renderMake('pages::sobre_nos');
    }
    public function getProdutos(){
        $produtos = [
            [
                "Nome" =>"produto 1",
                "Imagem" =>"img/imagem1.webp",
                "Preco" => 12.99
            ],
            [
                "Nome" =>"produto 2",
                "Imagem" =>"img/2.png",
                "Preco" => 15.98,
            ],
            [
                "Nome" =>"produto 3",
                "Imagem" =>"img/3.webp",
                "Preco" => 12.99
            ],
            [
                "Nome" =>"produto 4",
                "Imagem" =>"img/4.png",
                "Preco" => 15.98,
            ],
            [
                "Nome" =>"produto 5",
                "Imagem" =>"img/5.png",
                "Preco" => 12.99
            ],
            [
                "Nome" =>"produto 6",
                "Imagem" =>"img/6.webp",
                "Preco" => 15.98,
            ],
            [
                "Nome" =>"produto 7",
                "Imagem" =>"img/7.jpg",
                "Preco" => 12.99
            ],
            [
                "Nome" =>"produto 8",
                "Imagem" =>"img/8.jpg",
                "Preco" => 15.98,
            ]
        ];
        TemplateRender::run()->renderMake('pages::produtos', [
            "produto" => $produtos
        ]
        );
            
    }
    public function postAutotentication(){
        echo var_dump(value :$_POST);
        }
}

