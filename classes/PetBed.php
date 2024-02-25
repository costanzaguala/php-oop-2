<?php

require_once __DIR__.'/Product.php';


class PetBed extends Product {

    public $material;
    public $size;

    public function __construct(
        $name,
        $material,
        $size = null,
        $description = null,
        $image = null,
        $price = null,
        $sku = null,
        $availability = null,
        $category = null,
    )    
    {
        parent::__construct(
            $name, 
            $description, 
            $image, 
            $price, 
            $sku, 
            $availability, 
            $category
        );

        $this->material = $material;
        $this->size = $size;
    }     
} 

