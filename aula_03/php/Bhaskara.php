<?php

class Bhaskara
{
    /** @var float $a */
    private $a;
    /** @var float $b */
    private $b;
    /** @var float $c */
    private $c;
    /** @var float $delta */
    private $delta;

    /**
     * Calcula a fórmula de bhaskara
     *
     * @param float $a
     * @param float $b
     * @param float $c
     *
     * @return array|float[]
     */
    public function calcular(float $a, float $b, float $c): array
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        $this->calcularDelta();
        $this->validarDelta();
        $x1 = $this->calcularX1();
        $x2 = $this->calcularX2();

        if($x1 === $x2)
            return [$x1];
        else
            return [$x1, $x2];
    }

    private function calcularDelta(): void
    {
        $this->delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    private function validarDelta(): void
    {
        if($this->delta < 0) {
            throw new \InvalidArgumentException("ERRO: Valores de A, B e C resultam num Delta negativo.\n");
        }
    }

    private function calcularX1(): float
    {
        return (
            (($this->b * -1) + sqrt($this->delta))
            /
            (2 * $this->a)
        );
    }

    private function calcularX2(): float
    {
        return (
            (($this->b * -1) - sqrt($this->delta))
            /
            (2 * $this->a)
        );
    }
}
