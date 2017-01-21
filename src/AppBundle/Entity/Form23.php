<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form23")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form23
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
* @ORM\Column(name="Textarea23Trait", type="string", length=255, nullable=true)
*/
private $Textarea23Trait;


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
     * Set textarea23Trait
     *
     * @param string $textarea23Trait
     *
     * @return Form23
     */
    public function setTextarea23Trait($textarea23Trait)
    {
        $this->Textarea23Trait = $textarea23Trait;

        return $this;
    }

    /**
     * Get textarea23Trait
     *
     * @return string
     */
    public function getTextarea23Trait()
    {
        return $this->Textarea23Trait;
    }
}
