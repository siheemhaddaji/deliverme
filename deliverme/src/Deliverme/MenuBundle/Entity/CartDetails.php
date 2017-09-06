<?php

namespace Deliverme\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartDetails
 */
class CartDetails
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $tva;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var \Deliverme\MenuBundle\Entity\Dishes
     */
    private $dishes;

    /**
     * @var \Deliverme\MenuBundle\Entity\CartShopping
     */
    private $cartShopping;

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
     * Set tva
     *
     * @param float $tva
     * @return CartDetails
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float 
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return CartDetails
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
     * @return CartDetails
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
     * Set dishes
     *
     * @param \Deliverme\MenuBundle\Entity\Dishes $dishes
     * @return CartDetails
     */
    public function setDishes(\Deliverme\MenuBundle\Entity\Dishes $dishes = null)
    {
        $this->dishes = $dishes;

        return $this;
    }

    /**
     * Get dishes
     *
     * @return \Deliverme\MenuBundle\Entity\Dishes 
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Set cartShopping
     *
     * @param \Deliverme\MenuBundle\Entity\CartShopping $cartShopping
     * @return CartDetails
     */
    public function setCartShopping(\Deliverme\MenuBundle\Entity\CartShopping $cartShopping = null)
    {
        $this->cartShopping = $cartShopping;

        return $this;
    }

    /**
     * Get cartShopping
     *
     * @return \Deliverme\MenuBundle\Entity\CartShopping 
     */
    public function getCartShopping()
    {
        return $this->cartShopping;
    }

    /**
     * Set packet
     *
     * @param \Deliverme\MenuBundle\Entity\Packet $packet
     * @return CartDetails
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
     * @return CartDetails
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
     * @return CartDetails
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
