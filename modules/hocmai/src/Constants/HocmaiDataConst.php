<?php

namespace APV\Hocmai\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class ProductDataConst
 * @package APV\Product\Constants
 */
class HocmaiDataConst extends BaseDataConst
{
	//type_id
    const TYPE_OPTION = 1;
    const TYPE_STRING = 2;
    const TYPE_DATE = 3;
    //operator
    const OPERATOR_GREATER = '>';
    const OPERATOR_LESS = '<';
    const OPERATOR_GREATER_EQUAL = '>=';
    const OPERATOR_LESS_EQUAL = '<=';
    const OPERATOR_EQUAL = '=';
    const OPERATOR_NOT_EQUAL = '!=';
}
