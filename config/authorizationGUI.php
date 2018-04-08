<?php

declare(strict_types=1);

return [
    // authorizations that will be necessary to manage the administration interface.
    'authorizations' => [
        // has total control over the users.
        'administrator' => 'authorizations-administrator',

        // you can only see the roles and permissions that a certain user has.
        'view' => 'view-authorizations',

        // you can grant roles and permissions but not remove them.
        'grant' => 'grant-authorizations',

        // you can only revoke roles or permissions.
        'revoke' => 'revoke-authorizations',

        // You can create new roles or permissions, in addition to assigning permissions to a specific role.
        'create' => 'create-authorizations',

        // you can only edit the authorizations.
        'edit' => 'edit-authorizations',
    ],

    // routes for administration.
    'routes' => [
        'prefix' => [
            // uri: app.com/administration/authorizations.
            'main' => 'administration/authorizations',
            // uri: app.com/administration/authorizations/permissions.
            'permissions' => 'permissions',
            // uri: app.com/administration/authorizations/roles.
            'roles' => 'roles',
        ],
    ],
];