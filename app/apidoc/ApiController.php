<?php

/**
 * @api {get} /api_customer/product/productList Danh sách tất cả product chưa lọc theo category_id
 * @apiName getProductList
 * @apiGroup Product
 *
 * @apiParam {Number} using_at kiểu sử dụng(có thể không truyền. 1:Đặt tại quầy, 2: Ship tận nơi)
 * @apiParam {Number} location_id id của location(có thể không truyền)
 * @apiParam {Number} delivery_address địa chỉ nhận hàng(có thể không truyền)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "data_detail": [
            {
                "category_id": 5,
                "category_name": "Thức uống",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 2,
                        "product_name": "Chocolate Đá Xay\b",
                        "product_short_desc": "",
                        "product_description": "Món trà hoa đăng cho mùa thu",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/2/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 3,
                        "product_name": "Matcha phú quý",
                        "product_short_desc": "",
                        "product_description": "Món matcha đủ vị",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/3/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 4,
                        "product_name": "Cold brew Cam sả",
                        "product_short_desc": "",
                        "product_description": "Cold brew Cam sả",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/4/avatar/cold_brew_cam_sa.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 6,
                        "product_name": "Cold brew Sữa tươi",
                        "product_short_desc": "",
                        "product_description": "Cold brew Sữa tươi",
                        "product_base_price": 45000,
                        "product_sale_price": 45000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/6/avatar/coldbrew_milk.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 7,
                        "product_name": "Caramel Macchiato Đá",
                        "product_short_desc": "",
                        "product_description": "Caramel Macchiato Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 8,
                        "product_name": "Caramel Macchiato Nóng",
                        "product_short_desc": "",
                        "product_description": "Caramel Macchiato Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 9,
                        "product_name": "Cà phê sữa Đá",
                        "product_short_desc": "",
                        "product_description": "Cà phê sữa Đá",
                        "product_base_price": 29000,
                        "product_sale_price": 29000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 10,
                        "product_name": "Cà phê sữa Nóng",
                        "product_short_desc": "",
                        "product_description": "Cà phê sữa Nóng",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/10/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 11,
                        "product_name": "Americano Đá",
                        "product_short_desc": "",
                        "product_description": "Americano Đá",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/11/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 12,
                        "product_name": "Americano Nóng",
                        "product_short_desc": "",
                        "product_description": "Americano Nóng",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/12/avatar/americano-nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 13,
                        "product_name": "Cappucino Đá",
                        "product_short_desc": "",
                        "product_description": "Cappucino Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/13/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 14,
                        "product_name": "Cappucino Nóng",
                        "product_short_desc": "",
                        "product_description": "Cappucino Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/14/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 15,
                        "product_name": "Latte Đá",
                        "product_short_desc": "",
                        "product_description": "Latte Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/15/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 16,
                        "product_name": "Latte Nóng",
                        "product_short_desc": "",
                        "product_description": "Latte Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/16/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 17,
                        "product_name": "Mocha Đá",
                        "product_short_desc": "",
                        "product_description": "Mocha Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/17/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 18,
                        "product_name": "Mocha Nóng",
                        "product_short_desc": "",
                        "product_description": "Mocha Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/18/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 19,
                        "product_name": "Espresso Đá",
                        "product_short_desc": "",
                        "product_description": "Espresso Đá",
                        "product_base_price": 45000,
                        "product_sale_price": 45000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 20,
                        "product_name": "Espresso Nóng",
                        "product_short_desc": "",
                        "product_description": "Espresso Nóng",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 21,
                        "product_name": "Trà ô long",
                        "product_short_desc": "",
                        "product_description": "Trà ô long",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/21/avatar/tra_oo_long.png",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 22,
                        "product_name": "Lục trà hoa đăng",
                        "product_short_desc": "",
                        "product_description": "Lục trà hoa đăng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/22/avatar/luc-tra-hoa-dang.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 23,
                        "product_name": "Chocolate đá xay",
                        "product_short_desc": "",
                        "product_description": "Chocolate đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/23/avatar/chocolate_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 24,
                        "product_name": "Phúc bồn tử cam đá xay",
                        "product_short_desc": "",
                        "product_description": "Phúc bồn tử cam đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/24/avatar/chocolate_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 25,
                        "product_name": "Matcha đá xay",
                        "product_short_desc": "",
                        "product_description": "Matcha đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/25/avatar/matcha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 26,
                        "product_name": "Cookies đá xay",
                        "product_short_desc": "",
                        "product_description": "Cookies đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/26/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 27,
                        "product_name": "Chanh sả đá xay",
                        "product_short_desc": "",
                        "product_description": "Chanh sả đá xay",
                        "product_base_price": 49000,
                        "product_sale_price": 49000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/27/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 28,
                        "product_name": "Cam đá xay",
                        "product_short_desc": "",
                        "product_description": "Cam đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/28/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 29,
                        "product_name": "Ổi hồng việt quất đá xay",
                        "product_short_desc": "",
                        "product_description": "Ổi hồng việt quất đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/29/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 6,
                "category_name": "Thức ăn",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 30,
                        "product_name": "Đậu phộng tỏi ớt",
                        "product_short_desc": "",
                        "product_description": "Đậu phộng tỏi ớt",
                        "product_base_price": 10000,
                        "product_sale_price": 10000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/30/avatar/dau_phong_toi_ot.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 31,
                        "product_name": "Bánh mì que",
                        "product_short_desc": "",
                        "product_description": "Bánh mì que",
                        "product_base_price": 10000,
                        "product_sale_price": 10000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/31/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 32,
                        "product_name": "Da Cá Sấy Giòn Vị Trứng Muối",
                        "product_short_desc": "",
                        "product_description": "Da Cá Sấy Giòn Vị Trứng Muối",
                        "product_base_price": 30000,
                        "product_sale_price": 30000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/32/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 33,
                        "product_name": "Khô gà lá chanh",
                        "product_short_desc": "",
                        "product_description": "Khô gà lá chanh",
                        "product_base_price": 20000,
                        "product_sale_price": 20000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/33/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 34,
                        "product_name": "Điều vàng rang muối",
                        "product_short_desc": "",
                        "product_description": "Điều vàng rang muối",
                        "product_base_price": 20000,
                        "product_sale_price": 20000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/34/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 35,
                        "product_name": "Hạt sen sấy",
                        "product_short_desc": "",
                        "product_description": "Hạt sen sấy",
                        "product_base_price": 30000,
                        "product_sale_price": 30000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/35/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 36,
                        "product_name": "Khô gà bơ cay",
                        "product_short_desc": "",
                        "product_description": "Khô gà bơ cay",
                        "product_base_price": 20000,
                        "product_sale_price": 20000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/36/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 37,
                        "product_name": "Cơm cháy chà bông",
                        "product_short_desc": "",
                        "product_description": "Cơm cháy chà bông",
                        "product_base_price": 25000,
                        "product_sale_price": 25000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/37/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 38,
                        "product_name": "Gạo lứt sấy giòn",
                        "product_short_desc": "",
                        "product_description": "Gạo lứt sấy giòn",
                        "product_base_price": 10000,
                        "product_sale_price": 10000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/38/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 7,
                "category_name": "Coffee",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 2,
                        "product_name": "Chocolate Đá Xay\b",
                        "product_short_desc": "",
                        "product_description": "Món trà hoa đăng cho mùa thu",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/2/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 4,
                        "product_name": "Cold brew Cam sả",
                        "product_short_desc": "",
                        "product_description": "Cold brew Cam sả",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/4/avatar/cold_brew_cam_sa.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 6,
                        "product_name": "Cold brew Sữa tươi",
                        "product_short_desc": "",
                        "product_description": "Cold brew Sữa tươi",
                        "product_base_price": 45000,
                        "product_sale_price": 45000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/6/avatar/coldbrew_milk.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 7,
                        "product_name": "Caramel Macchiato Đá",
                        "product_short_desc": "",
                        "product_description": "Caramel Macchiato Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 8,
                        "product_name": "Caramel Macchiato Nóng",
                        "product_short_desc": "",
                        "product_description": "Caramel Macchiato Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 9,
                        "product_name": "Cà phê sữa Đá",
                        "product_short_desc": "",
                        "product_description": "Cà phê sữa Đá",
                        "product_base_price": 29000,
                        "product_sale_price": 29000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 10,
                        "product_name": "Cà phê sữa Nóng",
                        "product_short_desc": "",
                        "product_description": "Cà phê sữa Nóng",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/10/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 11,
                        "product_name": "Americano Đá",
                        "product_short_desc": "",
                        "product_description": "Americano Đá",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/11/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 12,
                        "product_name": "Americano Nóng",
                        "product_short_desc": "",
                        "product_description": "Americano Nóng",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/12/avatar/americano-nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 13,
                        "product_name": "Cappucino Đá",
                        "product_short_desc": "",
                        "product_description": "Cappucino Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/13/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 14,
                        "product_name": "Cappucino Nóng",
                        "product_short_desc": "",
                        "product_description": "Cappucino Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/14/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 15,
                        "product_name": "Latte Đá",
                        "product_short_desc": "",
                        "product_description": "Latte Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/15/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 16,
                        "product_name": "Latte Nóng",
                        "product_short_desc": "",
                        "product_description": "Latte Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/16/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 17,
                        "product_name": "Mocha Đá",
                        "product_short_desc": "",
                        "product_description": "Mocha Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/17/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 18,
                        "product_name": "Mocha Nóng",
                        "product_short_desc": "",
                        "product_description": "Mocha Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/18/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 19,
                        "product_name": "Espresso Đá",
                        "product_short_desc": "",
                        "product_description": "Espresso Đá",
                        "product_base_price": 45000,
                        "product_sale_price": 45000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 20,
                        "product_name": "Espresso Nóng",
                        "product_short_desc": "",
                        "product_description": "Espresso Nóng",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 8,
                "category_name": "Thức uống đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 23,
                        "product_name": "Chocolate đá xay",
                        "product_short_desc": "",
                        "product_description": "Chocolate đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/23/avatar/chocolate_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 24,
                        "product_name": "Phúc bồn tử cam đá xay",
                        "product_short_desc": "",
                        "product_description": "Phúc bồn tử cam đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/24/avatar/chocolate_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 25,
                        "product_name": "Matcha đá xay",
                        "product_short_desc": "",
                        "product_description": "Matcha đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/25/avatar/matcha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 26,
                        "product_name": "Cookies đá xay",
                        "product_short_desc": "",
                        "product_description": "Cookies đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/26/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 27,
                        "product_name": "Chanh sả đá xay",
                        "product_short_desc": "",
                        "product_description": "Chanh sả đá xay",
                        "product_base_price": 49000,
                        "product_sale_price": 49000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/27/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 28,
                        "product_name": "Cam đá xay",
                        "product_short_desc": "",
                        "product_description": "Cam đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/28/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 29,
                        "product_name": "Ổi hồng việt quất đá xay",
                        "product_short_desc": "",
                        "product_description": "Ổi hồng việt quất đá xay",
                        "product_base_price": 59000,
                        "product_sale_price": 59000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/29/avatar/cookies-da-xay.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 9,
                "category_name": "Trà trái cây",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 21,
                        "product_name": "Trà ô long",
                        "product_short_desc": "",
                        "product_description": "Trà ô long",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/21/avatar/tra_oo_long.png",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 22,
                        "product_name": "Lục trà hoa đăng",
                        "product_short_desc": "",
                        "product_description": "Lục trà hoa đăng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/22/avatar/luc-tra-hoa-dang.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 10,
                "category_name": "Thức ăn nhẹ",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 30,
                        "product_name": "Đậu phộng tỏi ớt",
                        "product_short_desc": "",
                        "product_description": "Đậu phộng tỏi ớt",
                        "product_base_price": 10000,
                        "product_sale_price": 10000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/30/avatar/dau_phong_toi_ot.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 31,
                        "product_name": "Bánh mì que",
                        "product_short_desc": "",
                        "product_description": "Bánh mì que",
                        "product_base_price": 10000,
                        "product_sale_price": 10000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/31/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 32,
                        "product_name": "Da Cá Sấy Giòn Vị Trứng Muối",
                        "product_short_desc": "",
                        "product_description": "Da Cá Sấy Giòn Vị Trứng Muối",
                        "product_base_price": 30000,
                        "product_sale_price": 30000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/32/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 33,
                        "product_name": "Khô gà lá chanh",
                        "product_short_desc": "",
                        "product_description": "Khô gà lá chanh",
                        "product_base_price": 20000,
                        "product_sale_price": 20000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/33/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 34,
                        "product_name": "Điều vàng rang muối",
                        "product_short_desc": "",
                        "product_description": "Điều vàng rang muối",
                        "product_base_price": 20000,
                        "product_sale_price": 20000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/34/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 35,
                        "product_name": "Hạt sen sấy",
                        "product_short_desc": "",
                        "product_description": "Hạt sen sấy",
                        "product_base_price": 30000,
                        "product_sale_price": 30000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/35/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 36,
                        "product_name": "Khô gà bơ cay",
                        "product_short_desc": "",
                        "product_description": "Khô gà bơ cay",
                        "product_base_price": 20000,
                        "product_sale_price": 20000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/36/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 37,
                        "product_name": "Cơm cháy chà bông",
                        "product_short_desc": "",
                        "product_description": "Cơm cháy chà bông",
                        "product_base_price": 25000,
                        "product_sale_price": 25000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/37/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 38,
                        "product_name": "Gạo lứt sấy giòn",
                        "product_short_desc": "",
                        "product_description": "Gạo lứt sấy giòn",
                        "product_base_price": 10000,
                        "product_sale_price": 10000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/38/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 11,
                "category_name": "Cold brew",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 4,
                        "product_name": "Cold brew Cam sả",
                        "product_short_desc": "",
                        "product_description": "Cold brew Cam sả",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/4/avatar/cold_brew_cam_sa.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 6,
                        "product_name": "Cold brew Sữa tươi",
                        "product_short_desc": "",
                        "product_description": "Cold brew Sữa tươi",
                        "product_base_price": 45000,
                        "product_sale_price": 45000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/6/avatar/coldbrew_milk.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 12,
                "category_name": "Caramel Macchiato",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 7,
                        "product_name": "Caramel Macchiato Đá",
                        "product_short_desc": "",
                        "product_description": "Caramel Macchiato Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 8,
                        "product_name": "Caramel Macchiato Nóng",
                        "product_short_desc": "",
                        "product_description": "Caramel Macchiato Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 13,
                "category_name": "Cà phê sữa",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 9,
                        "product_name": "Cà phê sữa Đá",
                        "product_short_desc": "",
                        "product_description": "Cà phê sữa Đá",
                        "product_base_price": 29000,
                        "product_sale_price": 29000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 10,
                        "product_name": "Cà phê sữa Nóng",
                        "product_short_desc": "",
                        "product_description": "Cà phê sữa Nóng",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/10/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 14,
                "category_name": "Americano",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 2,
                        "product_name": "Chocolate Đá Xay\b",
                        "product_short_desc": "",
                        "product_description": "Món trà hoa đăng cho mùa thu",
                        "product_base_price": 35000,
                        "product_sale_price": 35000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/2/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 11,
                        "product_name": "Americano Đá",
                        "product_short_desc": "",
                        "product_description": "Americano Đá",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/11/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 12,
                        "product_name": "Americano Nóng",
                        "product_short_desc": "",
                        "product_description": "Americano Nóng",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/12/avatar/americano-nong.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 15,
                "category_name": "Cappucino",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 13,
                        "product_name": "Cappucino Đá",
                        "product_short_desc": "",
                        "product_description": "Cappucino Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/13/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 14,
                        "product_name": "Cappucino Nóng",
                        "product_short_desc": "",
                        "product_description": "Cappucino Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/14/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 16,
                "category_name": "Latte",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 15,
                        "product_name": "Latte Đá",
                        "product_short_desc": "",
                        "product_description": "Latte Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/15/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 16,
                        "product_name": "Latte Nóng",
                        "product_short_desc": "",
                        "product_description": "Latte Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/16/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 17,
                "category_name": "Mocha",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 17,
                        "product_name": "Mocha Đá",
                        "product_short_desc": "",
                        "product_description": "Mocha Đá",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/17/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 18,
                        "product_name": "Mocha Nóng",
                        "product_short_desc": "",
                        "product_description": "Mocha Nóng",
                        "product_base_price": 50000,
                        "product_sale_price": 50000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/18/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 18,
                "category_name": "Espresso",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 19,
                        "product_name": "Espresso Đá",
                        "product_short_desc": "",
                        "product_description": "Espresso Đá",
                        "product_base_price": 45000,
                        "product_sale_price": 45000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 20,
                        "product_name": "Espresso Nóng",
                        "product_short_desc": "",
                        "product_description": "Espresso Nóng",
                        "product_base_price": 40000,
                        "product_sale_price": 40000,
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    }
                ]
            },
            {
                "category_id": 19,
                "category_name": "Chocolate đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 20,
                "category_name": "Phúc bồn tử cam đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 21,
                "category_name": "Matcha đá.xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 22,
                "category_name": "Cookies đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 23,
                "category_name": "Chanh sả đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 24,
                "category_name": "Cam đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 25,
                "category_name": "Ổi hồng việt quất đá xay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 26,
                "category_name": "Trà ô long",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 27,
                "category_name": "Lục trà hoa đăng",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 28,
                "category_name": "Đậu phộng tỏi ớt",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 29,
                "category_name": "Bánh mì que",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 30,
                "category_name": "Da Cá Sấy Giòn Vị Trứng Muối",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 31,
                "category_name": "Khô gà lá chanh",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 32,
                "category_name": "Điều vàng rang muối",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 33,
                "category_name": "Hạt sen sấy",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 34,
                "category_name": "Khô gà bơ cay",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 35,
                "category_name": "Cơm cháy chà bông",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 36,
                "category_name": "Gạo lứt sấy giòn",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 41,
                "category_name": "test",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 42,
                "category_name": "test1",
                "special_tag": "Món được ưa thích",
                "list_product": []
            },
            {
                "category_id": 43,
                "category_name": "test2",
                "special_tag": "Món được ưa thích",
                "list_product": []
            }
        ],
        "meguu_fee": 25000
    },
    "message": "success"
}
*/

