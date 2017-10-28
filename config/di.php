<?php
/**
 * Configuration file for DI container.
 */
return [
    // Services to add to the container.
    "services" => [
        "Comment2Controller" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \kifekenny\Comment\Comment2Controller();
                $obj->setDI($this);
                return $obj;
            }
        ],
    ]
];
