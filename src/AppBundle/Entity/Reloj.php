<?php

namespace AppBundle\Entity;

/**
 * Reloj
 */
class Reloj
{
    /**
     * @var integer
     */
    private $idReloj;

    /**
     * @var string
     */
    private $nombReloj;


    /**
     * Get idReloj
     *
     * @return integer
     */
    public function getIdReloj()
    {
        return $this->idReloj;
    }

    /**
     * Set nombReloj
     *
     * @param string $nombReloj
     *
     * @return Reloj
     */
    public function setNombReloj($nombReloj)
    {
        $this->nombReloj = $nombReloj;

        return $this;
    }

    /**
     * Get nombReloj
     *
     * @return string
     */
    public function getNombReloj()
    {
        return $this->nombReloj;
    }

    public function __toString()
    {
        return(string) $this->nombReloj;
    }
}

