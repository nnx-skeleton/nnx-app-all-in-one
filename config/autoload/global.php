<?php
return [
    'doctrine' => [
        'configuration' => [
            'orm_default' => [
                'metadata_cache' => 'memcached'
            ]
        ],
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => [
                ]
            ],
        ],
        'driver' => [
            'orm_default' => [
                'drivers' => [
                    'Nnx\Member\Organization\Entity\Member' => 'NnxMemberOrganizationEntityMember',
                    'Nnx\Member\Organization\Entity\Organization' => 'NnxMemberOrganizationEntityOrganization',
                    'Nnx\Member\Organization\Entity\User' => 'NnxMemberOrganizationEntityUser',
                    'Nnx\Member\User\Entity\User' => 'NnxMemberUserEntityUser'
                ],
            ],
        ],
    ],
];
