<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form19")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form19
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
* @ORM\Column(name="Checkbox19Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox19Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox19NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox19NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Radio19OIM1", type="string", length=255, nullable=true)
*/
private $Radio19OIM1;

/**
* @var string
*
* @ORM\Column(name="Radio19OIM2", type="string", length=255, nullable=true)
*/
private $Radio19OIM2;

/**
* @var string
*
* @ORM\Column(name="Text19OIM", type="string", length=255, nullable=true)
*/
private $Text19OIM;

/**
* @var string
*
* @ORM\Column(name="Radio19PosOui", type="string", length=255, nullable=true)
*/
private $Radio19PosOui;

/**
* @var string
*
* @ORM\Column(name="Radio19PosNon", type="string", length=255, nullable=true)
*/
private $Radio19PosNon;

/**
* @var string
*
* @ORM\Column(name="Radio19MasticOui", type="string", length=255, nullable=true)
*/
private $Radio19MasticOui;

/**
* @var string
*
* @ORM\Column(name="Radio19MasticNon", type="string", length=255, nullable=true)
*/
private $Radio19MasticNon;

/**
* @var string
*
* @ORM\Column(name="Text19InterDroit", type="string", length=255, nullable=true)
*/
private $Text19InterDroit;

/**
* @var string
*
* @ORM\Column(name="Text19InterGauche", type="string", length=255, nullable=true)
*/
private $Text19InterGauche;

/**
* @var string
*
* @ORM\Column(name="Text19Propul", type="string", length=255, nullable=true)
*/
private $Text19Propul;

/**
* @var string
*
* @ORM\Column(name="Text19Premat", type="string", length=255, nullable=true)
*/
private $Text19Premat;

/**
* @var string
*
* @ORM\Column(name="Text19OIMVerti", type="string", length=255, nullable=true)
*/
private $Text19OIMVerti;

/**
* @var string
*
* @ORM\Column(name="Text19OIMAnt", type="string", length=255, nullable=true)
*/
private $Text19OIMAnt;

