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
                    'NnxSkeleton\Organization\Entity' => 'NnxSkeletonOrganizationEntity',
                    'NnxSkeleton\User\Entity' => 'NnxSkeletonUserEntity'
                ],
            ],
        ],
    ],
];
