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

        $c1 = new Cavalier(PieceEchecs::NOIRE,5,3);
    

    

        $f1 = new Fou(PieceEchecs::BLANCHE,1,7);
        echo $f1 . RC;
        var_dump($f1->peutAllerA(8,8)) ; echo "(8,8) FALSE" . RC;

        // $tPiecesEchecs = array($c1, $f1);

        // foreach($tPiecesEchecs as $piece) {
        //     echo $piece . RC;
        //     var_dump($piece->peutAllerA(3,4)) ; echo "(3,1) TRUE" . RC;
        // }


    } catch (PieceEchecsException $e) {   
        echo "ERREUR : ". $e->getMessage();
    } catch (Exception $e) {
        echo "ERR_GENERALE : ". $e->getMessage();
    }