<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="userChangeId", type="string", length=255, nullable=true)
     */
    private $userChangeId;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="userCreationDate", type="datetime", nullable=true)
     */
    private $userCreationDate;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $modifDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="groups", type="string", length=11, nullable=true)
     */
    private $changeGroups;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="lastLogin", type="datetime", nullable=true)
     */
    protected $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=255, nullable=true)
     */
    private $district;



    /**
     * Set userChangeId
     *
     * @param string $userChangeId
     *
     * @return User
     */
    public function setUserChangeId($userChangeId)
    {
        $this->userChangeId = $userChangeId;

        return $this;
    }

    /**
     * Get userChangeId
     *
     * @return string
     */
    public function getUserChangeId()
    {
        return $this->userChangeId;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return User
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set userCreationDate
     *
     * @param \DateTime $userCreationDate
     *
     * @return User
     */
    public function setUserCreationDate($userCreationDate)
    {
        $this->userCreationDate = $userCreationDate;

        return $this;
    }

    /**
     * Get userCreationDate
     *
     * @return \DateTime
     */
    public function getUserCreationDate()
    {
        return $this->userCreationDate;
    }

    /**
     * Set modifDate
     *
     * @param \DateTime $modifDate
     *
     * @return User
     */
    public function setModifDate($modifDate)
    {
        $this->modifDate = $modifDate;

        return $this;
    }

    /**
     * Get modifDate
     *
     * @return \DateTime
     */
    public function getModifDate()
    {
        return $this->modifDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return User
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
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
     *
     * @return User
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
     * Set changeGroups
     *
     * @param string $changeGroups
     *
     * @return User
     */
    public function setChangeGroups($changeGroups)
    {
        $this->changeGroups = $changeGroups;

        return $this;
    }

    /**
     * Get changeGroups
     *
     * @return string
     */
    public function getChangeGroups()
    {
        return $this->changeGroups;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return User
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }
}
