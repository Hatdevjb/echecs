<?php
    class Roi extends PieceEchecs {
        
        public function peutAllerA(int $posX, int $posY): bool {
            // Test nouvelles positions dans l'échiquier
            if (!$this->estDansLEchiquier($posX,$posY)) return false;

            $distX = abs($posX - $this->axeX);
            $distY = abs($posY - $this->getAxeY());
            
            // Si au moins une des distances est > 1 -> FAUX 
            if ($distX > 1 || $distY > 1) return false;

            // Si la pièce reste sur sa position -> FAUX
            if ($distX == 0 && $distY == 0) return false;

            return true;
        }
    }