<?php

class produtos
{
    private $Name;
    private $Price;
    private $Descript;
    private $Quantity;
    private $Category;
    private $Image;

    // Model Nome
    public function getName(){
        return $this->Name;
    }
    public function setName($Name){
        $this->Name = $Name;
        return $this;
    }

    // Model Preço
    public function getPrice(){
        return $this->Price;
    }
    public function setPrice($Price){
        $this->Price = $Price;
        return $this;
    }

    // Model Descrição
    public function getDescript(){
        return $this->Descript;
    }
    public function setDescript($Descript){
        $this->Descript = $Descript;
        return $this;
    }

    // Model Quantidade
    public function getQuantity(){
        return $this->Quantity;
    }
    public function setQuantity($Quantity){
        $this->Quantity = $Quantity;
        return $this;
    }

    // Model Categoria
    public function getCategory(){
        return $this->Category;
    }
    public function setCategory($Category){
        $this->Category = $Category;
        return $this;
    }

    // Model Imagem
    public function getImage(){
        return $this->Image;
    }
    public function setImage($Image){
        $this->Image = $Image;
        return $this;
    }
}
