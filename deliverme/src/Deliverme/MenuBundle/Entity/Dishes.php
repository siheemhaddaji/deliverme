<?php

namespace Deliverme\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Dishes
 */

/**
 * @ORM\Entity(repositoryClass="OC\DelivermeMenuBundle\Entity\DishesRepository")
 * @ORM\HasLifecycleCallbacks()
 */



class Dishes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $ingredients;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $ranking;

    /**
     * @var string
     */
    private $data_created;

    /**
     * @var string
     */
    private $data_updated;

    /**
     * @var \Deliverme\MenuBundle\Entity\DishesType
     */
    private $dishesType;


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
     * Set name
     *
     * @param string $name
     * @return Dishes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ingredients
     *
     * @param string $ingredients
     * @return Dishes
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string 
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Dishes
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
     * Set status
     *
     * @param string $status
     * @return Dishes
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
     * Set ranking
     *
     * @param string $ranking
     * @return Dishes
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }

    /**
     * Get ranking
     *
     * @return string 
     */
    public function getRanking()
    {
        return $this->ranking;
    }
    public function __toString() {
       return $this->name;

    }


    /**
     * Set data_created
     *
     * @param string $dataCreated
     * @return Dishes
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
     * @return Dishes
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

    /**
     * Set dishesType
     *
     * @param \Deliverme\MenuBundle\Entity\DishesType $dishesType
     * @return Dishes
     */
    public function setDishesType(\Deliverme\MenuBundle\Entity\DishesType $dishesType = null)
    {
        $this->dishesType = $dishesType;

        return $this;
    }

    /**
     * Get dishesType
     *
     * @return \Deliverme\MenuBundle\Entity\DishesType 
     */
    public function getDishesType()
    {
        return $this->dishesType;
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
     * @var string
     */
    private $photo;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Dishes
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    
    // upload images 
     public function getAbsulatePath() {
        return $this->photo === null ?
                null :
                $this->getUploadRootDir()
                . '/' .
                $this->photo;
    }

    public function getWebPath() {
        return $this->photo === null ?
                null :
                $this->getUploadDir() . '/' .
                $this->photo;
    }

    /**
     * le chemin absolu du répertoire où les photos uploadés doivent
     * être sauvegardés
     * @return string
     */
    protected function getUploadRootDir() {
        // le chemin absolu du répertoire où les photos uploadés doivent
        // être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
        //$this->getUploadDir();
    }

    /**
     * on se débarrasse de « __DIR__ » afin de ne pas avoir de 
     * problème lorsqu'on affiche le photo/photo dans la vue.
     * @return string
     */
    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème
        // lorsqu'on affiche le photo/photo dans la vue.
        return 'uploads/Dishes';
    }

   /**
     * @Assert\File(
     *     maxSize = "5000k",
     * )
     */
    public $file;

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public $tmp;

   
    public function preUpload() {
        if ($this->getFile() !== null) {
            if (file_exists($this->getAbsulatePath())) {
                $temp = $this->getAbsulatePath();
                // check if we have an old photo
                if (isset($temp)) {
                    // delete the old photo
                    unlink($temp);
                    // clear the tmpphoto path
                    $temp = null;
                }
            }
            // faites ce que vous voulez pour générer un titre unique 
            // + ajout de l'extention du fichier
            $filename = sha1(uniqid(mt_rand(), true));
            $this->photo = $filename. '.' .$this->getFile()->guessExtension();
        }
    }

    
    public function upload() {

        if ($this->getFile() === null) {
            return;
        }

//        use the original file name here but you should
//        sanitize it at least to avoid any security issues
//
//        move takes the target directory and then the
//        target filename to move to
        $this->getFile()->move($this->getUploadRootDir(), $this->photo);

//        set the path property to the filename where you've saved the file
        $this->photo = $this->getFile()->getClientOriginalName();

//        clean up the file property as you won't need it anymore
//        $this->file = null;
    }

    
    public function storeFilenameForRemove() {
        $this->temp = $this->getAbsulatePath();
    }

    
    public function removeUpload() {
        if (file_exists($this->getAbsulatePath())) {
            if (isset($this->temp)) {
                unlink($this->temp);
            }
        }
    }

    public function getTmp() {
        return $this->tmp;
    }

    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
        // check if we have an old photo 
        //if (isset($this->photo)) {
            // store the old name to delete after the update
            $this->temp = $this->photo;
        //} 
        //else {
        //    $this->photo = null;
        //}
    }

    public function setTmp($tmp) {
        $this->tmp = $tmp;
    }

    
   //endfile 
    
    
    
}
