<?php

namespace APV\Hocmai\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class ProductDataConst
 * @package APV\Product\Constants
 */
class HocmaiDataConst extends BaseDataConst
{
    const IOS = 1;
    const ANDROID = 2;
    const ANOTHER = 3;
	//type_id
    const TYPE_OPTION = 1;
    const TYPE_STRING = 2;
    const TYPE_DATE = 3;
    //operator
    //id = 1
    const OPERATOR_GREATER = '>';
    //id = 2
    const OPERATOR_LESS = '<';
    //id = 3
    const OPERATOR_GREATER_EQUAL = '>=';
    //id = 4
    const OPERATOR_LESS_EQUAL = '<=';
    //id = 5
    const OPERATOR_EQUAL = '=';
    //id = 6
    const OPERATOR_NOT_EQUAL = '!=';
}
