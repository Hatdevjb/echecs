<?php 

    require_once("classes/PieceEchecsException.class.php");

// classes/PieceEchecs.class.php
    class PieceEchecs {
        // Constante 
            public const BLANCHE = 1;
            public const NOIRE = 2;

        // Propriétés
        
        private $axeY;
        private $axeX;
        private $couleur;


        // Constructeur
        
        /**
         * Construit l'objet
         *
         * @param string $couleur
         * @param int $axeY
         * @param int $axeX
         */
        public function __construct(int $couleur = 1, int $axeY = 1, int $axeX = 1)
        {

            $this->setCouleur($couleur);
            $this->setAxeY($axeY);
            $this->setAxeX($axeX);
        }
        


        // Accesseurs (getters, setters)

        // SETTER

        /**
         * Modifie la coordonée de l'axe Y borné entre 1X et 8X 
         *
         * @param int $axeY
         * @return void
         */
        public function setAxeY(int $axeY): self
        {
            if ($axeY < 1) $this->axeY = 1;
            elseif ($axeY > 8) $this->axeY = 8;
            else $this->axeY = $axeY;

            return $this;
        }

        /**
         * Modifie la coordonée de l'axe X borné entre 1X et 8X 
         * 
         * @param int $axeX
         * @return void
         */
        public function setAxeX(int $axeX): self
        {
            if ($axeX < 1) $this->axeX = 1;
            elseif ($axeX > 8) $this->axeX = 8;
            else $this->axeX = $axeX;
            
            return $this;
        }

        /**
         * Modifie la coordonée de l'axe X borné entre 1X et 8X 
         * 
         * @param int $couleur
         * @return void
         */
        public function setCouleur(int $couleur): self
        {
            if ($couleur === self::BLANCHE) $this->couleur = self::BLANCHE;
            else if ($couleur === self::NOIRE) $this->couleur = self::NOIRE;
            else throw new PieceEchecsException("PB couleur incorrecte");

            return $this;
        }

        // GETTER

        /**
         * Get the value of Y
         */
        public function getaxeY(): int
        {
            return $this->axeY;
        }
        
        /**
         * Get the value of X
         */
        public function getaxeX(): int
        {
            return $this->axeX;
        }

        /**
         * Get the value of couleur
         */
        public function getCouleur(): int
        {
            return $this->couleur;
        }

            

        // Autres méthodes

        public function __tostring(): string {
            return get_class($this). " ".($this->couleur === self::BLANCHE ?"blanche": "noire")
                ." en($this ->axeX, $this->axeY)";
        }

    }
?>