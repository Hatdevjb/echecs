<?php
    //test.e (pour Echeque)
    spl_autoload_register(function($classe){
        include "classes/" . $classe . ".class.php";
    });


    const RC = "<br>\n";

    // -------------------------------TESTE PieceRches------------------------------------
    // plus faisable parsque piece = abstracte
    // try {

    //     echo "Création d'une pieces teste VRAI  : ". RC ;
    //     $pTvrai = new PieceEchecs(1,3,5);
    //     var_dump($pTvrai). RC ;

    // } catch (Exception $e) {   
    //     echo "ERREUR : ". $e->getMessage() . RC ;
    // } catch (Exception $e) {
    //     echo "ERR_GENERALE : ". $e->getMessage() . RC ;
    // }

    

    // try {

    //     echo "Création d'une pieces teste FAUX 01:" . RC ;
    //     $pTfaux = new PieceEchecs(-1, 50, 50);
    //     var_dump($pTfaux) . RC ;

    // } catch (Exception $e) {   
    //     echo "ERREUR : ". $e->getMessage() . RC ;
    // } catch (Exception $e) {
    //     echo "ERR_GENERALE : ". $e->getMessage() . RC ;
    // } 

    // try {

    //     echo "Création d'une pieces teste FAUX 02: " . RC ;
    //     $pTfaux = new PieceEchecs(35, 50, 50);
    //     var_dump($pTfaux) . RC  ;

    // } catch (Exception $e) {   
    //     echo "ERREUR : ". $e->getMessage() . RC ;
    // } catch (Exception $e) {
    //     echo "ERR_GENERALE : ". $e->getMessage() . RC ;
    // }
        
    // -------------------------------------- cavalier --------------------------------

    try {

        $c1 = new Cavalier("5","2",PieceEchecs::BLANCHE) . RC ;

        $c2 = new Cavalier("9","2", PieceEchecs::BLANCHE) . RC ;

        

    } catch (Exception $e) {   
        echo "ERREUR : ". $e->getMessage() . RC ;
    } catch (Exception $e) {
        echo "ERR_GENERALE : ". $e->getMessage() . RC ;
    }