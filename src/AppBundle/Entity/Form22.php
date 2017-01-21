<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form22")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form22
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
* @ORM\Column(name="Textarea22Diag", type="string", length=255, nullable=true)
*/
private $Textarea22Diag;


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
     * Set textarea22Diag
     *
     * @param string $textarea22Diag
     *
     * @return Form22
     */
    public function setTextarea22Diag($textarea22Diag)
    {
        $this->Textarea22Diag = $textarea22Diag;

        return $this;
    }

    /**
     * Get textarea22Diag
     *
     * @return string
     */
    public function getTextarea22Diag()
    {
        return $this->Textarea22Diag;
    }
}
