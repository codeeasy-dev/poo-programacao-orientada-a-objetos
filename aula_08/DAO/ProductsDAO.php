<?php

namespace DAO;

use DTO\ProductDTO;

final class ProductsDAO extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts(): array
    {
        $products = $this->pdo
            ->query('SELECT * FROM `products`;')
            ->fetchAll(\PDO::FETCH_ASSOC);
        return $products;
    }

    public function addProduct(ProductDTO $product): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO `products` (`name`, `price`) VALUES (:name, :price)');

        $statement->bindValue(':name', $product->getName());
        $statement->bindValue(':price', $product->getPrice());
        $statement->execute();
    }
}
