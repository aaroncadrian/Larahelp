<?php

namespace AaronAdrian\Larahelp\Tests\Unit;

use AaronAdrian\Larahelp\Tests\AbstractBladeTestCase;

class BladeDirectivesUnitTest extends AbstractBladeTestCase
{
    /**
     * @test
     */
    public function js_directive()
    {
        $input = "@js('http://examplecdn.com/something.js')";
        $expected = '<?php js(\'http://examplecdn.com/something.js\'); ?>';
        $this->assertEquals($expected, $this->compiler->compileString($input));
    }
}