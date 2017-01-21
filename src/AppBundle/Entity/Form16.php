<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form16")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form16
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
* @ORM\Column(name="Checkbox16Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox16Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox16NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox16NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox16Ouv", type="string", length=255, nullable=true)
*/
private $Checkbox16Ouv;

/**
* @var string
*
* @ORM\Column(name="Checkbox16Ferm", type="string", length=255, nullable=true)
*/
private $Checkbox16Ferm;

/**
* @var string
*
* @ORM\Column(name="Checkbox16Droit", type="string", length=255, nullable=true)
*/
private $Checkbox16Droit;

/**
* @var string
*
* @ORM\Column(name="Checkbox16Gauche", type="string", length=255, nullable=true)
*/
private $Checkbox16Gauche;

/**
* @var string
*
* @ORM\Column(name="Text16Frequence", type="string", length=255, nullable=true)
*/
private $Text16Frequence;

/**
* @var string
*
* @ORM\Column(name="Text16DerEpi", type="string", length=255, nullable=true)
*/
private $Text16DerEpi;


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
     * Set checkbox16Negatif
     *
     * @param string $checkbox16Negatif
     *
     * @return Form16
     */
    public function setCheckbox16Negatif($checkbox16Negatif)
    {
        $this->Checkbox16Negatif = $checkbox16Negatif;

        return $this;
    }

    /**
     * Get checkbox16Negatif
     *
     * @return string
     */
    public function getCheckbox16Negatif()
    {
        return $this->Checkbox16Negatif;
    }

    /**
     * Set checkbox16NonRenseigne
     *
     * @param string $checkbox16NonRenseigne
     *
     * @return Form16
     */
    public function setCheckbox16NonRenseigne($checkbox16NonRenseigne)
    {
        $this->Checkbox16NonRenseigne = $checkbox16NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox16NonRenseigne
     *
     * @return string
     */
    public function getCheckbox16NonRenseigne()
    {
        return $this->Checkbox16NonRenseigne;
    }

    /**
     * Set checkbox16Ouv
     *
     * @param string $checkbox16Ouv
     *
     * @return Form16
     */
    public function setCheckbox16Ouv($checkbox16Ouv)
    {
        $this->Checkbox16Ouv = $checkbox16Ouv;

        return $this;
    }

    /**
     * Get checkbox16Ouv
     *
     * @return string
     */
    public function getCheckbox16Ouv()
    {
        return $this->Checkbox16Ouv;
    }

    /**
     * Set checkbox16Ferm
     *
     * @param string $checkbox16Ferm
     *
     * @return Form16
     */
    public function setCheckbox16Ferm($checkbox16Ferm)
    {
        $this->Checkbox16Ferm = $checkbox16Ferm;

        return $this;
    }

    /**
     * Get checkbox16Ferm
     *
     * @return string
     */
    public function getCheckbox16Ferm()
    {
        return $this->Checkbox16Ferm;
    }

    /**
     * Set checkbox16Droit
     *
     * @param string $checkbox16Droit
     *
     * @return Form16
     */
    public function setCheckbox16Droit($checkbox16Droit)
    {
        $this->Checkbox16Droit = $checkbox16Droit;

        return $this;
    }

    /**
     * Get checkbox16Droit
     *
     * @return string
     */
    public function getCheckbox16Droit()
    {
        return $this->Checkbox16Droit;
    }

    /**
     * Set checkbox16Gauche
     *
     * @param string $checkbox16Gauche
     *
     * @return Form16
     */
    public function setCheckbox16Gauche($checkbox16Gauche)
    {
        $this->Checkbox16Gauche = $checkbox16Gauche;

        return $this;
    }

    /**
     * Get checkbox16Gauche
     *
     * @return string
     */
    public function getCheckbox16Gauche()
    {
        return $this->Checkbox16Gauche;
    }

    /**
     * Set text16Frequence
     *
     * @param string $text16Frequence
     *
     * @return Form16
     */
    public function setText16Frequence($text16Frequence)
    {
        $this->Text16Frequence = $text16Frequence;

        return $this;
    }

    /**
     * Get text16Frequence
     *
     * @return string
     */
    public function getText16Frequence()
    {
        return $this->Text16Frequence;
    }

    /**
     * Set text16DerEpi
     *
     * @param string $text16DerEpi
     *
     * @return Form16
     */
    public function setText16DerEpi($text16DerEpi)
    {
        $this->Text16DerEpi = $text16DerEpi;

        return $this;
    }

    /**
     * Get text16DerEpi
     *
     * @return string
     */
    public function getText16DerEpi()
    {
        return $this->Text16DerEpi;
    }
}
