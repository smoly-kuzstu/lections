<?php

namespace Kuzstu\BlogBundle\Model;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class BaseModel
{

    public abstract function readItem($id);
    public abstract function readItemsList();
 
}
