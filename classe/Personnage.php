<?php
class Personnage{
    private $nom;
    private $force;
    private $sante;

    /**********CONSTRUCT******/

    public function __construct(array $arr)
    {
        $this->hydratation($arr);
    }

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
     * set value $nom
     * type: string
     */
    public function setNom( string $nom){
        $this->nom = $nom;
    }

    /**
     * set value $force
     * type: integer
     */
    public function setForce(int $force){
        $this->force = $force;
    }

    /**
     * set value $sante
     * type: integer
     */
    public function setSante(int $sante){
        $this->sante = $sante;
    }


/**********SPECIFIC METHODS*********/

    public function seDeplacer(Personnage $personnage){// on a besoin de l'objet Personnage pour utiliser la methode seDeplacer. Equivalent de $personnage = new Personnage. $personnage correspond a $test qui initialise l'objet
        echo '<br/>je suis ' . $personnage->getNom() . ' et je me deplace<br/>';
    }

    public function parler(Personnage $personnage){
        echo '</br>Je suis ' . $personnage->getNom() . ' et je sais parler<br/>';
    }



    /***********HYDRATATION*********/
    public function hydratation(array $attributes){
        foreach($attributes as $key => $value){
            $method = "set".ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
}

$test = new Personnage(["nom" => "michel", "force" => 2, "sante" => 100]);
echo ($test->getNom());
echo ($test->getForme());
echo ($test->getSante());
$test->seDeplacer($test);
$test->parler($test);