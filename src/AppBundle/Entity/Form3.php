<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form3")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form3
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
* @ORM\Column(name="Checkbox3Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox3Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox3NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox3NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Text3Familial", type="string", length=255, nullable=true)
*/
private $Text3Familial;

/**
* @var string
*
* @ORM\Column(name="Text3Social", type="string", length=255, nullable=true)
*/
private $Text3Social;

/**
* @var string
*
* @ORM\Column(name="Text3Professionnel", type="string", length=255, nullable=true)
*/
private $Text3Professionnel;

/**
* @var string
*
* @ORM\Column(name="Text3Anxiete", type="string", length=255, nullable=true)
*/
private $Text3Anxiete;

/**
* @var string
*
* @ORM\Column(name="Text3Depression", type="string", length=255, nullable=true)
*/
private $Text3Depression;

/**
* @var string
*
* @ORM\Column(name="Text3Stress", type="string", length=255, nullable=true)
*/
private $Text3Stress;


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
     * Set checkbox3Negatif
     *
     * @param string $checkbox3Negatif
     *
     * @return Form3
     */
    public function setCheckbox3Negatif($checkbox3Negatif)
    {
        $this->Checkbox3Negatif = $checkbox3Negatif;

        return $this;
    }

    /**
     * Get checkbox3Negatif
     *
     * @return string
     */
    public function getCheckbox3Negatif()
    {
        return $this->Checkbox3Negatif;
    }

    /**
     * Set checkbox3NonRenseigne
     *
     * @param string $checkbox3NonRenseigne
     *
     * @return Form3
     */
    public function setCheckbox3NonRenseigne($checkbox3NonRenseigne)
    {
        $this->Checkbox3NonRenseigne = $checkbox3NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox3NonRenseigne
     *
     * @return string
     */
    public function getCheckbox3NonRenseigne()
    {
        return $this->Checkbox3NonRenseigne;
    }

    /**
     * Set text3Familial
     *
     * @param string $text3Familial
     *
     * @return Form3
     */
    public function setText3Familial($text3Familial)
    {
        $this->Text3Familial = $text3Familial;

        return $this;
    }

    /**
     * Get text3Familial
     *
     * @return string
     */
    public function getText3Familial()
    {
        return $this->Text3Familial;
    }

    /**
     * Set text3Social
     *
     * @param string $text3Social
     *
     * @return Form3
     */
    public function setText3Social($text3Social)
    {
        $this->Text3Social = $text3Social;

        return $this;
    }

    /**
     * Get text3Social
     *
     * @return string
     */
    public function getText3Social()
    {
        return $this->Text3Social;
    }

    /**
     * Set text3Professionnel
     *
     * @param string $text3Professionnel
     *
     * @return Form3
     */
    public function setText3Professionnel($text3Professionnel)
    {
        $this->Text3Professionnel = $text3Professionnel;

        return $this;
    }

    /**
     * Get text3Professionnel
     *
     * @return string
     */
    public function getText3Professionnel()
    {
        return $this->Text3Professionnel;
    }

    /**
     * Set text3Anxiete
     *
     * @param string $text3Anxiete
     *
     * @return Form3
     */
    public function setText3Anxiete($text3Anxiete)
    {
        $this->Text3Anxiete = $text3Anxiete;

        return $this;
    }

    /**
     * Get text3Anxiete
     *
     * @return string
     */
    public function getText3Anxiete()
    {
        return $this->Text3Anxiete;
    }

    /**
     * Set text3Depression
     *
     * @param string $text3Depression
     *
     * @return Form3
     */
    public function setText3Depression($text3Depression)
    {
        $this->Text3Depression = $text3Depression;

        return $this;
    }

    /**
     * Get text3Depression
     *
     * @return string
     */
    public function getText3Depression()
    {
        return $this->Text3Depression;
    }

    /**
     * Set text3Stress
     *
     * @param string $text3Stress
     *
     * @return Form3
     */
    public function setText3Stress($text3Stress)
    {
        $this->Text3Stress = $text3Stress;

        return $this;
    }

    /**
     * Get text3Stress
     *
     * @return string
     */
    public function getText3Stress()
    {
        return $this->Text3Stress;
    }
}
