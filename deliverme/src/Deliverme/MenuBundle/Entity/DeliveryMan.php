<?php

namespace Deliverme\MenuBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DeliveryMan
 */

/**
 * @ORM\Entity(repositoryClass="OC\DelivermeMenuBundle\Entity\DeliveryManRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class DeliveryMan
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var \DateTime
     */
    private $birthDate;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $typeOfStay;

    /**
     * @var string
     */
    private $permitsOfStay;

    /**
     * @var string
     */
    private $driversLicenseNumber;

    /**
     * @var string
     */
    private $copyOfDrivingLicense;


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
     * Set firstName
     *
     * @param string $firstName
     * @return DeliveryMan
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return DeliveryMan
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return DeliveryMan
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return DeliveryMan
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return DeliveryMan
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
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
     * Set typeOfStay
     *
     * @param string $typeOfStay
     * @return DeliveryMan
     */
    public function setTypeOfStay($typeOfStay)
    {
        $this->typeOfStay = $typeOfStay;

        return $this;
    }

    /**
     * Get typeOfStay
     *
     * @return string 
     */
    public function getTypeOfStay()
    {
        return $this->typeOfStay;
    }

    /**
     * Set permitsOfStay
     *
     * @param string $permitsOfStay
     * @return DeliveryMan
     */
    public function setPermitsOfStay($permitsOfStay)
    {
        $this->permitsOfStay = $permitsOfStay;

        return $this;
    }

    /**
     * Get permitsOfStay
     *
     * @return string 
     */
    public function getPermitsOfStay()
    {
        return $this->permitsOfStay;
    }

    /**
     * Set driversLicenseNumber
     *
     * @param string $driversLicenseNumber
     * @return DeliveryMan
     */
    public function setDriversLicenseNumber($driversLicenseNumber)
    {
        $this->driversLicenseNumber = $driversLicenseNumber;

        return $this;
    }

    /**
     * Get driversLicenseNumber
     *
     * @return string 
     */
    public function getDriversLicenseNumber()
    {
        return $this->driversLicenseNumber;
    }

    /**
     * Set copyOfDrivingLicense
     *
     * @param string $copyOfDrivingLicense
     * @return DeliveryMan
     */
    public function setCopyOfDrivingLicense($copyOfDrivingLicense)
    {
        $this->copyOfDrivingLicense = $copyOfDrivingLicense;

        return $this;
    }

    /**
     * Get copyOfDrivingLicense
     *
     * @return string 
     */
    public function getCopyOfDrivingLicense()
    {
        return $this->copyOfDrivingLicense;
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
     * @return DeliveryMan
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
     * @return DeliveryMan
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
     public function __toString() {
       return $this->name;

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
     * problème lorsqu'on affiche la photo/photo dans la vue.
     * @return string
     */
    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème
        // lorsqu'on affiche le photo/photo dans la vue.
        return 'uploads/DeliveryMan';
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
