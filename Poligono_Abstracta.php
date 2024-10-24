<?php
 abstract class Poligono_Abstracta{

    private float $nrolados;
    private float $color;

    public function __construct (int $nroLados, string $color = "sin color"){
        $this->nrolados = $nroLados;
        $this->color= $color;

    }

    function __toString(): string{
    return $this->nrolados . "de color" . $this->color;
    
    }

   public abstract function calcularArea() : float;
   public abstract function calcularPerimetro(): float;
}

?>