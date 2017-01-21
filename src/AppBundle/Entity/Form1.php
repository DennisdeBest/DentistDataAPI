<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form1")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form1
{
/**
* @var int
*
* @ORM\Column(name="id", type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
private $id;
/**
* @var string
*
* @ORM\Column(name="Checkbox1Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox1Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox1NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox1NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Textarea1Douleurs", type="string", length=255, nullable=true)
*/
private $Textarea1Douleurs;

/**
* @var string
*
* @ORM\Column(name="Checkbox1NoDouleurs", type="string", length=255, nullable=true)
*/
private $Checkbox1NoDouleurs;

/**
* @var string
*
* @ORM\Column(name="Checkbox1DouleursMachoire", type="string", length=255, nullable=true)
*/
private $Checkbox1DouleursMachoire;

/**
* @var string
*
* @ORM\Column(name="Checkbox1DouleursSpontane", type="string", length=255, nullable=true)
*/
private $Checkbox1DouleursSpontane;

/**
* @var string
*
* @ORM\Column(name="Checkbox1DouleursOrale", type="string", length=255, nullable=true)
*/
private $Checkbox1DouleursOrale;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set checkbox1Negatif
     *
     * @param string $checkbox1Negatif
     *
     * @return Form1
     */
    public function setCheckbox1Negatif($checkbox1Negatif)
    {
        $this->Checkbox1Negatif = $checkbox1Negatif;

        return $this;
    }

    /**
     * Get checkbox1Negatif
     *
     * @return string
     */
    public function getCheckbox1Negatif()
    {
        return $this->Checkbox1Negatif;
    }

    /**
     * Set checkbox1NonRenseigne
     *
     * @param string $checkbox1NonRenseigne
     *
     * @return Form1
     */
    public function setCheckbox1NonRenseigne($checkbox1NonRenseigne)
    {
        $this->Checkbox1NonRenseigne = $checkbox1NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox1NonRenseigne
     *
     * @return string
     */
    public function getCheckbox1NonRenseigne()
    {
        return $this->Checkbox1NonRenseigne;
    }

    /**
     * Set textarea1Douleurs
     *
     * @param string $textarea1Douleurs
     *
     * @return Form1
     */
    public function setTextarea1Douleurs($textarea1Douleurs)
    {
        $this->Textarea1Douleurs = $textarea1Douleurs;

        return $this;
    }

    /**
     * Get textarea1Douleurs
     *
     * @return string
     */
    public function getTextarea1Douleurs()
    {
        return $this->Textarea1Douleurs;
    }

    /**
     * Set checkbox1NoDouleurs
     *
     * @param string $checkbox1NoDouleurs
     *
     * @return Form1
     */
    public function setCheckbox1NoDouleurs($checkbox1NoDouleurs)
    {
        $this->Checkbox1NoDouleurs = $checkbox1NoDouleurs;

        return $this;
    }

    /**
     * Get checkbox1NoDouleurs
     *
     * @return string
     */
    public function getCheckbox1NoDouleurs()
    {
        return $this->Checkbox1NoDouleurs;
    }

    /**
     * Set checkbox1DouleursMachoire
     *
     * @param string $checkbox1DouleursMachoire
     *
     * @return Form1
     */
    public function setCheckbox1DouleursMachoire($checkbox1DouleursMachoire)
    {
        $this->Checkbox1DouleursMachoire = $checkbox1DouleursMachoire;

        return $this;
    }

    /**
     * Get checkbox1DouleursMachoire
     *
     * @return string
     */
    public function getCheckbox1DouleursMachoire()
    {
        return $this->Checkbox1DouleursMachoire;
    }

    /**
     * Set checkbox1DouleursSpontane
     *
     * @param string $checkbox1DouleursSpontane
     *
     * @return Form1
     */
    public function setCheckbox1DouleursSpontane($checkbox1DouleursSpontane)
    {
        $this->Checkbox1DouleursSpontane = $checkbox1DouleursSpontane;

        return $this;
    }

    /**
     * Get checkbox1DouleursSpontane
     *
     * @return string
     */
    public function getCheckbox1DouleursSpontane()
    {
        return $this->Checkbox1DouleursSpontane;
    }

    /**
     * Set checkbox1DouleursOrale
     *
     * @param string $checkbox1DouleursOrale
     *
     * @return Form1
     */
    public function setCheckbox1DouleursOrale($checkbox1DouleursOrale)
    {
        $this->Checkbox1DouleursOrale = $checkbox1DouleursOrale;

        return $this;
    }

    /**
     * Get checkbox1DouleursOrale
     *
     * @return string
     */
    public function getCheckbox1DouleursOrale()
    {
        return $this->Checkbox1DouleursOrale;
    }
}
