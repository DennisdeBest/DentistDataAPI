<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form11")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form11
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
* @ORM\Column(name="Checkbox11Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox11Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox11NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox11NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempPost1", type="string", length=255, nullable=true)
*/
private $Checkbox11TempPost1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempPost2", type="string", length=255, nullable=true)
*/
private $Checkbox11TempPost2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempPost3", type="string", length=255, nullable=true)
*/
private $Checkbox11TempPost3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempPost4", type="string", length=255, nullable=true)
*/
private $Checkbox11TempPost4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempMoy1", type="string", length=255, nullable=true)
*/
private $Checkbox11TempMoy1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempMoy2", type="string", length=255, nullable=true)
*/
private $Checkbox11TempMoy2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempMoy3", type="string", length=255, nullable=true)
*/
private $Checkbox11TempMoy3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempMoy4", type="string", length=255, nullable=true)
*/
private $Checkbox11TempMoy4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempAnt1", type="string", length=255, nullable=true)
*/
private $Checkbox11TempAnt1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempAnt2", type="string", length=255, nullable=true)
*/
private $Checkbox11TempAnt2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempAnt3", type="string", length=255, nullable=true)
*/
private $Checkbox11TempAnt3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11TempAnt4", type="string", length=255, nullable=true)
*/
private $Checkbox11TempAnt4;

/**
* @var string
*
* @ORM\Column(name="Radio11PalpationOui", type="string", length=255, nullable=true)
*/
private $Radio11PalpationOui;

/**
* @var string
*
* @ORM\Column(name="Radio11PalpationNon", type="string", length=255, nullable=true)
*/
private $Radio11PalpationNon;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterOri1", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterOri1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterOri2", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterOri2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterOri3", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterOri3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterOri4", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterOri4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterCorps1", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterCorps1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterCorps2", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterCorps2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterCorps3", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterCorps3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterCorps4", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterCorps4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterInsert1", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterInsert1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterInsert2", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterInsert2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterInsert3", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterInsert3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11MasseterInsert4", type="string", length=255, nullable=true)
*/
private $Checkbox11MasseterInsert4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Pole1", type="string", length=255, nullable=true)
*/
private $Checkbox11Pole1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Pole2", type="string", length=255, nullable=true)
*/
private $Checkbox11Pole2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Pole3", type="string", length=255, nullable=true)
*/
private $Checkbox11Pole3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Pole4", type="string", length=255, nullable=true)
*/
private $Checkbox11Pole4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutourPole1", type="string", length=255, nullable=true)
*/
private $Checkbox11AutourPole1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutourPole2", type="string", length=255, nullable=true)
*/
private $Checkbox11AutourPole2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutourPole3", type="string", length=255, nullable=true)
*/
private $Checkbox11AutourPole3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutourPole4", type="string", length=255, nullable=true)
*/
private $Checkbox11AutourPole4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Digastrique1", type="string", length=255, nullable=true)
*/
private $Checkbox11Digastrique1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Digastrique2", type="string", length=255, nullable=true)
*/
private $Checkbox11Digastrique2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Digastrique3", type="string", length=255, nullable=true)
*/
private $Checkbox11Digastrique3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Digastrique4", type="string", length=255, nullable=true)
*/
private $Checkbox11Digastrique4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryMed1", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryMed1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryMed2", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryMed2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryMed3", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryMed3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryMed4", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryMed4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryLat1", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryLat1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryLat2", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryLat2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryLat3", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryLat3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11PteryLat4", type="string", length=255, nullable=true)
*/
private $Checkbox11PteryLat4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Tendon1", type="string", length=255, nullable=true)
*/
private $Checkbox11Tendon1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Tendon2", type="string", length=255, nullable=true)
*/
private $Checkbox11Tendon2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Tendon3", type="string", length=255, nullable=true)
*/
private $Checkbox11Tendon3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Tendon4", type="string", length=255, nullable=true)
*/
private $Checkbox11Tendon4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Sterno1", type="string", length=255, nullable=true)
*/
private $Checkbox11Sterno1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Sterno2", type="string", length=255, nullable=true)
*/
private $Checkbox11Sterno2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Sterno3", type="string", length=255, nullable=true)
*/
private $Checkbox11Sterno3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Sterno4", type="string", length=255, nullable=true)
*/
private $Checkbox11Sterno4;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Trapeze1", type="string", length=255, nullable=true)
*/
private $Checkbox11Trapeze1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Trapeze2", type="string", length=255, nullable=true)
*/
private $Checkbox11Trapeze2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Trapeze3", type="string", length=255, nullable=true)
*/
private $Checkbox11Trapeze3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11Trapeze4", type="string", length=255, nullable=true)
*/
private $Checkbox11Trapeze4;

/**
* @var string
*
* @ORM\Column(name="Text11AutreMuscle1", type="string", length=255, nullable=true)
*/
private $Text11AutreMuscle1;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle11", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle11;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle12", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle12;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle13", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle13;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle14", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle14;

/**
* @var string
*
* @ORM\Column(name="Text11AutreMuscle2", type="string", length=255, nullable=true)
*/
private $Text11AutreMuscle2;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle21", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle21;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle22", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle22;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle23", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle23;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle24", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle24;

