<?php

namespace AaronAdrian\Larahelp\Tests;

use AaronAdrian\Larahelp\LarahelpServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->getHelperFile();
        $this->getIlluminateHelpers();
    }

    protected function getHelperFile()
    {
        require_once(__DIR__.'/../src/larahelp.php');
    }

    protected function getIlluminateHelpers()
    {
        require_once(__DIR__.'/../vendor/laravel/framework/src/Illuminate/Foundation/helpers.php');
    }

    protected function getPackageProviders($app)
    {
        return [LarahelpServiceProvider::class];
    }
}