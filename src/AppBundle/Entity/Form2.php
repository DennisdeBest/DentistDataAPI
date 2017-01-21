<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form2")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form2
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
* @ORM\Column(name="Checkbox2Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox2Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox2NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox2NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Text2DouleurUn", type="string", length=255, nullable=true)
*/
private $Text2DouleurUn;

/**
* @var string
*
* @ORM\Column(name="Range2FondDouleur", type="string", length=255, nullable=true)
*/
private $Range2FondDouleur;

/**
* @var string
*
* @ORM\Column(name="Range2PicDouleur", type="string", length=255, nullable=true)
*/
private $Range2PicDouleur;

/**
* @var string
*
* @ORM\Column(name="Date2DateDebut", type="string", length=255, nullable=true)
*/
private $Date2DateDebut;

/**
* @var string
*
* @ORM\Column(name="Text2Qualite", type="string", length=255, nullable=true)
*/
private $Text2Qualite;

/**
* @var string
*
* @ORM\Column(name="Text2Duree", type="string", length=255, nullable=true)
*/
private $Text2Duree;

/**
* @var string
*
* @ORM\Column(name="Text2Frequence", type="string", length=255, nullable=true)
*/
private $Text2Frequence;

/**
* @var string
*
* @ORM\Column(name="Text2Circonstance", type="string", length=255, nullable=true)
*/
private $Text2Circonstance;

/**
* @var string
*
* @ORM\Column(name="Text2Modifier", type="string", length=255, nullable=true)
*/
private $Text2Modifier;

/**
* @var string
*
* @ORM\Column(name="Text2Traitement", type="string", length=255, nullable=true)
*/
private $Text2Traitement;


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
     * Set checkbox2Negatif
     *
     * @param string $checkbox2Negatif
     *
     * @return Form2
     */
    public function setCheckbox2Negatif($checkbox2Negatif)
    {
        $this->Checkbox2Negatif = $checkbox2Negatif;

        return $this;
    }

    /**
     * Get checkbox2Negatif
     *
     * @return string
     */
    public function getCheckbox2Negatif()
    {
        return $this->Checkbox2Negatif;
    }

    /**
     * Set checkbox2NonRenseigne
     *
     * @param string $checkbox2NonRenseigne
     *
     * @return Form2
     */
    public function setCheckbox2NonRenseigne($checkbox2NonRenseigne)
    {
        $this->Checkbox2NonRenseigne = $checkbox2NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox2NonRenseigne
     *
     * @return string
     */
    public function getCheckbox2NonRenseigne()
    {
        return $this->Checkbox2NonRenseigne;
    }

    /**
     * Set text2DouleurUn
     *
     * @param string $text2DouleurUn
     *
     * @return Form2
     */
    public function setText2DouleurUn($text2DouleurUn)
    {
        $this->Text2DouleurUn = $text2DouleurUn;

        return $this;
    }

    /**
     * Get text2DouleurUn
     *
     * @return string
     */
    public function getText2DouleurUn()
    {
        return $this->Text2DouleurUn;
    }

    /**
     * Set range2FondDouleur
     *
     * @param string $range2FondDouleur
     *
     * @return Form2
     */
    public function setRange2FondDouleur($range2FondDouleur)
    {
        $this->Range2FondDouleur = $range2FondDouleur;

        return $this;
    }

    /**
     * Get range2FondDouleur
     *
     * @return string
     */
    public function getRange2FondDouleur()
    {
        return $this->Range2FondDouleur;
    }

    /**
     * Set range2PicDouleur
     *
     * @param string $range2PicDouleur
     *
     * @return Form2
     */
    public function setRange2PicDouleur($range2PicDouleur)
    {
        $this->Range2PicDouleur = $range2PicDouleur;

        return $this;
    }

    /**
     * Get range2PicDouleur
     *
     * @return string
     */
    public function getRange2PicDouleur()
    {
        return $this->Range2PicDouleur;
    }

    /**
     * Set date2DateDebut
     *
     * @param string $date2DateDebut
     *
     * @return Form2
     */
    public function setDate2DateDebut($date2DateDebut)
    {
        $this->Date2DateDebut = $date2DateDebut;

        return $this;
    }

    /**
     * Get date2DateDebut
     *
     * @return string
     */
    public function getDate2DateDebut()
    {
        return $this->Date2DateDebut;
    }

    /**
     * Set text2Qualite
     *
     * @param string $text2Qualite
     *
     * @return Form2
     */
    public function setText2Qualite($text2Qualite)
    {
        $this->Text2Qualite = $text2Qualite;

        return $this;
    }

    /**
     * Get text2Qualite
     *
     * @return string
     */
    public function getText2Qualite()
    {
        return $this->Text2Qualite;
    }

    /**
     * Set text2Duree
     *
     * @param string $text2Duree
     *
     * @return Form2
     */
    public function setText2Duree($text2Duree)
    {
        $this->Text2Duree = $text2Duree;

        return $this;
    }

    /**
     * Get text2Duree
     *
     * @return string
     */
    public function getText2Duree()
    {
        return $this->Text2Duree;
    }

    /**
     * Set text2Frequence
     *
     * @param string $text2Frequence
     *
     * @return Form2
     */
    public function setText2Frequence($text2Frequence)
    {
        $this->Text2Frequence = $text2Frequence;

        return $this;
    }

    /**
     * Get text2Frequence
     *
     * @return string
     */
    public function getText2Frequence()
    {
        return $this->Text2Frequence;
    }

    /**
     * Set text2Circonstance
     *
     * @param string $text2Circonstance
     *
     * @return Form2
     */
    public function setText2Circonstance($text2Circonstance)
    {
        $this->Text2Circonstance = $text2Circonstance;

        return $this;
    }

    /**
     * Get text2Circonstance
     *
     * @return string
     */
    public function getText2Circonstance()
    {
        return $this->Text2Circonstance;
    }

    /**
     * Set text2Modifier
     *
     * @param string $text2Modifier
     *
     * @return Form2
     */
    public function setText2Modifier($text2Modifier)
    {
        $this->Text2Modifier = $text2Modifier;

        return $this;
    }

    /**
     * Get text2Modifier
     *
     * @return string
     */
    public function getText2Modifier()
    {
        return $this->Text2Modifier;
    }

    /**
     * Set text2Traitement
     *
     * @param string $text2Traitement
     *
     * @return Form2
     */
    public function setText2Traitement($text2Traitement)
    {
        $this->Text2Traitement = $text2Traitement;

        return $this;
    }

    /**
     * Get text2Traitement
     *
     * @return string
     */
    public function getText2Traitement()
    {
        return $this->Text2Traitement;
    }
}
