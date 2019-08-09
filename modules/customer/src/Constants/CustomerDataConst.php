<?php

namespace APV\Customer\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class CustomerDataConst
 * @package APV\Customer\Constants
 */
class CustomerDataConst extends BaseDataConst
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 1100,
        'message' => 'Create categories error',
    ];
    
}
