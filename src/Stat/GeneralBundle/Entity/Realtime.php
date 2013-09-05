<?php

namespace Stat\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realtime
 */
class Realtime
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $game;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $hit;

    /**
     * @var integer
     */
    private $uniq;


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
     * Set game
     *
     * @param string $game
     * @return Realtime
     */
    public function setGame($game)
    {
        $this->game = $game;
    
        return $this;
    }

    /**
     * Get game
     *
     * @return string 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Realtime
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt($format = null) {

        if ($format == 'ymd') {
            return $this->createdAt->format('Y-m-d');
        } else if ($format == 'ymd hi') {
            return $this->createdAt->format('Y-m-d H:i');
        } else if ($format == 'epoch') {
            return $this->createdAt->format('U');
        } else {
            return $this->createdAt;
        }
    }

    /**
     * Set hit
     *
     * @param integer $hit
     * @return Realtime
     */
    public function setHit($hit)
    {
        $this->hit = $hit;
    
        return $this;
    }

    /**
     * Get hit
     *
     * @return integer 
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * Set uniq
     *
     * @param integer $uniq
     * @return Realtime
     */
    public function setUniq($uniq)
    {
        $this->uniq = $uniq;
    
        return $this;
    }

    /**
     * Get uniq
     *
     * @return integer 
     */
    public function getUniq()
    {
        return $this->uniq;
    }
    /**
     * @var integer
     */
    private $newUsers;


    /**
     * Set newUsers
     *
     * @param integer $newUsers
     * @return Realtime
     */
    public function setNewUsers($newUsers)
    {
        $this->newUsers = $newUsers;
    
        return $this;
    }

    /**
     * Get newUsers
     *
     * @return integer 
     */
    public function getNewUsers()
    {
        return $this->newUsers;
    }
    /**
     * @var integer
     */
    private $transactionsCount;

    /**
     * @var integer
     */
    private $money;


    /**
     * Set transactionsCount
     *
     * @param integer $transactionsCount
     * @return Realtime
     */
    public function setTransactionsCount($transactionsCount)
    {
        $this->transactionsCount = $transactionsCount;
    
        return $this;
    }

    /**
     * Get transactionsCount
     *
     * @return integer 
     */
    public function getTransactionsCount()
    {
        return $this->transactionsCount;
    }

    /**
     * Set money
     *
     * @param integer $money
     * @return Realtime
     */
    public function setMoney($money)
    {
        $this->money = $money;
    
        return $this;
    }

    /**
     * Get money
     *
     * @return integer 
     */
    public function getMoney()
    {
        return $this->money;
    }
    /**
     * @var integer
     */
    private $payer;


    /**
     * Set payer
     *
     * @param integer $payer
     * @return Realtime
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
    
        return $this;
    }

    /**
     * Get payer
     *
     * @return integer 
     */
    public function getPayer()
    {
        return $this->payer;
    }
}