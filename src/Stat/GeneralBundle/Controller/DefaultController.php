<?php

namespace Stat\GeneralBundle\Controller;

# General
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction(Request $r) {
        $reset = $r->get('reset');

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
        $banks = array();
        $in_out = array();

        $mc = $this->get('beryllium_cache');

        foreach ($rstat as $s) {
            $game = $s->getGame();

            $realtime[ $game ][ $s->getCreatedAt('epoch') * 1000 ] = array(
                'hit' => $s->getHit(), 'uniq' => $s->getUniq(), 'new_users' => $s->getNewUsers(),
                'transactions_count' => $s->getTransactionsCount(), 'money' => $s->getMoney(), 'payers' => $s->getPayer(),
                'bonus_time' => $s->getBonusTime()
            );

            $bank = $mc->get("gb-$game") ? $mc->get("gb-$game") : 0;

            if ($reset) {
                $mc->set("in-$game", 10000, 60 * 60 * 4);
                $mc->set("out-$game", -9000, 60 * 60 * 4);
                $mc->set("gb-$game", 10000);
            }

            $in  = $mc->get("in-$game") ? $mc->get("in-$game") : 0;
            $out = $mc->get("out-$game") ? $mc->get("out-$game") : 0;

            $in_out[$game]['in']  = $in;
            $in_out[$game]['out'] = $out;
            $in_out[$game]['out_p'] = sprintf("%.2f", abs($in ? $out * 100 / $in : 0));
            $in_out[$game]['diff'] = $in + $out;
            $in_out[$game]['diff_p'] = sprintf("%.2f", $in ? ($in + $out) * 100 / $in : 0);

            $banks[$game] = $bank;
        }

        return $this->render('StatGeneralBundle:Default:index.html.twig', array(
            'realtime' => $realtime,
            'in_out' => $in_out,
            'banks' => $banks
        ));
    }


    public function hoursAction() {
        # Get stat
        $rep = $this->getDoctrine()
            ->getRepository('StatGeneralBundle:Hour');
        
        $time = time() - 60 * 60 * 24;
        $dt = new \DateTime();
        $dt->setTimestamp($time);

        $query = $rep->createQueryBuilder('p')
            ->where("p.created_at > :time")
            ->setParameter('time', $dt->format('Y-m-d H:00'))
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
