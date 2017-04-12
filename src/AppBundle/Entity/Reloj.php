<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Reloj
 *
 * @ORM\Table(name="reloj", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_reloj", columns={"nomb_reloj"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombReloj"},
 *     message= "No se pueden cargar dos Relojes con el mismo nombre"
 * )
 */
class Reloj
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reloj", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReloj;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_reloj", type="string", length=255, nullable=true)
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
