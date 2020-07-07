<?php

namespace APV\Base\Constants;

/**
 * Class BaseDataConst
 * @package APV\Base\Constants
 */
class BaseDataConst
{
    //meguu fee
    const MEGUU_FEE_AT_SHIP = 25000;
    const MEGUU_FEE_AT_SHOP = 0;
    const MEGUU_FEE_DEFAULT = 0;
    //using_at = 1, customer co 2 option: 1: dùng tại quán, 2: Mang đi
    //using_at = 2, customer có 2 option: 3: Tôi dùng, 4: Mua tặng
    const CUSTOMER_ACTION_USING_AT_SHOP_USE_SHOP = 1;
    const CUSTOMER_ACTION_USING_AT_SHOP_TAKE_AWAY = 2;
    const CUSTOMER_ACTION_USING_AT_SHIP_OWNER = 3;
    const CUSTOMER_ACTION_USING_AT_SHIP_GIFT = 4;

}
