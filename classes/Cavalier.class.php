<?php 

    // classes/PieceEchecs.class.php
    class Cavalier extends PieceEchecs {
        // Constante 
        // Propriétés
        // Constructeur
        
        public function peutAllerA(int $posY, int $posX): bool {
            // Test nouvelles positions dans l'échiquier
            if ($posY < 1 || $posY > 8 || $posX < 1 || $posX > 8) return false;

            $distX = abs($posY - $this->getaxeY());
            $distY = abs($posX - $this->getAxeX());

            // V1 - Somme 3 et dist != 0
            // if (($distX + $distY === 3) && $distX != 0 && $distY != 0) return true;
            // else return false;

            // V2 - Pythagore
            if ($distY*$distY + $distX*$distX === 5) return true;
            else return false;
        }
    }


?>