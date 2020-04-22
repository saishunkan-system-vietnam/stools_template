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
namespace App\Controller\Api\Inventory;

use App\Controller\Api\ApiController;
use Cake\Http\Response;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class ExampleController extends ApiController
{
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
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function getList(): Response
    {
        $this->request->allowMethod(['GET']);
        $inputData = $this->getRequest()->getData();
        try {
            $payload = array(
                0 => json_decode('{
                    "id": 1,
                    "name": "Inventory example 1",
                    "desc": "Desc excemple 1"
                }'),
                1 => json_decode('{
                    "id": 1,
                    "name": "Inventory example 2",
                    "desc": "Desc excemple 3"
                }'),
                2 => json_decode('{
                    "id": 1,
                    "name": "Inventory example 3",
                    "desc": "Desc excemple 3"
                }'),
                3 => json_decode('{
                    "id": 1,
                    "name": "Inventory example 4",
                    "desc": "Desc excemple 4"
                }'),
                4 => json_decode('{
                    "id": 1,
                    "name": "Inventory example 5",
                    "desc": "Desc excemple 5"
                }'),
            );
            return $this->createResponse($payload, '0000', __("Có {0} bản ghi được tìm thấy", 4), 4);
        } catch (Exception $e) {
            return $this->createResponse([], '9001', $e->getMessage());
        }
    }
}
