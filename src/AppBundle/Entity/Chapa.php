<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Chapa
 *
 * @ORM\Table(name="chapa", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_chapa", columns={"nomb_chapa"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombChapa"},
 *     message= "No se pueden cargar dos Tipos de Licencias con el mismo nombre"
 * )
 */
class Chapa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapa", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChapa;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_chapa", type="string", length=50, nullable=true)
     */
    private $nombChapa;



    /**
     * Get idChapa
     *
     * @return integer
     */
    public function getIdChapa()
    {
        return $this->idChapa;
    }

    /**
     * Set nombChapa
     *
     * @param string $nombChapa
     *
     * @return Chapa
     */
    public function setNombChapa($nombChapa)
    {
        $this->nombChapa = $nombChapa;

        return $this;
    }

    /**
     * Get nombChapa
     *
     * @return string
     */
    public function getNombChapa()
    {
        return $this->nombChapa;
    }

    public function __toString()
    {
        return(string) $this->nombChapa;
    }
}
