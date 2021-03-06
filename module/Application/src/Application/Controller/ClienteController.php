<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Entity\Modelo;

class ClienteController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function selectAction()
    {
        $modelo = new Modelo();
        $response = $modelo->getClient();
        die($response);
    }

    public function searchAction()
    {
        $modelo   = new Modelo();
        @$nombre  = $_REQUEST['nombre'];
        $response = $modelo->serchClient($nombre);
        die($response);

    }


    public function seaveAction()
    {
        $modelo       = new Modelo();
        @$identificacion      = $_POST['identificacion'];
        @$nombre       = $_POST['nombre'];
        @$apellidos    = $_POST['apellidos'];
        @$telefono     = $_POST['telefono'];
        @$celular      = $_POST['celular'];
        @$descripcion  = $_POST['descripcion'];
        
        $response = $modelo->saveClient($identificacion,$nombre,$apellidos,$telefono,$celular,$descripcion);
        die($response);

    }
    
}
