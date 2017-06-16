<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uye
 *
 * @ORM\Table(name="uye")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UyeRepository")
 */
class Uye
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
     * @ORM\Column(name="ad_soyad", type="string", length=255)
     */
    private $adSoyad;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dogum_gunu", type="date")
     */
    private $dogumGunu;

    /**
     * @var int
     *
     * @ORM\Column(name="izin_id", type="integer")
     */
    private $izinId;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="kayit_tarihi", type="datetime")
     */
    private $kayitTarihi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="son_giris", type="datetime")
     */
    private $sonGiris;


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
     * Set adSoyad
     *
     * @param string $adSoyad
     *
     * @return Uye
     */
    public function setAdSoyad($adSoyad)
    {
        $this->adSoyad = $adSoyad;

        return $this;
    }

    /**
     * Get adSoyad
     *
     * @return string
     */
    public function getAdSoyad()
    {
        return $this->adSoyad;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Uye
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set dogumGunu
     *
     * @param \DateTime $dogumGunu
     *
     * @return Uye
     */
    public function setDogumGunu($dogumGunu)
    {
        $this->dogumGunu = $dogumGunu;

        return $this;
    }

    /**
     * Get dogumGunu
     *
     * @return \DateTime
     */
    public function getDogumGunu()
    {
        return $this->dogumGunu;
    }

    /**
     * Set izinId
     *
     * @param integer $izinId
     *
     * @return Uye
     */
    public function setIzinId($izinId)
    {
        $this->izinId = $izinId;

        return $this;
    }

    /**
     * Get izinId
     *
     * @return int
     */
    public function getIzinId()
    {
        return $this->izinId;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Uye
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Uye
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set kayitTarihi
     *
     * @param \DateTime $kayitTarihi
     *
     * @return Uye
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
     * Set sonGiris
     *
     * @param \DateTime $sonGiris
     *
     * @return Uye
     */
    public function setSonGiris($sonGiris)
    {
        $this->sonGiris = $sonGiris;

        return $this;
    }

    /**
     * Get sonGiris
     *
     * @return \DateTime
     */
    public function getSonGiris()
    {
        return $this->sonGiris;
    }
}
