<?php

namespace AaronAdrian\Larahelp\Tests\Unit;


use AaronAdrian\Larahelp\Tests\TestCase;

class CssAssetTest extends TestCase
{
    public function testCssAsset()
    {
        $this->assertEquals('<link rel="stylesheet" href="http://laravel.dev/css/app.css" type="text/css">', css_asset('css/app.css'));
    }

    public function testCssAssetSecure()
    {
        $this->assertEquals('<link rel="stylesheet" href="https://laravel.dev/css/app.css" type="text/css">', css_asset('css/app.css', true));
    }

}