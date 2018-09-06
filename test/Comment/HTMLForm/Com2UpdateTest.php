<?php

namespace Kifekenny\Comment\HTMLForm;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class com2create.
 */
class Com2UpdateTest extends \PHPUnit_Framework_TestCase
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
        $c2u = new Com2Update(self::$dis, 1);

        $this->assertTrue(is_object($c2u), true);
    }

    public function testisgetItemDetails()
    {
        $c2u = new Com2Update(self::$dis, 1);
        $recived = $c2u->isgetItemDetails(1);

        $this->assertSame($recived->id, 1);
        $this->assertSame($recived->title, "ForTest");
        $this->assertSame($recived->userMail, "admin@hotmail.com");
    }
}
