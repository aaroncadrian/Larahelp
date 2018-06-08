<?php

namespace AaronAdrian\Larahelp\Tests;

use Mockery as m;
use Illuminate\View\Compilers\BladeCompiler;

abstract class AbstractBladeTestCase extends TestCase
{
    protected $compiler;

    public function setUp()
    {
        $this->compiler = new BladeCompiler(m::mock('Illuminate\Filesystem\Filesystem'), __DIR__);
        parent::setUp();
    }

    public function tearDown()
    {
        m::close();
        parent::tearDown();
    }
}