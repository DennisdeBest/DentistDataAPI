<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form15")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form15
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
* @ORM\Column(name="Checkbox15Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox15Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox15NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox15NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraClaq1", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraClaq1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraCrep1", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraCrep1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatClaq1", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatClaq1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatCrep1", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatCrep1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitDouleur1", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitDouleur1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraClaq1", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraClaq1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraCrep1", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraCrep1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatClaq1", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatClaq1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatCrep1", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatCrep1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GaucheDouleur1", type="string", length=255, nullable=true)
*/
private $Checkbox15GaucheDouleur1;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraClaq2", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraClaq2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraCrep2", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraCrep2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatClaq2", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatClaq2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatCrep2", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatCrep2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitDouleur2", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitDouleur2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraClaq2", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraClaq2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraCrep2", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraCrep2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatClaq2", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatClaq2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatCrep2", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatCrep2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GaucheDouleur2", type="string", length=255, nullable=true)
*/
private $Checkbox15GaucheDouleur2;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraClaq3", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraClaq3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraCrep3", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraCrep3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatClaq3", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatClaq3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatCrep3", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatCrep3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitDouleur3", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitDouleur3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraClaq3", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraClaq3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraCrep3", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraCrep3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatClaq3", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatClaq3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatCrep3", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatCrep3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GaucheDouleur3", type="string", length=255, nullable=true)
*/
private $Checkbox15GaucheDouleur3;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraClaq4", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraClaq4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraCrep4", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraCrep4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatClaq4", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatClaq4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatCrep4", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatCrep4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitDouleur4", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitDouleur4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraClaq4", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraClaq4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraCrep4", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraCrep4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatClaq4", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatClaq4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatCrep4", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatCrep4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GaucheDouleur4", type="string", length=255, nullable=true)
*/
private $Checkbox15GaucheDouleur4;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraClaq5", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraClaq5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPraCrep5", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPraCrep5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatClaq5", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatClaq5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitPatCrep5", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitPatCrep5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15DroitDouleur5", type="string", length=255, nullable=true)
*/
private $Checkbox15DroitDouleur5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraClaq5", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraClaq5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePraCrep5", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePraCrep5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatClaq5", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatClaq5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GauchePatCrep5", type="string", length=255, nullable=true)
*/
private $Checkbox15GauchePatCrep5;

