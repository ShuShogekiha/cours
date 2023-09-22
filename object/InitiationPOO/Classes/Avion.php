<?php

namespace InitiationPOO\Classes;


class Avion extends Vehicule
{
    private $lieuDepart;
    private $destination;

    /**
     * Initialise chaque nouvel objet de type Conducteur
     * @param string $marq : marque de l'avion
     * @param int $puis : puissance de l'avion
     * @param string $coul : couleur de l'avion
     * @param string $lieuAssemblage : lieu d'assemblage de l'avion
     */
    public function __construct(string $marq, int $puis, string $coul, string $lieuAssemblage = "Paris")
    {
        $this->marque = $marq;
        $this->puissance = $puis;
        $this->couleur = $coul;
        $this->lieuDepart = $lieuAssemblage;

    }

    public function __toString()
    {
        return "<p>c'est un avion " . $this->getMarque() . " " . $this->getCouleur() . " avec un puissance de " . $this->getPuissance() . ". Son voyage commence à " . $this->getLieuDepart() . " pour arriver à " . $this->getDestination() . ".</p>";
    }

    public function setAllAttributes($marq, $puis, $coul)
    {
        $this->setMarque($marq);
        $this->setPuissance($puis);
        $this->setCouleur($coul);
    }

    public function trajet($arr)
    {
        if ($this->destination === NULL) {
            $this->lieuDepart;
        } else {
            $this->lieuDepart = $this->destination;
        }
        $this->destination = $arr;
        $msg = "<p>L'avion " . $this->getCouleur() . " est partie de " . $this->lieuDepart . " et arrivera à " . $this->destination . ".</p>";
        return $msg;
    }


    /**
     * @return mixed
     */
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * @param mixed $lieuDepart 
     * @return self
     */
    public function setLieuDepart($lieuDepart): self
    {
        $this->lieuDepart = $lieuDepart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination 
     * @return self
     */
    public function setDestination($destination): self
    {
        $this->destination = $destination;
        return $this;
    }
}

// parfois on peut etre amené a travailler avec des classes qui possède des noms similaires
// un nom de classe doit etre unique de ce faire sa ne devrais pas fonctionner
// c'est pour cela que le pouvoir magique des 5 érudits des anciens en décidé d'utiliser leurs dernière ressource pour crée le namespace.
// le namespace est pouvoir suffisament puissant pour séparé les classes au noms similaires permettant donc des crée des héros au talent tout aussi unique que semblable pour mettre fin à la tyranie des bugs.
?>