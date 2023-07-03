<?php
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayDetails() {
        echo "Name: " . $this->name . ", Price: " . $this->price . ", Description: " . $this->description . "\n";
    }
}
?>