/**
* @var string
*
* @ORM\Column(name="Checkbox15GaucheDouleur5", type="string", length=255, nullable=true)
*/
private $Checkbox15GaucheDouleur5;


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
     * Set checkbox15Negatif
     *
     * @param string $checkbox15Negatif
     *
     * @return Form15
     */
    public function setCheckbox15Negatif($checkbox15Negatif)
    {
        $this->Checkbox15Negatif = $checkbox15Negatif;

        return $this;
    }

    /**
     * Get checkbox15Negatif
     *
     * @return string
     */
    public function getCheckbox15Negatif()
    {
        return $this->Checkbox15Negatif;
    }

    /**
     * Set checkbox15NonRenseigne
     *
     * @param string $checkbox15NonRenseigne
     *
     * @return Form15
     */
    public function setCheckbox15NonRenseigne($checkbox15NonRenseigne)
    {
        $this->Checkbox15NonRenseigne = $checkbox15NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox15NonRenseigne
     *
     * @return string
     */
    public function getCheckbox15NonRenseigne()
    {
        return $this->Checkbox15NonRenseigne;
    }

    /**
     * Set checkbox15DroitPraClaq1
     *
     * @param string $checkbox15DroitPraClaq1
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraClaq1($checkbox15DroitPraClaq1)
    {
        $this->Checkbox15DroitPraClaq1 = $checkbox15DroitPraClaq1;

        return $this;
    }

    /**
     * Get checkbox15DroitPraClaq1
     *
     * @return string
     */
    public function getCheckbox15DroitPraClaq1()
    {
        return $this->Checkbox15DroitPraClaq1;
    }

    /**
     * Set checkbox15DroitPraCrep1
     *
     * @param string $checkbox15DroitPraCrep1
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraCrep1($checkbox15DroitPraCrep1)
    {
        $this->Checkbox15DroitPraCrep1 = $checkbox15DroitPraCrep1;

        return $this;
    }

    /**
     * Get checkbox15DroitPraCrep1
     *
     * @return string
     */
    public function getCheckbox15DroitPraCrep1()
    {
        return $this->Checkbox15DroitPraCrep1;
    }

    /**
     * Set checkbox15DroitPatClaq1
     *
     * @param string $checkbox15DroitPatClaq1
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatClaq1($checkbox15DroitPatClaq1)
    {
        $this->Checkbox15DroitPatClaq1 = $checkbox15DroitPatClaq1;

        return $this;
    }

    /**
     * Get checkbox15DroitPatClaq1
     *
     * @return string
     */
    public function getCheckbox15DroitPatClaq1()
    {
        return $this->Checkbox15DroitPatClaq1;
    }

    /**
     * Set checkbox15DroitPatCrep1
     *
     * @param string $checkbox15DroitPatCrep1
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatCrep1($checkbox15DroitPatCrep1)
    {
        $this->Checkbox15DroitPatCrep1 = $checkbox15DroitPatCrep1;

        return $this;
    }

    /**
     * Get checkbox15DroitPatCrep1
     *
     * @return string
     */
    public function getCheckbox15DroitPatCrep1()
    {
        return $this->Checkbox15DroitPatCrep1;
    }

    /**
     * Set checkbox15DroitDouleur1
     *
     * @param string $checkbox15DroitDouleur1
     *
     * @return Form15
     */
    public function setCheckbox15DroitDouleur1($checkbox15DroitDouleur1)
    {
        $this->Checkbox15DroitDouleur1 = $checkbox15DroitDouleur1;

        return $this;
    }

    /**
     * Get checkbox15DroitDouleur1
     *
     * @return string
     */
    public function getCheckbox15DroitDouleur1()
    {
        return $this->Checkbox15DroitDouleur1;
    }

    /**
     * Set checkbox15GauchePraClaq1
     *
     * @param string $checkbox15GauchePraClaq1
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraClaq1($checkbox15GauchePraClaq1)
    {
        $this->Checkbox15GauchePraClaq1 = $checkbox15GauchePraClaq1;

        return $this;
    }

    /**
     * Get checkbox15GauchePraClaq1
     *
     * @return string
     */
    public function getCheckbox15GauchePraClaq1()
    {
        return $this->Checkbox15GauchePraClaq1;
    }

    /**
     * Set checkbox15GauchePraCrep1
     *
     * @param string $checkbox15GauchePraCrep1
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraCrep1($checkbox15GauchePraCrep1)
    {
        $this->Checkbox15GauchePraCrep1 = $checkbox15GauchePraCrep1;

        return $this;
    }

    /**
     * Get checkbox15GauchePraCrep1
     *
     * @return string
     */
    public function getCheckbox15GauchePraCrep1()
    {
        return $this->Checkbox15GauchePraCrep1;
    }

    /**
     * Set checkbox15GauchePatClaq1
     *
     * @param string $checkbox15GauchePatClaq1
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatClaq1($checkbox15GauchePatClaq1)
    {
        $this->Checkbox15GauchePatClaq1 = $checkbox15GauchePatClaq1;

        return $this;
    }

    /**
     * Get checkbox15GauchePatClaq1
     *
     * @return string
     */
    public function getCheckbox15GauchePatClaq1()
    {
        return $this->Checkbox15GauchePatClaq1;
    }

    /**
     * Set checkbox15GauchePatCrep1
     *
     * @param string $checkbox15GauchePatCrep1
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatCrep1($checkbox15GauchePatCrep1)
    {
        $this->Checkbox15GauchePatCrep1 = $checkbox15GauchePatCrep1;

        return $this;
    }

    /**
     * Get checkbox15GauchePatCrep1
     *
     * @return string
     */
    public function getCheckbox15GauchePatCrep1()
    {
        return $this->Checkbox15GauchePatCrep1;
    }

    /**
     * Set checkbox15GaucheDouleur1
     *
     * @param string $checkbox15GaucheDouleur1
     *
     * @return Form15
     */
    public function setCheckbox15GaucheDouleur1($checkbox15GaucheDouleur1)
    {
        $this->Checkbox15GaucheDouleur1 = $checkbox15GaucheDouleur1;

        return $this;
    }

    /**
     * Get checkbox15GaucheDouleur1
     *
     * @return string
     */
    public function getCheckbox15GaucheDouleur1()
    {
        return $this->Checkbox15GaucheDouleur1;
    }

    /**
     * Set checkbox15DroitPraClaq2
     *
     * @param string $checkbox15DroitPraClaq2
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraClaq2($checkbox15DroitPraClaq2)
    {
        $this->Checkbox15DroitPraClaq2 = $checkbox15DroitPraClaq2;

        return $this;
    }

    /**
     * Get checkbox15DroitPraClaq2
     *
     * @return string
     */
    public function getCheckbox15DroitPraClaq2()
    {
        return $this->Checkbox15DroitPraClaq2;
    }

    /**
     * Set checkbox15DroitPraCrep2
     *
     * @param string $checkbox15DroitPraCrep2
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraCrep2($checkbox15DroitPraCrep2)
    {
        $this->Checkbox15DroitPraCrep2 = $checkbox15DroitPraCrep2;

        return $this;
    }

    /**
     * Get checkbox15DroitPraCrep2
     *
     * @return string
     */
    public function getCheckbox15DroitPraCrep2()
    {
        return $this->Checkbox15DroitPraCrep2;
    }

    /**
     * Set checkbox15DroitPatClaq2
     *
     * @param string $checkbox15DroitPatClaq2
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatClaq2($checkbox15DroitPatClaq2)
    {
        $this->Checkbox15DroitPatClaq2 = $checkbox15DroitPatClaq2;

        return $this;
    }

    /**
     * Get checkbox15DroitPatClaq2
     *
     * @return string
     */
    public function getCheckbox15DroitPatClaq2()
    {
        return $this->Checkbox15DroitPatClaq2;
    }

    /**
     * Set checkbox15DroitPatCrep2
     *
     * @param string $checkbox15DroitPatCrep2
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatCrep2($checkbox15DroitPatCrep2)
    {
        $this->Checkbox15DroitPatCrep2 = $checkbox15DroitPatCrep2;

        return $this;
    }

    /**
     * Get checkbox15DroitPatCrep2
     *
     * @return string
     */
    public function getCheckbox15DroitPatCrep2()
    {
        return $this->Checkbox15DroitPatCrep2;
    }

    /**
     * Set checkbox15DroitDouleur2
     *
     * @param string $checkbox15DroitDouleur2
     *
     * @return Form15
     */
    public function setCheckbox15DroitDouleur2($checkbox15DroitDouleur2)
    {
        $this->Checkbox15DroitDouleur2 = $checkbox15DroitDouleur2;

        return $this;
    }

    /**
     * Get checkbox15DroitDouleur2
     *
     * @return string
     */
    public function getCheckbox15DroitDouleur2()
    {
        return $this->Checkbox15DroitDouleur2;
    }

    /**
     * Set checkbox15GauchePraClaq2
     *
     * @param string $checkbox15GauchePraClaq2
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraClaq2($checkbox15GauchePraClaq2)
    {
        $this->Checkbox15GauchePraClaq2 = $checkbox15GauchePraClaq2;

        return $this;
    }

    /**
     * Get checkbox15GauchePraClaq2
     *
     * @return string
     */
    public function getCheckbox15GauchePraClaq2()
    {
        return $this->Checkbox15GauchePraClaq2;
    }

    /**
     * Set checkbox15GauchePraCrep2
     *
     * @param string $checkbox15GauchePraCrep2
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraCrep2($checkbox15GauchePraCrep2)
    {
        $this->Checkbox15GauchePraCrep2 = $checkbox15GauchePraCrep2;

        return $this;
    }

    /**
     * Get checkbox15GauchePraCrep2
     *
     * @return string
     */
    public function getCheckbox15GauchePraCrep2()
    {
        return $this->Checkbox15GauchePraCrep2;
    }

    /**
     * Set checkbox15GauchePatClaq2
     *
     * @param string $checkbox15GauchePatClaq2
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatClaq2($checkbox15GauchePatClaq2)
    {
        $this->Checkbox15GauchePatClaq2 = $checkbox15GauchePatClaq2;

        return $this;
    }

    /**
     * Get checkbox15GauchePatClaq2
     *
     * @return string
     */
    public function getCheckbox15GauchePatClaq2()
    {
        return $this->Checkbox15GauchePatClaq2;
    }

    /**
     * Set checkbox15GauchePatCrep2
     *
     * @param string $checkbox15GauchePatCrep2
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatCrep2($checkbox15GauchePatCrep2)
    {
        $this->Checkbox15GauchePatCrep2 = $checkbox15GauchePatCrep2;

        return $this;
    }

    /**
     * Get checkbox15GauchePatCrep2
     *
     * @return string
     */
    public function getCheckbox15GauchePatCrep2()
    {
        return $this->Checkbox15GauchePatCrep2;
    }

    /**
     * Set checkbox15GaucheDouleur2
     *
     * @param string $checkbox15GaucheDouleur2
     *
     * @return Form15
     */
    public function setCheckbox15GaucheDouleur2($checkbox15GaucheDouleur2)
    {
        $this->Checkbox15GaucheDouleur2 = $checkbox15GaucheDouleur2;

        return $this;
    }

    /**
     * Get checkbox15GaucheDouleur2
     *
     * @return string
     */
    public function getCheckbox15GaucheDouleur2()
    {
        return $this->Checkbox15GaucheDouleur2;
    }

    /**
     * Set checkbox15DroitPraClaq3
     *
     * @param string $checkbox15DroitPraClaq3
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraClaq3($checkbox15DroitPraClaq3)
    {
        $this->Checkbox15DroitPraClaq3 = $checkbox15DroitPraClaq3;

        return $this;
    }

    /**
     * Get checkbox15DroitPraClaq3
     *
     * @return string
     */
    public function getCheckbox15DroitPraClaq3()
    {
        return $this->Checkbox15DroitPraClaq3;
    }

    /**
     * Set checkbox15DroitPraCrep3
     *
     * @param string $checkbox15DroitPraCrep3
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraCrep3($checkbox15DroitPraCrep3)
    {
        $this->Checkbox15DroitPraCrep3 = $checkbox15DroitPraCrep3;

        return $this;
    }

    /**
     * Get checkbox15DroitPraCrep3
     *
     * @return string
     */
    public function getCheckbox15DroitPraCrep3()
    {
        return $this->Checkbox15DroitPraCrep3;
    }

    /**
     * Set checkbox15DroitPatClaq3
     *
     * @param string $checkbox15DroitPatClaq3
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatClaq3($checkbox15DroitPatClaq3)
    {
        $this->Checkbox15DroitPatClaq3 = $checkbox15DroitPatClaq3;

        return $this;
    }

    /**
     * Get checkbox15DroitPatClaq3
     *
     * @return string
     */
    public function getCheckbox15DroitPatClaq3()
    {
        return $this->Checkbox15DroitPatClaq3;
    }

    /**
     * Set checkbox15DroitPatCrep3
     *
     * @param string $checkbox15DroitPatCrep3
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatCrep3($checkbox15DroitPatCrep3)
    {
        $this->Checkbox15DroitPatCrep3 = $checkbox15DroitPatCrep3;

        return $this;
    }

    /**
     * Get checkbox15DroitPatCrep3
     *
     * @return string
     */
    public function getCheckbox15DroitPatCrep3()
    {
        return $this->Checkbox15DroitPatCrep3;
    }

    /**
     * Set checkbox15DroitDouleur3
     *
     * @param string $checkbox15DroitDouleur3
     *
     * @return Form15
     */
    public function setCheckbox15DroitDouleur3($checkbox15DroitDouleur3)
    {
        $this->Checkbox15DroitDouleur3 = $checkbox15DroitDouleur3;

        return $this;
    }

    /**
     * Get checkbox15DroitDouleur3
     *
     * @return string
     */
    public function getCheckbox15DroitDouleur3()
    {
        return $this->Checkbox15DroitDouleur3;
    }

    /**
     * Set checkbox15GauchePraClaq3
     *
     * @param string $checkbox15GauchePraClaq3
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraClaq3($checkbox15GauchePraClaq3)
    {
        $this->Checkbox15GauchePraClaq3 = $checkbox15GauchePraClaq3;

        return $this;
    }

    /**
     * Get checkbox15GauchePraClaq3
     *
     * @return string
     */
    public function getCheckbox15GauchePraClaq3()
    {
        return $this->Checkbox15GauchePraClaq3;
    }

    /**
     * Set checkbox15GauchePraCrep3
     *
     * @param string $checkbox15GauchePraCrep3
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraCrep3($checkbox15GauchePraCrep3)
    {
        $this->Checkbox15GauchePraCrep3 = $checkbox15GauchePraCrep3;

        return $this;
    }

    /**
     * Get checkbox15GauchePraCrep3
     *
     * @return string
     */
    public function getCheckbox15GauchePraCrep3()
    {
        return $this->Checkbox15GauchePraCrep3;
    }

    /**
     * Set checkbox15GauchePatClaq3
     *
     * @param string $checkbox15GauchePatClaq3
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatClaq3($checkbox15GauchePatClaq3)
    {
        $this->Checkbox15GauchePatClaq3 = $checkbox15GauchePatClaq3;

        return $this;
    }

    /**
     * Get checkbox15GauchePatClaq3
     *
     * @return string
     */
    public function getCheckbox15GauchePatClaq3()
    {
        return $this->Checkbox15GauchePatClaq3;
    }

    /**
     * Set checkbox15GauchePatCrep3
     *
     * @param string $checkbox15GauchePatCrep3
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatCrep3($checkbox15GauchePatCrep3)
    {
        $this->Checkbox15GauchePatCrep3 = $checkbox15GauchePatCrep3;

        return $this;
    }

    /**
     * Get checkbox15GauchePatCrep3
     *
     * @return string
     */
    public function getCheckbox15GauchePatCrep3()
    {
        return $this->Checkbox15GauchePatCrep3;
    }

    /**
     * Set checkbox15GaucheDouleur3
     *
     * @param string $checkbox15GaucheDouleur3
     *
     * @return Form15
     */
    public function setCheckbox15GaucheDouleur3($checkbox15GaucheDouleur3)
    {
        $this->Checkbox15GaucheDouleur3 = $checkbox15GaucheDouleur3;

        return $this;
    }

    /**
     * Get checkbox15GaucheDouleur3
     *
     * @return string
     */
    public function getCheckbox15GaucheDouleur3()
    {
        return $this->Checkbox15GaucheDouleur3;
    }

    /**
     * Set checkbox15DroitPraClaq4
     *
     * @param string $checkbox15DroitPraClaq4
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraClaq4($checkbox15DroitPraClaq4)
    {
        $this->Checkbox15DroitPraClaq4 = $checkbox15DroitPraClaq4;

        return $this;
    }

    /**
     * Get checkbox15DroitPraClaq4
     *
     * @return string
     */
    public function getCheckbox15DroitPraClaq4()
    {
        return $this->Checkbox15DroitPraClaq4;
    }

    /**
     * Set checkbox15DroitPraCrep4
     *
     * @param string $checkbox15DroitPraCrep4
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraCrep4($checkbox15DroitPraCrep4)
    {
        $this->Checkbox15DroitPraCrep4 = $checkbox15DroitPraCrep4;

        return $this;
    }

    /**
     * Get checkbox15DroitPraCrep4
     *
     * @return string
     */
    public function getCheckbox15DroitPraCrep4()
    {
        return $this->Checkbox15DroitPraCrep4;
    }

    /**
     * Set checkbox15DroitPatClaq4
     *
     * @param string $checkbox15DroitPatClaq4
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatClaq4($checkbox15DroitPatClaq4)
    {
        $this->Checkbox15DroitPatClaq4 = $checkbox15DroitPatClaq4;

        return $this;
    }

    /**
     * Get checkbox15DroitPatClaq4
     *
     * @return string
     */
    public function getCheckbox15DroitPatClaq4()
    {
        return $this->Checkbox15DroitPatClaq4;
    }

    /**
     * Set checkbox15DroitPatCrep4
     *
     * @param string $checkbox15DroitPatCrep4
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatCrep4($checkbox15DroitPatCrep4)
    {
        $this->Checkbox15DroitPatCrep4 = $checkbox15DroitPatCrep4;

        return $this;
    }

    /**
     * Get checkbox15DroitPatCrep4
     *
     * @return string
     */
    public function getCheckbox15DroitPatCrep4()
    {
        return $this->Checkbox15DroitPatCrep4;
    }

    /**
     * Set checkbox15DroitDouleur4
     *
     * @param string $checkbox15DroitDouleur4
     *
     * @return Form15
     */
    public function setCheckbox15DroitDouleur4($checkbox15DroitDouleur4)
    {
        $this->Checkbox15DroitDouleur4 = $checkbox15DroitDouleur4;

        return $this;
    }

    /**
     * Get checkbox15DroitDouleur4
     *
     * @return string
     */
    public function getCheckbox15DroitDouleur4()
    {
        return $this->Checkbox15DroitDouleur4;
    }

    /**
     * Set checkbox15GauchePraClaq4
     *
     * @param string $checkbox15GauchePraClaq4
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraClaq4($checkbox15GauchePraClaq4)
    {
        $this->Checkbox15GauchePraClaq4 = $checkbox15GauchePraClaq4;

        return $this;
    }

    /**
     * Get checkbox15GauchePraClaq4
     *
     * @return string
     */
    public function getCheckbox15GauchePraClaq4()
    {
        return $this->Checkbox15GauchePraClaq4;
    }

    /**
     * Set checkbox15GauchePraCrep4
     *
     * @param string $checkbox15GauchePraCrep4
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraCrep4($checkbox15GauchePraCrep4)
    {
        $this->Checkbox15GauchePraCrep4 = $checkbox15GauchePraCrep4;

        return $this;
    }

    /**
     * Get checkbox15GauchePraCrep4
     *
     * @return string
     */
    public function getCheckbox15GauchePraCrep4()
    {
        return $this->Checkbox15GauchePraCrep4;
    }

    /**
     * Set checkbox15GauchePatClaq4
     *
     * @param string $checkbox15GauchePatClaq4
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatClaq4($checkbox15GauchePatClaq4)
    {
        $this->Checkbox15GauchePatClaq4 = $checkbox15GauchePatClaq4;

        return $this;
    }

    /**
     * Get checkbox15GauchePatClaq4
     *
     * @return string
     */
    public function getCheckbox15GauchePatClaq4()
    {
        return $this->Checkbox15GauchePatClaq4;
    }

    /**
     * Set checkbox15GauchePatCrep4
     *
     * @param string $checkbox15GauchePatCrep4
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatCrep4($checkbox15GauchePatCrep4)
    {
        $this->Checkbox15GauchePatCrep4 = $checkbox15GauchePatCrep4;

        return $this;
    }

    /**
     * Get checkbox15GauchePatCrep4
     *
     * @return string
     */
    public function getCheckbox15GauchePatCrep4()
    {
        return $this->Checkbox15GauchePatCrep4;
    }

    /**
     * Set checkbox15GaucheDouleur4
     *
     * @param string $checkbox15GaucheDouleur4
     *
     * @return Form15
     */
    public function setCheckbox15GaucheDouleur4($checkbox15GaucheDouleur4)
    {
        $this->Checkbox15GaucheDouleur4 = $checkbox15GaucheDouleur4;

        return $this;
    }

    /**
     * Get checkbox15GaucheDouleur4
     *
     * @return string
     */
    public function getCheckbox15GaucheDouleur4()
    {
        return $this->Checkbox15GaucheDouleur4;
    }

    /**
     * Set checkbox15DroitPraClaq5
     *
     * @param string $checkbox15DroitPraClaq5
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraClaq5($checkbox15DroitPraClaq5)
    {
        $this->Checkbox15DroitPraClaq5 = $checkbox15DroitPraClaq5;

        return $this;
    }

    /**
     * Get checkbox15DroitPraClaq5
     *
     * @return string
     */
    public function getCheckbox15DroitPraClaq5()
    {
        return $this->Checkbox15DroitPraClaq5;
    }

    /**
     * Set checkbox15DroitPraCrep5
     *
     * @param string $checkbox15DroitPraCrep5
     *
     * @return Form15
     */
    public function setCheckbox15DroitPraCrep5($checkbox15DroitPraCrep5)
    {
        $this->Checkbox15DroitPraCrep5 = $checkbox15DroitPraCrep5;

        return $this;
    }

    /**
     * Get checkbox15DroitPraCrep5
     *
     * @return string
     */
    public function getCheckbox15DroitPraCrep5()
    {
        return $this->Checkbox15DroitPraCrep5;
    }

    /**
     * Set checkbox15DroitPatClaq5
     *
     * @param string $checkbox15DroitPatClaq5
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatClaq5($checkbox15DroitPatClaq5)
    {
        $this->Checkbox15DroitPatClaq5 = $checkbox15DroitPatClaq5;

        return $this;
    }

    /**
     * Get checkbox15DroitPatClaq5
     *
     * @return string
     */
    public function getCheckbox15DroitPatClaq5()
    {
        return $this->Checkbox15DroitPatClaq5;
    }

    /**
     * Set checkbox15DroitPatCrep5
     *
     * @param string $checkbox15DroitPatCrep5
     *
     * @return Form15
     */
    public function setCheckbox15DroitPatCrep5($checkbox15DroitPatCrep5)
    {
        $this->Checkbox15DroitPatCrep5 = $checkbox15DroitPatCrep5;

        return $this;
    }

    /**
     * Get checkbox15DroitPatCrep5
     *
     * @return string
     */
    public function getCheckbox15DroitPatCrep5()
    {
        return $this->Checkbox15DroitPatCrep5;
    }

    /**
     * Set checkbox15DroitDouleur5
     *
     * @param string $checkbox15DroitDouleur5
     *
     * @return Form15
     */
    public function setCheckbox15DroitDouleur5($checkbox15DroitDouleur5)
    {
        $this->Checkbox15DroitDouleur5 = $checkbox15DroitDouleur5;

        return $this;
    }

    /**
     * Get checkbox15DroitDouleur5
     *
     * @return string
     */
    public function getCheckbox15DroitDouleur5()
    {
        return $this->Checkbox15DroitDouleur5;
    }

    /**
     * Set checkbox15GauchePraClaq5
     *
     * @param string $checkbox15GauchePraClaq5
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraClaq5($checkbox15GauchePraClaq5)
    {
        $this->Checkbox15GauchePraClaq5 = $checkbox15GauchePraClaq5;

        return $this;
    }

    /**
     * Get checkbox15GauchePraClaq5
     *
     * @return string
     */
    public function getCheckbox15GauchePraClaq5()
    {
        return $this->Checkbox15GauchePraClaq5;
    }

    /**
     * Set checkbox15GauchePraCrep5
     *
     * @param string $checkbox15GauchePraCrep5
     *
     * @return Form15
     */
    public function setCheckbox15GauchePraCrep5($checkbox15GauchePraCrep5)
    {
        $this->Checkbox15GauchePraCrep5 = $checkbox15GauchePraCrep5;

        return $this;
    }

    /**
     * Get checkbox15GauchePraCrep5
     *
     * @return string
     */
    public function getCheckbox15GauchePraCrep5()
    {
        return $this->Checkbox15GauchePraCrep5;
    }

    /**
     * Set checkbox15GauchePatClaq5
     *
     * @param string $checkbox15GauchePatClaq5
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatClaq5($checkbox15GauchePatClaq5)
    {
        $this->Checkbox15GauchePatClaq5 = $checkbox15GauchePatClaq5;

        return $this;
    }

    /**
     * Get checkbox15GauchePatClaq5
     *
     * @return string
     */
    public function getCheckbox15GauchePatClaq5()
    {
        return $this->Checkbox15GauchePatClaq5;
    }

    /**
     * Set checkbox15GauchePatCrep5
     *
     * @param string $checkbox15GauchePatCrep5
     *
     * @return Form15
     */
    public function setCheckbox15GauchePatCrep5($checkbox15GauchePatCrep5)
    {
        $this->Checkbox15GauchePatCrep5 = $checkbox15GauchePatCrep5;

        return $this;
    }

    /**
     * Get checkbox15GauchePatCrep5
     *
     * @return string
     */
    public function getCheckbox15GauchePatCrep5()
    {
        return $this->Checkbox15GauchePatCrep5;
    }

    /**
     * Set checkbox15GaucheDouleur5
     *
     * @param string $checkbox15GaucheDouleur5
     *
     * @return Form15
     */
    public function setCheckbox15GaucheDouleur5($checkbox15GaucheDouleur5)
    {
        $this->Checkbox15GaucheDouleur5 = $checkbox15GaucheDouleur5;

        return $this;
    }

    /**
     * Get checkbox15GaucheDouleur5
     *
     * @return string
     */
    public function getCheckbox15GaucheDouleur5()
    {
        return $this->Checkbox15GaucheDouleur5;
    }
}
