<?php
namespace OCA\Hello\Controller;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Controller;

class PageController extends Controller {
	/**
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index() {
        //$templateName = 'main';  // will use templates/main.php
        //$parameters = array('key' => 'hi');
        //return new TemplateResponse($this->appName, $templateName, $parameters);
		return new TemplateResponse('hello', 'main');
    }
}