/**
 * @api {get} /api_customer/product/productList Danh sách tất cả product lọc theo category_id
 * @apiName getProductListByCategory
 * @apiGroup Product
 *
 * @apiParam {Number} using_at kiểu sử dụng(có thể không truyền 1:Đặt tại quầy, 2: Ship tận nơi)
 * @apiParam {Number} location_id id của location(có thể không truyền)
 * @apiParam {Number} delivery_address địa chỉ nhận hàng(có thể không truyền)
 * @apiParam {Number} category_id id của category(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": [
        {
            "category_id": 18,
            "category_name": "Espresso",
            "special_tag": "Món được ưa thích",
            "list_product": [
                {
                    "product_id": 19,
                    "product_name": "Espresso Đá",
                    "product_short_desc": "",
                    "product_description": "Espresso Đá",
                    "product_base_price": 45000,
                    "product_sale_price": 45000,
                    "product_image_thumbnail": "/uploads/products/19/avatar/espresso_master.jpg"
                },
                {
                    "product_id": 20,
                    "product_name": "Espresso Nóng",
                    "product_short_desc": "",
                    "product_description": "Espresso Nóng",
                    "product_base_price": 40000,
                    "product_sale_price": 40000,
                    "product_image_thumbnail": "/uploads/products/20/avatar/espresso_master.jpg"
                }
            ]
        }
    ],
    "message": "success"
}
*/


