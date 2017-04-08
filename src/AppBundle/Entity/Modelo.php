<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Modelo
 *
 * @ORM\Table(name="modelo", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_mode", columns={"nomb_mode"})}, indexes={@ORM\Index(name="FK_MODE_MARCA", columns={"id_marca"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombMode"},
 *     message= "No se pueden cargar dos Modelos con el mismo nombre"
 * )
 */
class Modelo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mode", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMode;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_mode", type="string", length=50, nullable=true)
     */
    private $nombMode;

    /**
     * @var \AppBundle\Entity\Marca
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marca", referencedColumnName="id_marca")
     * })
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
