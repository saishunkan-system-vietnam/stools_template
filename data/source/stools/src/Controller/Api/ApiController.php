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
namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Http\Response;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class ApiController extends AppController
{
    public $pageNumber = 1;
    public $displayNumber;
    public $inputData = [];
    public $inputQuery = [];
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
        $this->autoRender = false;
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
        $this->__getPageNumber();
    }

    protected function createResponse($payload, $code = "0000", $message = "Success", $count = 0, $disp = 0, $page = 0): Response
    {
        $response = $this->response->withType('application/json')
                                        ->withStringBody(json_encode(array("code" => $code,
                                        "message" => __($message),
                                        "payload" => $payload,
                                        "count" => $count,
                                        "disp" => $disp === 0 ? $this->displayNumber : $disp,
                                        "page" => $page === 0 ? $this->pageNumber : $page,
                                        "totalPage" => ceil($count / $this->displayNumber),
                                        "datetime" => time())));                                     
        return $response;
    }

    protected function clearSession($key): void
    {
        $session = $this->getRequest()->getSession();
        $input = $session->check("InputForm.$key") ? $session->read("InputForm.$key") : null;
        $query = $session->check("QueryForm.$key") ? $session->read("QueryForm.$key") : null;
        $session->delete("InputForm");
        $session->delete("QueryForm");
        if ($input != null) {
            $session->write("InputForm.$key", $input);
        }
        if ($query != null) {
            $session->write("QueryForm.$key", $query);
        }
    }

    private function __getPageNumber() {
        $this->displayNumber = Configure::read('App.defaultDisplay');
        $disp = $this->getRequest()->getQuery('disp');
        $page = $this->getRequest()->getQuery('page');
        try {
            if (isset($disp)) {
                if ($disp === "All") {
                    $this->displayNumber = "All";
                } else {
                    $this->displayNumber = intval($disp);
                }
            }
            if (isset($page)) {
                $this->pageNumber = intval($page);
            }
        } catch (Exception $e) {
            Log::write('error', $e->getMessage());
        }
    }
}
