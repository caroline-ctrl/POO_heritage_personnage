<?php

class Hydratation
{

    //contient les valeurs des objets
    private $attributes;
    //contient un tableau de resultat
    private $result = [];



    /**********CONSTRUCTEUR*********/
    //sert a l'instanciation de l'objet
    public function __construct($att)
    {
        //dans l'objet courant on appelle la methode setAttributes et on passe un tableau en parametre
        $this->setAtrributes($att);
    }

    /********GETTER********/

    /**
     * return $attributes
     * type: array
     */
    //
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * return $result
     * type: array
     */
    //retourn la valeur de l'attribut $result de l'objet courant
    public function getResult()
    {
        return $this->result;
    }



    /***********SETTER***********/

    /**
     * set value $attributes
     * type: array
     */
    // dans l'objet courant l'attribut $attributes donne la valeur de la variable
    public function setAtrributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * set value $result
     * type: array
     */
    // dans l'objet courant l'attribut $attributes donne la valeur de la variable
    public function setResult($result)
    {
        $this->result = $result;
    }




    /***********HYDRATATION*********/
    public function hydratation()
    {
        $tempArray = []; //initialise une variable qui contient un tableau vide
        //boucle sur les attributs attributes et on en sort la clef et la valeur
        foreach ($this->attributes as $key => $value) {
            //initialise  une variable de type string qui commence par set avec un concat de key
            $method = "set" . ucfirst($key);
            //insere dans le tableau temporaire un tableau qui contient string, valeur
            array_push($tempArray, [$method, $value]);
            }
            //dans l'objet courant on appelle le setResult 
            $this->setResult($tempArray);
        }
    }


$test = new Hydratation(["nom" => "michel"]);
var_dump($test->getAttributes());
