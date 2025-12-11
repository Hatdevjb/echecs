<?php
    class Pion extends PieceEchecs {
        // Pas de nouvelles données membres ou propriété
        // Pas besoin de constructeur

        public function peutAllerA(int $posY, int $posX): bool {
            // Test nouvelles positions dans l'échiquier
            if (!$this->estDansLEchiquier($posY,$posX)) return false;

            // Test si changement de colonne
            if ($posX != $this->axeX) return false;

            switch ($this->getCouleur()) {
                case self::NOIRE :
                    $distY = $this->getAxeY() - $posY;
                    if ($distY == 1) return true;
                    if ($this->getAxeY() == 7 && $distY == 2) return true;
                    break;
                case self::BLANCHE :
                    $distY = $posY - $this->getAxeY();
                    if ($distY == 1) return true;
                    if ($this->getAxeY() == 2 && $distY == 2) return true;
                    break;
            }

            return false;
        }
    }
