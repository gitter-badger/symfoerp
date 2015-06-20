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

        $menu->addChild('Home', array('route' => 'vistiyos_erperp_homepage'));

        return $menu;
    }

    public function sidebarMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');
        $menu->setChildrenAttribute('id','side-menu');

        $menu->addChild('Dashboard', array('route' => 'vistiyos_erperp_homepage'));
        $menu->addChild('Charts', array('route' => 'vistiyos_erperp_homepage'));
        $menu->addChild('Tables', array('route' => 'vistiyos_erperp_homepage'));
        $menu->addChild('Forms', array('route' => 'vistiyos_erperp_homepage'));
        $menu->addChild('UI Elements', array('route' => 'vistiyos_erperp_homepage'));

        return $menu;
    }
}