<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form12")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form12
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
* @ORM\Column(name="Checkbox12Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox12Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox12NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox12NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Radio12Dent11", type="string", length=255, nullable=true)
*/
private $Radio12Dent11;

/**
* @var string
*
* @ORM\Column(name="Radio12Dent21", type="string", length=255, nullable=true)
*/
private $Radio12Dent21;

/**
* @var string
*
* @ORM\Column(name="Radio12DentAutre1", type="string", length=255, nullable=true)
*/
private $Radio12DentAutre1;

/**
* @var string
*
* @ORM\Column(name="Radio12DentAutre1Choix", type="string", length=255, nullable=true)
*/
private $Radio12DentAutre1Choix;

/**
* @var string
*
* @ORM\Column(name="Radio12Dent31", type="string", length=255, nullable=true)
*/
private $Radio12Dent31;

/**
* @var string
*
* @ORM\Column(name="Radio12Dent41", type="string", length=255, nullable=true)
*/
private $Radio12Dent41;

/**
* @var string
*
* @ORM\Column(name="Radio12DentAutre2", type="string", length=255, nullable=true)
*/
private $Radio12DentAutre2;

/**
* @var string
*
* @ORM\Column(name="Radio12DentAutre2Choix", type="string", length=255, nullable=true)
*/
private $Radio12DentAutre2Choix;

/**
* @var string
*
* @ORM\Column(name="Number12Surplomb", type="string", length=255, nullable=true)
*/
private $Number12Surplomb;

/**
* @var string
*
* @ORM\Column(name="Checkbox12Surplomb", type="string", length=255, nullable=true)
*/
private $Checkbox12Surplomb;

/**
* @var string
*
* @ORM\Column(name="Number12Recouvrement", type="string", length=255, nullable=true)
*/
private $Number12Recouvrement;

/**
* @var string
*
* @ORM\Column(name="Checkbox12Recouvrement", type="string", length=255, nullable=true)
*/
private $Checkbox12Recouvrement;

/**
* @var string
*
* @ORM\Column(name="Radio12DecalageOui", type="string", length=255, nullable=true)
*/
private $Radio12DecalageOui;

/**
* @var string
*
* @ORM\Column(name="Number12DecalageOui", type="string", length=255, nullable=true)
*/
private $Number12DecalageOui;

