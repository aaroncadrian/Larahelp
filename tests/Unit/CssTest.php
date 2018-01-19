<?php

namespace AaronAdrian\Larahelp\Tests\Unit;


use AaronAdrian\Larahelp\Tests\TestCase;

class CssTest extends TestCase
{

    public function testJs()
    {
        $this->assertEquals('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css">', css('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'));
    }

    public function testJsWithoutProtocol()
    {
        $this->assertEquals('<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css">', css('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'));
    }
}