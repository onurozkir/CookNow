<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Izin
 *
 * @ORM\Table(name="izin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IzinRepository")
 */
class Izin
{

	/**
	 * Many izin have One User.
	 * @ORM\ManyToOne(targetEntity="Uye")
	 * @ORM\JoinColumn(name="uye_id", referencedColumnName="id")
	 */
	private $uye;


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
     * @ORM\Column(name="ad", type="string", length=255)
     */
    private $ad;


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
     * Set ad
     *
     * @param string $ad
     *
     * @return Izin
     */
    public function setAd($ad)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get ad
     *
     * @return string
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Set uye
     *
     * @param \AppBundle\Entity\Uye $uye
     *
     * @return Izin
     */
    public function setUye(\AppBundle\Entity\Uye $uye = null)
    {
        $this->uye = $uye;

        return $this;
    }

    /**
     * Get uye
     *
     * @return \AppBundle\Entity\Uye
     */
    public function getUye()
    {
        return $this->uye;
    }
}
