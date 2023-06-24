<?php

class Item {
    public $image_path;
    public $title;
    public $price;
    public $amount;
    public $description;

    public function __construct($image_path, $title, $price, $amount, $description) {
        $this->image_path = $image_path;
        $this->title = $title;
        $this->price = $price;
        $this->amount = $amount;
        $this->description = $description;
    }

}