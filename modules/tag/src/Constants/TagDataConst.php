<?php

namespace APV\Tag\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class TagDataConst
 * @package APV\Table\Constants
 */
class TagDataConst extends BaseDataConst
{
    const ERROR_CODE_NO_PERMISSION = [
        'code' => 914,
        'message' => 'You have no permission to access to this entity',
    ];
    const ERROR_CODE_UNCREATE_NEW = [
        'code' => 100,
        'message' => 'Create error',
    ];
    const ERROR_CODE_EDIT = [
        'code' => 101,
        'message' => 'Edit error',
    ];
    const ERROR_CODE_DELETE = [
        'code' => 102,
        'message' => 'Delete error',
    ];
   
}
