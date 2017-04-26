<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Titular
 *
 * @ORM\Table(name="titular")
 * @ORM\Entity
 */
class Titular
{
    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="nomb_titu", type="string", length=100, nullable=true)
     */
    private $nombTitu;

    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="domi_titu", type="string", length=100, nullable=true)
     */
    private $domiTitu;

    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="cuit_titu", type="string", length=20, nullable=true)
     */
    private $cuitTitu;

    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="brut_titu", type="string", length=50, nullable=true)
     */
    private $brutTitu;

    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="habi_titu", type="string", length=20, nullable=true)
     */
    private $habiTitu;

    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="lega_titu", type="string", length=20, nullable=true)
     */
    private $legaTitu;

    /**
     * @var string
     * @Assert\NotBlank(message= "Debe ingresar un valor")
     * @ORM\Column(name="cert_titu", type="string", length=20, nullable=true)
     */
    private $certTitu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_titu", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTitu;



    /**
     * Set nombTitu
     *
     * @param string $nombTitu
     *
     * @return Titular
     */
    public function setNombTitu($nombTitu)
    {
        $this->nombTitu = $nombTitu;

        return $this;
    }

    /**
     * Get nombTitu
     *
     * @return string
     */
    public function getNombTitu()
    {
        return $this->nombTitu;
    }

    /**
     * Set domiTitu
     *
     * @param string $domiTitu
     *
     * @return Titular
     */
    public function setDomiTitu($domiTitu)
    {
        $this->domiTitu = $domiTitu;

        return $this;
    }

    /**
     * Get domiTitu
     *
     * @return string
     */
    public function getDomiTitu()
    {
        return $this->domiTitu;
    }

    /**
     * Set cuitTitu
     *
     * @param string $cuitTitu
     *
     * @return Titular
     */
    public function setCuitTitu($cuitTitu)
    {
        $this->cuitTitu = $cuitTitu;

        return $this;
    }

    /**
     * Get cuitTitu
     *
     * @return string
     */
    public function getCuitTitu()
    {
        return $this->cuitTitu;
    }

    /**
     * Set brutTitu
     *
     * @param string $brutTitu
     *
     * @return Titular
     */
    public function setBrutTitu($brutTitu)
    {
        $this->brutTitu = $brutTitu;

        return $this;
    }

    /**
     * Get brutTitu
     *
     * @return string
     */
    public function getBrutTitu()
    {
        return $this->brutTitu;
    }

    /**
     * Set habiTitu
     *
     * @param string $habiTitu
     *
     * @return Titular
     */
    public function setHabiTitu($habiTitu)
    {
        $this->habiTitu = $habiTitu;

        return $this;
    }

    /**
     * Get habiTitu
     *
     * @return string
     */
    public function getHabiTitu()
    {
        return $this->habiTitu;
    }

    /**
     * Set legaTitu
     *
     * @param string $legaTitu
     *
     * @return Titular
     */
    public function setLegaTitu($legaTitu)
    {
        $this->legaTitu = $legaTitu;

        return $this;
    }

    /**
     * Get legaTitu
     *
     * @return string
     */
    public function getLegaTitu()
    {
        return $this->legaTitu;
    }

    /**
     * Set certTitu
     *
     * @param string $certTitu
     *
     * @return Titular
     */
    public function setCertTitu($certTitu)
    {
        $this->certTitu = $certTitu;

        return $this;
    }

    /**
     * Get certTitu
     *
     * @return string
     */
    public function getCertTitu()
    {
        return $this->certTitu;
    }

    /**
     * Get idTitu
     *
     * @return integer
     */
    public function getIdTitu()
    {
        return $this->idTitu;
    }

    public function __toString()
    {
        return (string) $this->nombTitu;
    }
}
