#!/usr/bin/php
<?php

class Stock {
    public $products;

    public function __construct() {
        $this->products = [];
    }

    public function loadFromYamlFile($file = "stock.yaml") {
        $yaml = file_get_contents($file);
        $data = yaml_parse($yaml);
        foreach ($data as $product) {
            $ref = $product["ref"];
            $this->products[$ref] = [
                "name"     => $product["name"],
                "brand"    => $product["brand"],
                "price"    => $product["price"],
                "quantity" => $product["quantity"]
            ];
        }
    }
}
?>
