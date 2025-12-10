<?php
    //test.e (pour Echeque)
    spl_autoload_register(function($classe){
        include "classes/" . $classe . ".class.php";
    });


    const RC = "<br>\n";


    try {

        echo "Création d'une pieces teste FAUX 01:" . RC ;
        $pTfaux = new PieceEchecs(-1, 50, 50);
        var_dump($pTfaux) . RC ;
        
        
        // echo "Création d'une pieces mais laisse moi  teste FAUX 02:\n";
        // $pTfaux = new PieceEchecs(35, 50, 50);
        // var_dump($pTfaux) . RC  ;
        

        echo "Création d'une pieces teste VRAI  : ". RC ;
        $pTvrai = new PieceEchecs(1,3,5);
        var_dump($pTvrai). RC ;

    } catch (Exception $e) {   
        echo "ERREUR : ". $e->getMessage() ;
    } catch (Exception $e) {
        echo "ERR_GENERALE : ". $e->getMessage() ;
    }