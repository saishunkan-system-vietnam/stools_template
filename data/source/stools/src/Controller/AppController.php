<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Logger;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    protected $logger;
    protected $pathurl;
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();
        Logger::configure(WWW_ROOT . 'config.xml');
        $this->logger = Logger::getLogger('default');
        $this->pathurl = [ '/' => "Home" ];
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    //use Cake\Event\EventInterface;
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $request = $event->getSubject()->getRequest();
        $query = $request->getQuery();
        $controller = $request->getParam('controller');
        $action = $request->getParam('action');
        $data = $request->getData();
        $datajson = $request->input('json_decode');
        $this->logger->debug("Start request [Controller]:[$controller] [Action]:[$action]");
        if (count($query) > 0) {
            $this->logger->debug("[Query]: " . json_encode($query));
        }
        if (count($data) > 0) {
            $this->logger->debug("[Data]: " . json_encode($data));
        }
        if ($datajson) {
            $this->logger->debug("[DataJson]: " . $datajson);
        }
        $this->logger->debug("End request [Controller]:[$controller] [Action]:[$action]");
    }

    public function beforeRender(EventInterface $event)
    {
        parent::beforeRender($event);
        $this->set('pathurl', $this->pathurl);
    }

    public function afterFilter(EventInterface $event)
    {
        parent::afterFilter($event);
        $request = $event->getSubject()->getRequest();
        $response = $event->getSubject()->getResponse();
        $status = $response->getStatusCode();
        $controller = $request->getParam('controller');
        $action = $request->getParam('action');
        $prefix = $request->getParam('prefix');
        $body = "";
        if ($prefix && strpos($prefix, 'Api') >= 0) {
            $body = $response->getBody();
        }
        $this->logger->debug("Response [Controller]:[$controller] [Action]:[$action] [Status]: [$status] [Body]: [$body]");
    }
}
