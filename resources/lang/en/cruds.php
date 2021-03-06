<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'companies' => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'nama'                     => 'Nama Company',
            'nama_helper'              => ' ',
            'email'                    => 'Email Company',
            'email_helper'             => ' ',
            'logo'                     => 'Logo Company',
            'logo_helper'              => ' ',
            'website'                  => 'Website',
            'website_helper'           => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
        ]
    ],
    'employees' => [
        'title'          => 'Employee',
        'title_singular' => 'Employees',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'nama'                     => 'Nama Employee',
            'nama_helper'              => ' ',
            'email'                    => 'Email Employee',
            'email_helper'             => ' ',
            'company_id'               => 'Company',
            'company_id_helper'        => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
        ]
    ],
];
