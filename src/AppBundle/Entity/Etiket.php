<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiket
 *
 * @ORM\Table(name="etiket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtiketRepository")
 */
class Etiket
{


	// ...
	/**
	 * Many Etiket have Many Tarif.
	 * @ORM\ManyToMany(targetEntity="Tarif", mappedBy="etiketler")
	 */
	private $etiketler;

	public function __construct() {
		$this->etiketler = new \Doctrine\Common\Collections\ArrayCollection();
	}



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
     * @return Etiket
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
     * @return Etiket
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
     * Add etiketler
     *
     * @param \AppBundle\Entity\Tarif $etiketler
     *
     * @return Etiket
     */
    public function addEtiketler(\AppBundle\Entity\Tarif $etiketler)
    {
        $this->etiketler[] = $etiketler;

        return $this;
    }

    /**
     * Remove etiketler
     *
     * @param \AppBundle\Entity\Tarif $etiketler
     */
    public function removeEtiketler(\AppBundle\Entity\Tarif $etiketler)
    {
        $this->etiketler->removeElement($etiketler);
    }

    /**
     * Get etiketler
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtiketler()
    {
        return $this->etiketler;
    }
}
