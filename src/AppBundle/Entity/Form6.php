<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form6")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form6
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
* @ORM\Column(name="Checkbox6Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox6Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox6NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox6NonRenseigne;

/**
* @var string
*
* @ORM\Column(name="Text6TroublesOculaires", type="string", length=255, nullable=true)
*/
private $Text6TroublesOculaires;


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
     * Set checkbox6Negatif
     *
     * @param string $checkbox6Negatif
     *
     * @return Form6
     */
    public function setCheckbox6Negatif($checkbox6Negatif)
    {
        $this->Checkbox6Negatif = $checkbox6Negatif;

        return $this;
    }

    /**
     * Get checkbox6Negatif
     *
     * @return string
     */
    public function getCheckbox6Negatif()
    {
        return $this->Checkbox6Negatif;
    }

    /**
     * Set checkbox6NonRenseigne
     *
     * @param string $checkbox6NonRenseigne
     *
     * @return Form6
     */
    public function setCheckbox6NonRenseigne($checkbox6NonRenseigne)
    {
        $this->Checkbox6NonRenseigne = $checkbox6NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox6NonRenseigne
     *
     * @return string
     */
    public function getCheckbox6NonRenseigne()
    {
        return $this->Checkbox6NonRenseigne;
    }

    /**
     * Set text6TroublesOculaires
     *
     * @param string $text6TroublesOculaires
     *
     * @return Form6
     */
    public function setText6TroublesOculaires($text6TroublesOculaires)
    {
        $this->Text6TroublesOculaires = $text6TroublesOculaires;

        return $this;
    }

    /**
     * Get text6TroublesOculaires
     *
     * @return string
     */
    public function getText6TroublesOculaires()
    {
        return $this->Text6TroublesOculaires;
    }
}
