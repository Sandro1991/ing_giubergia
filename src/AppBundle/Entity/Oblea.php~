<?php

namespace AppBundle\Entity;

/**
 * Oblea
 */
class Oblea
{
    /**
     * @var integer
     */
    private $idOblea;

    /**
     * @var string
     */
    private $numeOblea;

    /**
     * @var \AppBundle\Entity\Chapa
     */
    private $idChapa;


    /**
     * Get idOblea
     *
     * @return integer
     */
    public function getIdOblea()
    {
        return $this->idOblea;
    }

    /**
     * Set numeOblea
     *
     * @param string $numeOblea
     *
     * @return Oblea
     */
    public function setNumeOblea($numeOblea)
    {
        $this->numeOblea = $numeOblea;

        return $this;
    }

    /**
     * Get numeOblea
     *
     * @return string
     */
    public function getNumeOblea()
    {
        return $this->numeOblea;
    }

    /**
     * Set idChapa
     *
     * @param \AppBundle\Entity\Chapa $idChapa
     *
     * @return Oblea
     */
    public function setIdChapa(\AppBundle\Entity\Chapa $idChapa = null)
    {
        $this->idChapa = $idChapa;

        return $this;
    }

    /**
     * Get idChapa
     *
     * @return \AppBundle\Entity\Chapa
     */
    public function getIdChapa()
    {
        return $this->idChapa;
    }

    public function __toString()
    {
        return(string) $this->numeOblea;
    }
}

