<?php

namespace AppBundle\Entity;

/**
 * Titular
 */
class Titular
{
    /**
     * @var integer
     */
    private $idTitu;

    /**
     * @var string
     */
    private $nombTitu;

    /**
     * @var string
     */
    private $domiTitu;

    /**
     * @var string
     */
    private $cuitTitu;

    /**
     * @var string
     */
    private $brutTitu;

    /**
     * @var string
     */
    private $habiTitu;

    /**
     * @var string
     */
    private $legaTitu;

    /**
     * @var string
     */
    private $certTitu;


    /**
     * Get idTitu
     *
     * @return integer
     */
    public function getIdTitu()
    {
        return $this->idTitu;
    }

    /**
     * Set nombTitu
     *
     * @param string $nombTitu
     *
     * @return Titular
     */
    public function setNombTitu($nombTitu)
    {
        $this->nombTitu = $nombTitu;

        return $this;
    }

    /**
     * Get nombTitu
     *
     * @return string
     */
    public function getNombTitu()
    {
        return $this->nombTitu;
    }

    /**
     * Set domiTitu
     *
     * @param string $domiTitu
     *
     * @return Titular
     */
    public function setDomiTitu($domiTitu)
    {
        $this->domiTitu = $domiTitu;

        return $this;
    }

    /**
     * Get domiTitu
     *
     * @return string
     */
    public function getDomiTitu()
    {
        return $this->domiTitu;
    }

    /**
     * Set cuitTitu
     *
     * @param string $cuitTitu
     *
     * @return Titular
     */
    public function setCuitTitu($cuitTitu)
    {
        $this->cuitTitu = $cuitTitu;

        return $this;
    }

    /**
     * Get cuitTitu
     *
     * @return string
     */
    public function getCuitTitu()
    {
        return $this->cuitTitu;
    }

    /**
     * Set brutTitu
     *
     * @param string $brutTitu
     *
     * @return Titular
     */
    public function setBrutTitu($brutTitu)
    {
        $this->brutTitu = $brutTitu;

        return $this;
    }

    /**
     * Get brutTitu
     *
     * @return string
     */
    public function getBrutTitu()
    {
        return $this->brutTitu;
    }

    /**
     * Set habiTitu
     *
     * @param string $habiTitu
     *
     * @return Titular
     */
    public function setHabiTitu($habiTitu)
    {
        $this->habiTitu = $habiTitu;

        return $this;
    }

    /**
     * Get habiTitu
     *
     * @return string
     */
    public function getHabiTitu()
    {
        return $this->habiTitu;
    }

    /**
     * Set legaTitu
     *
     * @param string $legaTitu
     *
     * @return Titular
     */
    public function setLegaTitu($legaTitu)
    {
        $this->legaTitu = $legaTitu;

        return $this;
    }

    /**
     * Get legaTitu
     *
     * @return string
     */
    public function getLegaTitu()
    {
        return $this->legaTitu;
    }

    /**
     * Set certTitu
     *
     * @param string $certTitu
     *
     * @return Titular
     */
    public function setCertTitu($certTitu)
    {
        $this->certTitu = $certTitu;

        return $this;
    }

    /**
     * Get certTitu
     *
     * @return string
     */
    public function getCertTitu()
    {
        return $this->certTitu;
    }

    public function __toString()
    {
        return(string) $this->nombTitu;
    }
}

