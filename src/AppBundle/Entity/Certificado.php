<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Certificado
 *
 * @ORM\Table(name="certificado", uniqueConstraints={@ORM\UniqueConstraint(name="nume_chapa", columns={"nume_chapa"})}, indexes={@ORM\Index(name="FK_AUTO_CERT", columns={"id_auto"}), @ORM\Index(name="FK_8B8B21056EC521FB", columns={"id_permi"}), @ORM\Index(name="FK_8B8B2105A982CFD9", columns={"id_reloj"}), @ORM\Index(name="FK_8B8B2105C1189551", columns={"id_chapa"}), @ORM\Index(name="FK_8B8B2105D6E65D60", columns={"id_agen"}), @ORM\Index(name="FK_8B8B2105FE57C495", columns={"id_monto"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"numeChapa"},
 *     message="Este número ya existe, no se puede repetir"
 * )
 */
class Certificado
{
    /**
     * @var integer
     * @Assert\NotBlank(message= "Debe ingresar un número de Habilitación")
     * @Assert\Length(
     *     min=2,
     *     minMessage= "Valor ingresado demasiado corto"
     * )
     * @ORM\Column(name="nume_chapa", type="integer", nullable=false)
     */
    private $numeChapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="nume_prec", type="bigint", nullable=true)
     * @Assert\NotBlank(
     *     message= "Debe ingresar un número de precinto"
     * )
     */
    private $numePrec;

    /**
     * @var string
     *
     * @ORM\Column(name="nume_reloj", type="string", length=255, nullable=true)
     */
    private $numeReloj;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_save", type="datetime", nullable=true)
     */
    private $dateSave;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cert", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCert;

    /**
     * @var \AppBundle\Entity\Auto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Auto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auto", referencedColumnName="id_auto")
     * })
     * @Assert\NotBlank(
     *     message= "Debe ingresar un Dominio"
     * )
     */
    private $idAuto;

    /**
     * @var \AppBundle\Entity\Monto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Monto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_monto", referencedColumnName="id_monto")
     * })
     * @Assert\NotBlank(
     *     message= "Debe ingresar una Tarifa"
     * )
     */
    private $idMonto;

    /**
     * @var \AppBundle\Entity\Agencia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agen", referencedColumnName="id_agen")
     * })
     * @Assert\NotBlank(
     *     message= "Debe ingresar una Agencia"
     * )
     */
    private $idAgen;

    /**
     * @var \AppBundle\Entity\Reloj
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Reloj")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reloj", referencedColumnName="id_reloj")
     * })
     * @Assert\NotBlank(
     *     message= "Debe ingresar un Reloj"
     * )
     */
    private $idReloj;

    /**
     * @var \AppBundle\Entity\Permisionario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Permisionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_permi", referencedColumnName="id_permi")
     * })
     * @Assert\NotBlank(
     *     message= "Debe ingresar un Permisionario"
     * )
     */
    private $idPermi;

    /**
     * @var \AppBundle\Entity\Chapa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chapa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chapa", referencedColumnName="id_chapa")
     * })
     * @Assert\NotBlank(
     *     message= "Debe ingresar un Tipo de Habilitación"
     * )
     */
    private $idChapa;



    /**
     * Set numeChapa
     *
     * @param integer $numeChapa
     *
     * @return Certificado
     */
    public function setNumeChapa($numeChapa)
    {
        $this->numeChapa = $numeChapa;

        return $this;
    }

    /**
     * Get numeChapa
     *
     * @return integer
     */
    public function getNumeChapa()
    {
        return $this->numeChapa;
    }

    /**
     * Set numePrec
     *
     * @param integer $numePrec
     *
     * @return Certificado
     */
    public function setNumePrec($numePrec)
    {
        $this->numePrec = $numePrec;

        return $this;
    }

    /**
     * Get numePrec
     *
     * @return integer
     */
    public function getNumePrec()
    {
        return $this->numePrec;
    }

    /**
     * Set numeReloj
     *
     * @param string $numeReloj
     *
     * @return Certificado
     */
    public function setNumeReloj($numeReloj)
    {
        $this->numeReloj = $numeReloj;

        return $this;
    }

    /**
     * Get numeReloj
     *
     * @return string
     */
    public function getNumeReloj()
    {
        return $this->numeReloj;
    }

    /**
     * Set dateSave
     *
     * @param \DateTime $dateSave
     *
     * @return Certificado
     */
    public function setDateSave($dateSave)
    {
        $this->dateSave = $dateSave;

        return $this;
    }

    /**
     * Get dateSave
     *
     * @return \DateTime
     */
    public function getDateSave()
    {
        return $this->dateSave;
    }

    /**
     * Get idCert
     *
     * @return integer
     */
    public function getIdCert()
    {
        return $this->idCert;
    }

    /**
     * Set idAuto
     *
     * @param \AppBundle\Entity\Auto $idAuto
     *
     * @return Certificado
     */
    public function setIdAuto(\AppBundle\Entity\Auto $idAuto = null)
    {
        $this->idAuto = $idAuto;

        return $this;
    }

    /**
     * Get idAuto
     *
     * @return \AppBundle\Entity\Auto
     */
    public function getIdAuto()
    {
        return $this->idAuto;
    }

    /**
     * Set idMonto
     *
     * @param \AppBundle\Entity\Monto $idMonto
     *
     * @return Certificado
     */
    public function setIdMonto(\AppBundle\Entity\Monto $idMonto = null)
    {
        $this->idMonto = $idMonto;

        return $this;
    }

    /**
     * Get idMonto
     *
     * @return \AppBundle\Entity\Monto
     */
    public function getIdMonto()
    {
        return $this->idMonto;
    }

    /**
     * Set idAgen
     *
     * @param \AppBundle\Entity\Agencia $idAgen
     *
     * @return Certificado
     */
    public function setIdAgen(\AppBundle\Entity\Agencia $idAgen = null)
    {
        $this->idAgen = $idAgen;

        return $this;
    }

    /**
     * Get idAgen
     *
     * @return \AppBundle\Entity\Agencia
     */
    public function getIdAgen()
    {
        return $this->idAgen;
    }

    /**
     * Set idReloj
     *
     * @param \AppBundle\Entity\Reloj $idReloj
     *
     * @return Certificado
     */
    public function setIdReloj(\AppBundle\Entity\Reloj $idReloj = null)
    {
        $this->idReloj = $idReloj;

        return $this;
    }

    /**
     * Get idReloj
     *
     * @return \AppBundle\Entity\Reloj
     */
    public function getIdReloj()
    {
        return $this->idReloj;
    }

    /**
     * Set idPermi
     *
     * @param \AppBundle\Entity\Permisionario $idPermi
     *
     * @return Certificado
     */
    public function setIdPermi(\AppBundle\Entity\Permisionario $idPermi = null)
    {
        $this->idPermi = $idPermi;

        return $this;
    }

    /**
     * Get idPermi
     *
     * @return \AppBundle\Entity\Permisionario
     */
    public function getIdPermi()
    {
        return $this->idPermi;
    }

    /**
     * Set idChapa
     *
     * @param \AppBundle\Entity\Chapa $idChapa
     *
     * @return Certificado
     */
    public function setIdChapa(\AppBundle\Entity\Chapa $idChapa = null)
    {
        $this->idChapa = $idChapa;

        return $this;
    }

    /**
     * Get idChapa
     *
     * @return \AppBundle\Entity\Chapa
     */
    public function getIdChapa()
    {
        return $this->idChapa;
    }
}
