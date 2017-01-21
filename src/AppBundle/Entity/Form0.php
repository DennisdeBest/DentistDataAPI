<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form0")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form0
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
* @ORM\Column(name="Text0ID", type="string", length=255, nullable=true)
*/
private $Text0ID;

/**
* @var string
*
* @ORM\Column(name="Select0Sexe", type="string", length=255, nullable=true)
*/
private $Select0Sexe;

/**
* @var string
*
* @ORM\Column(name="Text0Profession", type="string", length=255, nullable=true)
*/
private $Text0Profession;

/**
* @var string
*
* @ORM\Column(name="Date0DateNaissance", type="string", length=255, nullable=true)
*/
private $Date0DateNaissance;

/**
* @var string
*
* @ORM\Column(name="Date0DateConsult", type="string", length=255, nullable=true)
*/
private $Date0DateConsult;

/**
* @var string
*
* @ORM\Column(name="Textarea0BilanSante", type="string", length=255, nullable=true)
*/
private $Textarea0BilanSante;


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
     * Set text0ID
     *
     * @param string $text0ID
     *
     * @return Form0
     */
    public function setText0ID($text0ID)
    {
        $this->Text0ID = $text0ID;

        return $this;
    }

    /**
     * Get text0ID
     *
     * @return string
     */
    public function getText0ID()
    {
        return $this->Text0ID;
    }

    /**
     * Set select0Sexe
     *
     * @param string $select0Sexe
     *
     * @return Form0
     */
    public function setSelect0Sexe($select0Sexe)
    {
        $this->Select0Sexe = $select0Sexe;

        return $this;
    }

    /**
     * Get select0Sexe
     *
     * @return string
     */
    public function getSelect0Sexe()
    {
        return $this->Select0Sexe;
    }

    /**
     * Set text0Profession
     *
     * @param string $text0Profession
     *
     * @return Form0
     */
    public function setText0Profession($text0Profession)
    {
        $this->Text0Profession = $text0Profession;

        return $this;
    }

    /**
     * Get text0Profession
     *
     * @return string
     */
    public function getText0Profession()
    {
        return $this->Text0Profession;
    }

    /**
     * Set date0DateNaissance
     *
     * @param string $date0DateNaissance
     *
     * @return Form0
     */
    public function setDate0DateNaissance($date0DateNaissance)
    {
        $this->Date0DateNaissance = $date0DateNaissance;

        return $this;
    }

    /**
     * Get date0DateNaissance
     *
     * @return string
     */
    public function getDate0DateNaissance()
    {
        return $this->Date0DateNaissance;
    }

    /**
     * Set date0DateConsult
     *
     * @param string $date0DateConsult
     *
     * @return Form0
     */
    public function setDate0DateConsult($date0DateConsult)
    {
        $this->Date0DateConsult = $date0DateConsult;

        return $this;
    }

    /**
     * Get date0DateConsult
     *
     * @return string
     */
    public function getDate0DateConsult()
    {
        return $this->Date0DateConsult;
    }

    /**
     * Set textarea0BilanSante
     *
     * @param string $textarea0BilanSante
     *
     * @return Form0
     */
    public function setTextarea0BilanSante($textarea0BilanSante)
    {
        $this->Textarea0BilanSante = $textarea0BilanSante;

        return $this;
    }

    /**
     * Get textarea0BilanSante
     *
     * @return string
     */
    public function getTextarea0BilanSante()
    {
        return $this->Textarea0BilanSante;
    }
}
