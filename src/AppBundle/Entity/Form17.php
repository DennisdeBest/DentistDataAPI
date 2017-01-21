<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form17")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form17
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
* @ORM\Column(name="Checkbox17Negatif", type="string", length=255, nullable=true)
*/
private $Checkbox17Negatif;

/**
* @var string
*
* @ORM\Column(name="Checkbox17NonRenseigne", type="string", length=255, nullable=true)
*/
private $Checkbox17NonRenseigne;


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
     * Set checkbox17Negatif
     *
     * @param string $checkbox17Negatif
     *
     * @return Form17
     */
    public function setCheckbox17Negatif($checkbox17Negatif)
    {
        $this->Checkbox17Negatif = $checkbox17Negatif;

        return $this;
    }

    /**
     * Get checkbox17Negatif
     *
     * @return string
     */
    public function getCheckbox17Negatif()
    {
        return $this->Checkbox17Negatif;
    }

    /**
     * Set checkbox17NonRenseigne
     *
     * @param string $checkbox17NonRenseigne
     *
     * @return Form17
     */
    public function setCheckbox17NonRenseigne($checkbox17NonRenseigne)
    {
        $this->Checkbox17NonRenseigne = $checkbox17NonRenseigne;

        return $this;
    }

    /**
     * Get checkbox17NonRenseigne
     *
     * @return string
     */
    public function getCheckbox17NonRenseigne()
    {
        return $this->Checkbox17NonRenseigne;
    }
}
