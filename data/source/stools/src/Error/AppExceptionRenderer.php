<?php
namespace App\Error;

use Cake\Error\Debugger;
use Cake\Error\ExceptionRenderer;
use Cake\Controller\Controller;
use Cake\Controller\ControllerFactory;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Core\Exception\Exception as CakeException;
use Cake\Core\Exception\MissingPluginException;
use Cake\Event\Event;
use Cake\Http\Exception\HttpException;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\Http\ServerRequestFactory;
use Cake\Routing\Router;
use Cake\Utility\Inflector;
use Cake\View\Exception\MissingLayoutException;
use Cake\View\Exception\MissingTemplateException;
use Logger;
use PDOException;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class AppExceptionRenderer extends ExceptionRenderer
{
    private $logger;
    /**
     * Renders the response for the exception.
     *
     * @return \Cake\Http\Response The response to be sent.
     */
    public function render(): ResponseInterface
    {
        Logger::configure(WWW_ROOT . 'config.xml');
        $this->logger = Logger::getLogger('default');
        $request = $this->controller->getRequest();
        $controller = $request->getParam('controller');
        $action = $request->getParam('action');
        $exception = $this->error;
        $code = $this->_code($exception);
        $method = $this->_method($exception);
        $message = $this->_message($exception, $code);
        $this->logger->error("Error [Controller]:[$controller] [Action]:[$action] [Status]: [$code] [Message]: $message") ;
        return parent::render();
    }
}