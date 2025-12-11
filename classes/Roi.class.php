<?php
    class Roi extends PieceEchecs {
        
        public function peutAllerA(int $posY, int $posX): bool {
            // Test nouvelles positions dans l'échiquier
            if (!$this->estDansLEchiquier($posY,$posX)) return false;

          
            $distY = abs($posY - $this->getAxeY());
            $distX = abs($posX - $this->axeX);
            
            // Si au moins une des distances est > 1 -> FAUX 
            if ($distY > 1 || $distX > 1) return false;

            // Si la pièce reste sur sa position -> FAUX
            if ($distY == 0 && $distX == 0) return false;

            return true;
        }
    }