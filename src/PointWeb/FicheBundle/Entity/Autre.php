<?php

namespace PointWeb\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autre
 *
 * @ORM\Table(name="objet")
 * @ORM\Entity(repositoryClass="PointWeb\FicheBundle\Entity\AutreRepository")
 */
class Autre
{
    /**
     * @ORM\ManyToOne(targetEntity="Frais", inversedBy="Autre")
     * @ORM\JoinColumn(name="frais", referencedColumnName="id")
     */
    private $frais;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="commercial", type="string", length=255)
     */
    private $commercial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_date", type="date")
     */
    private $debutDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_date", type="date")
     */
    private $finDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="date")
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="justificatif", type="string", length=255)
     */
    private $justificatif;


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
     * Set commercial
     *
     * @param string $commercial
     * @return Autre
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;
    
        return $this;
    }

    /**
     * Get commercial
     *
     * @return string 
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * Set debutDate
     *
     * @param \DateTime $debutDate
     * @return Autre
     */
    public function setDebutDate($debutDate)
    {
        $this->debutDate = $debutDate;
    
        return $this;
    }

    /**
     * Get debutDate
     *
     * @return \DateTime 
     */
    public function getDebutDate()
    {
        return $this->debutDate;
    }

    /**
     * Set finDate
     *
     * @param \DateTime $finDate
     * @return Autre
     */
    public function setFinDate($finDate)
    {
        $this->finDate = $finDate;
    
        return $this;
    }

    /**
     * Get finDate
     *
     * @return \DateTime 
     */
    public function getFinDate()
    {
        return $this->finDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Autre
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    
        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set justificatif
     *
     * @param string $justificatif
     * @return Autre
     */
    public function setJustificatif($justificatif)
    {
        $this->justificatif = $justificatif;
    
        return $this;
    }

    /**
     * Get justificatif
     *
     * @return string 
     */
    public function getJustificatif()
    {
        return $this->justificatif;
    }

    /**
     * Set frais
     *
     * @param \PointWeb\FicheBundle\Entity\Frais $frais
     * @return Autre
     */
    public function setDevis(\PointWeb\FicheBundle\Entity\Frais $frais = null)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get devis
     *
     * @return \PointWeb\FicheBundle\Entity\Frais
     */
    public function getFrais()
    {
        return $this->frais;
    }
}
