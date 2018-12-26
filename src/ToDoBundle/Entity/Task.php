<?php
/**
 * Created by PhpStorm.
 * User: ladone
 * Date: 12/26/18
 * Time: 11:31 PM
 */

namespace ToDoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="task")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $_name;

    /**
     * @ORM\Column(type="text", length=128)
     */
    private $_description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $_date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $_isDone;

    /**
     * @ORM\Column(type="boolean")
     */
    private $_overdue;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Task
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->_description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Task
     */
    public function setDate($date)
    {
        $this->_date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * Set isDone
     *
     * @param boolean $isDone
     *
     * @return Task
     */
    public function setIsDone($isDone)
    {
        $this->_isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone
     *
     * @return boolean
     */
    public function getIsDone()
    {
        return $this->_isDone;
    }

    /**
     * Set overdue
     *
     * @param boolean $overdue
     *
     * @return Task
     */
    public function setOverdue($overdue)
    {
        $this->_overdue = $overdue;

        return $this;
    }

    /**
     * Get overdue
     *
     * @return boolean
     */
    public function getOverdue()
    {
        return $this->_overdue;
    }
}
