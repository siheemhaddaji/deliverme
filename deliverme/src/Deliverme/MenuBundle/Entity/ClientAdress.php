<?php

namespace Deliverme\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientAdress
 */
class ClientAdress
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $title;


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
     * Set adress
     *
     * @param string $adress
     * @return ClientAdress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return ClientAdress
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ClientAdress
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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
     * @return ClientAdress
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
     * @return ClientAdress
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
