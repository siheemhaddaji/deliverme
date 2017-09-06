<?php

namespace Deliverme\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartShopping
 */
class CartShopping
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var float
     */
    private $totalPrice;

    /**
     * @var float
     */
    private $deliveryPrice;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $data_created;

    /**
     * @var string
     */
    private $data_updated;

    /**
     * @var \Deliverme\MenuBundle\Entity\Client
     */
    private $client;

    /**
     * @var \Deliverme\MenuBundle\Entity\ClientAdress
     */
    private $clientAdress;

    /**
     * @var \Deliverme\MenuBundle\Entity\DeliveryMan
     */
    private $deliveryMan;


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
     * Set reference
     *
     * @param string $reference
     * @return CartShopping
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set totalPrice
     *
     * @param float $totalPrice
     * @return CartShopping
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return float 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set deliveryPrice
     *
     * @param float $deliveryPrice
     * @return CartShopping
     */
    public function setDeliveryPrice($deliveryPrice)
    {
        $this->deliveryPrice = $deliveryPrice;

        return $this;
    }

    /**
     * Get deliveryPrice
     *
     * @return float 
     */
    public function getDeliveryPrice()
    {
        return $this->deliveryPrice;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return CartShopping
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set data_created
     *
     * @param string $dataCreated
     * @return CartShopping
     */
    public function setDataCreated($dataCreated)
    {
        $this->data_created = $dataCreated;

        return $this;
    }

    /**
     * Get data_created
     *
     * @return string 
     */
    public function getDataCreated()
    {
        return $this->data_created;
    }

    /**
     * Set data_updated
     *
     * @param string $dataUpdated
     * @return CartShopping
     */
    public function setDataUpdated($dataUpdated)
    {
        $this->data_updated = $dataUpdated;

        return $this;
    }

    /**
     * Get data_updated
     *
     * @return string 
     */
    public function getDataUpdated()
    {
        return $this->data_updated;
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
     * Set client
     *
     * @param \Deliverme\MenuBundle\Entity\Client $client
     * @return CartShopping
     */
    public function setClient(\Deliverme\MenuBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Deliverme\MenuBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set clientAdress
     *
     * @param \Deliverme\MenuBundle\Entity\ClientAdress $clientAdress
     * @return CartShopping
     */
    public function setClientAdress(\Deliverme\MenuBundle\Entity\ClientAdress $clientAdress = null)
    {
        $this->clientAdress = $clientAdress;

        return $this;
    }

    /**
     * Get clientAdress
     *
     * @return \Deliverme\MenuBundle\Entity\ClientAdress 
     */
    public function getClientAdress()
    {
        return $this->clientAdress;
    }

    /**
     * Set deliveryMan
     *
     * @param \Deliverme\MenuBundle\Entity\DeliveryMan $deliveryMan
     * @return CartShopping
     */
    public function setDeliveryMan(\Deliverme\MenuBundle\Entity\DeliveryMan $deliveryMan = null)
    {
        $this->deliveryMan = $deliveryMan;

        return $this;
    }

    /**
     * Get deliveryMan
     *
     * @return \Deliverme\MenuBundle\Entity\DeliveryMan 
     */
    public function getDeliveryMan()
    {
        return $this->deliveryMan;
    }
}
