<?php

namespace InitiationPOO\Classes;


class Conducteur
{
  private $nom;
  private $prenom;
  private $age;

  /**
   * Initialise chaque nouvel objet de type Conducteur
   * @param string $name : nom du conducteur
   * @param string $forname : prenom du conducteur
   * @param int $old : age du conducteur
   */
  public function __construct(string $name, string $forname, int $old)
  {
    $this->nom = $name;
    $this->prenom = $forname;
    if ($old >= 20 && $old <= 65) {
      $this->age = $old;
    }
  }

  private function getNom()
  {
    return $this->nom;
  }
  private function setNom($value)
  {
    $this->nom = $value;
  }

  private function getPrenom()
  {
    return $this->prenom;
  }
  private function setPrenom($value)
  {
    $this->prenom = $value;
  }

  private function getAge()
  {
    return $this->age;
  }
  private function setAge($value)
  {
    $this->age = $value;
  }

  public function __toString()
  {
    if ($this->getAge() != NULL) {
      return "<p> le conducteur ciblé s'appelle " . $this->getNom() . " " . $this->getPrenom() . ", il as " . $this->getAge() . " ans.</p>";
    } else {
      return "<p>impossible d'afficher le conducteurs</p>";
    }
  }

  public function setAllAttributes($name, $forname, $old)
  {
    $this->setNom($name);
    $this->setPrenom($forname);
    $this->setAge($old);
  }

}
?>