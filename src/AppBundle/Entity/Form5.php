<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form5")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form5
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
* @ORM\Column(name="Checkbox5Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox5Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox5NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox5NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Radio5ApneOui", type="string", length=255, nullable=true)
*/
private $Radio5ApneOui;

/**
* @var string
*
* @ORM\Column(name="Radio5ApneNon", type="string", length=255, nullable=true)
*/
private $Radio5ApneNon;

/**
* @var string
*
* @ORM\Column(name="Text5Symptomes", type="string", length=255, nullable=true)
*/
private $Text5Symptomes;

/**
* @var string
*
* @ORM\Column(name="Text5Traitement", type="string", length=255, nullable=true)
*/
private $Text5Traitement;

/**
* @var string
*
* @ORM\Column(name="Text5ScorePSQI", type="string", length=255, nullable=true)
*/
private $Text5ScorePSQI;

/**
* @var string
*
* @ORM\Column(name="Text5ScoreISI", type="string", length=255, nullable=true)
*/
private $Text5ScoreISI;


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
     * Set checkbox5Negatif
     *
     * @param string $checkbox5Negatif
     *
     * @return Form5
     */
    public function setCheckbox5Negatif($checkbox5Negatif)
    {
        $this->Checkbox5Negatif = $checkbox5Negatif;

        return $this;
    }

    /**
     * Get checkbox5Negatif
     *
     * @return string
     */
    public function getCheckbox5Negatif()
    {
        return $this->Checkbox5Negatif;
    }

    /**
     * Set checkbox5NonRenseigne
     *
     * @param string $checkbox5NonRenseigne
     *
     * @return Form5
     */
    public function setCheckbox5NonRenseigne($checkbox5NonRenseigne)
    {
        $this->Checkbox5NonRenseigne = $checkbox5NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox5NonRenseigne
     *
     * @return string
     */
    public function getCheckbox5NonRenseigne()
    {
        return $this->Checkbox5NonRenseigne;
    }

    /**
     * Set radio5ApneOui
     *
     * @param string $radio5ApneOui
     *
     * @return Form5
     */
    public function setRadio5ApneOui($radio5ApneOui)
    {
        $this->Radio5ApneOui = $radio5ApneOui;

        return $this;
    }

    /**
     * Get radio5ApneOui
     *
     * @return string
     */
    public function getRadio5ApneOui()
    {
        return $this->Radio5ApneOui;
    }

    /**
     * Set radio5ApneNon
     *
     * @param string $radio5ApneNon
     *
     * @return Form5
     */
    public function setRadio5ApneNon($radio5ApneNon)
    {
        $this->Radio5ApneNon = $radio5ApneNon;

        return $this;
    }

    /**
     * Get radio5ApneNon
     *
     * @return string
     */
    public function getRadio5ApneNon()
    {
        return $this->Radio5ApneNon;
    }

    /**
     * Set text5Symptomes
     *
     * @param string $text5Symptomes
     *
     * @return Form5
     */
    public function setText5Symptomes($text5Symptomes)
    {
        $this->Text5Symptomes = $text5Symptomes;

        return $this;
    }

    /**
     * Get text5Symptomes
     *
     * @return string
     */
    public function getText5Symptomes()
    {
        return $this->Text5Symptomes;
    }

    /**
     * Set text5Traitement
     *
     * @param string $text5Traitement
     *
     * @return Form5
     */
    public function setText5Traitement($text5Traitement)
    {
        $this->Text5Traitement = $text5Traitement;

        return $this;
    }

    /**
     * Get text5Traitement
     *
     * @return string
     */
    public function getText5Traitement()
    {
        return $this->Text5Traitement;
    }

    /**
     * Set text5ScorePSQI
     *
     * @param string $text5ScorePSQI
     *
     * @return Form5
     */
    public function setText5ScorePSQI($text5ScorePSQI)
    {
        $this->Text5ScorePSQI = $text5ScorePSQI;

        return $this;
    }

    /**
     * Get text5ScorePSQI
     *
     * @return string
     */
    public function getText5ScorePSQI()
    {
        return $this->Text5ScorePSQI;
    }

    /**
     * Set text5ScoreISI
     *
     * @param string $text5ScoreISI
     *
     * @return Form5
     */
    public function setText5ScoreISI($text5ScoreISI)
    {
        $this->Text5ScoreISI = $text5ScoreISI;

        return $this;
    }

    /**
     * Get text5ScoreISI
     *
     * @return string
     */
    public function getText5ScoreISI()
    {
        return $this->Text5ScoreISI;
    }
}
