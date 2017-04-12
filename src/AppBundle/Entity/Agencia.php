<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Agencia
 *
 * @ORM\Table(name="agencia", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_agen", columns={"nomb_agen"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombAgen"},
 *     message= "No se pueden cargar dos Agencias con el mismo nombre"
 * )
 */
class Agencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_agen", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgen;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_agen", type="string", length=255, nullable=true)
     */
    private $nombAgen;



    /**
     * Get idAgen
     *
     * @return integer
     */
    public function getIdAgen()
    {
        return $this->idAgen;
    }

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

    public function __toString()
    {
        return(string) $this->nombAgen;
    }
}
