<?php

namespace Kifekenny\Comment\HTMLForm;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class com2create.
 */
class Com2DeleteTest extends \PHPUnit_Framework_TestCase
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
        $c2c = new Com2Delete(self::$dis, 1);
        $this->assertTrue(is_object($c2c), true);
    }

    public function testisgetItemDetails()
    {
        $c2d = new Com2Update(self::$dis, 1);
        $recived = $c2d->isgetItemDetails(1);

        $this->assertSame($recived->id, 1);
        $this->assertSame($recived->title, "ForTest");
        $this->assertSame($recived->userMail, "admin@hotmail.com");
    }
}
