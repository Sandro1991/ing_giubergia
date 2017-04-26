<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Reloj
 *
 * @ORM\Table(name="reloj", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_reloj", columns={"nomb_reloj"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombReloj"},
 *     message="Este reloj ya existe, no se puede repetir"
 * )
 */
class Reloj
{
    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="nomb_reloj", type="string", length=255, nullable=true)
     */
    private $nombReloj;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_reloj", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReloj;



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

    /**
     * Get idReloj
     *
     * @return integer
     */
    public function getIdReloj()
    {
        return $this->idReloj;
    }

    public function __toString()
    {
        return (string) $this->nombReloj;
    }
}
