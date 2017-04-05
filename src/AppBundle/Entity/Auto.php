<?php

namespace AppBundle\Entity;

/**
 * Auto
 */
class Auto
{
    /**
     * @var integer
     */
    private $idAuto;

    /**
     * @var string
     */
    private $domiAuto;

    /**
     * @var integer
     */
    private $anioAuto;

    /**
     * @var \AppBundle\Entity\Modelo
     */
    private $idMode;


    /**
     * Get idAuto
     *
     * @return integer
     */
    public function getIdAuto()
    {
        return $this->idAuto;
    }

    /**
     * Set domiAuto
     *
     * @param string $domiAuto
     *
     * @return Auto
     */
    public function setDomiAuto($domiAuto)
    {
        $this->domiAuto = $domiAuto;

        return $this;
    }

    /**
     * Get domiAuto
     *
     * @return string
     */
    public function getDomiAuto()
    {
        return $this->domiAuto;
    }

    /**
     * Set anioAuto
     *
     * @param integer $anioAuto
     *
     * @return Auto
     */
    public function setAnioAuto($anioAuto)
    {
        $this->anioAuto = $anioAuto;

        return $this;
    }

    /**
     * Get anioAuto
     *
     * @return integer
     */
    public function getAnioAuto()
    {
        return $this->anioAuto;
    }

    /**
     * Set idMode
     *
     * @param \AppBundle\Entity\Modelo $idMode
     *
     * @return Auto
     */
    public function setIdMode(\AppBundle\Entity\Modelo $idMode = null)
    {
        $this->idMode = $idMode;

        return $this;
    }

    /**
     * Get idMode
     *
     * @return \AppBundle\Entity\Modelo
     */
    public function getIdMode()
    {
        return $this->idMode;
    }

    public function __toString()
    {
        return(string) $this->domiAuto;
    }
}
