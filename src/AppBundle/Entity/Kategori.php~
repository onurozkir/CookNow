<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategori
 *
 * @ORM\Table(name="kategori")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KategoriRepository")
 */
class Kategori
{

	/**
	 * Many Kategori have One Tarif.
	 * @ORM\ManyToOne(targetEntity="Tarif")
	 * @ORM\JoinColumn(name="tarif_id", referencedColumnName="id")
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
     * @ORM\Column(name="ad", type="string", length=255, unique=true)
     */
    private $ad;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;


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
     * @return Kategori
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
     * Set content
     *
     * @param string $content
     *
     * @return Kategori
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set uye
     *
     * @param \AppBundle\Entity\Tarif $uye
     *
     * @return Kategori
     */
    public function setUye(\AppBundle\Entity\Tarif $uye = null)
    {
        $this->uye = $uye;

        return $this;
    }

    /**
     * Get uye
     *
     * @return \AppBundle\Entity\Tarif
     */
    public function getUye()
    {
        return $this->uye;
    }
}
