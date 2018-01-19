<?php

namespace AaronAdrian\Larahelp\Tests\Unit;


use AaronAdrian\Larahelp\Tests\TestCase;

class JsTest extends TestCase
{

    public function testJs()
    {
        $this->assertEquals('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>', js('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'));
    }

    public function testJsWithoutProtocol()
    {
        $this->assertEquals('<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>', js('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'));
    }
}