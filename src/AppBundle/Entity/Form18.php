<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form18")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form18
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
* @ORM\Column(name="Checkbox18Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox18Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox18NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox18NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Radio18DroitSouple", type="string", length=255, nullable=true)
*/
private $Radio18DroitSouple;

/**
* @var string
*
* @ORM\Column(name="Radio18DroitRaide", type="string", length=255, nullable=true)
*/
private $Radio18DroitRaide;

/**
* @var string
*
* @ORM\Column(name="Radio18GaucheSouple", type="string", length=255, nullable=true)
*/
private $Radio18GaucheSouple;

/**
* @var string
*
* @ORM\Column(name="Radio18GaucheRaide", type="string", length=255, nullable=true)
*/
private $Radio18GaucheRaide;


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
     * Set checkbox18Negatif
     *
     * @param string $checkbox18Negatif
     *
     * @return Form18
     */
    public function setCheckbox18Negatif($checkbox18Negatif)
    {
        $this->Checkbox18Negatif = $checkbox18Negatif;

        return $this;
    }

    /**
     * Get checkbox18Negatif
     *
     * @return string
     */
    public function getCheckbox18Negatif()
    {
        return $this->Checkbox18Negatif;
    }

    /**
     * Set checkbox18NonRenseigne
     *
     * @param string $checkbox18NonRenseigne
     *
     * @return Form18
     */
    public function setCheckbox18NonRenseigne($checkbox18NonRenseigne)
    {
        $this->Checkbox18NonRenseigne = $checkbox18NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox18NonRenseigne
     *
     * @return string
     */
    public function getCheckbox18NonRenseigne()
    {
        return $this->Checkbox18NonRenseigne;
    }

    /**
     * Set radio18DroitSouple
     *
     * @param string $radio18DroitSouple
     *
     * @return Form18
     */
    public function setRadio18DroitSouple($radio18DroitSouple)
    {
        $this->Radio18DroitSouple = $radio18DroitSouple;

        return $this;
    }

    /**
     * Get radio18DroitSouple
     *
     * @return string
     */
    public function getRadio18DroitSouple()
    {
        return $this->Radio18DroitSouple;
    }

    /**
     * Set radio18DroitRaide
     *
     * @param string $radio18DroitRaide
     *
     * @return Form18
     */
    public function setRadio18DroitRaide($radio18DroitRaide)
    {
        $this->Radio18DroitRaide = $radio18DroitRaide;

        return $this;
    }

    /**
     * Get radio18DroitRaide
     *
     * @return string
     */
    public function getRadio18DroitRaide()
    {
        return $this->Radio18DroitRaide;
    }

    /**
     * Set radio18GaucheSouple
     *
     * @param string $radio18GaucheSouple
     *
     * @return Form18
     */
    public function setRadio18GaucheSouple($radio18GaucheSouple)
    {
        $this->Radio18GaucheSouple = $radio18GaucheSouple;

        return $this;
    }

    /**
     * Get radio18GaucheSouple
     *
     * @return string
     */
    public function getRadio18GaucheSouple()
    {
        return $this->Radio18GaucheSouple;
    }

    /**
     * Set radio18GaucheRaide
     *
     * @param string $radio18GaucheRaide
     *
     * @return Form18
     */
    public function setRadio18GaucheRaide($radio18GaucheRaide)
    {
        $this->Radio18GaucheRaide = $radio18GaucheRaide;

        return $this;
    }

    /**
     * Get radio18GaucheRaide
     *
     * @return string
     */
    public function getRadio18GaucheRaide()
    {
        return $this->Radio18GaucheRaide;
    }
}
