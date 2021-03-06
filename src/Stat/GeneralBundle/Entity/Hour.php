<?php

namespace Stat\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hour
 */
class Hour
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $hit;

    /**
     * @var integer
     */
    private $uniq;

    /**
     * @var integer
     */
    private $newUsers;

    /**
     * @var integer
     */
    private $transactionsCount;

    /**
     * @var integer
     */
    private $money;

    /**
     * @var integer
     */
    private $payer;


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
     * Set hit
     *
     * @param integer $hit
     * @return Hour
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
     * @return Hour
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
     * Set newUsers
     *
     * @param integer $newUsers
     * @return Hour
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
     * Set transactionsCount
     *
     * @param integer $transactionsCount
     * @return Hour
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
     * @return Hour
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
     * Set payer
     *
     * @param integer $payer
     * @return Hour
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
    /**
     * @var string
     */
    private $game;


    /**
     * Set game
     *
     * @param string $game
     * @return Hour
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
     * @var \DateTime
     */
    private $created_at;


    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Hour
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt($format = null) {
        if ($format == 'ymd') {
            return $this->created_at->format('Y-m-d');
        } else if ($format == 'ymd hi') {
            return $this->created_at->format('Y-m-d H:i');
        } else if ($format == 'epoch') {
            return $this->created_at->format('U');
        } else {
            return $this->created_at;
        }
    }
    /**
     * @var integer
     */
    private $bonusTime;


    /**
     * Set bonusTime
     *
     * @param integer $bonusTime
     * @return Hour
     */
    public function setBonusTime($bonusTime)
    {
        $this->bonusTime = $bonusTime;
    
        return $this;
    }

    /**
     * Get bonusTime
     *
     * @return integer 
     */
    public function getBonusTime()
    {
        return $this->bonusTime;
    }
    /**
     * @var integer
     */
    private $bonusTimeUniq;


    /**
     * Set bonusTimeUniq
     *
     * @param integer $bonusTimeUniq
     * @return Hour
     */
    public function setBonusTimeUniq($bonusTimeUniq)
    {
        $this->bonusTimeUniq = $bonusTimeUniq;
    
        return $this;
    }

    /**
     * Get bonusTimeUniq
     *
     * @return integer 
     */
    public function getBonusTimeUniq()
    {
        return $this->bonusTimeUniq;
    }
}