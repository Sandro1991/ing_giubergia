<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Auto
 *
 * @ORM\Table(name="auto", uniqueConstraints={@ORM\UniqueConstraint(name="domi_auto", columns={"domi_auto"})}, indexes={@ORM\Index(name="id_mode", columns={"id_mode"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"domiAuto"},
 *     message="Este dominio ya existe, no se puede repetir"
 * )
 */
class Auto
{
    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @Assert\Length(
     *     min=6,
     *     max=7,
     *     minMessage= "Valor ingresado demasiado corto (ej: AAA123 o 11AAA22)",
     *     maxMessage= "Valor ingresado demasiado largo (ej: AAA123 o 11AAA22)"
     * )
     * @ORM\Column(name="domi_auto", type="string", length=7, nullable=true)
     */
    private $domiAuto;

    /**
     * @var integer
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="anio_auto", type="integer", nullable=true)
     */
    private $anioAuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_auto", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuto;

    /**
     * @var \AppBundle\Entity\Modelo
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modelo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mode", referencedColumnName="id_mode")
     * })
     */
    private $idMode;



    /**
     * Set domiAuto
     *
     * @param string $domiAuto
     *
     * @return Auto
     */
    public function setDomiAuto($domiAuto)
    {
        $this->domiAuto = $domiAuto;

        return $this;
    }

    /**
     * Get domiAuto
     *
     * @return string
     */
    public function getDomiAuto()
    {
        return $this->domiAuto;
    }

    /**
     * Set anioAuto
     *
     * @param integer $anioAuto
     *
     * @return Auto
     */
    public function setAnioAuto($anioAuto)
    {
        $this->anioAuto = $anioAuto;

        return $this;
    }

    /**
     * Get anioAuto
     *
     * @return integer
     */
    public function getAnioAuto()
    {
        return $this->anioAuto;
    }

    /**
     * Get idAuto
     *
     * @return integer
     */
    public function getIdAuto()
    {
        return $this->idAuto;
    }

    /**
     * Set idMode
     *
     * @param \AppBundle\Entity\Modelo $idMode
     *
     * @return Auto
     */
    public function setIdMode(\AppBundle\Entity\Modelo $idMode = null)
    {
        $this->idMode = $idMode;

        return $this;
    }

    /**
     * Get idMode
     *
     * @return \AppBundle\Entity\Modelo
     */
    public function getIdMode()
    {
        return $this->idMode;
    }

    public function __toString()
    {
        return (string) $this->domiAuto;
    }
}