/**
 * @api {get} /api_customer/product/productDetail Chi tiết của 1 product
 * @apiName getProductDetail
 * @apiGroup Product
 *
 * @apiParam {Number} product_id id của product(required)
 *
 * @apiSuccessExample Success-Response: group_option_product_type là kiểu hiển thị: 1: single choice, 2: kiểu multi-choice, group_option_product_type_show: 1: slide, 2: tag, 3: checkbox
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "product_id": 7,
        "product_name": "Caramel Macchiato Đá",
        "product_short_desc": "",
        "product_description": "Caramel Macchiato Đá",
        "product_base_price": 50000,
        "product_sale_price": 50000,
        "product_image_thumbnail": "/uploads/products/7/avatar/caramel_macchiato.jpg",
        "cover_list": [
            "/uploads/products/7/images/caramel_macchiato.jpg"
        ],
        "group_option": [
            {
                "group_option_id": 1,
                "group_option_name": "Độ ngọt",
                "group_option_product_type": 2,
                "group_option_product_type_show": 3,
                "option_list": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 2,
                        "option_name": "ít"
                    },
                    {
                        "option_id": 3,
                        "option_name": "Không có"
                    },
                    {
                        "option_id": 7,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 8,
                        "option_name": "ít"
                    },
                    {
                        "option_id": 9,
                        "option_name": "Không có"
                    }
                ]
            },
            {
                "group_option_id": 2,
                "group_option_name": "Độ chua",
                "group_option_product_type": 1,
                "group_option_product_type_show": 1,
                "option_list": [
                    {
                        "option_id": 4,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 5,
                        "option_name": "ít"
                    },
                    {
                        "option_id": 6,
                        "option_name": "Không có"
                    },
                    {
                        "option_id": 10,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 11,
                        "option_name": "ít"
                    },
                    {
                        "option_id": 12,
                        "option_name": "Không có"
                    }
                ]
            }
        ],
        "size": [
            {
                "size_id": 1,
                "size_price": 50000,
                "size_name": "S moi",
                "weight_number": null
            },
            {
                "size_id": 2,
                "size_price": 50000,
                "size_name": "M",
                "weight_number": null
            },
            {
                "size_id": 3,
                "size_price": 50000,
                "size_name": "L",
                "weight_number": null
            }
        ],
        "product_topping": [
            {
                "topping_price": "10000",
                "topping_name": "Espresso (1shot)",
                "topping_id": 1
            }
        ],
        "product_tags": []
    },
    "message": "Detail success"
}
*/

