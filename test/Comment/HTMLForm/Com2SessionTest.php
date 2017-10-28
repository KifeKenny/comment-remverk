<?php

namespace Kifekenny\Comment\HTMLForm;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class com2create.
 */
class Com2SessionTest extends \PHPUnit_Framework_TestCase
{
    protected static $di;
    /**
     * Test case to construct object and verify that the object
     * has the expected properties due various ways of constructing
     * it.
     */
    public static function setUpBeforeClass()
    {
        // echo "hi";
        self::$di = new \Anax\DI\DIFactoryConfig();
        self::$di->configure(ANAX_APP_PATH . "/test/config/testDi.php");
    }

    public function testConstruct()
    {
        $comSession = new Com2Session(self::$di);
    }
}
