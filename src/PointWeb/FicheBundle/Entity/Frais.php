<?php

namespace PointWeb\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use PointWeb\FicheBundle\Entity\Autre;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Frais
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PointWeb\FicheBundle\Entity\FraisRepository")
 */
class Frais
{

    /**
     * @ORM\OneToMany(targetEntity="Autre", mappedBy="autre", cascade={"persist"})
     */
    private $autre;
    public function __construct()
    {
        $this->autre = new ArrayCollection();
    }

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
     * @ORM\Column(name="matricule", type="string")
     */
    private $matricule;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="date", nullable=true)
     */
    private $updateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=true)
     */
    private $createDate;



    /**
     * @var boolean
     * @ORM\Column(name="online", type="boolean", nullable=true)
     */
    private $online;
    /**
     * @var boolean
     * @ORM\Column(name="valide", type="boolean", nullable=true)
     */
    private $valide;
    /**
     * @var boolean
     * @ORM\Column(name="attente", type="boolean", nullable=true)
     */
    private $attente;
    /**
     * @var boolean
     * @ORM\Column(name="refuser", type="boolean", nullable=true)
     */
    private $refuser;


    /**
     * @var integer
     *
     * @ORM\Column(name="qt_nuit", type="integer")
     */
    private $qtNuit;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_repas", type="integer")
     */
    private $qtRepas;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_km", type="integer")
     */
    private $qtKm;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_nuit", type="float")
     */
    private $prixNuit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_repas", type="float")
     */
    private $prixRepas;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_km", type="float")
     */
    private $prixKm;

    /**
     * @var float
     *
     * @ORM\Column(name="total_nuit", type="float")
     */
    private $totalNuit;

    /**
     * @var float
     *
     * @ORM\Column(name="total_repas", type="float")
     */
    private $totalRepas;

    /**
     * @var float
     *
     * @ORM\Column(name="total_km", type="float")
     */
    private $totalKm;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;


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
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Frais
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get qtNuit
     *
     * @return integer 
     */
    public function getQtNuit()
    {
        return $this->qtNuit;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Frais
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Frais
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }




    /**
     * Set qtNuit
     *
     * @param integer $qtNuit
     * @return Frais
     */
    public function setQtNuit($qtNuit)
    {
        $this->qtNuit = $qtNuit;

        return $this;
    }

    /**
     * Set qtRepas
     *
     * @param integer $qtRepas
     * @return Frais
     */
    public function setQtRepas($qtRepas)
    {
        $this->qtRepas = $qtRepas;
    
        return $this;
    }

    /**
     * Get qtRepas
     *
     * @return integer 
     */
    public function getQtRepas()
    {
        return $this->qtRepas;
    }

    /**
     * Set qtKm
     *
     * @param integer $qtKm
     * @return Frais
     */
    public function setQtKm($qtKm)
    {
        $this->qtKm = $qtKm;
    
        return $this;
    }

    /**
     * Get qtKm
     *
     * @return integer 
     */
    public function getQtKm()
    {
        return $this->qtKm;
    }

    /**
     * Set prixNuit
     *
     * @param float $prixNuit
     * @return Frais
     */
    public function setPrixNuit($prixNuit)
    {
        $this->prixNuit = $prixNuit;
    
        return $this;
    }

    /**
     * Get prixNuit
     *
     * @return float 
     */
    public function getPrixNuit()
    {
        return $this->prixNuit;
    }

    /**
     * Set prixRepas
     *
     * @param float $prixRepas
     * @return Frais
     */
    public function setPrixRepas($prixRepas)
    {
        $this->prixRepas = $prixRepas;
    
        return $this;
    }

    /**
     * Get prixRepas
     *
     * @return float 
     */
    public function getPrixRepas()
    {
        return $this->prixRepas;
    }

    /**
     * Set prixKm
     *
     * @param float $prixKm
     * @return Frais
     */
    public function setPrixKm($prixKm)
    {
        $this->prixKm = $prixKm;
    
        return $this;
    }

    /**
     * Get prixKm
     *
     * @return float 
     */
    public function getPrixKm()
    {
        return $this->prixKm;
    }

    /**
     * Set totalNuit
     *
     * @param float $totalNuit
     * @return Frais
     */
    public function setTotalNuit($totalNuit)
    {
        $this->totalNuit = $totalNuit;
    
        return $this;
    }

    /**
     * Get totalNuit
     *
     * @return float 
     */
    public function getTotalNuit()
    {
        return $this->totalNuit;
    }

    /**
     * Set totalRepas
     *
     * @param float $totalRepas
     * @return Frais
     */
    public function setTotalRepas($totalRepas)
    {
        $this->totalRepas = $totalRepas;
    
        return $this;
    }

    /**
     * Get totalRepas
     *
     * @return float 
     */
    public function getTotalRepas()
    {
        return $this->totalRepas;
    }

    /**
     * Set totalKm
     *
     * @param float $totalKm
     * @return Frais
     */
    public function setTotalKm($totalKm)
    {
        $this->totalKm = $totalKm;
    
        return $this;
    }

    /**
     * Get totalKm
     *
     * @return float 
     */
    public function getTotalKm()
    {
        return $this->totalKm;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Frais
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }


    /**
     * Add autre
     *
     * @param \PointWeb\FicheBundle\Entity\Autre $autre
     * @return Devis
     */
    public function addObjet(Autre $autre)
    {
        $this->autre[] = $autre;
        $autre->setDevis($this);
        return $this;
    }

    /**
     * Remove autre
     *
     * @param \PointWeb\FicheBundle\Entity\Autre $autre
     */
    public function removeObjet(\PointWeb\FicheBundle\Entity\Autre $autre)
    {
        $this->autre->removeElement($autre);
    }

    /**
     * Get autre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAutre()
    {
        return $this->autre;
    }



    /**
     * Set online
     *
     * @param boolean $online
     * @return Frais
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     * @return Frais
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set attente
     *
     * @param boolean $attente
     * @return Frais
     */
    public function setAttente($attente)
    {
        $this->attente = $attente;

        return $this;
    }

    /**
     * Get attente
     *
     * @return boolean
     */
    public function getAttente()
    {
        return $this->attente;
    }

    /**
     * Set refuser
     *
     * @param boolean $refuser
     * @return Frais
     */
    public function setRefuser($refuser)
    {
        $this->refuser = $refuser;

        return $this;
    }

    /**
     * Get refuser
     *
     * @return boolean
     */
    public function getRefuser()
    {
        return $this->refuser;
    }



    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Frais
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Frais
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        if (null == $this->createDate) {
            $this->createDate = new \DateTime();
        }
        $this->updateDate = new \DateTime();
    }
}
