<?php

namespace Stat\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        # Get stat
        $rep = $this->getDoctrine()
            ->getRepository('StatGeneralBundle:Realtime');
        
        $rstat = $rep->findAll();
        
        $realtime = array();

        foreach ($rstat as $s) {
            $realtime[ $s->getGame() ][ $s->getCreatedAt('epoch') * 1000 ] = array(
                'hit' => $s->getHit(), 'uniq' => $s->getUniq(), 'new_users' => $s->getNewUsers()
            );
        }

        return $this->render('StatGeneralBundle:Default:index.html.twig', array(
            'realtime' => $realtime
        ));
    }
}
