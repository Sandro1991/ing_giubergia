<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Monto
 *
 * @ORM\Table(name="monto", uniqueConstraints={@ORM\UniqueConstraint(name="nomb_tari", columns={"nomb_monto"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"nombMonto"},
 *     message= "No se pueden cargar dos Tarifas con el mismo nombre"
 * )
 */
class Monto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_monto", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMonto;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_monto", type="string", length=50, nullable=false)
     */
    private $nombMonto;

    /**
     * @var string
     *
     * @ORM\Column(name="b_dia", type="string", length=10, nullable=true)
     */
    private $bDia;

    /**
     * @var string
     *
     * @ORM\Column(name="b_noch", type="string", length=10, nullable=true)
     */
    private $bNoch;

    /**
     * @var string
     *
     * @ORM\Column(name="m_dia", type="string", length=10, nullable=true)
     */
    private $mDia;

    /**
     * @var string
     *
     * @ORM\Column(name="m_noch", type="string", length=10, nullable=true)
     */
    private $mNoch;



    /**
     * Get idMonto
     *
     * @return integer
     */
    public function getIdMonto()
    {
        return $this->idMonto;
    }

    /**
     * Set nombMonto
     *
     * @param string $nombMonto
     *
     * @return Monto
     */
    public function setNombMonto($nombMonto)
    {
        $this->nombMonto = $nombMonto;

        return $this;
    }

    /**
     * Get nombMonto
     *
     * @return string
     */
    public function getNombMonto()
    {
        return $this->nombMonto;
    }

    /**
     * Set bDia
     *
     * @param string $bDia
     *
     * @return Monto
     */
    public function setBDia($bDia)
    {
        $this->bDia = $bDia;

        return $this;
    }

    /**
     * Get bDia
     *
     * @return string
     */
    public function getBDia()
    {
        return $this->bDia;
    }

    /**
     * Set bNoch
     *
     * @param string $bNoch
     *
     * @return Monto
     */
    public function setBNoch($bNoch)
    {
        $this->bNoch = $bNoch;

        return $this;
    }

    /**
     * Get bNoch
     *
     * @return string
     */
    public function getBNoch()
    {
        return $this->bNoch;
    }

    /**
     * Set mDia
     *
     * @param string $mDia
     *
     * @return Monto
     */
    public function setMDia($mDia)
    {
        $this->mDia = $mDia;

        return $this;
    }

    /**
     * Get mDia
     *
     * @return string
     */
    public function getMDia()
    {
        return $this->mDia;
    }

    /**
     * Set mNoch
     *
     * @param string $mNoch
     *
     * @return Monto
     */
    public function setMNoch($mNoch)
    {
        $this->mNoch = $mNoch;

        return $this;
    }

    /**
     * Get mNoch
     *
     * @return string
     */
    public function getMNoch()
    {
        return $this->mNoch;
    }

    public function __toString()
    {
        return(string) $this->nombMonto;
    }
}
