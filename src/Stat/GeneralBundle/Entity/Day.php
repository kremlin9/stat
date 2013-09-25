<?php

namespace Stat\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 */
class Day
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
     * @var float
     */
    private $arpu;

    /**
     * @var float
     */
    private $arppu;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $bonusTime;


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
     * @return Day
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
     * Set hit
     *
     * @param integer $hit
     * @return Day
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
     * @return Day
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
     * @return Day
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
     * @return Day
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
     * @return Day
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
     * @return Day
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
     * Set arpu
     *
     * @param float $arpu
     * @return Day
     */
    public function setArpu($arpu)
    {
        $this->arpu = $arpu;
    
        return $this;
    }

    /**
     * Get arpu
     *
     * @return float 
     */
    public function getArpu()
    {
        return $this->arpu;
    }

    /**
     * Set arppu
     *
     * @param float $arppu
     * @return Day
     */
    public function setArppu($arppu)
    {
        $this->arppu = $arppu;
    
        return $this;
    }

    /**
     * Get arppu
     *
     * @return float 
     */
    public function getArppu()
    {
        return $this->arppu;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Day
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set bonusTime
     *
     * @param integer $bonusTime
     * @return Day
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
     * @return Day
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