<?php

/**
 *  Corresponding Class to test Printer class
 *
 *  @author mike erickson
 */
class TestHelpersTest extends PHPUnit\Framework\TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $var = new Codedungeon\PHPTestHelpers\TestHelpers;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /**
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testGetPackageName()
    {
        $printer = new Codedungeon\PHPTestHelpers\TestHelpers;
        $this->assertTrue($printer->packageName() == 'PHP Test Helpers');
        unset($var);
    }
}
