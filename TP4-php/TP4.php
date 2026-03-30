<?php

class Stock {

    public $products;

    // Constructeur
    public function __construct() {
        $this->products = [];
    }

    // Charger depuis YAML
    public function loadFromYamlFile($file = "stock.yaml") {

        $yaml = file_get_contents($file);
        $data = yaml_parse($yaml);

        foreach ($data as $product) {

            $ref = $product["ref"];

            $this->products[$ref] = [
                "name" => $product["name"],
                "brand" => $product["brand"],
                "price" => $product["price"],
                "quantity" => $product["quantity"]
            ];
        }
    }

    // Affichage
    public function __toString() {

        $output = "=== STOCK ===\n";

        foreach ($this->products as $ref => $p) {
            $output .= $p["name"] . " (" . $p["brand"] . ")\n";
            $output .= "Ref: $ref | Prix: " . $p["price"] . "€ | Qté: " . $p["quantity"] . "\n\n";
        }

        return $output;
    }

    // Ajouter produit
    public function addProductToStock($ref, $name, $brand, $price, $quantity = 1) {

        $this->products[$ref] = [
            "name" => $name,
            "brand" => $brand,
            "price" => $price,
            "quantity" => $quantity
        ];
    }

    // Supprimer produit
    public function removeProductFromStock($ref) {

        if (isset($this->products[$ref])) {
            unset($this->products[$ref]);
        }
    }

    // Ajouter quantité
    public function addQuantityToProduct($ref, $q = 1) {

        if (isset($this->products[$ref])) {
            $this->products[$ref]["quantity"] += $q;
        }
    }

    // Retirer quantité
    public function removeQuantityFromProduct($ref, $q = 1) {

        if (!isset($this->products[$ref])) return false;

        if ($this->products[$ref]["quantity"] >= $q) {

            $this->products[$ref]["quantity"] -= $q;
            return true;

        } else {
            return false;
        }
    }
}