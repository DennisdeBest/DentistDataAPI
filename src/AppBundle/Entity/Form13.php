<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form13")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form13
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
* @ORM\Column(name="Checkbox13Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox13Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox13NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox13NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Number13OuvDouleur", type="string", length=255, nullable=true)
*/
private $Number13OuvDouleur;

/**
* @var string
*
* @ORM\Column(name="Number13OuvNonAssist", type="string", length=255, nullable=true)
*/
private $Number13OuvNonAssist;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv1", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv1;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv1", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv1;

/**
* @var string
*
* @ORM\Column(name="Number13OuvAssist", type="string", length=255, nullable=true)
*/
private $Number13OuvAssist;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv2", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv2;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv2", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv2;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv3", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv3;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv3", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv3;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv4", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv4;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv4", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv4;

/**
* @var string
*
* @ORM\Column(name="Number13LatDroit", type="string", length=255, nullable=true)
*/
private $Number13LatDroit;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv5", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv5;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv5", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv5;

/**
* @var string
*
* @ORM\Column(name="Number13LatDroitAssist", type="string", length=255, nullable=true)
*/
private $Number13LatDroitAssist;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv6", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv6;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv6", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv6;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv7", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv7;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv7", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv7;

/**
* @var string
*
* @ORM\Column(name="Number13LatGauche", type="string", length=255, nullable=true)
*/
private $Number13LatGauche;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv8", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv8;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv8", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv8;

/**
* @var string
*
* @ORM\Column(name="Number13LatGaucheAssist", type="string", length=255, nullable=true)
*/
private $Number13LatGaucheAssist;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv9", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv9;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv9", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv9;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv10", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv10;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv10", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv10;

/**
* @var string
*
* @ORM\Column(name="Number13Propulsion", type="string", length=255, nullable=true)
*/
private $Number13Propulsion;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv11", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv11;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv11", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv11;

/**
* @var string
*
* @ORM\Column(name="Checkbox13DroitDouleurProv12", type="string", length=255, nullable=true)
*/
private $Checkbox13DroitDouleurProv12;

/**
* @var string
*
* @ORM\Column(name="Checkbox13GaucheDouleurProv12", type="string", length=255, nullable=true)
*/
private $Checkbox13GaucheDouleurProv12;

/**
* @var string
*
* @ORM\Column(name="Radio13MauxOui", type="string", length=255, nullable=true)
*/
private $Radio13MauxOui;

/**
* @var string
*
* @ORM\Column(name="Radio13MauxNon", type="string", length=255, nullable=true)
*/
private $Radio13MauxNon;