/**
* @var string
*
* @ORM\Column(name="Text11AutreMuscle3", type="string", length=255, nullable=true)
*/
private $Text11AutreMuscle3;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle31", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle31;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle32", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle32;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle33", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle33;

/**
* @var string
*
* @ORM\Column(name="Checkbox11AutreMuscle34", type="string", length=255, nullable=true)
*/
private $Checkbox11AutreMuscle34;


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
     * Set checkbox11Negatif
     *
     * @param string $checkbox11Negatif
     *
     * @return Form11
     */
    public function setCheckbox11Negatif($checkbox11Negatif)
    {
        $this->Checkbox11Negatif = $checkbox11Negatif;

        return $this;
    }

    /**
     * Get checkbox11Negatif
     *
     * @return string
     */
    public function getCheckbox11Negatif()
    {
        return $this->Checkbox11Negatif;
    }

    /**
     * Set checkbox11NonRenseigne
     *
     * @param string $checkbox11NonRenseigne
     *
     * @return Form11
     */
    public function setCheckbox11NonRenseigne($checkbox11NonRenseigne)
    {
        $this->Checkbox11NonRenseigne = $checkbox11NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox11NonRenseigne
     *
     * @return string
     */
    public function getCheckbox11NonRenseigne()
    {
        return $this->Checkbox11NonRenseigne;
    }

    /**
     * Set checkbox11TempPost1
     *
     * @param string $checkbox11TempPost1
     *
     * @return Form11
     */
    public function setCheckbox11TempPost1($checkbox11TempPost1)
    {
        $this->Checkbox11TempPost1 = $checkbox11TempPost1;

        return $this;
    }

    /**
     * Get checkbox11TempPost1
     *
     * @return string
     */
    public function getCheckbox11TempPost1()
    {
        return $this->Checkbox11TempPost1;
    }

    /**
     * Set checkbox11TempPost2
     *
     * @param string $checkbox11TempPost2
     *
     * @return Form11
     */
    public function setCheckbox11TempPost2($checkbox11TempPost2)
    {
        $this->Checkbox11TempPost2 = $checkbox11TempPost2;

        return $this;
    }

    /**
     * Get checkbox11TempPost2
     *
     * @return string
     */
    public function getCheckbox11TempPost2()
    {
        return $this->Checkbox11TempPost2;
    }

    /**
     * Set checkbox11TempPost3
     *
     * @param string $checkbox11TempPost3
     *
     * @return Form11
     */
    public function setCheckbox11TempPost3($checkbox11TempPost3)
    {
        $this->Checkbox11TempPost3 = $checkbox11TempPost3;

        return $this;
    }

    /**
     * Get checkbox11TempPost3
     *
     * @return string
     */
    public function getCheckbox11TempPost3()
    {
        return $this->Checkbox11TempPost3;
    }

    /**
     * Set checkbox11TempPost4
     *
     * @param string $checkbox11TempPost4
     *
     * @return Form11
     */
    public function setCheckbox11TempPost4($checkbox11TempPost4)
    {
        $this->Checkbox11TempPost4 = $checkbox11TempPost4;

        return $this;
    }

    /**
     * Get checkbox11TempPost4
     *
     * @return string
     */
    public function getCheckbox11TempPost4()
    {
        return $this->Checkbox11TempPost4;
    }

    /**
     * Set checkbox11TempMoy1
     *
     * @param string $checkbox11TempMoy1
     *
     * @return Form11
     */
    public function setCheckbox11TempMoy1($checkbox11TempMoy1)
    {
        $this->Checkbox11TempMoy1 = $checkbox11TempMoy1;

        return $this;
    }

    /**
     * Get checkbox11TempMoy1
     *
     * @return string
     */
    public function getCheckbox11TempMoy1()
    {
        return $this->Checkbox11TempMoy1;
    }

    /**
     * Set checkbox11TempMoy2
     *
     * @param string $checkbox11TempMoy2
     *
     * @return Form11
     */
    public function setCheckbox11TempMoy2($checkbox11TempMoy2)
    {
        $this->Checkbox11TempMoy2 = $checkbox11TempMoy2;

        return $this;
    }

    /**
     * Get checkbox11TempMoy2
     *
     * @return string
     */
    public function getCheckbox11TempMoy2()
    {
        return $this->Checkbox11TempMoy2;
    }

    /**
     * Set checkbox11TempMoy3
     *
     * @param string $checkbox11TempMoy3
     *
     * @return Form11
     */
    public function setCheckbox11TempMoy3($checkbox11TempMoy3)
    {
        $this->Checkbox11TempMoy3 = $checkbox11TempMoy3;

        return $this;
    }

    /**
     * Get checkbox11TempMoy3
     *
     * @return string
     */
    public function getCheckbox11TempMoy3()
    {
        return $this->Checkbox11TempMoy3;
    }

    /**
     * Set checkbox11TempMoy4
     *
     * @param string $checkbox11TempMoy4
     *
     * @return Form11
     */
    public function setCheckbox11TempMoy4($checkbox11TempMoy4)
    {
        $this->Checkbox11TempMoy4 = $checkbox11TempMoy4;

        return $this;
    }

    /**
     * Get checkbox11TempMoy4
     *
     * @return string
     */
    public function getCheckbox11TempMoy4()
    {
        return $this->Checkbox11TempMoy4;
    }

    /**
     * Set checkbox11TempAnt1
     *
     * @param string $checkbox11TempAnt1
     *
     * @return Form11
     */
    public function setCheckbox11TempAnt1($checkbox11TempAnt1)
    {
        $this->Checkbox11TempAnt1 = $checkbox11TempAnt1;

        return $this;
    }

    /**
     * Get checkbox11TempAnt1
     *
     * @return string
     */
    public function getCheckbox11TempAnt1()
    {
        return $this->Checkbox11TempAnt1;
    }

    /**
     * Set checkbox11TempAnt2
     *
     * @param string $checkbox11TempAnt2
     *
     * @return Form11
     */
    public function setCheckbox11TempAnt2($checkbox11TempAnt2)
    {
        $this->Checkbox11TempAnt2 = $checkbox11TempAnt2;

        return $this;
    }

    /**
     * Get checkbox11TempAnt2
     *
     * @return string
     */
    public function getCheckbox11TempAnt2()
    {
        return $this->Checkbox11TempAnt2;
    }

    /**
     * Set checkbox11TempAnt3
     *
     * @param string $checkbox11TempAnt3
     *
     * @return Form11
     */
    public function setCheckbox11TempAnt3($checkbox11TempAnt3)
    {
        $this->Checkbox11TempAnt3 = $checkbox11TempAnt3;

        return $this;
    }

    /**
     * Get checkbox11TempAnt3
     *
     * @return string
     */
    public function getCheckbox11TempAnt3()
    {
        return $this->Checkbox11TempAnt3;
    }

    /**
     * Set checkbox11TempAnt4
     *
     * @param string $checkbox11TempAnt4
     *
     * @return Form11
     */
    public function setCheckbox11TempAnt4($checkbox11TempAnt4)
    {
        $this->Checkbox11TempAnt4 = $checkbox11TempAnt4;

        return $this;
    }

    /**
     * Get checkbox11TempAnt4
     *
     * @return string
     */
    public function getCheckbox11TempAnt4()
    {
        return $this->Checkbox11TempAnt4;
    }

    /**
     * Set radio11PalpationOui
     *
     * @param string $radio11PalpationOui
     *
     * @return Form11
     */
    public function setRadio11PalpationOui($radio11PalpationOui)
    {
        $this->Radio11PalpationOui = $radio11PalpationOui;

        return $this;
    }

    /**
     * Get radio11PalpationOui
     *
     * @return string
     */
    public function getRadio11PalpationOui()
    {
        return $this->Radio11PalpationOui;
    }

    /**
     * Set radio11PalpationNon
     *
     * @param string $radio11PalpationNon
     *
     * @return Form11
     */
    public function setRadio11PalpationNon($radio11PalpationNon)
    {
        $this->Radio11PalpationNon = $radio11PalpationNon;

        return $this;
    }

    /**
     * Get radio11PalpationNon
     *
     * @return string
     */
    public function getRadio11PalpationNon()
    {
        return $this->Radio11PalpationNon;
    }

    /**
     * Set checkbox11MasseterOri1
     *
     * @param string $checkbox11MasseterOri1
     *
     * @return Form11
     */
    public function setCheckbox11MasseterOri1($checkbox11MasseterOri1)
    {
        $this->Checkbox11MasseterOri1 = $checkbox11MasseterOri1;

        return $this;
    }

    /**
     * Get checkbox11MasseterOri1
     *
     * @return string
     */
    public function getCheckbox11MasseterOri1()
    {
        return $this->Checkbox11MasseterOri1;
    }

    /**
     * Set checkbox11MasseterOri2
     *
     * @param string $checkbox11MasseterOri2
     *
     * @return Form11
     */
    public function setCheckbox11MasseterOri2($checkbox11MasseterOri2)
    {
        $this->Checkbox11MasseterOri2 = $checkbox11MasseterOri2;

        return $this;
    }

    /**
     * Get checkbox11MasseterOri2
     *
     * @return string
     */
    public function getCheckbox11MasseterOri2()
    {
        return $this->Checkbox11MasseterOri2;
    }

    /**
     * Set checkbox11MasseterOri3
     *
     * @param string $checkbox11MasseterOri3
     *
     * @return Form11
     */
    public function setCheckbox11MasseterOri3($checkbox11MasseterOri3)
    {
        $this->Checkbox11MasseterOri3 = $checkbox11MasseterOri3;

        return $this;
    }

    /**
     * Get checkbox11MasseterOri3
     *
     * @return string
     */
    public function getCheckbox11MasseterOri3()
    {
        return $this->Checkbox11MasseterOri3;
    }

    /**
     * Set checkbox11MasseterOri4
     *
     * @param string $checkbox11MasseterOri4
     *
     * @return Form11
     */
    public function setCheckbox11MasseterOri4($checkbox11MasseterOri4)
    {
        $this->Checkbox11MasseterOri4 = $checkbox11MasseterOri4;

        return $this;
    }

    /**
     * Get checkbox11MasseterOri4
     *
     * @return string
     */
    public function getCheckbox11MasseterOri4()
    {
        return $this->Checkbox11MasseterOri4;
    }

    /**
     * Set checkbox11MasseterCorps1
     *
     * @param string $checkbox11MasseterCorps1
     *
     * @return Form11
     */
    public function setCheckbox11MasseterCorps1($checkbox11MasseterCorps1)
    {
        $this->Checkbox11MasseterCorps1 = $checkbox11MasseterCorps1;

        return $this;
    }

    /**
     * Get checkbox11MasseterCorps1
     *
     * @return string
     */
    public function getCheckbox11MasseterCorps1()
    {
        return $this->Checkbox11MasseterCorps1;
    }

    /**
     * Set checkbox11MasseterCorps2
     *
     * @param string $checkbox11MasseterCorps2
     *
     * @return Form11
     */
    public function setCheckbox11MasseterCorps2($checkbox11MasseterCorps2)
    {
        $this->Checkbox11MasseterCorps2 = $checkbox11MasseterCorps2;

        return $this;
    }

    /**
     * Get checkbox11MasseterCorps2
     *
     * @return string
     */
    public function getCheckbox11MasseterCorps2()
    {
        return $this->Checkbox11MasseterCorps2;
    }

    /**
     * Set checkbox11MasseterCorps3
     *
     * @param string $checkbox11MasseterCorps3
     *
     * @return Form11
     */
    public function setCheckbox11MasseterCorps3($checkbox11MasseterCorps3)
    {
        $this->Checkbox11MasseterCorps3 = $checkbox11MasseterCorps3;

        return $this;
    }

    /**
     * Get checkbox11MasseterCorps3
     *
     * @return string
     */
    public function getCheckbox11MasseterCorps3()
    {
        return $this->Checkbox11MasseterCorps3;
    }

    /**
     * Set checkbox11MasseterCorps4
     *
     * @param string $checkbox11MasseterCorps4
     *
     * @return Form11
     */
    public function setCheckbox11MasseterCorps4($checkbox11MasseterCorps4)
    {
        $this->Checkbox11MasseterCorps4 = $checkbox11MasseterCorps4;

        return $this;
    }

    /**
     * Get checkbox11MasseterCorps4
     *
     * @return string
     */
    public function getCheckbox11MasseterCorps4()
    {
        return $this->Checkbox11MasseterCorps4;
    }

    /**
     * Set checkbox11MasseterInsert1
     *
     * @param string $checkbox11MasseterInsert1
     *
     * @return Form11
     */
    public function setCheckbox11MasseterInsert1($checkbox11MasseterInsert1)
    {
        $this->Checkbox11MasseterInsert1 = $checkbox11MasseterInsert1;

        return $this;
    }

    /**
     * Get checkbox11MasseterInsert1
     *
     * @return string
     */
    public function getCheckbox11MasseterInsert1()
    {
        return $this->Checkbox11MasseterInsert1;
    }

    /**
     * Set checkbox11MasseterInsert2
     *
     * @param string $checkbox11MasseterInsert2
     *
     * @return Form11
     */
    public function setCheckbox11MasseterInsert2($checkbox11MasseterInsert2)
    {
        $this->Checkbox11MasseterInsert2 = $checkbox11MasseterInsert2;

        return $this;
    }

    /**
     * Get checkbox11MasseterInsert2
     *
     * @return string
     */
    public function getCheckbox11MasseterInsert2()
    {
        return $this->Checkbox11MasseterInsert2;
    }

    /**
     * Set checkbox11MasseterInsert3
     *
     * @param string $checkbox11MasseterInsert3
     *
     * @return Form11
     */
    public function setCheckbox11MasseterInsert3($checkbox11MasseterInsert3)
    {
        $this->Checkbox11MasseterInsert3 = $checkbox11MasseterInsert3;

        return $this;
    }

    /**
     * Get checkbox11MasseterInsert3
     *
     * @return string
     */
    public function getCheckbox11MasseterInsert3()
    {
        return $this->Checkbox11MasseterInsert3;
    }

    /**
     * Set checkbox11MasseterInsert4
     *
     * @param string $checkbox11MasseterInsert4
     *
     * @return Form11
     */
    public function setCheckbox11MasseterInsert4($checkbox11MasseterInsert4)
    {
        $this->Checkbox11MasseterInsert4 = $checkbox11MasseterInsert4;

        return $this;
    }

    /**
     * Get checkbox11MasseterInsert4
     *
     * @return string
     */
    public function getCheckbox11MasseterInsert4()
    {
        return $this->Checkbox11MasseterInsert4;
    }

    /**
     * Set checkbox11Pole1
     *
     * @param string $checkbox11Pole1
     *
     * @return Form11
     */
    public function setCheckbox11Pole1($checkbox11Pole1)
    {
        $this->Checkbox11Pole1 = $checkbox11Pole1;

        return $this;
    }

    /**
     * Get checkbox11Pole1
     *
     * @return string
     */
    public function getCheckbox11Pole1()
    {
        return $this->Checkbox11Pole1;
    }

    /**
     * Set checkbox11Pole2
     *
     * @param string $checkbox11Pole2
     *
     * @return Form11
     */
    public function setCheckbox11Pole2($checkbox11Pole2)
    {
        $this->Checkbox11Pole2 = $checkbox11Pole2;

        return $this;
    }

    /**
     * Get checkbox11Pole2
     *
     * @return string
     */
    public function getCheckbox11Pole2()
    {
        return $this->Checkbox11Pole2;
    }

    /**
     * Set checkbox11Pole3
     *
     * @param string $checkbox11Pole3
     *
     * @return Form11
     */
    public function setCheckbox11Pole3($checkbox11Pole3)
    {
        $this->Checkbox11Pole3 = $checkbox11Pole3;

        return $this;
    }

    /**
     * Get checkbox11Pole3
     *
     * @return string
     */
    public function getCheckbox11Pole3()
    {
        return $this->Checkbox11Pole3;
    }

    /**
     * Set checkbox11Pole4
     *
     * @param string $checkbox11Pole4
     *
     * @return Form11
     */
    public function setCheckbox11Pole4($checkbox11Pole4)
    {
        $this->Checkbox11Pole4 = $checkbox11Pole4;

        return $this;
    }

    /**
     * Get checkbox11Pole4
     *
     * @return string
     */
    public function getCheckbox11Pole4()
    {
        return $this->Checkbox11Pole4;
    }

    /**
     * Set checkbox11AutourPole1
     *
     * @param string $checkbox11AutourPole1
     *
     * @return Form11
     */
    public function setCheckbox11AutourPole1($checkbox11AutourPole1)
    {
        $this->Checkbox11AutourPole1 = $checkbox11AutourPole1;

        return $this;
    }

    /**
     * Get checkbox11AutourPole1
     *
     * @return string
     */
    public function getCheckbox11AutourPole1()
    {
        return $this->Checkbox11AutourPole1;
    }

    /**
     * Set checkbox11AutourPole2
     *
     * @param string $checkbox11AutourPole2
     *
     * @return Form11
     */
    public function setCheckbox11AutourPole2($checkbox11AutourPole2)
    {
        $this->Checkbox11AutourPole2 = $checkbox11AutourPole2;

        return $this;
    }

    /**
     * Get checkbox11AutourPole2
     *
     * @return string
     */
    public function getCheckbox11AutourPole2()
    {
        return $this->Checkbox11AutourPole2;
    }

    /**
     * Set checkbox11AutourPole3
     *
     * @param string $checkbox11AutourPole3
     *
     * @return Form11
     */
    public function setCheckbox11AutourPole3($checkbox11AutourPole3)
    {
        $this->Checkbox11AutourPole3 = $checkbox11AutourPole3;

        return $this;
    }

    /**
     * Get checkbox11AutourPole3
     *
     * @return string
     */
    public function getCheckbox11AutourPole3()
    {
        return $this->Checkbox11AutourPole3;
    }

    /**
     * Set checkbox11AutourPole4
     *
     * @param string $checkbox11AutourPole4
     *
     * @return Form11
     */
    public function setCheckbox11AutourPole4($checkbox11AutourPole4)
    {
        $this->Checkbox11AutourPole4 = $checkbox11AutourPole4;

        return $this;
    }

    /**
     * Get checkbox11AutourPole4
     *
     * @return string
     */
    public function getCheckbox11AutourPole4()
    {
        return $this->Checkbox11AutourPole4;
    }

    /**
     * Set checkbox11Digastrique1
     *
     * @param string $checkbox11Digastrique1
     *
     * @return Form11
     */
    public function setCheckbox11Digastrique1($checkbox11Digastrique1)
    {
        $this->Checkbox11Digastrique1 = $checkbox11Digastrique1;

        return $this;
    }

    /**
     * Get checkbox11Digastrique1
     *
     * @return string
     */
    public function getCheckbox11Digastrique1()
    {
        return $this->Checkbox11Digastrique1;
    }

    /**
     * Set checkbox11Digastrique2
     *
     * @param string $checkbox11Digastrique2
     *
     * @return Form11
     */
    public function setCheckbox11Digastrique2($checkbox11Digastrique2)
    {
        $this->Checkbox11Digastrique2 = $checkbox11Digastrique2;

        return $this;
    }

    /**
     * Get checkbox11Digastrique2
     *
     * @return string
     */
    public function getCheckbox11Digastrique2()
    {
        return $this->Checkbox11Digastrique2;
    }

    /**
     * Set checkbox11Digastrique3
     *
     * @param string $checkbox11Digastrique3
     *
     * @return Form11
     */
    public function setCheckbox11Digastrique3($checkbox11Digastrique3)
    {
        $this->Checkbox11Digastrique3 = $checkbox11Digastrique3;

        return $this;
    }

    /**
     * Get checkbox11Digastrique3
     *
     * @return string
     */
    public function getCheckbox11Digastrique3()
    {
        return $this->Checkbox11Digastrique3;
    }

    /**
     * Set checkbox11Digastrique4
     *
     * @param string $checkbox11Digastrique4
     *
     * @return Form11
     */
    public function setCheckbox11Digastrique4($checkbox11Digastrique4)
    {
        $this->Checkbox11Digastrique4 = $checkbox11Digastrique4;

        return $this;
    }

    /**
     * Get checkbox11Digastrique4
     *
     * @return string
     */
    public function getCheckbox11Digastrique4()
    {
        return $this->Checkbox11Digastrique4;
    }

    /**
     * Set checkbox11PteryMed1
     *
     * @param string $checkbox11PteryMed1
     *
     * @return Form11
     */
    public function setCheckbox11PteryMed1($checkbox11PteryMed1)
    {
        $this->Checkbox11PteryMed1 = $checkbox11PteryMed1;

        return $this;
    }

    /**
     * Get checkbox11PteryMed1
     *
     * @return string
     */
    public function getCheckbox11PteryMed1()
    {
        return $this->Checkbox11PteryMed1;
    }

    /**
     * Set checkbox11PteryMed2
     *
     * @param string $checkbox11PteryMed2
     *
     * @return Form11
     */
    public function setCheckbox11PteryMed2($checkbox11PteryMed2)
    {
        $this->Checkbox11PteryMed2 = $checkbox11PteryMed2;

        return $this;
    }

    /**
     * Get checkbox11PteryMed2
     *
     * @return string
     */
    public function getCheckbox11PteryMed2()
    {
        return $this->Checkbox11PteryMed2;
    }

    /**
     * Set checkbox11PteryMed3
     *
     * @param string $checkbox11PteryMed3
     *
     * @return Form11
     */
    public function setCheckbox11PteryMed3($checkbox11PteryMed3)
    {
        $this->Checkbox11PteryMed3 = $checkbox11PteryMed3;

        return $this;
    }

    /**
     * Get checkbox11PteryMed3
     *
     * @return string
     */
    public function getCheckbox11PteryMed3()
    {
        return $this->Checkbox11PteryMed3;
    }

    /**
     * Set checkbox11PteryMed4
     *
     * @param string $checkbox11PteryMed4
     *
     * @return Form11
     */
    public function setCheckbox11PteryMed4($checkbox11PteryMed4)
    {
        $this->Checkbox11PteryMed4 = $checkbox11PteryMed4;

        return $this;
    }

    /**
     * Get checkbox11PteryMed4
     *
     * @return string
     */
    public function getCheckbox11PteryMed4()
    {
        return $this->Checkbox11PteryMed4;
    }

    /**
     * Set checkbox11PteryLat1
     *
     * @param string $checkbox11PteryLat1
     *
     * @return Form11
     */
    public function setCheckbox11PteryLat1($checkbox11PteryLat1)
    {
        $this->Checkbox11PteryLat1 = $checkbox11PteryLat1;

        return $this;
    }

    /**
     * Get checkbox11PteryLat1
     *
     * @return string
     */
    public function getCheckbox11PteryLat1()
    {
        return $this->Checkbox11PteryLat1;
    }

    /**
     * Set checkbox11PteryLat2
     *
     * @param string $checkbox11PteryLat2
     *
     * @return Form11
     */
    public function setCheckbox11PteryLat2($checkbox11PteryLat2)
    {
        $this->Checkbox11PteryLat2 = $checkbox11PteryLat2;

        return $this;
    }

    /**
     * Get checkbox11PteryLat2
     *
     * @return string
     */
    public function getCheckbox11PteryLat2()
    {
        return $this->Checkbox11PteryLat2;
    }

    /**
     * Set checkbox11PteryLat3
     *
     * @param string $checkbox11PteryLat3
     *
     * @return Form11
     */
    public function setCheckbox11PteryLat3($checkbox11PteryLat3)
    {
        $this->Checkbox11PteryLat3 = $checkbox11PteryLat3;

        return $this;
    }

    /**
     * Get checkbox11PteryLat3
     *
     * @return string
     */
    public function getCheckbox11PteryLat3()
    {
        return $this->Checkbox11PteryLat3;
    }

    /**
     * Set checkbox11PteryLat4
     *
     * @param string $checkbox11PteryLat4
     *
     * @return Form11
     */
    public function setCheckbox11PteryLat4($checkbox11PteryLat4)
    {
        $this->Checkbox11PteryLat4 = $checkbox11PteryLat4;

        return $this;
    }

    /**
     * Get checkbox11PteryLat4
     *
     * @return string
     */
    public function getCheckbox11PteryLat4()
    {
        return $this->Checkbox11PteryLat4;
    }

    /**
     * Set checkbox11Tendon1
     *
     * @param string $checkbox11Tendon1
     *
     * @return Form11
     */
    public function setCheckbox11Tendon1($checkbox11Tendon1)
    {
        $this->Checkbox11Tendon1 = $checkbox11Tendon1;

        return $this;
    }

    /**
     * Get checkbox11Tendon1
     *
     * @return string
     */
    public function getCheckbox11Tendon1()
    {
        return $this->Checkbox11Tendon1;
    }

    /**
     * Set checkbox11Tendon2
     *
     * @param string $checkbox11Tendon2
     *
     * @return Form11
     */
    public function setCheckbox11Tendon2($checkbox11Tendon2)
    {
        $this->Checkbox11Tendon2 = $checkbox11Tendon2;

        return $this;
    }

    /**
     * Get checkbox11Tendon2
     *
     * @return string
     */
    public function getCheckbox11Tendon2()
    {
        return $this->Checkbox11Tendon2;
    }

    /**
     * Set checkbox11Tendon3
     *
     * @param string $checkbox11Tendon3
     *
     * @return Form11
     */
    public function setCheckbox11Tendon3($checkbox11Tendon3)
    {
        $this->Checkbox11Tendon3 = $checkbox11Tendon3;

        return $this;
    }

    /**
     * Get checkbox11Tendon3
     *
     * @return string
     */
    public function getCheckbox11Tendon3()
    {
        return $this->Checkbox11Tendon3;
    }

    /**
     * Set checkbox11Tendon4
     *
     * @param string $checkbox11Tendon4
     *
     * @return Form11
     */
    public function setCheckbox11Tendon4($checkbox11Tendon4)
    {
        $this->Checkbox11Tendon4 = $checkbox11Tendon4;

        return $this;
    }

    /**
     * Get checkbox11Tendon4
     *
     * @return string
     */
    public function getCheckbox11Tendon4()
    {
        return $this->Checkbox11Tendon4;
    }

    /**
     * Set checkbox11Sterno1
     *
     * @param string $checkbox11Sterno1
     *
     * @return Form11
     */
    public function setCheckbox11Sterno1($checkbox11Sterno1)
    {
        $this->Checkbox11Sterno1 = $checkbox11Sterno1;

        return $this;
    }

    /**
     * Get checkbox11Sterno1
     *
     * @return string
     */
    public function getCheckbox11Sterno1()
    {
        return $this->Checkbox11Sterno1;
    }

    /**
     * Set checkbox11Sterno2
     *
     * @param string $checkbox11Sterno2
     *
     * @return Form11
     */
    public function setCheckbox11Sterno2($checkbox11Sterno2)
    {
        $this->Checkbox11Sterno2 = $checkbox11Sterno2;

        return $this;
    }

    /**
     * Get checkbox11Sterno2
     *
     * @return string
     */
    public function getCheckbox11Sterno2()
    {
        return $this->Checkbox11Sterno2;
    }

    /**
     * Set checkbox11Sterno3
     *
     * @param string $checkbox11Sterno3
     *
     * @return Form11
     */
    public function setCheckbox11Sterno3($checkbox11Sterno3)
    {
        $this->Checkbox11Sterno3 = $checkbox11Sterno3;

        return $this;
    }

    /**
     * Get checkbox11Sterno3
     *
     * @return string
     */
    public function getCheckbox11Sterno3()
    {
        return $this->Checkbox11Sterno3;
    }

    /**
     * Set checkbox11Sterno4
     *
     * @param string $checkbox11Sterno4
     *
     * @return Form11
     */
    public function setCheckbox11Sterno4($checkbox11Sterno4)
    {
        $this->Checkbox11Sterno4 = $checkbox11Sterno4;

        return $this;
    }

    /**
     * Get checkbox11Sterno4
     *
     * @return string
     */
    public function getCheckbox11Sterno4()
    {
        return $this->Checkbox11Sterno4;
    }

    /**
     * Set checkbox11Trapeze1
     *
     * @param string $checkbox11Trapeze1
     *
     * @return Form11
     */
    public function setCheckbox11Trapeze1($checkbox11Trapeze1)
    {
        $this->Checkbox11Trapeze1 = $checkbox11Trapeze1;

        return $this;
    }

    /**
     * Get checkbox11Trapeze1
     *
     * @return string
     */
    public function getCheckbox11Trapeze1()
    {
        return $this->Checkbox11Trapeze1;
    }

    /**
     * Set checkbox11Trapeze2
     *
     * @param string $checkbox11Trapeze2
     *
     * @return Form11
     */
    public function setCheckbox11Trapeze2($checkbox11Trapeze2)
    {
        $this->Checkbox11Trapeze2 = $checkbox11Trapeze2;

        return $this;
    }

    /**
     * Get checkbox11Trapeze2
     *
     * @return string
     */
    public function getCheckbox11Trapeze2()
    {
        return $this->Checkbox11Trapeze2;
    }

    /**
     * Set checkbox11Trapeze3
     *
     * @param string $checkbox11Trapeze3
     *
     * @return Form11
     */
    public function setCheckbox11Trapeze3($checkbox11Trapeze3)
    {
        $this->Checkbox11Trapeze3 = $checkbox11Trapeze3;

        return $this;
    }

    /**
     * Get checkbox11Trapeze3
     *
     * @return string
     */
    public function getCheckbox11Trapeze3()
    {
        return $this->Checkbox11Trapeze3;
    }

    /**
     * Set checkbox11Trapeze4
     *
     * @param string $checkbox11Trapeze4
     *
     * @return Form11
     */
    public function setCheckbox11Trapeze4($checkbox11Trapeze4)
    {
        $this->Checkbox11Trapeze4 = $checkbox11Trapeze4;

        return $this;
    }

    /**
     * Get checkbox11Trapeze4
     *
     * @return string
     */
    public function getCheckbox11Trapeze4()
    {
        return $this->Checkbox11Trapeze4;
    }

    /**
     * Set text11AutreMuscle1
     *
     * @param string $text11AutreMuscle1
     *
     * @return Form11
     */
    public function setText11AutreMuscle1($text11AutreMuscle1)
    {
        $this->Text11AutreMuscle1 = $text11AutreMuscle1;

        return $this;
    }

    /**
     * Get text11AutreMuscle1
     *
     * @return string
     */
    public function getText11AutreMuscle1()
    {
        return $this->Text11AutreMuscle1;
    }

    /**
     * Set checkbox11AutreMuscle11
     *
     * @param string $checkbox11AutreMuscle11
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle11($checkbox11AutreMuscle11)
    {
        $this->Checkbox11AutreMuscle11 = $checkbox11AutreMuscle11;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle11
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle11()
    {
        return $this->Checkbox11AutreMuscle11;
    }

    /**
     * Set checkbox11AutreMuscle12
     *
     * @param string $checkbox11AutreMuscle12
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle12($checkbox11AutreMuscle12)
    {
        $this->Checkbox11AutreMuscle12 = $checkbox11AutreMuscle12;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle12
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle12()
    {
        return $this->Checkbox11AutreMuscle12;
    }

    /**
     * Set checkbox11AutreMuscle13
     *
     * @param string $checkbox11AutreMuscle13
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle13($checkbox11AutreMuscle13)
    {
        $this->Checkbox11AutreMuscle13 = $checkbox11AutreMuscle13;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle13
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle13()
    {
        return $this->Checkbox11AutreMuscle13;
    }

    /**
     * Set checkbox11AutreMuscle14
     *
     * @param string $checkbox11AutreMuscle14
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle14($checkbox11AutreMuscle14)
    {
        $this->Checkbox11AutreMuscle14 = $checkbox11AutreMuscle14;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle14
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle14()
    {
        return $this->Checkbox11AutreMuscle14;
    }

    /**
     * Set text11AutreMuscle2
     *
     * @param string $text11AutreMuscle2
     *
     * @return Form11
     */
    public function setText11AutreMuscle2($text11AutreMuscle2)
    {
        $this->Text11AutreMuscle2 = $text11AutreMuscle2;

        return $this;
    }

    /**
     * Get text11AutreMuscle2
     *
     * @return string
     */
    public function getText11AutreMuscle2()
    {
        return $this->Text11AutreMuscle2;
    }

    /**
     * Set checkbox11AutreMuscle21
     *
     * @param string $checkbox11AutreMuscle21
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle21($checkbox11AutreMuscle21)
    {
        $this->Checkbox11AutreMuscle21 = $checkbox11AutreMuscle21;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle21
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle21()
    {
        return $this->Checkbox11AutreMuscle21;
    }

    /**
     * Set checkbox11AutreMuscle22
     *
     * @param string $checkbox11AutreMuscle22
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle22($checkbox11AutreMuscle22)
    {
        $this->Checkbox11AutreMuscle22 = $checkbox11AutreMuscle22;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle22
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle22()
    {
        return $this->Checkbox11AutreMuscle22;
    }

    /**
     * Set checkbox11AutreMuscle23
     *
     * @param string $checkbox11AutreMuscle23
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle23($checkbox11AutreMuscle23)
    {
        $this->Checkbox11AutreMuscle23 = $checkbox11AutreMuscle23;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle23
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle23()
    {
        return $this->Checkbox11AutreMuscle23;
    }

    /**
     * Set checkbox11AutreMuscle24
     *
     * @param string $checkbox11AutreMuscle24
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle24($checkbox11AutreMuscle24)
    {
        $this->Checkbox11AutreMuscle24 = $checkbox11AutreMuscle24;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle24
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle24()
    {
        return $this->Checkbox11AutreMuscle24;
    }

    /**
     * Set text11AutreMuscle3
     *
     * @param string $text11AutreMuscle3
     *
     * @return Form11
     */
    public function setText11AutreMuscle3($text11AutreMuscle3)
    {
        $this->Text11AutreMuscle3 = $text11AutreMuscle3;

        return $this;
    }

    /**
     * Get text11AutreMuscle3
     *
     * @return string
     */
    public function getText11AutreMuscle3()
    {
        return $this->Text11AutreMuscle3;
    }

    /**
     * Set checkbox11AutreMuscle31
     *
     * @param string $checkbox11AutreMuscle31
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle31($checkbox11AutreMuscle31)
    {
        $this->Checkbox11AutreMuscle31 = $checkbox11AutreMuscle31;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle31
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle31()
    {
        return $this->Checkbox11AutreMuscle31;
    }

    /**
     * Set checkbox11AutreMuscle32
     *
     * @param string $checkbox11AutreMuscle32
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle32($checkbox11AutreMuscle32)
    {
        $this->Checkbox11AutreMuscle32 = $checkbox11AutreMuscle32;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle32
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle32()
    {
        return $this->Checkbox11AutreMuscle32;
    }

    /**
     * Set checkbox11AutreMuscle33
     *
     * @param string $checkbox11AutreMuscle33
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle33($checkbox11AutreMuscle33)
    {
        $this->Checkbox11AutreMuscle33 = $checkbox11AutreMuscle33;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle33
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle33()
    {
        return $this->Checkbox11AutreMuscle33;
    }

    /**
     * Set checkbox11AutreMuscle34
     *
     * @param string $checkbox11AutreMuscle34
     *
     * @return Form11
     */
    public function setCheckbox11AutreMuscle34($checkbox11AutreMuscle34)
    {
        $this->Checkbox11AutreMuscle34 = $checkbox11AutreMuscle34;

        return $this;
    }

    /**
     * Get checkbox11AutreMuscle34
     *
     * @return string
     */
    public function getCheckbox11AutreMuscle34()
    {
        return $this->Checkbox11AutreMuscle34;
    }
}
