#!/usr/bin/php
<?php

class Stock {
    public $products;

    public function __construct() {
        $this->products = [];
    }

    public function loadFromYamlFile($file = "stock.yaml") {
        $content = file_get_contents($file);
        $pos = 0;
        while (($data = @yaml_parse($content, $pos)) !== false) {
            if (is_array($data) && isset($data["reference"])) {
                $ref = $data["reference"];
                $this->products[$ref] = [
                    "name"             => $data["name"],
                    "shortDescription" => $data["shortDescription"],
                    "brand"            => $data["brand"],
                    "price"            => $data["price"],
                    "quantity"         => $data["quantity"]
                ];
            }
            $pos++;
        }
    }

    public function saveToYamlFile($file = "export.yaml") {
        $yaml = "";

        // Parcourir chaque produit du tableau associatif
        foreach ($this->products as $product) {
            // Convertir le produit en YAML
            $block = yaml_emit($product);

            // yaml_emit() génère "--- \n...\n" on supprime le "..."
            $block = preg_replace('/^\.\.\.\s*$/m', '', $block);

            // Ajouter le bloc au résultat
            $yaml .= $block;
        }

        // Ajouter le "..." final obligatoire en fin de fichier YAML
        $yaml .= "...\n";

        // Écrire dans le fichier
        file_put_contents($file, $yaml, LOCK_EX);
    }
}

// Test
$stock = new Stock();
$stock->loadFromYamlFile("stock.yaml");
$stock->saveToYamlFile("export.yaml");

// Vérifier le résultat
echo file_get_contents("export.yaml");
