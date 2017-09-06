<?php

namespace Deliverme\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areas
 */
class Areas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $zipCode;

    /**
     * @var float
     */
    private $minimunPrice;


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
     * Set zipCode
     *
     * @param integer $zipCode
     * @return Areas
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return integer 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set minimunPrice
     *
     * @param float $minimunPrice
     * @return Areas
     */
    public function setMinimunPrice($minimunPrice)
    {
        $this->minimunPrice = $minimunPrice;

        return $this;
    }

    /**
     * Get minimunPrice
     *
     * @return float 
     */
    public function getMinimunPrice()
    {
        return $this->minimunPrice;
    }
    
     public function updateDate()
    {
    $this->setDataUpdated(new \Datetime());
   
    }
    
     public function createDate()
    {
    $this->setDataUpdated(new \Datetime());
    $this->setDataCreated(new \Datetime());
    }  
    /**
     * @var \DateTime
     */
    private $data_created;

    /**
     * @var \DateTime
     */
    private $data_updated;


    /**
     * Set dataCreated
     *
     * @param \DateTime $dataCreated
     *
     * @return Areas
     */
    public function setDataCreated($dataCreated)
    {
        $this->data_created = $dataCreated;

        return $this;
    }

    /**
     * Get dataCreated
     *
     * @return \DateTime
     */
    public function getDataCreated()
    {
        return $this->data_created;
    }

    /**
     * Set dataUpdated
     *
     * @param \DateTime $dataUpdated
     *
     * @return Areas
     */
    public function setDataUpdated($dataUpdated)
    {
        $this->data_updated = $dataUpdated;

        return $this;
    }

    /**
     * Get dataUpdated
     *
     * @return \DateTime
     */
    public function getDataUpdated()
    {
        return $this->data_updated;
    }
}
