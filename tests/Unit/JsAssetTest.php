<?php

namespace AaronAdrian\Larahelp\Tests\Unit;


use AaronAdrian\Larahelp\Tests\TestCase;

class JsAssetTest extends TestCase
{
    public function testJsAsset()
    {
        $this->assertEquals('<script src="http://laravel.dev/js/app.js"></script>', js_asset('js/app.js'));
    }

    public function testJsAssetSecure()
    {
        $this->assertEquals('<script src="https://laravel.dev/js/app.js"></script>', js_asset('js/app.js', true));
    }

}