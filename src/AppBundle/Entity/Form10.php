<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form10")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form10
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
* @ORM\Column(name="Checkbox10Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox10Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox10NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox10NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Text10Complement", type="string", length=255, nullable=true)
*/
private $Text10Complement;


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
     * Set checkbox10Negatif
     *
     * @param string $checkbox10Negatif
     *
     * @return Form10
     */
    public function setCheckbox10Negatif($checkbox10Negatif)
    {
        $this->Checkbox10Negatif = $checkbox10Negatif;

        return $this;
    }

    /**
     * Get checkbox10Negatif
     *
     * @return string
     */
    public function getCheckbox10Negatif()
    {
        return $this->Checkbox10Negatif;
    }

    /**
     * Set checkbox10NonRenseigne
     *
     * @param string $checkbox10NonRenseigne
     *
     * @return Form10
     */
    public function setCheckbox10NonRenseigne($checkbox10NonRenseigne)
    {
        $this->Checkbox10NonRenseigne = $checkbox10NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox10NonRenseigne
     *
     * @return string
     */
    public function getCheckbox10NonRenseigne()
    {
        return $this->Checkbox10NonRenseigne;
    }

    /**
     * Set text10Complement
     *
     * @param string $text10Complement
     *
     * @return Form10
     */
    public function setText10Complement($text10Complement)
    {
        $this->Text10Complement = $text10Complement;

        return $this;
    }

    /**
     * Get text10Complement
     *
     * @return string
     */
    public function getText10Complement()
    {
        return $this->Text10Complement;
    }
}
