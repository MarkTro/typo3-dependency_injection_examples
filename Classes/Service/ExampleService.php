<?php
/**
 * Created by PhpStorm.
 * User: mtroeger
 * Date: 02.11.2017
 * Time: 11:36
 */

namespace Matrog\DependencyInjectionExamples\Service;


class ExampleService implements ExampleServiceInterface
{

    public function myEcho($method)
    {
        echo $method. '<br>';
    }
}