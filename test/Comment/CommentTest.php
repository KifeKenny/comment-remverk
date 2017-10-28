<?php

namespace Kifekenny\Comment;

use PHPUnit\Framework\TestCase;

/**
 * Test cases.
 */
class CommentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test case to construct object and verify that the object
     * has the expected properties due various ways of constructing
     * it.
     */
    public function testCreateObject()
    {
        $comment = new Comment();
    }
}
