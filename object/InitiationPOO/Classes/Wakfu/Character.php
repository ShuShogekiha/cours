<?php

class Character
{
    protected $name;
    protected $pv;
    protected $pm;
    protected $pa;
    protected $armor;
    protected $skill;
    protected $stuff;
    protected $damage;

    /**
     * Initialise chaque nouvel objet de type Conducteur
     * @param int $hp : point de vie de l'Ecaflip
     * @param int $move : point de mouvement de l'Ecaflip
     * @param int $action : point d'action de l'Ecaflip
     * @param int $armure : armure de l'Ecaflip
     * @param string $tech : compétence de l'Ecaflip
     * @param string $equip : équipement de l'Ecaflip
     * @param string $nom : nom de l'Ecaflip
     * @param int $dps : dégat de l'Ecaflip
     */
    public function __construct(string $nom, int $hp = 15, int $move = 3, int $action = 4, int $armure = 0, string $tech = "aucun skill", string $equip = "aucun equipement", int $dps = 5)
    {
        $this->name = $nom;
        $this->pv = $hp;
        $this->pm = $move;
        $this->pa = $action;
        $this->armor = $armure;
        $this->skill = $tech;
        $this->stuff = $equip;
        $this->damage = $dps;
    }

    public function __toString()
    {
        return "<p>Nom : " . $this->getName() . "</p><p>PV : " . $this->getPv() . "</p><p>PA : " . $this->getPa() . "</p><p>PM : " . $this->getPm() . "</p><p>Degats = " . $this->getDamage() . "</p><p>Armure : " . $this->getArmor() . "</p><p>Skill : " . $this->getSkill() . "</p><p>Stuff : " . $this->getStuff() . "</p>";
    }

    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @param mixed $pv 
     * @return self
     */
    public function setPv($pv): self
    {
        $this->pv = $pv;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPm()
    {
        return $this->pm;
    }

    /**
     * @param mixed $pm 
     * @return self
     */
    public function setPm($pm): self
    {
        $this->pm = $pm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * @param mixed $pa 
     * @return self
     */
    public function setPa($pa): self
    {
        $this->pa = $pa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @param mixed $armor 
     * @return self
     */
    public function setArmor($armor): self
    {
        $this->armor = $armor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * @param mixed $skill 
     * @return self
     */
    public function setSkill($skill): self
    {
        $this->skill = $skill;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStuff()
    {
        return $this->stuff;
    }

    /**
     * @param mixed $stuff 
     * @return self
     */
    public function setStuff($stuff): self
    {
        $this->stuff = $stuff;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name 
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage 
     * @return self
     */
    public function setDamage($damage): self
    {
        $this->damage = $damage;
        return $this;
    }

    public static function attaque($cible)
    {
       // $cible->setPv($cible->getPv - $this->getDamage);
       // return $this;
    }
}
?>