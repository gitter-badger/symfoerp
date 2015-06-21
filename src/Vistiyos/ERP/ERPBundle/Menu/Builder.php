<?php
/**
 * Created by PhpStorm.
 * User: vistiyos
 * Date: 20/6/15
 * Time: 0:48
 */

namespace Vistiyos\ERP\ERPBundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-top-links navbar-right');

        $username = $this->container
            ->get('security.token_storage')
            ->getToken()
            ->getUser()
            ->getUsername(); // Get username of the current logged in user


        $menu->addChild('User', ['label' => $username])
            ->setAttribute('dropdown', true)
            ->setAttribute('icon', 'user');

        $menu['User']
            ->addChild('main.edit_profile', ['route' => 'fos_user_profile_edit'])
            ->setAttribute('icon', 'pencil');

        $menu['User']
            ->addChild('main.logout', ['route' => 'fos_user_security_logout'])
            ->setAttribute('icon', 'log-out');

        return $menu;
    }

    public function sidebarMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');
        $menu->setChildrenAttribute('id', 'side-menu');

        $menu->addChild('Dashboard', ['route' => 'vistiyos_erperp_homepage']);
        $menu->addChild('Charts', ['route' => 'vistiyos_erperp_homepage']);
        $menu->addChild('Tables', ['route' => 'vistiyos_erperp_homepage']);
        $menu->addChild('Forms', ['route' => 'vistiyos_erperp_homepage']);
        $menu->addChild('UI Elements', ['route' => 'vistiyos_erperp_homepage']);

        return $menu;
    }
}