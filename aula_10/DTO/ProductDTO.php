<?php

namespace DTO;

final class ProductDTO
{
    /** @var null|integer $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var float $price */
    private $price;

    public function __construct()
    {
        $this->id = null;
        $this->name = '';
        $this->price = 0.0;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
}
