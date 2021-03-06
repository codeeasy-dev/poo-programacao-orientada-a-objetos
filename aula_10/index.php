<?php

use DTO\ProductDTO;
use DAO\ProductsDAO;

require_once __DIR__ . '/DTO/ProductDTO.php';
require_once __DIR__ . '/DAO/Connection.php';
require_once __DIR__ . '/DAO/ProductsDAO.php';

$productsDAO = new ProductsDAO();

// INSERT
$product = new ProductDTO();
$product->setName('Fone de Ouvido')->setPrice(20);
$productsDAO->addProduct($product);

// SELECT
var_dump($productsDAO->getProducts());
