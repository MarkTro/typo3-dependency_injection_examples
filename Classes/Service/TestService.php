<?php
/**
 * Created by PhpStorm.
 * User: mtroeger
 * Date: 02.11.2017
 * Time: 11:33
 */

namespace Matrog\DependencyInjectionExamples\Service;

class TestService
{

    //-----------------------------------------------------------------------
    // DI via Constructor
    //
    // Best DI-Variant
    // - Works also in other PHP Frameworks
    // - Good overview of how many injections you need. If you have a
    //   lot of them it might be a hint for refactoring of the system
    //   architecture.
    //-----------------------------------------------------------------------

    /**
     * @var \Matrog\DependencyInjectionExamples\Service\ExampleServiceInterface
     */
    private $serviceConstructor;

    public function __construct(ExampleServiceInterface $markusService)
    {
        $this->serviceConstructor = $markusService;
    }



    //-----------------------------------------------------------------------
    // DI via inject function
    //
    // Has the benefit that you can store the result of a method of the
    // service, z.B.:
    //   $this->service = $exampleService->getSettings();
    //-----------------------------------------------------------------------

    /**
     * @var \Matrog\DependencyInjectionExamples\Service\ExampleService
     */
    private $serviceInjected;

    public function injectMarkusService(ExampleService $markusService)
    {
        $this->serviceInjected = $markusService;
    }



    //-----------------------------------------------------------------------
    // DI via Annotation
    //
    // Don't use it:
    // - It can't be mocked in tests
    // - Needs additional parsing of the annotation
    //-----------------------------------------------------------------------

    /**
     * @var \Matrog\DependencyInjectionExamples\Service\ExampleService
     * @inject
     */
    private $serviceAnnotation;



    //-----------------------------------------------------------------------

    public function myEcho()
    {
        echo 'Controller got the TestService via $this->get(\'TestService::class\')<br>';
        $this->serviceInjected->myEcho('ExampleService injection via Injection function loaded.');
        $this->serviceAnnotation->myEcho('ExampleService injection via Annotation loaded.');
        $this->serviceConstructor->myEcho('ExampleService injection via Constructor loaded.');
    }
}