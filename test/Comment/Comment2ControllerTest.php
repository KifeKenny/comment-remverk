<?php

namespace Kifekenny\Comment;

use PHPUnit\Framework\TestCase;

/**
 * Test cases
 */
class Comment2ControllerTest extends \PHPUnit_Framework_TestCase
{
    protected static $dis;
    protected static $controller;
    protected static $session;
    /**
     * Test case to construct object and verify that the object
     * has the expected properties due various ways of constructing
     * it.
     */
    public static function setUpBeforeClass()
    {
        self::$dis = new \Anax\DI\DIFactoryConfig();
        self::$dis->configure(ANAX_APP_PATH . "/test/config/testDi.php");
        self::$controller = new Comment2Controller();
        self::$controller->setDI(self::$dis);
    }

    public function testGetIndex()
    {
        self::$controller->getIndex();
    }

    public function testComment2Create()
    {
        self::$controller->comment2Create();
    }

    public function testComment2Update()
    {
        self::$controller->comment2Update(1);
    }

    public function testComment2Delete()
    {
        self::$controller->comment2Delete(1);
    }

    public function testSetUser()
    {
        self::$controller->setUser();
    }
}
