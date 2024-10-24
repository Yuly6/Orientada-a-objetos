<?php
class Perro extends Animales{
    //No hace falta constructor porque lo coge del padre.

    //toStrig

    public function __toString(): string{
       return "Perro" . parent::__toString();

        }
        
        public function ladrar(){
            return "guau";
        }

    }

    $a1 = new Animales ("hervivoro", 3);
    echo "<p>$a1 <p>";
    $a2 = new Animales("carnivoro", 4);

?>
