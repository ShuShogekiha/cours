<?php
namespace InitiationPOO\Classes;

class Vehicule
{
    // attribut
    protected $marque;
    protected $puissance;
    protected $couleur;



    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque 
     * @return self
     */
    public function setMarque($marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance 
     * @return self
     */
    public function setPuissance($puissance): self
    {
        $this->puissance = $puissance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur 
     * @return self
     */
    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }
}
?>