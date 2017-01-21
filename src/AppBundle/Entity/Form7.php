<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form7")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form7
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
* @ORM\Column(name="Checkbox7Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox7Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox7NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox7NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox7Onycophagie", type="string", length=255, nullable=true)
*/
private $Checkbox7Onycophagie;

/**
* @var string
*
* @ORM\Column(name="Checkbox7Mordillement", type="string", length=255, nullable=true)
*/
private $Checkbox7Mordillement;

/**
* @var string
*
* @ORM\Column(name="Checkbox7Bruxisme", type="string", length=255, nullable=true)
*/
private $Checkbox7Bruxisme;

/**
* @var string
*
* @ORM\Column(name="Checkbox7ChewingGum", type="string", length=255, nullable=true)
*/
private $Checkbox7ChewingGum;

/**
* @var string
*
* @ORM\Column(name="Checkbox7Tabac", type="string", length=255, nullable=true)
*/
private $Checkbox7Tabac;

/**
* @var string
*
* @ORM\Column(name="Checkbox7Autres", type="string", length=255, nullable=true)
*/
private $Checkbox7Autres;

/**
* @var string
*
* @ORM\Column(name="Text7Complement", type="string", length=255, nullable=true)
*/
private $Text7Complement;


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
     * Set checkbox7Negatif
     *
     * @param string $checkbox7Negatif
     *
     * @return Form7
     */
    public function setCheckbox7Negatif($checkbox7Negatif)
    {
        $this->Checkbox7Negatif = $checkbox7Negatif;

        return $this;
    }

    /**
     * Get checkbox7Negatif
     *
     * @return string
     */
    public function getCheckbox7Negatif()
    {
        return $this->Checkbox7Negatif;
    }

    /**
     * Set checkbox7NonRenseigne
     *
     * @param string $checkbox7NonRenseigne
     *
     * @return Form7
     */
    public function setCheckbox7NonRenseigne($checkbox7NonRenseigne)
    {
        $this->Checkbox7NonRenseigne = $checkbox7NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox7NonRenseigne
     *
     * @return string
     */
    public function getCheckbox7NonRenseigne()
    {
        return $this->Checkbox7NonRenseigne;
    }

    /**
     * Set checkbox7Onycophagie
     *
     * @param string $checkbox7Onycophagie
     *
     * @return Form7
     */
    public function setCheckbox7Onycophagie($checkbox7Onycophagie)
    {
        $this->Checkbox7Onycophagie = $checkbox7Onycophagie;

        return $this;
    }

    /**
     * Get checkbox7Onycophagie
     *
     * @return string
     */
    public function getCheckbox7Onycophagie()
    {
        return $this->Checkbox7Onycophagie;
    }

    /**
     * Set checkbox7Mordillement
     *
     * @param string $checkbox7Mordillement
     *
     * @return Form7
     */
    public function setCheckbox7Mordillement($checkbox7Mordillement)
    {
        $this->Checkbox7Mordillement = $checkbox7Mordillement;

        return $this;
    }

    /**
     * Get checkbox7Mordillement
     *
     * @return string
     */
    public function getCheckbox7Mordillement()
    {
        return $this->Checkbox7Mordillement;
    }

    /**
     * Set checkbox7Bruxisme
     *
     * @param string $checkbox7Bruxisme
     *
     * @return Form7
     */
    public function setCheckbox7Bruxisme($checkbox7Bruxisme)
    {
        $this->Checkbox7Bruxisme = $checkbox7Bruxisme;

        return $this;
    }

    /**
     * Get checkbox7Bruxisme
     *
     * @return string
     */
    public function getCheckbox7Bruxisme()
    {
        return $this->Checkbox7Bruxisme;
    }

    /**
     * Set checkbox7ChewingGum
     *
     * @param string $checkbox7ChewingGum
     *
     * @return Form7
     */
    public function setCheckbox7ChewingGum($checkbox7ChewingGum)
    {
        $this->Checkbox7ChewingGum = $checkbox7ChewingGum;

        return $this;
    }

    /**
     * Get checkbox7ChewingGum
     *
     * @return string
     */
    public function getCheckbox7ChewingGum()
    {
        return $this->Checkbox7ChewingGum;
    }

    /**
     * Set checkbox7Tabac
     *
     * @param string $checkbox7Tabac
     *
     * @return Form7
     */
    public function setCheckbox7Tabac($checkbox7Tabac)
    {
        $this->Checkbox7Tabac = $checkbox7Tabac;

        return $this;
    }

    /**
     * Get checkbox7Tabac
     *
     * @return string
     */
    public function getCheckbox7Tabac()
    {
        return $this->Checkbox7Tabac;
    }

    /**
     * Set checkbox7Autres
     *
     * @param string $checkbox7Autres
     *
     * @return Form7
     */
    public function setCheckbox7Autres($checkbox7Autres)
    {
        $this->Checkbox7Autres = $checkbox7Autres;

        return $this;
    }

    /**
     * Get checkbox7Autres
     *
     * @return string
     */
    public function getCheckbox7Autres()
    {
        return $this->Checkbox7Autres;
    }

    /**
     * Set text7Complement
     *
     * @param string $text7Complement
     *
     * @return Form7
     */
    public function setText7Complement($text7Complement)
    {
        $this->Text7Complement = $text7Complement;

        return $this;
    }

    /**
     * Get text7Complement
     *
     * @return string
     */
    public function getText7Complement()
    {
        return $this->Text7Complement;
    }
}
