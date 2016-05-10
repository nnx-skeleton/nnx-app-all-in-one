<?php

use CustomerVendorMember\Member\Module as CustomerVendorMemberModule;


return [
    CustomerVendorMemberModule::CONFIG_KEY => [
        'objectManagerName' => 'doctrine.entitymanager.customer_vendor_member'
    ]
];