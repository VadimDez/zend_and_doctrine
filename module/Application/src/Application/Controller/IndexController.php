<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        $user = new \Application\Entity\User();
        //$user->setFullName('Mark2');

        //$objectManager->persist($user);
        //$objectManager->flush();

        $users = $objectManager->getRepository('\Application\Entity\User')->findAll();

        return new ViewModel(array('users' => $users));
    }
}