/**
* @var string
*
* @ORM\Column(name="Text13MauxOui", type="string", length=255, nullable=true)
*/
private $Text13MauxOui;


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
     * Set checkbox13Negatif
     *
     * @param string $checkbox13Negatif
     *
     * @return Form13
     */
    public function setCheckbox13Negatif($checkbox13Negatif)
    {
        $this->Checkbox13Negatif = $checkbox13Negatif;

        return $this;
    }

    /**
     * Get checkbox13Negatif
     *
     * @return string
     */
    public function getCheckbox13Negatif()
    {
        return $this->Checkbox13Negatif;
    }

    /**
     * Set checkbox13NonRenseigne
     *
     * @param string $checkbox13NonRenseigne
     *
     * @return Form13
     */
    public function setCheckbox13NonRenseigne($checkbox13NonRenseigne)
    {
        $this->Checkbox13NonRenseigne = $checkbox13NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox13NonRenseigne
     *
     * @return string
     */
    public function getCheckbox13NonRenseigne()
    {
        return $this->Checkbox13NonRenseigne;
    }

    /**
     * Set number13OuvDouleur
     *
     * @param string $number13OuvDouleur
     *
     * @return Form13
     */
    public function setNumber13OuvDouleur($number13OuvDouleur)
    {
        $this->Number13OuvDouleur = $number13OuvDouleur;

        return $this;
    }

    /**
     * Get number13OuvDouleur
     *
     * @return string
     */
    public function getNumber13OuvDouleur()
    {
        return $this->Number13OuvDouleur;
    }

    /**
     * Set number13OuvNonAssist
     *
     * @param string $number13OuvNonAssist
     *
     * @return Form13
     */
    public function setNumber13OuvNonAssist($number13OuvNonAssist)
    {
        $this->Number13OuvNonAssist = $number13OuvNonAssist;

        return $this;
    }

    /**
     * Get number13OuvNonAssist
     *
     * @return string
     */
    public function getNumber13OuvNonAssist()
    {
        return $this->Number13OuvNonAssist;
    }

    /**
     * Set checkbox13DroitDouleurProv1
     *
     * @param string $checkbox13DroitDouleurProv1
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv1($checkbox13DroitDouleurProv1)
    {
        $this->Checkbox13DroitDouleurProv1 = $checkbox13DroitDouleurProv1;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv1
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv1()
    {
        return $this->Checkbox13DroitDouleurProv1;
    }

    /**
     * Set checkbox13GaucheDouleurProv1
     *
     * @param string $checkbox13GaucheDouleurProv1
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv1($checkbox13GaucheDouleurProv1)
    {
        $this->Checkbox13GaucheDouleurProv1 = $checkbox13GaucheDouleurProv1;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv1
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv1()
    {
        return $this->Checkbox13GaucheDouleurProv1;
    }

    /**
     * Set number13OuvAssist
     *
     * @param string $number13OuvAssist
     *
     * @return Form13
     */
    public function setNumber13OuvAssist($number13OuvAssist)
    {
        $this->Number13OuvAssist = $number13OuvAssist;

        return $this;
    }

    /**
     * Get number13OuvAssist
     *
     * @return string
     */
    public function getNumber13OuvAssist()
    {
        return $this->Number13OuvAssist;
    }

    /**
     * Set checkbox13DroitDouleurProv2
     *
     * @param string $checkbox13DroitDouleurProv2
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv2($checkbox13DroitDouleurProv2)
    {
        $this->Checkbox13DroitDouleurProv2 = $checkbox13DroitDouleurProv2;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv2
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv2()
    {
        return $this->Checkbox13DroitDouleurProv2;
    }

    /**
     * Set checkbox13GaucheDouleurProv2
     *
     * @param string $checkbox13GaucheDouleurProv2
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv2($checkbox13GaucheDouleurProv2)
    {
        $this->Checkbox13GaucheDouleurProv2 = $checkbox13GaucheDouleurProv2;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv2
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv2()
    {
        return $this->Checkbox13GaucheDouleurProv2;
    }

    /**
     * Set checkbox13DroitDouleurProv3
     *
     * @param string $checkbox13DroitDouleurProv3
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv3($checkbox13DroitDouleurProv3)
    {
        $this->Checkbox13DroitDouleurProv3 = $checkbox13DroitDouleurProv3;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv3
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv3()
    {
        return $this->Checkbox13DroitDouleurProv3;
    }

    /**
     * Set checkbox13GaucheDouleurProv3
     *
     * @param string $checkbox13GaucheDouleurProv3
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv3($checkbox13GaucheDouleurProv3)
    {
        $this->Checkbox13GaucheDouleurProv3 = $checkbox13GaucheDouleurProv3;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv3
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv3()
    {
        return $this->Checkbox13GaucheDouleurProv3;
    }

    /**
     * Set checkbox13DroitDouleurProv4
     *
     * @param string $checkbox13DroitDouleurProv4
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv4($checkbox13DroitDouleurProv4)
    {
        $this->Checkbox13DroitDouleurProv4 = $checkbox13DroitDouleurProv4;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv4
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv4()
    {
        return $this->Checkbox13DroitDouleurProv4;
    }

    /**
     * Set checkbox13GaucheDouleurProv4
     *
     * @param string $checkbox13GaucheDouleurProv4
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv4($checkbox13GaucheDouleurProv4)
    {
        $this->Checkbox13GaucheDouleurProv4 = $checkbox13GaucheDouleurProv4;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv4
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv4()
    {
        return $this->Checkbox13GaucheDouleurProv4;
    }

    /**
     * Set number13LatDroit
     *
     * @param string $number13LatDroit
     *
     * @return Form13
     */
    public function setNumber13LatDroit($number13LatDroit)
    {
        $this->Number13LatDroit = $number13LatDroit;

        return $this;
    }

    /**
     * Get number13LatDroit
     *
     * @return string
     */
    public function getNumber13LatDroit()
    {
        return $this->Number13LatDroit;
    }

    /**
     * Set checkbox13DroitDouleurProv5
     *
     * @param string $checkbox13DroitDouleurProv5
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv5($checkbox13DroitDouleurProv5)
    {
        $this->Checkbox13DroitDouleurProv5 = $checkbox13DroitDouleurProv5;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv5
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv5()
    {
        return $this->Checkbox13DroitDouleurProv5;
    }

    /**
     * Set checkbox13GaucheDouleurProv5
     *
     * @param string $checkbox13GaucheDouleurProv5
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv5($checkbox13GaucheDouleurProv5)
    {
        $this->Checkbox13GaucheDouleurProv5 = $checkbox13GaucheDouleurProv5;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv5
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv5()
    {
        return $this->Checkbox13GaucheDouleurProv5;
    }

    /**
     * Set number13LatDroitAssist
     *
     * @param string $number13LatDroitAssist
     *
     * @return Form13
     */
    public function setNumber13LatDroitAssist($number13LatDroitAssist)
    {
        $this->Number13LatDroitAssist = $number13LatDroitAssist;

        return $this;
    }

    /**
     * Get number13LatDroitAssist
     *
     * @return string
     */
    public function getNumber13LatDroitAssist()
    {
        return $this->Number13LatDroitAssist;
    }

    /**
     * Set checkbox13DroitDouleurProv6
     *
     * @param string $checkbox13DroitDouleurProv6
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv6($checkbox13DroitDouleurProv6)
    {
        $this->Checkbox13DroitDouleurProv6 = $checkbox13DroitDouleurProv6;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv6
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv6()
    {
        return $this->Checkbox13DroitDouleurProv6;
    }

    /**
     * Set checkbox13GaucheDouleurProv6
     *
     * @param string $checkbox13GaucheDouleurProv6
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv6($checkbox13GaucheDouleurProv6)
    {
        $this->Checkbox13GaucheDouleurProv6 = $checkbox13GaucheDouleurProv6;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv6
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv6()
    {
        return $this->Checkbox13GaucheDouleurProv6;
    }

    /**
     * Set checkbox13DroitDouleurProv7
     *
     * @param string $checkbox13DroitDouleurProv7
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv7($checkbox13DroitDouleurProv7)
    {
        $this->Checkbox13DroitDouleurProv7 = $checkbox13DroitDouleurProv7;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv7
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv7()
    {
        return $this->Checkbox13DroitDouleurProv7;
    }

    /**
     * Set checkbox13GaucheDouleurProv7
     *
     * @param string $checkbox13GaucheDouleurProv7
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv7($checkbox13GaucheDouleurProv7)
    {
        $this->Checkbox13GaucheDouleurProv7 = $checkbox13GaucheDouleurProv7;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv7
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv7()
    {
        return $this->Checkbox13GaucheDouleurProv7;
    }

    /**
     * Set number13LatGauche
     *
     * @param string $number13LatGauche
     *
     * @return Form13
     */
    public function setNumber13LatGauche($number13LatGauche)
    {
        $this->Number13LatGauche = $number13LatGauche;

        return $this;
    }

    /**
     * Get number13LatGauche
     *
     * @return string
     */
    public function getNumber13LatGauche()
    {
        return $this->Number13LatGauche;
    }

    /**
     * Set checkbox13DroitDouleurProv8
     *
     * @param string $checkbox13DroitDouleurProv8
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv8($checkbox13DroitDouleurProv8)
    {
        $this->Checkbox13DroitDouleurProv8 = $checkbox13DroitDouleurProv8;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv8
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv8()
    {
        return $this->Checkbox13DroitDouleurProv8;
    }

    /**
     * Set checkbox13GaucheDouleurProv8
     *
     * @param string $checkbox13GaucheDouleurProv8
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv8($checkbox13GaucheDouleurProv8)
    {
        $this->Checkbox13GaucheDouleurProv8 = $checkbox13GaucheDouleurProv8;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv8
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv8()
    {
        return $this->Checkbox13GaucheDouleurProv8;
    }

    /**
     * Set number13LatGaucheAssist
     *
     * @param string $number13LatGaucheAssist
     *
     * @return Form13
     */
    public function setNumber13LatGaucheAssist($number13LatGaucheAssist)
    {
        $this->Number13LatGaucheAssist = $number13LatGaucheAssist;

        return $this;
    }

    /**
     * Get number13LatGaucheAssist
     *
     * @return string
     */
    public function getNumber13LatGaucheAssist()
    {
        return $this->Number13LatGaucheAssist;
    }

    /**
     * Set checkbox13DroitDouleurProv9
     *
     * @param string $checkbox13DroitDouleurProv9
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv9($checkbox13DroitDouleurProv9)
    {
        $this->Checkbox13DroitDouleurProv9 = $checkbox13DroitDouleurProv9;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv9
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv9()
    {
        return $this->Checkbox13DroitDouleurProv9;
    }

    /**
     * Set checkbox13GaucheDouleurProv9
     *
     * @param string $checkbox13GaucheDouleurProv9
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv9($checkbox13GaucheDouleurProv9)
    {
        $this->Checkbox13GaucheDouleurProv9 = $checkbox13GaucheDouleurProv9;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv9
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv9()
    {
        return $this->Checkbox13GaucheDouleurProv9;
    }

    /**
     * Set checkbox13DroitDouleurProv10
     *
     * @param string $checkbox13DroitDouleurProv10
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv10($checkbox13DroitDouleurProv10)
    {
        $this->Checkbox13DroitDouleurProv10 = $checkbox13DroitDouleurProv10;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv10
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv10()
    {
        return $this->Checkbox13DroitDouleurProv10;
    }

    /**
     * Set checkbox13GaucheDouleurProv10
     *
     * @param string $checkbox13GaucheDouleurProv10
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv10($checkbox13GaucheDouleurProv10)
    {
        $this->Checkbox13GaucheDouleurProv10 = $checkbox13GaucheDouleurProv10;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv10
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv10()
    {
        return $this->Checkbox13GaucheDouleurProv10;
    }

    /**
     * Set number13Propulsion
     *
     * @param string $number13Propulsion
     *
     * @return Form13
     */
    public function setNumber13Propulsion($number13Propulsion)
    {
        $this->Number13Propulsion = $number13Propulsion;

        return $this;
    }

    /**
     * Get number13Propulsion
     *
     * @return string
     */
    public function getNumber13Propulsion()
    {
        return $this->Number13Propulsion;
    }

    /**
     * Set checkbox13DroitDouleurProv11
     *
     * @param string $checkbox13DroitDouleurProv11
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv11($checkbox13DroitDouleurProv11)
    {
        $this->Checkbox13DroitDouleurProv11 = $checkbox13DroitDouleurProv11;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv11
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv11()
    {
        return $this->Checkbox13DroitDouleurProv11;
    }

    /**
     * Set checkbox13GaucheDouleurProv11
     *
     * @param string $checkbox13GaucheDouleurProv11
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv11($checkbox13GaucheDouleurProv11)
    {
        $this->Checkbox13GaucheDouleurProv11 = $checkbox13GaucheDouleurProv11;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv11
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv11()
    {
        return $this->Checkbox13GaucheDouleurProv11;
    }

    /**
     * Set checkbox13DroitDouleurProv12
     *
     * @param string $checkbox13DroitDouleurProv12
     *
     * @return Form13
     */
    public function setCheckbox13DroitDouleurProv12($checkbox13DroitDouleurProv12)
    {
        $this->Checkbox13DroitDouleurProv12 = $checkbox13DroitDouleurProv12;

        return $this;
    }

    /**
     * Get checkbox13DroitDouleurProv12
     *
     * @return string
     */
    public function getCheckbox13DroitDouleurProv12()
    {
        return $this->Checkbox13DroitDouleurProv12;
    }

    /**
     * Set checkbox13GaucheDouleurProv12
     *
     * @param string $checkbox13GaucheDouleurProv12
     *
     * @return Form13
     */
    public function setCheckbox13GaucheDouleurProv12($checkbox13GaucheDouleurProv12)
    {
        $this->Checkbox13GaucheDouleurProv12 = $checkbox13GaucheDouleurProv12;

        return $this;
    }

    /**
     * Get checkbox13GaucheDouleurProv12
     *
     * @return string
     */
    public function getCheckbox13GaucheDouleurProv12()
    {
        return $this->Checkbox13GaucheDouleurProv12;
    }

    /**
     * Set radio13MauxOui
     *
     * @param string $radio13MauxOui
     *
     * @return Form13
     */
    public function setRadio13MauxOui($radio13MauxOui)
    {
        $this->Radio13MauxOui = $radio13MauxOui;

        return $this;
    }

    /**
     * Get radio13MauxOui
     *
     * @return string
     */
    public function getRadio13MauxOui()
    {
        return $this->Radio13MauxOui;
    }

    /**
     * Set radio13MauxNon
     *
     * @param string $radio13MauxNon
     *
     * @return Form13
     */
    public function setRadio13MauxNon($radio13MauxNon)
    {
        $this->Radio13MauxNon = $radio13MauxNon;

        return $this;
    }

    /**
     * Get radio13MauxNon
     *
     * @return string
     */
    public function getRadio13MauxNon()
    {
        return $this->Radio13MauxNon;
    }

    /**
     * Set text13MauxOui
     *
     * @param string $text13MauxOui
     *
     * @return Form13
     */
    public function setText13MauxOui($text13MauxOui)
    {
        $this->Text13MauxOui = $text13MauxOui;

        return $this;
    }

    /**
     * Get text13MauxOui
     *
     * @return string
     */
    public function getText13MauxOui()
    {
        return $this->Text13MauxOui;
    }
}
