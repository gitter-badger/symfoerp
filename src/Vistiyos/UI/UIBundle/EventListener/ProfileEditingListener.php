<?php
/**
 * Created by PhpStorm.
 * User: vistiyos
 * Date: 23/6/15
 * Time: 21:50
 */

namespace Vistiyos\UI\UIBundle\EventListener;


use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Vistiyos\UI\UIBundle\Entity\User;

class ProfileEditingListener implements EventSubscriberInterface
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @var TokenStorage
     */
    protected $securityToken;

    public function __construct(Session $session, TokenStorage $securityToken)
    {
        $this->session = $session;
        $this->securityToken = $securityToken;
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     *
     * @api
     */
    public static function getSubscribedEvents()
    {
        return [
            FOSUserEvents::PROFILE_EDIT_COMPLETED => 'onProfileEditCompleted'
        ];
    }

    public function onProfileEditCompleted(FilterUserResponseEvent $event)
    {
        /* @var $user User */
        $user = $this->securityToken->getToken()->getUser();
        $this->session->set('_locale', $user->getLocale());
    }
}