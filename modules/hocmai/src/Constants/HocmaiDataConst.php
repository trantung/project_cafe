<?php

namespace APV\Hocmai\Constants;

use APV\Base\Constants\BaseDataConst;

/**
 * Class ProductDataConst
 * @package APV\Product\Constants
 */
class HocmaiDataConst extends BaseDataConst
{
    const VOUCHER_STATUS_NOT_USE = 0;
    const VOUCHER_STATUS_USED = 1;
    const VOUCHER_EXPIRED = 1;
    const VOUCHER_NOT_EXPIRED = 0;
    //voucher co duoc su dung hay khong duoc ap dung
    const VOUCHER_IS_INACTIVE = 0;
    const VOUCHER_IS_ACTIVE = 1;
}