/**
 * @api {post} /api_customer/product/addProduct Thêm sản phẩm vào giỏ hàng
 * @apiName postProductAdd
 * @apiGroup Product
 *
 * @apiParam {Number} product_id id của product(required)
 * @apiParam {Number} product_quantity số lượng của product(required)
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} size_id id của size_id khi chọn product(required)
 * @apiParam {String} option danh sách option lựa chọn của product(là list các id của option khi chọn product và cách nhau bởi dấu ','. Ví dụ: "1,2,3" hoặc "1", nếu không có thì để empty)
 * @apiParam {String} topping danh sách topping của product(Tương tự option)
 * @apiParam {String} product_comment comment của product(required)
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
    "size": {
        "size_id": 2,
        "size_price": 50000,
        "size_name": "M",
        "weight_number": null
    },
    "product_id": "7",
    "product_quantity": "2",
    "product_price": "50000",
    "group_option": [
        {
            "option_id": 1,
            "option_name": "Nhiều"
        },
        {
            "option_id": 4,
            "option_name": "Nhiều"
        }
    ]
},
"message": "Detail success"
}
 */

/**
 * @api {get} /api_customer/friend/friendList Danh sách bạn bè
 * @apiName getCustomerFriend
 * @apiGroup Customer
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": [
        {
            "friend_id": 1,
            "friend_name": "cavoisatthu",
            "friend_phone": "0912957368",
            "avatar": ""
        },
        {
            "friend_id": 2,
            "friend_name": "gau me vi dai",
            "friend_phone": "0943174218",
            "avatar": ""
        },
        {
            "friend_id": 3,
            "friend_name": "lon to da man",
            "friend_phone": "0912190812",
            "avatar": ""
        }
    ],
    "message": "Success"
}
 */

