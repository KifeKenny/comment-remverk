<?php
/**
 * Configuration file for DI container.
 */
return [
    // Services to add to the container.
    "services" => [
        "comment2Controller" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Kifekenny\Comment\Comment2Controller();
                $obj->setDI($this);
                return $obj;
            }
        ],
    ]
];
