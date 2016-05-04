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
                    'Nnx\Skeleton\Organization\Entity\Member' => 'NnxSkeletonOrganizationEntityMember',
                    'Nnx\Skeleton\Organization\Entity\Organization' => 'NnxSkeletonOrganizationEntityOrganization',
                    'Nnx\Skeleton\Organization\Entity\User' => 'NnxSkeletonOrganizationEntityUser',
                    'Nnx\Skeleton\User\Entity\User' => 'NnxSkeletonUserEntityUser'
                ],
            ],
        ],
    ],
];
