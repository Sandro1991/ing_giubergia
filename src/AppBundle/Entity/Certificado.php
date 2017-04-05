<?php

namespace AppBundle\Entity;

/**
 * Certificado
 */
class Certificado
{
    /**
     * @var integer
     */
    private $idCert;

    /**
     * @var integer
     */
    private $numeChapa;

    /**
     * @var integer
     */
    private $numePrec = '0';

    /**
     * @var string
     */
    private $numeReloj = 's/n';

    /**
     * @var \DateTime
     */
    private $dateSave;

    /**
     * @var \AppBundle\Entity\Titular
     */
    private $idTitu;

    /**
     * @var \AppBundle\Entity\Permisionario
     */
    private $idPermi;

    /**
     * @var \AppBundle\Entity\Reloj
     */
    private $idReloj;

    /**
     * @var \AppBundle\Entity\Chapa
     */
    private $idChapa;

    /**
     * @var \AppBundle\Entity\Agencia
     */
    private $idAgen;

    /**
     * @var \AppBundle\Entity\Auto
     */
    private $idAuto;

    /**
     * @var \AppBundle\Entity\Monto
     */
    private $idMonto;


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
     * Set idTitu
     *
     * @param \AppBundle\Entity\Titular $idTitu
     *
     * @return Certificado
     */
    public function setIdTitu(\AppBundle\Entity\Titular $idTitu = null)
    {
        $this->idTitu = $idTitu;

        return $this;
    }

    /**
     * Get idTitu
     *
     * @return \AppBundle\Entity\Titular
     */
    public function getIdTitu()
    {
        return $this->idTitu;
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
}
