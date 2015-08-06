<?php
namespace Chinook\V1\Rpc\About;

use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel;

class AboutController extends AbstractActionController
{
    public function aboutAction()
    {
        return new ViewModel(array(
            'name' => "Chinook",
            'version' => "1"
        ));
    }
}
