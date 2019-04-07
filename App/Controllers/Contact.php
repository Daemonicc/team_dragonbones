<?php

namespace App\Controllers;

use \Core\View;

class Contact extends \Core\Controller
{

    public function indexAction()
    {

        View::renderTemplate('Contact/index.html');
    }
}
