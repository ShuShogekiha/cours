<?php

namespace InitiationPOO\Classes;


class Voiture extends Vehicule
{
    // method
    /**
     * Initialise chaque nouvel objet de type voiture
     * @param string $marq : marque du vehicule
     * @param string $coul : couleur du vehicule
     * @param int $puis : puissance du vehicule 
     */
    public function __construct(string $marq, string $coul, int $puis)
    {
        $this->marque = $marq;
        $this->couleur = $coul;
        $this->puissance = $puis;
    }


    public function __toString()
    {
        return "<p> la voiture ciblé est une " . $this->getMarque() . " " . $this->getCouleur() . " qui dispose d'une de " . $this->getPuissance() . " chevaux.</p>";
    }

}
?>