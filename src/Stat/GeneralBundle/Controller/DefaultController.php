<?php

namespace Stat\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        # Get stat
        $rep = $this->getDoctrine()
            ->getRepository('StatGeneralBundle:Realtime');
        
        $time = time() - 60 * 60 * 24;
        $dt = new \DateTime();
        $dt->setTimestamp($time);

        $query = $rep->createQueryBuilder('p')
            ->where("p.createdAt > :time")
            ->setParameter('time', $dt->format('Y-m-d H:i'))
            ->getQuery();

        $rstat = $query->getResult();

        
        $realtime = array();

        foreach ($rstat as $s) {
            $realtime[ $s->getGame() ][ $s->getCreatedAt('epoch') * 1000 ] = array(
                'hit' => $s->getHit(), 'uniq' => $s->getUniq(), 'new_users' => $s->getNewUsers(),
                'transactions_count' => $s->getTransactionsCount(), 'money' => $s->getMoney(), 'payers' => $s->getPayer()
            );
        }

        return $this->render('StatGeneralBundle:Default:index.html.twig', array(
            'realtime' => $realtime
        ));
    }


    public function hoursAction() {
        # Get stat
        $rep = $this->getDoctrine()
            ->getRepository('StatGeneralBundle:Hour');
        
        $dt = new \DateTime();
        $dt->setTimestamp( time() );

        $query = $rep->createQueryBuilder('p')
            ->where("p.created_at > :time")
            ->setParameter('time', $dt->format('Y-m-d 00:00'))
            ->getQuery();

        $rstat = $query->getResult();

        
        $hour = array();

        foreach ($rstat as $s) {
            $realtime[ $s->getGame() ][ $s->getCreatedAt('epoch') * 1000 ] = array(
                'hit' => $s->getHit(), 'transactions_count' => $s->getTransactionsCount(), 'money' => $s->getMoney(), 
            );
        }

        return $this->render('StatGeneralBundle:Default:hours.html.twig', array(
            'realtime' => $realtime
        ));
    }
}
