<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // Add routes from bookController and mount on book/
            "mount" => "comment",
            "file" => __DIR__ . "/route/comment.php",
        ],
    ]
];
