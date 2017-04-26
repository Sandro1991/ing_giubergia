<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Marca
 *
 * @ORM\Table(name="marca")
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombMarca"},
 *     message="Esta marca ya existe, no se puede repetir"
 * )
 */
class Marca
{
    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="nomb_marca", type="string", length=100, nullable=true)
     */
    private $nombMarca;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_marca", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarca;



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

    /**
     * Get idMarca
     *
     * @return integer
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    public function __toString()
    {
        return (string) $this->nombMarca;
    }
}
