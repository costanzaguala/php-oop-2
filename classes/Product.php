<?php

class Product {
    
    public $name;
    public $description;
    public $image;
    public $price;
    public $sku;
    public $availability;
    public $category;

    public function __construct(
        $name,
        $description = null,
        $image = null,
        $price = null,
        $sku = null,
        $availability = null,
        $category = null,
    )

    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->sku = $sku;
        $this->availability = $availability;
        $this->category = $category;
    }

} 