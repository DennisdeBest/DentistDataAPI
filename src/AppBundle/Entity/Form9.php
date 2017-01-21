<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form9")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form9
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
* @ORM\Column(name="Checkbox9Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox9Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox9NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox9NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Text9Complement", type="string", length=255, nullable=true)
*/
private $Text9Complement;


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
     * Set checkbox9Negatif
     *
     * @param string $checkbox9Negatif
     *
     * @return Form9
     */
    public function setCheckbox9Negatif($checkbox9Negatif)
    {
        $this->Checkbox9Negatif = $checkbox9Negatif;

        return $this;
    }

    /**
     * Get checkbox9Negatif
     *
     * @return string
     */
    public function getCheckbox9Negatif()
    {
        return $this->Checkbox9Negatif;
    }

    /**
     * Set checkbox9NonRenseigne
     *
     * @param string $checkbox9NonRenseigne
     *
     * @return Form9
     */
    public function setCheckbox9NonRenseigne($checkbox9NonRenseigne)
    {
        $this->Checkbox9NonRenseigne = $checkbox9NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox9NonRenseigne
     *
     * @return string
     */
    public function getCheckbox9NonRenseigne()
    {
        return $this->Checkbox9NonRenseigne;
    }

    /**
     * Set text9Complement
     *
     * @param string $text9Complement
     *
     * @return Form9
     */
    public function setText9Complement($text9Complement)
    {
        $this->Text9Complement = $text9Complement;

        return $this;
    }

    /**
     * Get text9Complement
     *
     * @return string
     */
    public function getText9Complement()
    {
        return $this->Text9Complement;
    }
}
