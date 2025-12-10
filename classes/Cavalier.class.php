<?php 

    // classes/PieceEchecs.class.php
    class Cavalier extends PieceEchecs {
        // Constante 
        // Propriétés
        // Constructeur
        
        public function peutAllerA(int $posX, int $posY): bool {
            // Test nouvelles positions dans l'échiquier
            if ($posX < 1 || $posX > 8 || $posY < 1 || $posY > 8) return false;

            $distX = abs($posX - $this->getaxeX());
            $distY = abs($posY - $this->getAxeY());

            // V1 - Somme 3 et dist != 0
            // if (($distX + $distY === 3) && $distX != 0 && $distY != 0) return true;
            // else return false;

            // V2 - Pythagore
            if ($distX*$distX + $distY*$distY === 5) return true;
            else return false;
        }
    }


?>