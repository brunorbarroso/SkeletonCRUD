<?php namespace Inotion\SkeletonCRUD\Helpers;

/**
 * Class Menu
 * @package Inotion\SkeletonCRUD\Helpers
 */
Class Menu {

    /**
     * Menu
     * @var string
     */
    protected $menu;

    /**
     * Submenu
     * @var string
     */
    protected $submenu;

    /**
     * Set Menu
     * @param $list
     */
    function setMenu( $list ){
        $string = "<ul class='nav navbar-nav'>";
        foreach($list as $item){
            $string += "<li><a href='{{$item->link}}'>{{$item->title_link}}</a></li>";
        }
        $string += "</ul>";
        $this->menu = $string;
    }

    /**
     * Set Submenu
     * @param $list
     */
    function setSubMenu( $list ){
        $string = "<li class='dropdown'>";
        foreach($list as $item){
            $string += "<li><a href='{{$item->link}}'>{{$item->title_link}}</a></li>";
        }
        $string = '</li>';
    }

}

