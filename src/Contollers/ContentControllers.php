<?php
/**
 * Created by PhpStorm.
 * User: Nobody
 * Date: 2016-10-04
 * Time: 10:30
 */

namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;


class ContentControllers extends Controller
{

    public function sayHello(Twig $twig)
    {
        return $twig->render('HelloWorld::content.hello');
    }

}