/**
 * @api {post} /api_customer/product/cart/list_product Danh sách product trong giỏ hàng
 * @apiName postCartListProduct
 * @apiGroup Product
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 *
 * @apiSuccessExample Success-Response: product_size_price: gía tiền của sản phẩm theo size, product_base_price: giá cơ bả của 1 sản phẩm để hiển thị ra ngoài, product_size_price: giá bán của 1 sản phẩm hiển thị ra ngoài
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "list_product": [
            {
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "50000",
                "order_product_id": 1,
                "product_cancel": 0,
                "product_quantity": "1",
                "size": {
                    "size_id": 2,
                    "size_name": "M"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 4,
                        "option_name": "Nhiều"
                    }
                ]
            },
            {
                "product_id": 8,
                "product_name": "Caramel Macchiato Nóng",
                "product_short_desc": "",
                "product_description": "Caramel Macchiato Nóng",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "50000",
                "order_product_id": 2,
                "product_cancel": 0,
                "product_quantity": "1",
                "size": {
                    "size_id": 2,
                    "size_name": "M"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": []
            },
            {
                "product_id": 9,
                "product_name": "Cà phê sữa Đá",
                "product_short_desc": "",
                "product_description": "Cà phê sữa Đá",
                "product_base_price": 29000,
                "product_sale_price": 29000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "20000",
                "order_product_id": 4,
                "product_cancel": 1,
                "product_quantity": "1",
                "size": {
                    "size_id": 3,
                    "size_name": "L"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": []
            }
        ],
        "total_price": 120000
    },
    "message": "Detail success"
}
 */

