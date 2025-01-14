<?php
require_once("produtos-model.php");
class produtos_dao
{
    public static function retorna_produto(){
        $product = new produtos();
        $product->setName("Nome");
        $product->setPrice("Preco");
        $product->setDescript("Descricao");
        $product->setQuantity("Quantidade");
        $product->setCategory("Categoria");
        $product->setImage("Imagem");
    }
}