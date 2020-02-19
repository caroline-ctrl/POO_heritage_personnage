<?php

include('Personnage.php');

class Guerrier extends Personnage{
    private $muscle;

    /***********CONSTRUCT*********/
    public function __construct($nom, $force, $sante, $muscle)
    {
        parent::__construct($nom, $force, $sante);

        $this->setMuscle($muscle);
    }


    /**********GETTER***********/

    /**
     * return $muscle
     * type: string
     */
    public function getMuscle(){
        return $this->muscle;
    }


    /************SETTER*********/

    /**
     * set value $muscle
     * type: string
     */
    public function setMuscle(string $muscle){
        $this->muscle = $muscle;
    }



    /**********SPECIFIC METHODS********/
    public function seBattre(Guerrier $guerrier){
        echo 'je suis un ' . $guerrier->getNom() . ' et je sais me battre';
    }
}