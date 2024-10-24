<?php
class Animales{
    private string $alimentacion;
    private int $patas;

    public function __construct(string $alimentacion, int $patas ){
        $this->alimentacion = $alimentacion;
        $this->patas = $patas;

        
    }

}

?>