/**
* @var string
*
* @ORM\Column(name="Radio12DecalageNon", type="string", length=255, nullable=true)
*/
private $Radio12DecalageNon;


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
     * Set checkbox12Negatif
     *
     * @param string $checkbox12Negatif
     *
     * @return Form12
     */
    public function setCheckbox12Negatif($checkbox12Negatif)
    {
        $this->Checkbox12Negatif = $checkbox12Negatif;

        return $this;
    }

    /**
     * Get checkbox12Negatif
     *
     * @return string
     */
    public function getCheckbox12Negatif()
    {
        return $this->Checkbox12Negatif;
    }

    /**
     * Set checkbox12NonRenseigne
     *
     * @param string $checkbox12NonRenseigne
     *
     * @return Form12
     */
    public function setCheckbox12NonRenseigne($checkbox12NonRenseigne)
    {
        $this->Checkbox12NonRenseigne = $checkbox12NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox12NonRenseigne
     *
     * @return string
     */
    public function getCheckbox12NonRenseigne()
    {
        return $this->Checkbox12NonRenseigne;
    }

    /**
     * Set radio12Dent11
     *
     * @param string $radio12Dent11
     *
     * @return Form12
     */
    public function setRadio12Dent11($radio12Dent11)
    {
        $this->Radio12Dent11 = $radio12Dent11;

        return $this;
    }

    /**
     * Get radio12Dent11
     *
     * @return string
     */
    public function getRadio12Dent11()
    {
        return $this->Radio12Dent11;
    }

    /**
     * Set radio12Dent21
     *
     * @param string $radio12Dent21
     *
     * @return Form12
     */
    public function setRadio12Dent21($radio12Dent21)
    {
        $this->Radio12Dent21 = $radio12Dent21;

        return $this;
    }

    /**
     * Get radio12Dent21
     *
     * @return string
     */
    public function getRadio12Dent21()
    {
        return $this->Radio12Dent21;
    }

    /**
     * Set radio12DentAutre1
     *
     * @param string $radio12DentAutre1
     *
     * @return Form12
     */
    public function setRadio12DentAutre1($radio12DentAutre1)
    {
        $this->Radio12DentAutre1 = $radio12DentAutre1;

        return $this;
    }

    /**
     * Get radio12DentAutre1
     *
     * @return string
     */
    public function getRadio12DentAutre1()
    {
        return $this->Radio12DentAutre1;
    }

    /**
     * Set radio12DentAutre1Choix
     *
     * @param string $radio12DentAutre1Choix
     *
     * @return Form12
     */
    public function setRadio12DentAutre1Choix($radio12DentAutre1Choix)
    {
        $this->Radio12DentAutre1Choix = $radio12DentAutre1Choix;

        return $this;
    }

    /**
     * Get radio12DentAutre1Choix
     *
     * @return string
     */
    public function getRadio12DentAutre1Choix()
    {
        return $this->Radio12DentAutre1Choix;
    }

    /**
     * Set radio12Dent31
     *
     * @param string $radio12Dent31
     *
     * @return Form12
     */
    public function setRadio12Dent31($radio12Dent31)
    {
        $this->Radio12Dent31 = $radio12Dent31;

        return $this;
    }

    /**
     * Get radio12Dent31
     *
     * @return string
     */
    public function getRadio12Dent31()
    {
        return $this->Radio12Dent31;
    }

    /**
     * Set radio12Dent41
     *
     * @param string $radio12Dent41
     *
     * @return Form12
     */
    public function setRadio12Dent41($radio12Dent41)
    {
        $this->Radio12Dent41 = $radio12Dent41;

        return $this;
    }

    /**
     * Get radio12Dent41
     *
     * @return string
     */
    public function getRadio12Dent41()
    {
        return $this->Radio12Dent41;
    }

    /**
     * Set radio12DentAutre2
     *
     * @param string $radio12DentAutre2
     *
     * @return Form12
     */
    public function setRadio12DentAutre2($radio12DentAutre2)
    {
        $this->Radio12DentAutre2 = $radio12DentAutre2;

        return $this;
    }

    /**
     * Get radio12DentAutre2
     *
     * @return string
     */
    public function getRadio12DentAutre2()
    {
        return $this->Radio12DentAutre2;
    }

    /**
     * Set radio12DentAutre2Choix
     *
     * @param string $radio12DentAutre2Choix
     *
     * @return Form12
     */
    public function setRadio12DentAutre2Choix($radio12DentAutre2Choix)
    {
        $this->Radio12DentAutre2Choix = $radio12DentAutre2Choix;

        return $this;
    }

    /**
     * Get radio12DentAutre2Choix
     *
     * @return string
     */
    public function getRadio12DentAutre2Choix()
    {
        return $this->Radio12DentAutre2Choix;
    }

    /**
     * Set number12Surplomb
     *
     * @param string $number12Surplomb
     *
     * @return Form12
     */
    public function setNumber12Surplomb($number12Surplomb)
    {
        $this->Number12Surplomb = $number12Surplomb;

        return $this;
    }

    /**
     * Get number12Surplomb
     *
     * @return string
     */
    public function getNumber12Surplomb()
    {
        return $this->Number12Surplomb;
    }

    /**
     * Set checkbox12Surplomb
     *
     * @param string $checkbox12Surplomb
     *
     * @return Form12
     */
    public function setCheckbox12Surplomb($checkbox12Surplomb)
    {
        $this->Checkbox12Surplomb = $checkbox12Surplomb;

        return $this;
    }

    /**
     * Get checkbox12Surplomb
     *
     * @return string
     */
    public function getCheckbox12Surplomb()
    {
        return $this->Checkbox12Surplomb;
    }

    /**
     * Set number12Recouvrement
     *
     * @param string $number12Recouvrement
     *
     * @return Form12
     */
    public function setNumber12Recouvrement($number12Recouvrement)
    {
        $this->Number12Recouvrement = $number12Recouvrement;

        return $this;
    }

    /**
     * Get number12Recouvrement
     *
     * @return string
     */
    public function getNumber12Recouvrement()
    {
        return $this->Number12Recouvrement;
    }

    /**
     * Set checkbox12Recouvrement
     *
     * @param string $checkbox12Recouvrement
     *
     * @return Form12
     */
    public function setCheckbox12Recouvrement($checkbox12Recouvrement)
    {
        $this->Checkbox12Recouvrement = $checkbox12Recouvrement;

        return $this;
    }

    /**
     * Get checkbox12Recouvrement
     *
     * @return string
     */
    public function getCheckbox12Recouvrement()
    {
        return $this->Checkbox12Recouvrement;
    }

    /**
     * Set radio12DecalageOui
     *
     * @param string $radio12DecalageOui
     *
     * @return Form12
     */
    public function setRadio12DecalageOui($radio12DecalageOui)
    {
        $this->Radio12DecalageOui = $radio12DecalageOui;

        return $this;
    }

    /**
     * Get radio12DecalageOui
     *
     * @return string
     */
    public function getRadio12DecalageOui()
    {
        return $this->Radio12DecalageOui;
    }

    /**
     * Set number12DecalageOui
     *
     * @param string $number12DecalageOui
     *
     * @return Form12
     */
    public function setNumber12DecalageOui($number12DecalageOui)
    {
        $this->Number12DecalageOui = $number12DecalageOui;

        return $this;
    }

    /**
     * Get number12DecalageOui
     *
     * @return string
     */
    public function getNumber12DecalageOui()
    {
        return $this->Number12DecalageOui;
    }

    /**
     * Set radio12DecalageNon
     *
     * @param string $radio12DecalageNon
     *
     * @return Form12
     */
    public function setRadio12DecalageNon($radio12DecalageNon)
    {
        $this->Radio12DecalageNon = $radio12DecalageNon;

        return $this;
    }

    /**
     * Get radio12DecalageNon
     *
     * @return string
     */
    public function getRadio12DecalageNon()
    {
        return $this->Radio12DecalageNon;
    }
}