/**
* @var string
*
* @ORM\Column(name="Text19OIMLat", type="string", length=255, nullable=true)
*/
private $Text19OIMLat;


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
     * Set checkbox19Negatif
     *
     * @param string $checkbox19Negatif
     *
     * @return Form19
     */
    public function setCheckbox19Negatif($checkbox19Negatif)
    {
        $this->Checkbox19Negatif = $checkbox19Negatif;

        return $this;
    }

    /**
     * Get checkbox19Negatif
     *
     * @return string
     */
    public function getCheckbox19Negatif()
    {
        return $this->Checkbox19Negatif;
    }

    /**
     * Set checkbox19NonRenseigne
     *
     * @param string $checkbox19NonRenseigne
     *
     * @return Form19
     */
    public function setCheckbox19NonRenseigne($checkbox19NonRenseigne)
    {
        $this->Checkbox19NonRenseigne = $checkbox19NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox19NonRenseigne
     *
     * @return string
     */
    public function getCheckbox19NonRenseigne()
    {
        return $this->Checkbox19NonRenseigne;
    }

    /**
     * Set radio19OIM1
     *
     * @param string $radio19OIM1
     *
     * @return Form19
     */
    public function setRadio19OIM1($radio19OIM1)
    {
        $this->Radio19OIM1 = $radio19OIM1;

        return $this;
    }

    /**
     * Get radio19OIM1
     *
     * @return string
     */
    public function getRadio19OIM1()
    {
        return $this->Radio19OIM1;
    }

    /**
     * Set radio19OIM2
     *
     * @param string $radio19OIM2
     *
     * @return Form19
     */
    public function setRadio19OIM2($radio19OIM2)
    {
        $this->Radio19OIM2 = $radio19OIM2;

        return $this;
    }

    /**
     * Get radio19OIM2
     *
     * @return string
     */
    public function getRadio19OIM2()
    {
        return $this->Radio19OIM2;
    }

    /**
     * Set text19OIM
     *
     * @param string $text19OIM
     *
     * @return Form19
     */
    public function setText19OIM($text19OIM)
    {
        $this->Text19OIM = $text19OIM;

        return $this;
    }

    /**
     * Get text19OIM
     *
     * @return string
     */
    public function getText19OIM()
    {
        return $this->Text19OIM;
    }

    /**
     * Set radio19PosOui
     *
     * @param string $radio19PosOui
     *
     * @return Form19
     */
    public function setRadio19PosOui($radio19PosOui)
    {
        $this->Radio19PosOui = $radio19PosOui;

        return $this;
    }

    /**
     * Get radio19PosOui
     *
     * @return string
     */
    public function getRadio19PosOui()
    {
        return $this->Radio19PosOui;
    }

    /**
     * Set radio19PosNon
     *
     * @param string $radio19PosNon
     *
     * @return Form19
     */
    public function setRadio19PosNon($radio19PosNon)
    {
        $this->Radio19PosNon = $radio19PosNon;

        return $this;
    }

    /**
     * Get radio19PosNon
     *
     * @return string
     */
    public function getRadio19PosNon()
    {
        return $this->Radio19PosNon;
    }

    /**
     * Set radio19MasticOui
     *
     * @param string $radio19MasticOui
     *
     * @return Form19
     */
    public function setRadio19MasticOui($radio19MasticOui)
    {
        $this->Radio19MasticOui = $radio19MasticOui;

        return $this;
    }

    /**
     * Get radio19MasticOui
     *
     * @return string
     */
    public function getRadio19MasticOui()
    {
        return $this->Radio19MasticOui;
    }

    /**
     * Set radio19MasticNon
     *
     * @param string $radio19MasticNon
     *
     * @return Form19
     */
    public function setRadio19MasticNon($radio19MasticNon)
    {
        $this->Radio19MasticNon = $radio19MasticNon;

        return $this;
    }

    /**
     * Get radio19MasticNon
     *
     * @return string
     */
    public function getRadio19MasticNon()
    {
        return $this->Radio19MasticNon;
    }

    /**
     * Set text19InterDroit
     *
     * @param string $text19InterDroit
     *
     * @return Form19
     */
    public function setText19InterDroit($text19InterDroit)
    {
        $this->Text19InterDroit = $text19InterDroit;

        return $this;
    }

    /**
     * Get text19InterDroit
     *
     * @return string
     */
    public function getText19InterDroit()
    {
        return $this->Text19InterDroit;
    }

    /**
     * Set text19InterGauche
     *
     * @param string $text19InterGauche
     *
     * @return Form19
     */
    public function setText19InterGauche($text19InterGauche)
    {
        $this->Text19InterGauche = $text19InterGauche;

        return $this;
    }

    /**
     * Get text19InterGauche
     *
     * @return string
     */
    public function getText19InterGauche()
    {
        return $this->Text19InterGauche;
    }

    /**
     * Set text19Propul
     *
     * @param string $text19Propul
     *
     * @return Form19
     */
    public function setText19Propul($text19Propul)
    {
        $this->Text19Propul = $text19Propul;

        return $this;
    }

    /**
     * Get text19Propul
     *
     * @return string
     */
    public function getText19Propul()
    {
        return $this->Text19Propul;
    }

    /**
     * Set text19Premat
     *
     * @param string $text19Premat
     *
     * @return Form19
     */
    public function setText19Premat($text19Premat)
    {
        $this->Text19Premat = $text19Premat;

        return $this;
    }

    /**
     * Get text19Premat
     *
     * @return string
     */
    public function getText19Premat()
    {
        return $this->Text19Premat;
    }

    /**
     * Set text19OIMVerti
     *
     * @param string $text19OIMVerti
     *
     * @return Form19
     */
    public function setText19OIMVerti($text19OIMVerti)
    {
        $this->Text19OIMVerti = $text19OIMVerti;

        return $this;
    }

    /**
     * Get text19OIMVerti
     *
     * @return string
     */
    public function getText19OIMVerti()
    {
        return $this->Text19OIMVerti;
    }

    /**
     * Set text19OIMAnt
     *
     * @param string $text19OIMAnt
     *
     * @return Form19
     */
    public function setText19OIMAnt($text19OIMAnt)
    {
        $this->Text19OIMAnt = $text19OIMAnt;

        return $this;
    }

    /**
     * Get text19OIMAnt
     *
     * @return string
     */
    public function getText19OIMAnt()
    {
        return $this->Text19OIMAnt;
    }

    /**
     * Set text19OIMLat
     *
     * @param string $text19OIMLat
     *
     * @return Form19
     */
    public function setText19OIMLat($text19OIMLat)
    {
        $this->Text19OIMLat = $text19OIMLat;

        return $this;
    }

    /**
     * Get text19OIMLat
     *
     * @return string
     */
    public function getText19OIMLat()
    {
        return $this->Text19OIMLat;
    }
}
