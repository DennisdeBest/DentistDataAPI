<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form8")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form8
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
* @ORM\Column(name="Checkbox8Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox8Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox8NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox8NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox8Dysfontion", type="string", length=255, nullable=true)
*/
private $Checkbox8Dysfontion;

/**
* @var string
*
* @ORM\Column(name="Checkbox8Deglutition", type="string", length=255, nullable=true)
*/
private $Checkbox8Deglutition;

/**
* @var string
*
* @ORM\Column(name="Text8Complement", type="string", length=255, nullable=true)
*/
private $Text8Complement;

/**
* @var string
*
* @ORM\Column(name="Text8ScoreFriedman", type="string", length=255, nullable=true)
*/
private $Text8ScoreFriedman;

/**
* @var string
*
* @ORM\Column(name="Text8ScoreMallampati", type="string", length=255, nullable=true)
*/
private $Text8ScoreMallampati;


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
     * Set checkbox8Negatif
     *
     * @param string $checkbox8Negatif
     *
     * @return Form8
     */
    public function setCheckbox8Negatif($checkbox8Negatif)
    {
        $this->Checkbox8Negatif = $checkbox8Negatif;

        return $this;
    }

    /**
     * Get checkbox8Negatif
     *
     * @return string
     */
    public function getCheckbox8Negatif()
    {
        return $this->Checkbox8Negatif;
    }

    /**
     * Set checkbox8NonRenseigne
     *
     * @param string $checkbox8NonRenseigne
     *
     * @return Form8
     */
    public function setCheckbox8NonRenseigne($checkbox8NonRenseigne)
    {
        $this->Checkbox8NonRenseigne = $checkbox8NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox8NonRenseigne
     *
     * @return string
     */
    public function getCheckbox8NonRenseigne()
    {
        return $this->Checkbox8NonRenseigne;
    }

    /**
     * Set checkbox8Dysfontion
     *
     * @param string $checkbox8Dysfontion
     *
     * @return Form8
     */
    public function setCheckbox8Dysfontion($checkbox8Dysfontion)
    {
        $this->Checkbox8Dysfontion = $checkbox8Dysfontion;

        return $this;
    }

    /**
     * Get checkbox8Dysfontion
     *
     * @return string
     */
    public function getCheckbox8Dysfontion()
    {
        return $this->Checkbox8Dysfontion;
    }

    /**
     * Set checkbox8Deglutition
     *
     * @param string $checkbox8Deglutition
     *
     * @return Form8
     */
    public function setCheckbox8Deglutition($checkbox8Deglutition)
    {
        $this->Checkbox8Deglutition = $checkbox8Deglutition;

        return $this;
    }

    /**
     * Get checkbox8Deglutition
     *
     * @return string
     */
    public function getCheckbox8Deglutition()
    {
        return $this->Checkbox8Deglutition;
    }

    /**
     * Set text8Complement
     *
     * @param string $text8Complement
     *
     * @return Form8
     */
    public function setText8Complement($text8Complement)
    {
        $this->Text8Complement = $text8Complement;

        return $this;
    }

    /**
     * Get text8Complement
     *
     * @return string
     */
    public function getText8Complement()
    {
        return $this->Text8Complement;
    }

    /**
     * Set text8ScoreFriedman
     *
     * @param string $text8ScoreFriedman
     *
     * @return Form8
     */
    public function setText8ScoreFriedman($text8ScoreFriedman)
    {
        $this->Text8ScoreFriedman = $text8ScoreFriedman;

        return $this;
    }

    /**
     * Get text8ScoreFriedman
     *
     * @return string
     */
    public function getText8ScoreFriedman()
    {
        return $this->Text8ScoreFriedman;
    }

    /**
     * Set text8ScoreMallampati
     *
     * @param string $text8ScoreMallampati
     *
     * @return Form8
     */
    public function setText8ScoreMallampati($text8ScoreMallampati)
    {
        $this->Text8ScoreMallampati = $text8ScoreMallampati;

        return $this;
    }

    /**
     * Get text8ScoreMallampati
     *
     * @return string
     */
    public function getText8ScoreMallampati()
    {
        return $this->Text8ScoreMallampati;
    }
}
