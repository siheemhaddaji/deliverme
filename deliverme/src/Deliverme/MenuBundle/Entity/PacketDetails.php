<?php

namespace Deliverme\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PacketDetails
 */
class PacketDetails
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var \Deliverme\MenuBundle\Entity\Packet
     */
    private $packet;


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
     * Set price
     *
     * @param float $price
     * @return PacketDetails
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return PacketDetails
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set packet
     *
     * @param \Deliverme\MenuBundle\Entity\Packet $packet
     * @return PacketDetails
     */
    public function setPacket(\Deliverme\MenuBundle\Entity\Packet $packet = null)
    {
        $this->packet = $packet;

        return $this;
    }

    /**
     * Get packet
     *
     * @return \Deliverme\MenuBundle\Entity\Packet 
     */
    public function getPacket()
    {
        return $this->packet;
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
     * @return PacketDetails
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
     * @return PacketDetails
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
