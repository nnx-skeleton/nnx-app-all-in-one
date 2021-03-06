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
                    'NnxSkeletonMember\Organization\Entity' => 'NnxSkeletonMemberOrganizationEntity',
                    'NnxSkeletonMember\User\Entity' => 'NnxSkeletonMemberUserEntity',
                    'NnxSkeletonMember\Core\Entity' => 'NnxSkeletonMemberCoreEntity'
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
        'entitymanager' => [
            'customer_vendor_member' => [
                'connection'    => 'orm_default',
                'configuration' => 'orm_default'
            ]
        ]
    ],
];
