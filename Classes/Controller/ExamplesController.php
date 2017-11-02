<?php
namespace Matrog\DependencyInjectionExamples\Controller;

use Matrog\DependencyInjectionExamples\Service\TestService;

class ExamplesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * Index action for this controller.
	 *
	 * @return string The rendered view
	 */
	public function indexAction()
	{
	    $t = $this->objectManager->get(TestService::class);

	    $t->myEcho().'<br>';

	}

}
