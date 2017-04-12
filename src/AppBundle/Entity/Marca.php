<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Marca
 *
 * @ORM\Table(name="marca")
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombMarca"},
 *     message= "No se pueden cargar dos Marcas con el mismo nombre"
 * )
 */
class Marca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_marca", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_marca", type="string", length=100, nullable=true)
     */
    private $nombMarca;



    /**
     * Get idMarca
     *
     * @return integer
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set nombMarca
     *
     * @param string $nombMarca
     *
     * @return Marca
     */
    public function setNombMarca($nombMarca)
    {
        $this->nombMarca = $nombMarca;

        return $this;
    }

    /**
     * Get nombMarca
     *
     * @return string
     */
    public function getNombMarca()
    {
        return $this->nombMarca;
    }

    public function __toString()
    {
        return(string) $this->nombMarca;
    }
}
