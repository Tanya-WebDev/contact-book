<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_contact_table' => [[], ['_controller' => 'App\\Controller\\ContactController::table'], [], [['text', '/']], [], [], []],
    'app_contact_createcontact' => [[], ['_controller' => 'App\\Controller\\ContactController::createContact'], [], [['text', '/contacts/create']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];