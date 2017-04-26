<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Chapa
 *
 * @ORM\Table(name="chapa", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_chapa", columns={"nomb_chapa"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombChapa"},
 *     message="Este nombre ya existe, no se puede repetir"
 * )
 */
class Chapa
{
    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="nomb_chapa", type="string", length=50, nullable=true)
     */
    private $nombChapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapa", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChapa;



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

    /**
     * Get idChapa
     *
     * @return integer
     */
    public function getIdChapa()
    {
        return $this->idChapa;
    }

    public function __toString()
    {
        return (string) $this->nombChapa;
    }
}
