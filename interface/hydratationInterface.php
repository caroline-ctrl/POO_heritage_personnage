<?php

interface HydratationInterface
{
    /**
     * oblige a utiliser la methode hydrate avec un array en parametre
     */
    public function hydratation(array $attributes);
}
