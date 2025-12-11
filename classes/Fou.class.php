<?php 

    // classes/PieceEchecs.class.php
    class Fou extends PieceEchecs {
        // Constante 
        // Propriétés
        // Constructeur
        
        public function peutAllerA(int $posY, int $posX): bool {
            // Test nouvelles positions dans l'échiquier
            if (!$this->estDansLEchiquier($posX,$posY)) return false;

            $distX = abs($posY - $this->getaxeY());
            $distY = abs($posX - $this->getAxeX());
            
            // Si distance en X = distance en Y ET que distance en X ou Y non nulle si distance en 
            if (($distY === $distX) && $distX != 0 && $distY != 0) return true;
            else return false;
        }
    }


?>