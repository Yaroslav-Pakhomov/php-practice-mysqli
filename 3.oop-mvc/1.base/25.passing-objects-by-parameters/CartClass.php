<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

require_once './ProductClass.php';

class CartClass {
    private array $products = []; // продукты

    public function getProducts(): array {
        return $this->products;
    }

    // добавление продуктов
    public function addProduct(ProductClass $product): void {
        $this->products[$product->getName()] = $product;
    }

    // удаление продукта
    public function removeProduct(string $product_name): void {
        unset($this->products[$product_name]);
    }

    // суммарная стоимость продуктов
    public function getTotalCost(): float {
        $total_cost = 0;

        foreach ($this->products as $product) {
            $total_cost += $product->getCost();
        }

        return $total_cost;
    }

    // суммарная количество продуктов
    public function getTotalQuantity(): int {
        $total_quantity = 0;

        foreach ($this->products as $product) {
            $total_quantity += $product->getQuantity();
        }

        return $total_quantity;
    }

    // среднюю стоимость продуктов
    public function getAvgPrice(): float {
        return $this->getTotalCost() / count($this->products);
    }


}