/**
 * @api {post} /api_customer/product/cart/edit_product Edit 1 product trong giỏ hàng
 * @apiName postCartEditProduct
 * @apiGroup Product
 *
 * @apiParam {Number} order_product_id  lấy được khi add product hoặc từ danh sách sp trong giỏ(required)
 * @apiParam {String} product_id id của product(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "product_id": 7,
        "product_name": "Caramel Macchiato Đá",
        "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
        "product_description": "Caramel Macchiato Đá",
        "product_base_price": 50000,
        "product_sale_price": 50000,
        "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
        "product_using_at": 3,
        "order_product_id": 110,
        "cover_list": [
            "http://localhost:8000/uploads/products/7/images/caramel_macchiato.jpg",
            "https://www.youtube.com/watch?v=K_XmTiNojMg"
        ],
        "product_tags": [],
        "product_quantity": "1",
        "size": [
            {
                "size_id": 1,
                "size_name": "S moi",
                "size_price": 50000,
                "active": false
            },
            {
                "size_id": 2,
                "size_name": "M",
                "size_price": 50000,
                "active": true
            },
            {
                "size_id": 3,
                "size_name": "L",
                "size_price": 50000,
                "active": false
            }
        ],
        "product_topping": [
            {
                "topping_id": 1,
                "topping_name": "Espresso (1shot)",
                "topping_price": "10000",
                "active": true
            }
        ],
        "group_option": [
            {
                "group_option_id": 1,
                "group_option_name": "Độ ngọt",
                "group_option_product_type": 1,
                "group_option_product_type_show": 2,
                "option_list": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều",
                        "active": true
                    },
                    {
                        "option_id": 2,
                        "option_name": "ít",
                        "active": false
                    },
                    {
                        "option_id": 3,
                        "option_name": "Không có",
                        "active": false
                    },
                    {
                        "option_id": 4,
                        "option_name": "Nhiều",
                        "active": true
                    },
                    {
                        "option_id": 5,
                        "option_name": "ít",
                        "active": false
                    },
                    {
                        "option_id": 6,
                        "option_name": "Không có",
                        "active": false
                    }
                ]
            },
            {
                "group_option_id": 2,
                "group_option_name": "Độ chua",
                "group_option_product_type": 2,
                "group_option_product_type_show": 3,
                "option_list": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều",
                        "active": true
                    },
                    {
                        "option_id": 2,
                        "option_name": "ít",
                        "active": false
                    },
                    {
                        "option_id": 3,
                        "option_name": "Không có",
                        "active": false
                    },
                    {
                        "option_id": 4,
                        "option_name": "Nhiều",
                        "active": true
                    },
                    {
                        "option_id": 5,
                        "option_name": "ít",
                        "active": false
                    },
                    {
                        "option_id": 6,
                        "option_name": "Không có",
                        "active": false
                    }
                ]
            }
        ],
        "product_comment": "comment cho product 7"
    },
    "message": "Detail success"
}
 */

