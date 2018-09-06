<?php

namespace Kifekenny\Comment\HTMLForm;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class com2create.
 */
class Com2SessionTest extends \PHPUnit_Framework_TestCase
{
    protected static $dis;
    /**
     * Test case to construct object and verify that the object
     * has the expected properties due various ways of constructing
     * it.
     */
    public static function setUpBeforeClass()
    {
        self::$dis = new \Anax\DI\DIFactoryConfig();
        self::$dis->configure(ANAX_APP_PATH . "/test/config/testDi.php");
    }

    public function testConstruct()
    {
        $c2s = new Com2Session(self::$dis);
        $this->assertTrue(is_object($c2s), true);
    }
}
