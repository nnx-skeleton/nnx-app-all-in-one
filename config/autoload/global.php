<?php
return [
    'doctrine' => [
        'configuration' => [
            'orm_default' => [
                'metadata_cache' => 'filesystem'
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
        'cache' => [
            'filesystem' => [
                'directory' => __DIR__. '/../../data/cache/DoctrineModule',
            ]
        ],
        'eventmanager' => [
            'orm_default' => [
                'subscribers' => [
                    \Nnx\Doctrine\DiscriminatorEntry\DiscriminatorEntryListener::class,
                ],
            ],
        ],
    ],
];
