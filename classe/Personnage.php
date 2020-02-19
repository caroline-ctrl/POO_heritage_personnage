<?php
class Personnage{
    private $nom;
    private $force;
    private $sante;

    /*********GETTER*********/

    /**
     * return $nom
     * type: string
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * return $force
     * type: integer
     */
    public function getForme(){
        return $this->force;
    }

    /**
     * return $sante
     * type: integer
     */
    public function getSante(){
        return $this->sante;
    }



    /*********SETTER**********/

    /**
     * set value
     */

    public function seDeplacer(){}
    public function parler(){}
}