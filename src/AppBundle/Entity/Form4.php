<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form4")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form4
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
* @ORM\Column(name="Checkbox4Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox4Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox4NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox4NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Text4Rachidienne", type="string", length=255, nullable=true)
*/
private $Text4Rachidienne;

/**
* @var string
*
* @ORM\Column(name="Text4Cephalique", type="string", length=255, nullable=true)
*/
private $Text4Cephalique;


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
     * Set checkbox4Negatif
     *
     * @param string $checkbox4Negatif
     *
     * @return Form4
     */
    public function setCheckbox4Negatif($checkbox4Negatif)
    {
        $this->Checkbox4Negatif = $checkbox4Negatif;

        return $this;
    }

    /**
     * Get checkbox4Negatif
     *
     * @return string
     */
    public function getCheckbox4Negatif()
    {
        return $this->Checkbox4Negatif;
    }

    /**
     * Set checkbox4NonRenseigne
     *
     * @param string $checkbox4NonRenseigne
     *
     * @return Form4
     */
    public function setCheckbox4NonRenseigne($checkbox4NonRenseigne)
    {
        $this->Checkbox4NonRenseigne = $checkbox4NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox4NonRenseigne
     *
     * @return string
     */
    public function getCheckbox4NonRenseigne()
    {
        return $this->Checkbox4NonRenseigne;
    }

    /**
     * Set text4Rachidienne
     *
     * @param string $text4Rachidienne
     *
     * @return Form4
     */
    public function setText4Rachidienne($text4Rachidienne)
    {
        $this->Text4Rachidienne = $text4Rachidienne;

        return $this;
    }

    /**
     * Get text4Rachidienne
     *
     * @return string
     */
    public function getText4Rachidienne()
    {
        return $this->Text4Rachidienne;
    }

    /**
     * Set text4Cephalique
     *
     * @param string $text4Cephalique
     *
     * @return Form4
     */
    public function setText4Cephalique($text4Cephalique)
    {
        $this->Text4Cephalique = $text4Cephalique;

        return $this;
    }

    /**
     * Get text4Cephalique
     *
     * @return string
     */
    public function getText4Cephalique()
    {
        return $this->Text4Cephalique;
    }
}
