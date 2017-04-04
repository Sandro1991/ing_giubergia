<?php

namespace AppBundle\Entity;

/**
 * Modelo
 */
class Modelo
{
    /**
     * @var integer
     */
    private $idMode;

    /**
     * @var string
     */
    private $nombMode;

    /**
     * @var \AppBundle\Entity\Marca
     */
    private $idMarca;


    /**
     * Get idMode
     *
     * @return integer
     */
    public function getIdMode()
    {
        return $this->idMode;
    }

    /**
     * Set nombMode
     *
     * @param string $nombMode
     *
     * @return Modelo
     */
    public function setNombMode($nombMode)
    {
        $this->nombMode = $nombMode;

        return $this;
    }

    /**
     * Get nombMode
     *
     * @return string
     */
    public function getNombMode()
    {
        return $this->nombMode;
    }

    /**
     * Set idMarca
     *
     * @param \AppBundle\Entity\Marca $idMarca
     *
     * @return Modelo
     */
    public function setIdMarca(\AppBundle\Entity\Marca $idMarca = null)
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get idMarca
     *
     * @return \AppBundle\Entity\Marca
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    public function __toString()
    {
        return(string) $this->nombMode;
    }
}

