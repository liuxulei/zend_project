<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;

class IndexController extends AbstractActionController
{
    public function dbAction()
    {
        $config_array = array(
            'driver' => 'Pdo_Mysql',
            'database' => 'mysql',
            'username' => 'root',
            'password' => '',
            'hostname' => '127.0.0.1',
            'port' => '3306',
            'charset' => 'utf-8',
        );

        $adapter = new Adapter($config_array);
        var_dump($adapter);
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function viewAction(){
        return new ViewModel();
    }
}