/**
 * @api {post} /api_customer/product/cart/update_product Update thông tin thay đổi product trong giỏ hàng
 * @apiName postProductCartUpdateProduct
 * @apiGroup Product
 *
 * @apiParam {Number} order_product_id lấy được khi add product hoặc từ danh sách sp trong giỏ(required)
 * @apiParam {Number} product_id id của product(required)
 * @apiParam {Number} product_quantity số lượng của product(required)
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} size_id id của size_id khi chọn product(required)
 * @apiParam {String} option danh sách option lựa chọn của product(là list các id của option khi chọn product và cách nhau bởi dấu ','. Ví dụ: "1,2,3" hoặc "1", nếu không có thì để empty)
 * @apiParam {String} topping danh sách topping của product(Tương tự option)
 * @apiParam {String} product_comment comment của product(required)
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "size": {
            "size_id": 1,
            "size_price": 50000,
            "size_name": "S moi",
            "weight_number": null
        },
        "product_id": "7",
        "product_quantity": "1",
        "product_price": "50000",
        "group_option": [
            {
                "option_id": 1,
                "option_name": "Nhiều"
            }
        ],
        "order_product_id": 115
    },
    "message": "Detail success"
}
 */

/**
 * @api {post} /api_customer/product/cart/change_using_at Thay đổi hình thức sử dụng(using_at)
 * @apiName postProductCartChangeUsingAt
 * @apiGroup Cart
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} using_at hình thức sử dụng:1(tại quầy), 2(ship tận nơi)(required)
 * @apiParam {String} list_product_id danh sách product_id có trong giỏ hàng(Ví dụ: "1,2,3" hoặc "1", nếu không có thì để empty)
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": [
        {
            "product_id": 7,
            "product_can_change": true
        },
        {
            "product_id": 8,
            "product_can_change": true
        },
        {
            "product_id": 9,
            "product_can_change": false
        },
        {
            "product_id": 10,
            "product_can_change": true
        }
    ],
    "message": "Detail success"
}
 */

/**
 * @api {post} /api_customer/product/cart/update_product Xóa sản phẩm khỏi giở hàng hoàn toàn
 * @apiName postProductCartUpdateProductRemove
 * @apiGroup Cart
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} order_product_id lấy được khi add product hoặc từ danh sách sp trong giỏ(required)
 * @apiParam {Number} product_delete required and value is 1
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "list_product": [
            {
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "50000",
                "order_product_id": 1,
                "product_cancel": 0,
                "product_quantity": "1",
                "size": {
                    "size_id": 2,
                    "size_name": "M"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 4,
                        "option_name": "Nhiều"
                    }
                ]
            },
            {
                "product_id": 8,
                "product_name": "Caramel Macchiato Nóng",
                "product_short_desc": "",
                "product_description": "Caramel Macchiato Nóng",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "50000",
                "order_product_id": 2,
                "product_cancel": 0,
                "product_quantity": "1",
                "size": {
                    "size_id": 2,
                    "size_name": "M"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": []
            },
            {
                "product_id": 9,
                "product_name": "Cà phê sữa Đá",
                "product_short_desc": "",
                "product_description": "Cà phê sữa Đá",
                "product_base_price": 29000,
                "product_sale_price": 29000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "20000",
                "order_product_id": 4,
                "product_cancel": 1,
                "product_quantity": "1",
                "size": {
                    "size_id": 3,
                    "size_name": "L"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": []
            }
        ],
        "total_price": 120000
    },
    "message": "Detail success"
}
 */

