<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;
use AppBundle\Entity\Form0;
use AppBundle\Entity\Form1;
use AppBundle\Entity\Form2;
use AppBundle\Entity\Form3;
use AppBundle\Entity\Form4;
use AppBundle\Entity\Form5;
use AppBundle\Entity\Form6;
use AppBundle\Entity\Form7;
use AppBundle\Entity\Form8;
use AppBundle\Entity\Form9;
use AppBundle\Entity\Form10;
use AppBundle\Entity\Form11;
use AppBundle\Entity\Form12;
use AppBundle\Entity\Form13;
use AppBundle\Entity\Form14;
use AppBundle\Entity\Form15;
use AppBundle\Entity\Form16;
use AppBundle\Entity\Form17;
use AppBundle\Entity\Form18;
use AppBundle\Entity\Form19;
use AppBundle\Entity\Form20;
use AppBundle\Entity\Form21;
use AppBundle\Entity\Form22;
use AppBundle\Entity\Form23;


/**
 * AllForms
 *
 * @ORM\Table(name="all_forms")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AllFormsRepository")
 */
class AllForms
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
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Form0")
     */
    private $form0;
    /**
     * @ORM\ManyToOne(targetEntity="Form1")
     */
    private $form1;
    /**
     * @ORM\ManyToOne(targetEntity="Form2")
     */
    private $form2;
    /**
     * @ORM\ManyToOne(targetEntity="Form3")
     */
    private $form3;
    /**
     * @ORM\ManyToOne(targetEntity="Form4")
     */
    private $form4;
    /**
     * @ORM\ManyToOne(targetEntity="Form5")
     */
    private $form5;
    /**
     * @ORM\ManyToOne(targetEntity="Form6")
     */
    private $form6;
    /**
     * @ORM\ManyToOne(targetEntity="Form7")
     */
    private $form7;
    /**
     * @ORM\ManyToOne(targetEntity="Form8")
     */
    private $form8;
    /**
     * @ORM\ManyToOne(targetEntity="Form9")
     */
    private $form9;
    /**
     * @ORM\ManyToOne(targetEntity="Form10")
     */
    private $form10;
    /**
     * @ORM\ManyToOne(targetEntity="Form11")
     */
    private $form11;
    /**
     * @ORM\ManyToOne(targetEntity="Form12")
     */
    private $form12;
    /**
     * @ORM\ManyToOne(targetEntity="Form13")
     */
    private $form13;
    /**
     * @ORM\ManyToOne(targetEntity="Form14")
     */
    private $form14;
    /**
     * @ORM\ManyToOne(targetEntity="Form15")
     */
    private $form15;
    /**
     * @ORM\ManyToOne(targetEntity="Form16")
     */
    private $form16;
    /**
     * @ORM\ManyToOne(targetEntity="Form17")
     */
    private $form17;
    /**
     * @ORM\ManyToOne(targetEntity="Form18")
     */
    private $form18;
    /**
     * @ORM\ManyToOne(targetEntity="Form19")
     */
    private $form19;
    /**
     * @ORM\ManyToOne(targetEntity="Form20")
     */
    private $form20;
    /**
     * @ORM\ManyToOne(targetEntity="Form21")
     */
    private $form21;
    /**
     * @ORM\ManyToOne(targetEntity="Form22")
     */
    private $form22;
    /**
     * @ORM\ManyToOne(targetEntity="Form23")
     */
    private $form23;


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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return AllForms
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set form0
     *
     * @param \AppBundle\Entity\Form0 $form0
     *
     * @return AllForms
     */
    public function setForm0(\AppBundle\Entity\Form0 $form0 = null)
    {
        $this->form0 = $form0;

        return $this;
    }

    /**
     * Get form0
     *
     * @return \AppBundle\Entity\Form0
     */
    public function getForm0()
    {
        return $this->form0;
    }

    /**
     * Set form1
     *
     * @param \AppBundle\Entity\Form1 $form1
     *
     * @return AllForms
     */
    public function setForm1(\AppBundle\Entity\Form1 $form1 = null)
    {
        $this->form1 = $form1;

        return $this;
    }

    /**
     * Get form1
     *
     * @return \AppBundle\Entity\Form1
     */
    public function getForm1()
    {
        return $this->form1;
    }

    /**
     * Set form2
     *
     * @param \AppBundle\Entity\Form2 $form2
     *
     * @return AllForms
     */
    public function setForm2(\AppBundle\Entity\Form2 $form2 = null)
    {
        $this->form2 = $form2;

        return $this;
    }

    /**
     * Get form2
     *
     * @return \AppBundle\Entity\Form2
     */
    public function getForm2()
    {
        return $this->form2;
    }

    /**
     * Set form3
     *
     * @param \AppBundle\Entity\Form3 $form3
     *
     * @return AllForms
     */
    public function setForm3(\AppBundle\Entity\Form3 $form3 = null)
    {
        $this->form3 = $form3;

        return $this;
    }

    /**
     * Get form3
     *
     * @return \AppBundle\Entity\Form3
     */
    public function getForm3()
    {
        return $this->form3;
    }

    /**
     * Set form4
     *
     * @param \AppBundle\Entity\Form4 $form4
     *
     * @return AllForms
     */
    public function setForm4(\AppBundle\Entity\Form4 $form4 = null)
    {
        $this->form4 = $form4;

        return $this;
    }

    /**
     * Get form4
     *
     * @return \AppBundle\Entity\Form4
     */
    public function getForm4()
    {
        return $this->form4;
    }

    /**
     * Set form5
     *
     * @param \AppBundle\Entity\Form5 $form5
     *
     * @return AllForms
     */
    public function setForm5(\AppBundle\Entity\Form5 $form5 = null)
    {
        $this->form5 = $form5;

        return $this;
    }

    /**
     * Get form5
     *
     * @return \AppBundle\Entity\Form5
     */
    public function getForm5()
    {
        return $this->form5;
    }

    /**
     * Set form6
     *
     * @param \AppBundle\Entity\Form6 $form6
     *
     * @return AllForms
     */
    public function setForm6(\AppBundle\Entity\Form6 $form6 = null)
    {
        $this->form6 = $form6;

        return $this;
    }

    /**
     * Get form6
     *
     * @return \AppBundle\Entity\Form6
     */
    public function getForm6()
    {
        return $this->form6;
    }

    /**
     * Set form7
     *
     * @param \AppBundle\Entity\Form7 $form7
     *
     * @return AllForms
     */
    public function setForm7(\AppBundle\Entity\Form7 $form7 = null)
    {
        $this->form7 = $form7;

        return $this;
    }

    /**
     * Get form7
     *
     * @return \AppBundle\Entity\Form7
     */
    public function getForm7()
    {
        return $this->form7;
    }

    /**
     * Set form8
     *
     * @param \AppBundle\Entity\Form8 $form8
     *
     * @return AllForms
     */
    public function setForm8(\AppBundle\Entity\Form8 $form8 = null)
    {
        $this->form8 = $form8;

        return $this;
    }

    /**
     * Get form8
     *
     * @return \AppBundle\Entity\Form8
     */
    public function getForm8()
    {
        return $this->form8;
    }

    /**
     * Set form9
     *
     * @param \AppBundle\Entity\Form9 $form9
     *
     * @return AllForms
     */
    public function setForm9(\AppBundle\Entity\Form9 $form9 = null)
    {
        $this->form9 = $form9;

        return $this;
    }

    /**
     * Get form9
     *
     * @return \AppBundle\Entity\Form9
     */
    public function getForm9()
    {
        return $this->form9;
    }

    /**
     * Set form10
     *
     * @param \AppBundle\Entity\Form10 $form10
     *
     * @return AllForms
     */
    public function setForm10(\AppBundle\Entity\Form10 $form10 = null)
    {
        $this->form10 = $form10;

        return $this;
    }

    /**
     * Get form10
     *
     * @return \AppBundle\Entity\Form10
     */
    public function getForm10()
    {
        return $this->form10;
    }

    /**
     * Set form11
     *
     * @param \AppBundle\Entity\Form11 $form11
     *
     * @return AllForms
     */
    public function setForm11(\AppBundle\Entity\Form11 $form11 = null)
    {
        $this->form11 = $form11;

        return $this;
    }

    /**
     * Get form11
     *
     * @return \AppBundle\Entity\Form11
     */
    public function getForm11()
    {
        return $this->form11;
    }

    /**
     * Set form12
     *
     * @param \AppBundle\Entity\Form12 $form12
     *
     * @return AllForms
     */
    public function setForm12(\AppBundle\Entity\Form12 $form12 = null)
    {
        $this->form12 = $form12;

        return $this;
    }

    /**
     * Get form12
     *
     * @return \AppBundle\Entity\Form12
     */
    public function getForm12()
    {
        return $this->form12;
    }

    /**
     * Set form13
     *
     * @param \AppBundle\Entity\Form13 $form13
     *
     * @return AllForms
     */
    public function setForm13(\AppBundle\Entity\Form13 $form13 = null)
    {
        $this->form13 = $form13;

        return $this;
    }

    /**
     * Get form13
     *
     * @return \AppBundle\Entity\Form13
     */
    public function getForm13()
    {
        return $this->form13;
    }

    /**
     * Set form14
     *
     * @param \AppBundle\Entity\Form14 $form14
     *
     * @return AllForms
     */
    public function setForm14(\AppBundle\Entity\Form14 $form14 = null)
    {
        $this->form14 = $form14;

        return $this;
    }

    /**
     * Get form14
     *
     * @return \AppBundle\Entity\Form14
     */
    public function getForm14()
    {
        return $this->form14;
    }

    /**
     * Set form15
     *
     * @param \AppBundle\Entity\Form15 $form15
     *
     * @return AllForms
     */
    public function setForm15(\AppBundle\Entity\Form15 $form15 = null)
    {
        $this->form15 = $form15;

        return $this;
    }

    /**
     * Get form15
     *
     * @return \AppBundle\Entity\Form15
     */
    public function getForm15()
    {
        return $this->form15;
    }

    /**
     * Set form16
     *
     * @param \AppBundle\Entity\Form16 $form16
     *
     * @return AllForms
     */
    public function setForm16(\AppBundle\Entity\Form16 $form16 = null)
    {
        $this->form16 = $form16;

        return $this;
    }

    /**
     * Get form16
     *
     * @return \AppBundle\Entity\Form16
     */
    public function getForm16()
    {
        return $this->form16;
    }

    /**
     * Set form17
     *
     * @param \AppBundle\Entity\Form17 $form17
     *
     * @return AllForms
     */
    public function setForm17(\AppBundle\Entity\Form17 $form17 = null)
    {
        $this->form17 = $form17;

        return $this;
    }

    /**
     * Get form17
     *
     * @return \AppBundle\Entity\Form17
     */
    public function getForm17()
    {
        return $this->form17;
    }

    /**
     * Set form18
     *
     * @param \AppBundle\Entity\Form18 $form18
     *
     * @return AllForms
     */
    public function setForm18(\AppBundle\Entity\Form18 $form18 = null)
    {
        $this->form18 = $form18;

        return $this;
    }

    /**
     * Get form18
     *
     * @return \AppBundle\Entity\Form18
     */
    public function getForm18()
    {
        return $this->form18;
    }

    /**
     * Set form19
     *
     * @param \AppBundle\Entity\Form19 $form19
     *
     * @return AllForms
     */
    public function setForm19(\AppBundle\Entity\Form19 $form19 = null)
    {
        $this->form19 = $form19;

        return $this;
    }

    /**
     * Get form19
     *
     * @return \AppBundle\Entity\Form19
     */
    public function getForm19()
    {
        return $this->form19;
    }

    /**
     * Set form20
     *
     * @param \AppBundle\Entity\Form20 $form20
     *
     * @return AllForms
     */
    public function setForm20(\AppBundle\Entity\Form20 $form20 = null)
    {
        $this->form20 = $form20;

        return $this;
    }

    /**
     * Get form20
     *
     * @return \AppBundle\Entity\Form20
     */
    public function getForm20()
    {
        return $this->form20;
    }

    /**
     * Set form21
     *
     * @param \AppBundle\Entity\Form21 $form21
     *
     * @return AllForms
     */
    public function setForm21(\AppBundle\Entity\Form21 $form21 = null)
    {
        $this->form21 = $form21;

        return $this;
    }

    /**
     * Get form21
     *
     * @return \AppBundle\Entity\Form21
     */
    public function getForm21()
    {
        return $this->form21;
    }

    /**
     * Set form22
     *
     * @param \AppBundle\Entity\Form22 $form22
     *
     * @return AllForms
     */
    public function setForm22(\AppBundle\Entity\Form22 $form22 = null)
    {
        $this->form22 = $form22;

        return $this;
    }

    /**
     * Get form22
     *
     * @return \AppBundle\Entity\Form22
     */
    public function getForm22()
    {
        return $this->form22;
    }

    /**
     * Set form23
     *
     * @param \AppBundle\Entity\Form23 $form23
     *
     * @return AllForms
     */
    public function setForm23(\AppBundle\Entity\Form23 $form23 = null)
    {
        $this->form23 = $form23;

        return $this;
    }

    /**
     * Get form23
     *
     * @return \AppBundle\Entity\Form23
     */
    public function getForm23()
    {
        return $this->form23;
    }
}
