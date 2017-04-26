<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Agencia
 *
 * @ORM\Table(name="agencia", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_agen", columns={"nomb_agen"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombAgen"},
 *     message="Este nombre ya existe, no se puede repetir"
 * )
 */
class Agencia
{
    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="nomb_agen", type="string", length=255, nullable=true)
     */
    private $nombAgen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_agen", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgen;



    /**
     * Set nombAgen
     *
     * @param string $nombAgen
     *
     * @return Agencia
     */
    public function setNombAgen($nombAgen)
    {
        $this->nombAgen = $nombAgen;

        return $this;
    }

    /**
     * Get nombAgen
     *
     * @return string
     */
    public function getNombAgen()
    {
        return $this->nombAgen;
    }

    /**
     * Get idAgen
     *
     * @return integer
     */
    public function getIdAgen()
    {
        return $this->idAgen;
    }

    public function __toString()
    {
        return (string) $this->nombAgen;
    }
}
