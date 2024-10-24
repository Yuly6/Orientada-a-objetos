
<?php
class TrianguloEquilatero extends Poligono_Abstracta{
    private float $lados;
    private float $altura;

    public function __construct(float $lado, float $altura, string $color = "sin color"){

        parent:: __construct(3, $color);
        $this->lados = $lado;
        $this->altura = $altura;
    }

    public function __toString(): string{
        return parent:: __toString() . "lado: {$this->lados} .  altura: {$this->altura}";
        
    }
    public function calcularArea():float{
        return $this->lados * $this->altura / 2;

    }

    public function calcularPerimetro(): float{
        return $this->lados * 3;
    }
}
?>