<?php

require_once __DIR__.'/Product.php';


class Food extends Product {

    public $composition;
    public $size;
     
    public function __construct(
        $name,
        $composition,
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

        $this->composition = $composition;
        $this->size = $size;
    }
} 