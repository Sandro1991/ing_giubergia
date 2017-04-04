<?php

namespace AppBundle\Entity;

/**
 * Monto
 */
class Monto
{
    /**
     * @var integer
     */
    private $idMonto;

    /**
     * @var string
     */
    private $bDia;

    /**
     * @var string
     */
    private $bNoch;

    /**
     * @var string
     */
    private $mDia;

    /**
     * @var string
     */
    private $mNoch;


    /**
     * Get idMonto
     *
     * @return integer
     */
    public function getIdMonto()
    {
        return $this->idMonto;
    }

    /**
     * Set bDia
     *
     * @param string $bDia
     *
     * @return Monto
     */
    public function setBDia($bDia)
    {
        $this->bDia = $bDia;

        return $this;
    }

    /**
     * Get bDia
     *
     * @return string
     */
    public function getBDia()
    {
        return $this->bDia;
    }

    /**
     * Set bNoch
     *
     * @param string $bNoch
     *
     * @return Monto
     */
    public function setBNoch($bNoch)
    {
        $this->bNoch = $bNoch;

        return $this;
    }

    /**
     * Get bNoch
     *
     * @return string
     */
    public function getBNoch()
    {
        return $this->bNoch;
    }

    /**
     * Set mDia
     *
     * @param string $mDia
     *
     * @return Monto
     */
    public function setMDia($mDia)
    {
        $this->mDia = $mDia;

        return $this;
    }

    /**
     * Get mDia
     *
     * @return string
     */
    public function getMDia()
    {
        return $this->mDia;
    }

    /**
     * Set mNoch
     *
     * @param string $mNoch
     *
     * @return Monto
     */
    public function setMNoch($mNoch)
    {
        $this->mNoch = $mNoch;

        return $this;
    }

    /**
     * Get mNoch
     *
     * @return string
     */
    public function getMNoch()
    {
        return $this->mNoch;
    }

    public function __toString()
    {
        return(string) array($this->bDia,$this->bNoch, $this->mDia, $this->mNoch);
    }
}

