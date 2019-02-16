<?php

class Carro
{
    /** @var string $cor */
    public $cor;
    /** @var int $numeroPortas */
    public $numeroPortas;

    /**
     * Faz o carro buzinar
     * 
     * @return void
     */
    public function buzinar(): void
    {
        echo "O carro de cor {$this->cor} com {$this->numeroPortas} portas buzinou.\n";
    }
}
