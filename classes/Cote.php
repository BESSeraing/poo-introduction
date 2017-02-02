<?php

class Cote
{
    private $nomDuCours;
    private $valueInPercent;

    /**
     * Cote constructor.
     * @param $nomDuCours
     * @param $valueInPercent
     */
    public function __construct($nomDuCours, $valueInPercent)
    {
        $this->setNomDuCours($nomDuCours);
        $this->setValueInPercent($valueInPercent);
    }

    /**
     * @return mixed
     */
    public function getNomDuCours()
    {
        return $this->nomDuCours;
    }

    /**
     * @param mixed $nomDuCours
     */
    public function setNomDuCours($nomDuCours)
    {
        $this->nomDuCours = $nomDuCours;
    }

    /**
     * @return mixed
     */
    public function getValueInPercent()
    {
        return $this->valueInPercent;
    }

    /**
     * @param mixed $valueInPercent
     */
    public function setValueInPercent($valueInPercent)
    {
        $this->valueInPercent = $valueInPercent;
    }
    
    


}