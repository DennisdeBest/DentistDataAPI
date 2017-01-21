<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form14")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form14
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
* @ORM\Column(name="Checkbox14Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox14Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox14NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox14NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox14Rectiligne", type="string", length=255, nullable=true)
*/
private $Checkbox14Rectiligne;

/**
* @var string
*
* @ORM\Column(name="Checkbox14ReflexionDroit", type="string", length=255, nullable=true)
*/
private $Checkbox14ReflexionDroit;

/**
* @var string
*
* @ORM\Column(name="Checkbox14ReflexionGauche", type="string", length=255, nullable=true)
*/
private $Checkbox14ReflexionGauche;

/**
* @var string
*
* @ORM\Column(name="Checkbox14DevDroit", type="string", length=255, nullable=true)
*/
private $Checkbox14DevDroit;

/**
* @var string
*
* @ORM\Column(name="Checkbox14DevGauche", type="string", length=255, nullable=true)
*/
private $Checkbox14DevGauche;


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
     * Set checkbox14Negatif
     *
     * @param string $checkbox14Negatif
     *
     * @return Form14
     */
    public function setCheckbox14Negatif($checkbox14Negatif)
    {
        $this->Checkbox14Negatif = $checkbox14Negatif;

        return $this;
    }

    /**
     * Get checkbox14Negatif
     *
     * @return string
     */
    public function getCheckbox14Negatif()
    {
        return $this->Checkbox14Negatif;
    }

    /**
     * Set checkbox14NonRenseigne
     *
     * @param string $checkbox14NonRenseigne
     *
     * @return Form14
     */
    public function setCheckbox14NonRenseigne($checkbox14NonRenseigne)
    {
        $this->Checkbox14NonRenseigne = $checkbox14NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox14NonRenseigne
     *
     * @return string
     */
    public function getCheckbox14NonRenseigne()
    {
        return $this->Checkbox14NonRenseigne;
    }

    /**
     * Set checkbox14Rectiligne
     *
     * @param string $checkbox14Rectiligne
     *
     * @return Form14
     */
    public function setCheckbox14Rectiligne($checkbox14Rectiligne)
    {
        $this->Checkbox14Rectiligne = $checkbox14Rectiligne;

        return $this;
    }

    /**
     * Get checkbox14Rectiligne
     *
     * @return string
     */
    public function getCheckbox14Rectiligne()
    {
        return $this->Checkbox14Rectiligne;
    }

    /**
     * Set checkbox14ReflexionDroit
     *
     * @param string $checkbox14ReflexionDroit
     *
     * @return Form14
     */
    public function setCheckbox14ReflexionDroit($checkbox14ReflexionDroit)
    {
        $this->Checkbox14ReflexionDroit = $checkbox14ReflexionDroit;

        return $this;
    }

    /**
     * Get checkbox14ReflexionDroit
     *
     * @return string
     */
    public function getCheckbox14ReflexionDroit()
    {
        return $this->Checkbox14ReflexionDroit;
    }

    /**
     * Set checkbox14ReflexionGauche
     *
     * @param string $checkbox14ReflexionGauche
     *
     * @return Form14
     */
    public function setCheckbox14ReflexionGauche($checkbox14ReflexionGauche)
    {
        $this->Checkbox14ReflexionGauche = $checkbox14ReflexionGauche;

        return $this;
    }

    /**
     * Get checkbox14ReflexionGauche
     *
     * @return string
     */
    public function getCheckbox14ReflexionGauche()
    {
        return $this->Checkbox14ReflexionGauche;
    }

    /**
     * Set checkbox14DevDroit
     *
     * @param string $checkbox14DevDroit
     *
     * @return Form14
     */
    public function setCheckbox14DevDroit($checkbox14DevDroit)
    {
        $this->Checkbox14DevDroit = $checkbox14DevDroit;

        return $this;
    }

    /**
     * Get checkbox14DevDroit
     *
     * @return string
     */
    public function getCheckbox14DevDroit()
    {
        return $this->Checkbox14DevDroit;
    }

    /**
     * Set checkbox14DevGauche
     *
     * @param string $checkbox14DevGauche
     *
     * @return Form14
     */
    public function setCheckbox14DevGauche($checkbox14DevGauche)
    {
        $this->Checkbox14DevGauche = $checkbox14DevGauche;

        return $this;
    }

    /**
     * Get checkbox14DevGauche
     *
     * @return string
     */
    public function getCheckbox14DevGauche()
    {
        return $this->Checkbox14DevGauche;
    }
}
