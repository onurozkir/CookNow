<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rate
 *
 * @ORM\Table(name="rate")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RateRepository")
 */
class Rate
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
     * @var int
     *
     * @ORM\Column(name="rate_puan", type="integer")
     */
    private $ratePuan;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ratePuan
     *
     * @param integer $ratePuan
     *
     * @return Rate
     */
    public function setRatePuan($ratePuan)
    {
        $this->ratePuan = $ratePuan;

        return $this;
    }

    /**
     * Get ratePuan
     *
     * @return int
     */
    public function getRatePuan()
    {
        return $this->ratePuan;
    }
}
