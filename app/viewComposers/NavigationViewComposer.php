<?php

/* from http://matthewhailwood.co.nz/clean-menu-management-in-laravel-4/ */

use Illuminate\Support\Collection;  
use Illuminate\View\View;


class NavigationViewComposer {

  public function compose(View $view) {

    $menu = new Collection;

    $menu->push((object)['title' => 'Examples', 'link' => URL::to('examples')]);

    $menu->push((object)['title' => 'Pricing', 'link' => URL::to('pricing')]);

    $menu->push((object)['title' => 'Testimonials', 'link' => URL::to('testimonials')]);

    /*
    |------------------------------------------------------------------------
    | Define the first sub menu
    |------------------------------------------------------------------------
    | Each menu is a Collection, including sub menus
    | The sub menu only get's pushed onto the main menu after it has been
    | Completely defined.
    */
    /*$sub1 = new Collection;*/

    /*
    |------------------------------------------------------------------------
    | Add the links to the sub menu
    |------------------------------------------------------------------------
    | Sub menu items simply get pushed onto the sub menu collections instead
    | of the main menu collection. Clean isn't it? 
    */
    /*$sub1->push((object)['title' => 'About me', 'link' => URL::route('about.me')]);
    $sub1->push((object)['title' => 'About the site', 'link' => URL::route('about.site')]);*/

    /*
    |------------------------------------------------------------------------
    | Push the sub menu onto the main menu
    |------------------------------------------------------------------------
    | Notice that this definition has the menu and the type key?
    */
    /*$menu->push((object)['title' => 'About', 'menu' => $sub1]);*/

    /*
    |------------------------------------------------------------------------
    | Save the menu as data for the view
    |------------------------------------------------------------------------
    | Any properties set on the $view variable will be available in our view 
    | under that key.
    */
    $view->menu = $menu;

  }

}