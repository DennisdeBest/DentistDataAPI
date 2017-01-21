<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form20")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form20
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
* @ORM\Column(name="Checkbox20Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox20Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox20NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox20NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox20Erosion", type="string", length=255, nullable=true)
*/
private $Checkbox20Erosion;

/**
* @var string
*
* @ORM\Column(name="Text20Erosion", type="string", length=255, nullable=true)
*/
private $Text20Erosion;

/**
* @var string
*
* @ORM\Column(name="Checkbox20Abrasion", type="string", length=255, nullable=true)
*/
private $Checkbox20Abrasion;

/**
* @var string
*
* @ORM\Column(name="Text20Abrasion", type="string", length=255, nullable=true)
*/
private $Text20Abrasion;

/**
* @var string
*
* @ORM\Column(name="Checkbox20Attrition", type="string", length=255, nullable=true)
*/
private $Checkbox20Attrition;

/**
* @var string
*
* @ORM\Column(name="Text20Attrition", type="string", length=255, nullable=true)
*/
private $Text20Attrition;

/**
* @var string
*
* @ORM\Column(name="Checkbox20BruxismeSom", type="string", length=255, nullable=true)
*/
private $Checkbox20BruxismeSom;

/**
* @var string
*
* @ORM\Column(name="Checkbox20BruxismeEve", type="string", length=255, nullable=true)
*/
private $Checkbox20BruxismeEve;

/**
* @var string
*
* @ORM\Column(name="Textarea20Info", type="string", length=255, nullable=true)
*/
private $Textarea20Info;


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
     * Set checkbox20Negatif
     *
     * @param string $checkbox20Negatif
     *
     * @return Form20
     */
    public function setCheckbox20Negatif($checkbox20Negatif)
    {
        $this->Checkbox20Negatif = $checkbox20Negatif;

        return $this;
    }

    /**
     * Get checkbox20Negatif
     *
     * @return string
     */
    public function getCheckbox20Negatif()
    {
        return $this->Checkbox20Negatif;
    }

    /**
     * Set checkbox20NonRenseigne
     *
     * @param string $checkbox20NonRenseigne
     *
     * @return Form20
     */
    public function setCheckbox20NonRenseigne($checkbox20NonRenseigne)
    {
        $this->Checkbox20NonRenseigne = $checkbox20NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox20NonRenseigne
     *
     * @return string
     */
    public function getCheckbox20NonRenseigne()
    {
        return $this->Checkbox20NonRenseigne;
    }

    /**
     * Set checkbox20Erosion
     *
     * @param string $checkbox20Erosion
     *
     * @return Form20
     */
    public function setCheckbox20Erosion($checkbox20Erosion)
    {
        $this->Checkbox20Erosion = $checkbox20Erosion;

        return $this;
    }

    /**
     * Get checkbox20Erosion
     *
     * @return string
     */
    public function getCheckbox20Erosion()
    {
        return $this->Checkbox20Erosion;
    }

    /**
     * Set text20Erosion
     *
     * @param string $text20Erosion
     *
     * @return Form20
     */
    public function setText20Erosion($text20Erosion)
    {
        $this->Text20Erosion = $text20Erosion;

        return $this;
    }

    /**
     * Get text20Erosion
     *
     * @return string
     */
    public function getText20Erosion()
    {
        return $this->Text20Erosion;
    }

    /**
     * Set checkbox20Abrasion
     *
     * @param string $checkbox20Abrasion
     *
     * @return Form20
     */
    public function setCheckbox20Abrasion($checkbox20Abrasion)
    {
        $this->Checkbox20Abrasion = $checkbox20Abrasion;

        return $this;
    }

    /**
     * Get checkbox20Abrasion
     *
     * @return string
     */
    public function getCheckbox20Abrasion()
    {
        return $this->Checkbox20Abrasion;
    }

    /**
     * Set text20Abrasion
     *
     * @param string $text20Abrasion
     *
     * @return Form20
     */
    public function setText20Abrasion($text20Abrasion)
    {
        $this->Text20Abrasion = $text20Abrasion;

        return $this;
    }

    /**
     * Get text20Abrasion
     *
     * @return string
     */
    public function getText20Abrasion()
    {
        return $this->Text20Abrasion;
    }

    /**
     * Set checkbox20Attrition
     *
     * @param string $checkbox20Attrition
     *
     * @return Form20
     */
    public function setCheckbox20Attrition($checkbox20Attrition)
    {
        $this->Checkbox20Attrition = $checkbox20Attrition;

        return $this;
    }

    /**
     * Get checkbox20Attrition
     *
     * @return string
     */
    public function getCheckbox20Attrition()
    {
        return $this->Checkbox20Attrition;
    }

    /**
     * Set text20Attrition
     *
     * @param string $text20Attrition
     *
     * @return Form20
     */
    public function setText20Attrition($text20Attrition)
    {
        $this->Text20Attrition = $text20Attrition;

        return $this;
    }

    /**
     * Get text20Attrition
     *
     * @return string
     */
    public function getText20Attrition()
    {
        return $this->Text20Attrition;
    }

    /**
     * Set checkbox20BruxismeSom
     *
     * @param string $checkbox20BruxismeSom
     *
     * @return Form20
     */
    public function setCheckbox20BruxismeSom($checkbox20BruxismeSom)
    {
        $this->Checkbox20BruxismeSom = $checkbox20BruxismeSom;

        return $this;
    }

    /**
     * Get checkbox20BruxismeSom
     *
     * @return string
     */
    public function getCheckbox20BruxismeSom()
    {
        return $this->Checkbox20BruxismeSom;
    }

    /**
     * Set checkbox20BruxismeEve
     *
     * @param string $checkbox20BruxismeEve
     *
     * @return Form20
     */
    public function setCheckbox20BruxismeEve($checkbox20BruxismeEve)
    {
        $this->Checkbox20BruxismeEve = $checkbox20BruxismeEve;

        return $this;
    }

    /**
     * Get checkbox20BruxismeEve
     *
     * @return string
     */
    public function getCheckbox20BruxismeEve()
    {
        return $this->Checkbox20BruxismeEve;
    }

    /**
     * Set textarea20Info
     *
     * @param string $textarea20Info
     *
     * @return Form20
     */
    public function setTextarea20Info($textarea20Info)
    {
        $this->Textarea20Info = $textarea20Info;

        return $this;
    }

    /**
     * Get textarea20Info
     *
     * @return string
     */
    public function getTextarea20Info()
    {
        return $this->Textarea20Info;
    }
}
