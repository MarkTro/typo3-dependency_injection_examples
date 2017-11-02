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
    // Beste DI-Variante
    // - Funktioniert auch in anderen PHP Frameworks
    // - Sind viele DIs in einem Konstruktor vorhanden, deutet das auf eine
    //   evtl. schlechte System-Architektur hin.
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
    // Hat den Vorteil, dass man in der Variable das Ergebnis einer Methode
    // speichern kann, z.B.:
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
    // - Möglichst nicht nutzen:
    //    - kann bei Tests nicht gemockt werden
    //    - benötigte zusätzliches Parsen der Annotation
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