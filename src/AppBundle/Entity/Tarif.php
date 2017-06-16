<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarif
 *
 * @ORM\Table(name="tarif")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TarifRepository")
 */
class Tarif
{


	/**
 * Many Tarif have One User.
 * @ORM\ManyToOne(targetEntity="Uye")
 * @ORM\JoinColumn(name="uye_id", referencedColumnName="id")
 */
	private $uye;


	/**
	 * One Tarif has One Rank.
	 * @ORM\OneToOne(targetEntity="Rate")
	 * @ORM\JoinColumn(name="rate_id", referencedColumnName="id")
	 */
	private $rank;



	/**
	 * Many Tarif have Many Etiket.
	 * @ORM\ManyToMany(targetEntity="Etiket", inversedBy="etiketler")
	 * @ORM\JoinTable(name="tarif_etiket")
	 */
	private $tarifler;

	public function __construct() {
		$this->tarifler = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=750)
     */
    private $foto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="kayit_tarihi", type="datetime")
     */
    private $kayitTarihi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="son_oturum", type="datetime")
     */
    private $sonOturum;

    /**
     * @var string
     *
     * @ORM\Column(name="malzemeler", type="text")
     */
    private $malzemeler;

    /**
     * @var int
     *
     * @ORM\Column(name="porsiyon", type="integer")
     */
    private $porsiyon;

    /**
     * @var int
     *
     * @ORM\Column(name="zorluk", type="integer")
     */
    private $zorluk;


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
     * @return Tarif
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
     * @return Tarif
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
     * Set foto
     *
     * @param string $foto
     *
     * @return Tarif
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set kayitTarihi
     *
     * @param \DateTime $kayitTarihi
     *
     * @return Tarif
     */
    public function setKayitTarihi($kayitTarihi)
    {
        $this->kayitTarihi = $kayitTarihi;

        return $this;
    }

    /**
     * Get kayitTarihi
     *
     * @return \DateTime
     */
    public function getKayitTarihi()
    {
        return $this->kayitTarihi;
    }

    /**
     * Set sonOturum
     *
     * @param \DateTime $sonOturum
     *
     * @return Tarif
     */
    public function setSonOturum($sonOturum)
    {
        $this->sonOturum = $sonOturum;

        return $this;
    }

    /**
     * Get sonOturum
     *
     * @return \DateTime
     */
    public function getSonOturum()
    {
        return $this->sonOturum;
    }

    /**
     * Set malzemeler
     *
     * @param string $malzemeler
     *
     * @return Tarif
     */
    public function setMalzemeler($malzemeler)
    {
        $this->malzemeler = $malzemeler;

        return $this;
    }

    /**
     * Get malzemeler
     *
     * @return string
     */
    public function getMalzemeler()
    {
        return $this->malzemeler;
    }

    /**
     * Set porsiyon
     *
     * @param integer $porsiyon
     *
     * @return Tarif
     */
    public function setPorsiyon($porsiyon)
    {
        $this->porsiyon = $porsiyon;

        return $this;
    }

    /**
     * Get porsiyon
     *
     * @return int
     */
    public function getPorsiyon()
    {
        return $this->porsiyon;
    }

    /**
     * Set zorluk
     *
     * @param integer $zorluk
     *
     * @return Tarif
     */
    public function setZorluk($zorluk)
    {
        $this->zorluk = $zorluk;

        return $this;
    }

    /**
     * Get zorluk
     *
     * @return int
     */
    public function getZorluk()
    {
        return $this->zorluk;
    }

    /**
     * Set uye
     *
     * @param \AppBundle\Entity\Uye $uye
     *
     * @return Tarif
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

    /**
     * Add tarifler
     *
     * @param \AppBundle\Entity\Etiket $tarifler
     *
     * @return Tarif
     */
    public function addTarifler(\AppBundle\Entity\Etiket $tarifler)
    {
        $this->tarifler[] = $tarifler;

        return $this;
    }

    /**
     * Remove tarifler
     *
     * @param \AppBundle\Entity\Etiket $tarifler
     */
    public function removeTarifler(\AppBundle\Entity\Etiket $tarifler)
    {
        $this->tarifler->removeElement($tarifler);
    }

    /**
     * Get tarifler
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarifler()
    {
        return $this->tarifler;
    }

    /**
     * Set rank
     *
     * @param \AppBundle\Entity\Rate $rank
     *
     * @return Tarif
     */
    public function setRank(\AppBundle\Entity\Rate $rank = null)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return \AppBundle\Entity\Rate
     */
    public function getRank()
    {
        return $this->rank;
    }
}
