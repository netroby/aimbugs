<?php
namespace Application\Controller;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        echo "Hello world";
        return false;
    }
}