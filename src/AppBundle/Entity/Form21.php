<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Form
*
* @ORM\Table(name="form21")
* @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
*/
class Form21
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
* @ORM\Column(name="Text21TypeExam", type="string", length=255, nullable=true)
*/
private $Text21TypeExam;


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
     * Set text21TypeExam
     *
     * @param string $text21TypeExam
     *
     * @return Form21
     */
    public function setText21TypeExam($text21TypeExam)
    {
        $this->Text21TypeExam = $text21TypeExam;

        return $this;
    }

    /**
     * Get text21TypeExam
     *
     * @return string
     */
    public function getText21TypeExam()
    {
        return $this->Text21TypeExam;
    }
}