/**
 * @api {post} /api_customer/product/cart/cancel Không thanh toán sản phẩm trong giỏ hàng nhưng vẫn giữ sản phẩm lại trong giỏ
 * @apiName postProductCartCancel
 * @apiGroup Cart
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} order_product_id lấy được khi add product hoặc từ danh sách sp trong giỏ(required)
 * @apiParam {Number} product_id id của product
 * @apiParam {Number} cancel_product giá trị thanh toán hay hủy thanh toán(0:vẫn giữ sản phẩm, 1: hủy thanh toán sản phẩm)
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "list_product": [
            {
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "50000",
                "order_product_id": 1,
                "product_cancel": 1,
                "product_quantity": "1",
                "size": {
                    "size_id": 2,
                    "size_name": "M"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều"
                    },
                    {
                        "option_id": 4,
                        "option_name": "Nhiều"
                    }
                ]
            },
            {
                "product_id": 8,
                "product_name": "Caramel Macchiato Nóng",
                "product_short_desc": "",
                "product_description": "Caramel Macchiato Nóng",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "50000",
                "order_product_id": 2,
                "product_cancel": 0,
                "product_quantity": "1",
                "size": {
                    "size_id": 2,
                    "size_name": "M"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": []
            },
            {
                "product_id": 9,
                "product_name": "Cà phê sữa Đá",
                "product_short_desc": "",
                "product_description": "Cà phê sữa Đá",
                "product_base_price": 29000,
                "product_sale_price": 29000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "product_size_price": "20000",
                "order_product_id": 4,
                "product_cancel": 1,
                "product_quantity": "1",
                "size": {
                    "size_id": 3,
                    "size_name": "L"
                },
                "topping": [
                    {
                        "topping_id": 1,
                        "topping_name": "Espresso (1shot)",
                        "topping_price": 10000
                    }
                ],
                "option": []
            }
        ],
        "total_price": 60000
    },
    "message": "Detail success"
}
 */

/**
 * @api {get} /api_customer/voucher/list Danh sách các voucher
 * @apiName getVoucherList
 * @apiGroup Voucher
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 *
 * @apiSuccessExample Success-Response: voucher_is_use:voucher có thể được sử dụng hay ko(0: hết hạn-không được sử dụng, 1: được sử dụng-áp dụng) voucher_status: voucher đã dùng hay chưa dùng bao giờ(0: chưa dùng bao giờ, 1: đã được áp dụng ít nhất 1 lần rồi)
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": [
        {
            "voucher_id": 1,
            "voucher_name": "voucher test",
            "voucher_start_time": "2020-07-01",
            "voucher_end_time": "2021-07-01",
            "voucher_money_promotion": "0",
            "voucher_percent_promotion": 10,
            "voucher_quantity": 999,
            "voucher_code": "MEGUU1",
            "voucher_is_use": 1
        },
        {
            "voucher_id": 2,
            "voucher_name": "voucher test hết hạn",
            "voucher_start_time": "2020-07-01 15:00:00",
            "voucher_end_time": "2020-07-02 16:00:00",
            "voucher_money_promotion": "0",
            "voucher_percent_promotion": 10,
            "voucher_quantity": 1000,
            "voucher_code": "MEGUU_EXPIRED",
            "voucher_is_use": 0
        }
    ],
    "message": "success"
}
 */

/**
 * @api {get} /api_customer/voucher/detail Chi tiết 1 voucher
 * @apiName getVoucherDetail
 * @apiGroup Voucher
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} voucher_id id của voucher(required)
 *
 * @apiSuccessExample Success-Response: voucher_status(1: Đã được sử dụng, 0: Chưa được sử dụng)
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "voucher_id": 1,
        "voucher_name": "voucher test",
        "voucher_start_time": "2020-07-01",
        "voucher_end_time": "2021-07-01",
        "voucher_money_promotion": "0",
        "voucher_percent_promotion": 10,
        "voucher_quantity": 1000,
        "voucher_code": "MEGUU1",
        "voucher_status": 1
    },
    "message": "success"
}
 */

/**
 * @api {post} /api_customer/voucher/check_code Kiểm tra voucher_code
 * @apiName getVoucherCheckCode
 * @apiGroup Voucher
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} voucher_code code của voucher(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "voucher_id": 1,
        "voucher_name": "voucher test",
        "voucher_start_time": "2020-07-01",
        "voucher_end_time": "2021-07-01",
        "voucher_money_promotion": "0",
        "voucher_percent_promotion": 10,
        "voucher_quantity": 1000,
        "voucher_code": "MEGUU1",
        "voucher_status": 1
    },
    "message": "success"
}
 */

/**
 * @api {post} /api_customer/voucher/apply_code Áp dụng voucher
 * @apiName getVoucherApplyCode
 * @apiGroup Voucher
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} voucher_code code của voucher(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "voucher_id": 1,
        "voucher_name": "voucher test",
        "voucher_start_time": "2020-07-01",
        "voucher_end_time": "2021-07-01",
        "voucher_money_promotion": "0",
        "voucher_percent_promotion": 10,
        "voucher_quantity": 999,
        "voucher_code": "MEGUU1",
        "voucher_status": 1
    },
    "message": "success"
}
 */


