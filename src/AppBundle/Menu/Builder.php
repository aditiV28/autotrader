<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 02-10-2017
 * Time: 16:57
 */
namespace AppBundle\Menu;

use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory,array $options){
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class','nav navbar-nav');
        $menu->addChild('Home',['route' => 'homepage']);
        $menu->addChild('Offer',['route' => 'offer']);
        return $menu;

    }
}