<?php

/**
 * @api {get} /api_customer/product/productList Danh sách tất cả product chưa lọc theo category_id
 * @apiName getProductList
 * @apiGroup Product
 *
 * @apiParam {Number} using_at kiểu sử dụng(có thể không truyền. 1:Đặt tại quầy, 2: Ship tận nơi)
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 *
 * @apiSuccessExample Success-Response: product_using_at: 1: Lấy đồ tại quầy, 2: Ship tận nơi, meguu_fee:phí ship của shop meguu: 0(nếu lấy đồ tại quầy), 25000(ví dụ là cho ship tận nơi),
 customer_option_chosse: phương thức sử dụng cho từng trường hợp product_using_at = 1 hoặc 2 
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
                        "product_id": 3,
                        "product_name": "Matcha phú quý",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 3",
                        "product_description": "Món matcha đủ vị",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/3/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 4,
                        "product_name": "Cold brew Cam sả",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 4",
                        "product_description": "Cold brew Cam sả",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/4/avatar/cold_brew_cam_sa.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 5,
                        "product_name": "Cold brew Phúc bồn tử",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 5",
                        "product_description": "Cold brew Phúc bồn tử",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/5/avatar/coldbrew_phuc_bon_tu.png",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 6,
                        "product_name": "Cold brew Sữa tươi",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 6",
                        "product_description": "Cold brew Sữa tươi",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/6/avatar/coldbrew_milk.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 7,
                        "product_name": "Caramel Macchiato Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                        "product_description": "Caramel Macchiato Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 8,
                        "product_name": "Caramel Macchiato Nóng",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 8",
                        "product_description": "Caramel Macchiato Nóng",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 9,
                        "product_name": "Cà phê sữa Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 9",
                        "product_description": "Cà phê sữa Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 10,
                        "product_name": "Cà phê sữa Nóng",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 10",
                        "product_description": "Cà phê sữa Nóng",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/10/avatar/caramel_macchiato.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 11,
                        "product_name": "Americano Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 11",
                        "product_description": "Americano Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/11/avatar/caramel_macchiato.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 14,
                        "product_name": "Cappucino Nóng",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 14",
                        "product_description": "Cappucino Nóng",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/14/avatar/cappuccino_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 15,
                        "product_name": "Latte Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 15",
                        "product_description": "Latte Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/15/avatar/latte_nong.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 17,
                        "product_name": "Mocha Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 17",
                        "product_description": "Mocha Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/17/avatar/mocha_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 19,
                        "product_name": "Espresso Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 19",
                        "product_description": "Espresso Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 20,
                        "product_name": "Espresso Nóng",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 20",
                        "product_description": "Espresso Nóng",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 23,
                        "product_name": "Chocolate đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 23",
                        "product_description": "Chocolate đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/23/avatar/chocolate_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 24,
                        "product_name": "Phúc bồn tử cam đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 24",
                        "product_description": "Phúc bồn tử cam đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/24/avatar/chocolate_ice_blended_master.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 25,
                        "product_name": "Matcha đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 25",
                        "product_description": "Matcha đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/25/avatar/matcha_ice_blended_master.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 26,
                        "product_name": "Cookies đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 26",
                        "product_description": "Cookies đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/26/avatar/cookies-da-xay.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 27,
                        "product_name": "Chanh sả đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 27",
                        "product_description": "Chanh sả đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/27/avatar/cookies-da-xay.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 28,
                        "product_name": "Cam đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 28",
                        "product_description": "Cam đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/28/avatar/cookies-da-xay.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 29,
                        "product_name": "Ổi hồng việt quất đá xay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 29",
                        "product_description": "Ổi hồng việt quất đá xay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/29/avatar/cookies-da-xay.jpg",
                        "product_using_at": 3
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
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 30",
                        "product_description": "Đậu phộng tỏi ớt",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/30/avatar/dau_phong_toi_ot.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 32,
                        "product_name": "Da Cá Sấy Giòn Vị Trứng Muối",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 32",
                        "product_description": "Da Cá Sấy Giòn Vị Trứng Muối",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/32/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 35,
                        "product_name": "Hạt sen sấy",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 35",
                        "product_description": "Hạt sen sấy",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/35/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 36,
                        "product_name": "Khô gà bơ cay",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 36",
                        "product_description": "Khô gà bơ cay",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/36/avatar/banh_mi_que.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 37,
                        "product_name": "Cơm cháy chà bông",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 37",
                        "product_description": "Cơm cháy chà bông",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/37/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    },
                    {
                        "product_id": 38,
                        "product_name": "Gạo lứt sấy giòn",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 38",
                        "product_description": "Gạo lứt sấy giòn",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/38/avatar/banh_mi_que.jpg",
                        "product_using_at": 1
                    }
                ]
            }
        ],
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
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
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 * @apiParam {Number} category_id id của category(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "data_detail": [
            {
                "category_id": 18,
                "category_name": "Espresso",
                "special_tag": "Món được ưa thích",
                "list_product": [
                    {
                        "product_id": 19,
                        "product_name": "Espresso Đá",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 19",
                        "product_description": "Espresso Đá",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg",
                        "product_using_at": 3
                    },
                    {
                        "product_id": 20,
                        "product_name": "Espresso Nóng",
                        "product_short_desc": "Giới thiệu ngắn sản phẩm số 20",
                        "product_description": "Espresso Nóng",
                        "product_base_price": "10000",
                        "product_sale_price": "10000",
                        "product_image_thumbnail": "http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg",
                        "product_using_at": 1
                    }
                ]
            }
        ],
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
    },
    "message": "success"
}
*/


/**
 * @api {get} /api_customer/product/productDetail Chi tiết của 1 product
 * @apiName getProductDetail
 * @apiGroup Product
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 * @apiParam {Number} product_id id của product(required)
 *
 * @apiSuccessExample Success-Response: group_option_product_type là kiểu hiển thị: 1: single choice, 2: kiểu multi-choice, group_option_product_type_show: 1: slide, 2: tag, 3: checkbox,
 product_base_price: giá bán sản phẩm trước khuyến mãi, product_sale_price: giá bán sản phẩm sau khuyến mãi, weight_number: thứ tự sắp xếp size(Ví dụ: S-M-L tương ứng 1-2-3)

 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "data_detail": {
            "product_id": 7,
            "product_name": "Caramel Macchiato Đá",
            "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
            "product_description": "Caramel Macchiato Đá",
            "product_base_price": "10000",
            "product_sale_price": "10000",
            "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
            "product_using_at": 1,
            "cover_list": [
                "http://localhost:8000/uploads/products/7/images/caramel_macchiato.jpg",
                "https://www.youtube.com/watch?v=K_XmTiNojMg"
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
                            "option_name": "Nhiều đường"
                        },
                        {
                            "option_id": 2,
                            "option_name": "ít đường"
                        },
                        {
                            "option_id": 3,
                            "option_name": "Không có đường"
                        }
                    ]
                },
                {
                    "group_option_id": 2,
                    "group_option_name": "Độ chua",
                    "group_option_product_type": 1,
                    "group_option_product_type_show": 3,
                    "option_list": [
                        {
                            "option_id": 4,
                            "option_name": "Chua nhiều"
                        },
                        {
                            "option_id": 5,
                            "option_name": "chua ít"
                        },
                        {
                            "option_id": 6,
                            "option_name": "Không chua"
                        }
                    ]
                }
            ],
            "size": [
                {
                    "size_id": 1,
                    "size_price": 10000,
                    "size_name": "S moi",
                    "weight_number": 1,
                    "product_base_price": "10000",
                    "product_sale_price": "10000"
                },
                {
                    "size_id": 2,
                    "size_price": 20000,
                    "size_name": "M",
                    "weight_number": 2,
                    "product_base_price": "20000",
                    "product_sale_price": "20000"
                },
                {
                    "size_id": 3,
                    "size_price": 30000,
                    "size_name": "L",
                    "weight_number": 3,
                    "product_base_price": "30000",
                    "product_sale_price": "30000"
                }
            ],
            "product_topping": [
                {
                    "topping_price": "10000",
                    "topping_name": "Espresso (1shot)",
                    "topping_id": 1
                },
                {
                    "topping_price": "10000",
                    "topping_name": "Sauce Chocolate",
                    "topping_id": 2
                },
                {
                    "topping_price": "10000",
                    "topping_name": "Trân châu trắng",
                    "topping_id": 3
                },
                {
                    "topping_price": "10000",
                    "topping_name": "Trân châu đen",
                    "topping_id": 4
                },
                {
                    "topping_price": "10000",
                    "topping_name": "Đào ngâm",
                    "topping_id": 5
                },
                {
                    "topping_price": "10000",
                    "topping_name": "Vải ngâm",
                    "topping_id": 6
                },
                {
                    "topping_price": "20000",
                    "topping_name": "Espresso (3shot)",
                    "topping_id": 7
                },
                {
                    "topping_price": "5000",
                    "topping_name": "Chan trau",
                    "topping_id": 8
                },
                {
                    "topping_price": "10000",
                    "topping_name": "Espresso (1shot)",
                    "topping_id": 1
                }
            ],
            "product_tags": []
        },
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
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
        "data_detail": {
            "size": {
                "size_id": 3,
                "size_price": 30000,
                "size_name": "L",
                "weight_number": 3,
                "product_base_price": "30000",
                "product_sale_price": "30000"
            },
            "product_id": "7",
            "product_quantity": "2",
            "product_base_price": "30000",
            "product_sale_price": "30000",
            "group_option": [
                {
                    "option_id": 1,
                    "option_name": "Nhiều đường"
                }
            ],
            "order_product_id": 1
        },
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
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
        "data_detail": {
            "list_product": [
                {
                    "product_id": 7,
                    "product_name": "Caramel Macchiato Đá",
                    "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                    "product_description": "Caramel Macchiato Đá",
                    "product_base_price": "30000",
                    "product_sale_price": "30000",
                    "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                    "product_using_at": 1,
                    "product_size_price": "30000",
                    "order_product_id": 1,
                    "product_cancel": 0,
                    "product_quantity": "2",
                    "size": {
                        "size_id": 3,
                        "size_name": "L"
                    },
                    "topping": [
                        {
                            "topping_id": 1,
                            "topping_name": "Espresso (1shot)",
                            "topping_price": 10000
                        },
                        {
                            "topping_id": 2,
                            "topping_name": "Sauce Chocolate",
                            "topping_price": 10000
                        }
                    ],
                    "option": [
                        {
                            "option_id": 1,
                            "option_name": "Nhiều đường"
                        }
                    ]
                }
            ],
            "total_price": 100000,
            "total_price_base": 0
        },
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
    },
    "message": "Detail success"
}
 */

/**
 * @api {post} /api_customer/product/cart/edit_product Edit 1 product trong giỏ hàng
 * @apiName postCartEditProduct
 * @apiGroup Product
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 * @apiParam {Number} order_product_id  lấy được khi add product hoặc từ danh sách sp trong giỏ(required)
 * @apiParam {String} product_id id của product(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "data_detail": {
            "product_id": 8,
            "product_name": "Caramel Macchiato Nóng",
            "product_short_desc": "Giới thiệu ngắn sản phẩm số 8",
            "product_description": "Caramel Macchiato Nóng",
            "product_base_price": "10000",
            "product_sale_price": "10000",
            "product_image_thumbnail": "http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg",
            "product_using_at": 3,
            "order_product_id": 2,
            "cover_list": [
                "http://localhost:8000/uploads/products/8/images/caramel_macchiato.jpg",
                "https://www.youtube.com/watch?v=K_XmTiNojMg"
            ],
            "product_tags": [],
            "product_quantity": "2",
            "size": [
                {
                    "size_id": 1,
                    "size_name": "S moi",
                    "size_price": 10000,
                    "size_weight_number": 1,
                    "active": true
                },
                {
                    "size_id": 2,
                    "size_name": "M",
                    "size_price": 20000,
                    "size_weight_number": 2,
                    "active": false
                },
                {
                    "size_id": 3,
                    "size_name": "L",
                    "size_price": 30000,
                    "size_weight_number": 3,
                    "active": false
                }
            ],
            "product_topping": [
                {
                    "topping_id": 1,
                    "topping_name": "Espresso (1shot)",
                    "topping_price": "10000",
                    "active": true
                },
                {
                    "topping_id": 2,
                    "topping_name": "Sauce Chocolate",
                    "topping_price": "10000",
                    "active": true
                },
                {
                    "topping_id": 3,
                    "topping_name": "Trân châu trắng",
                    "topping_price": "10000",
                    "active": false
                },
                {
                    "topping_id": 4,
                    "topping_name": "Trân châu đen",
                    "topping_price": "10000",
                    "active": false
                },
                {
                    "topping_id": 5,
                    "topping_name": "Đào ngâm",
                    "topping_price": "10000",
                    "active": false
                },
                {
                    "topping_id": 6,
                    "topping_name": "Vải ngâm",
                    "topping_price": "10000",
                    "active": false
                },
                {
                    "topping_id": 7,
                    "topping_name": "Espresso (3shot)",
                    "topping_price": "20000",
                    "active": false
                },
                {
                    "topping_id": 8,
                    "topping_name": "Chan trau",
                    "topping_price": "5000",
                    "active": false
                },
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
                    "group_option_product_type_show": 1,
                    "option_list": [
                        {
                            "option_id": 1,
                            "option_name": "Nhiều đường",
                            "active": true
                        },
                        {
                            "option_id": 2,
                            "option_name": "ít đường",
                            "active": false
                        },
                        {
                            "option_id": 3,
                            "option_name": "Không có đường",
                            "active": false
                        },
                        {
                            "option_id": 4,
                            "option_name": "Chua nhiều",
                            "active": false
                        },
                        {
                            "option_id": 5,
                            "option_name": "chua ít",
                            "active": false
                        },
                        {
                            "option_id": 6,
                            "option_name": "Không chua",
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
                            "option_name": "Nhiều đường",
                            "active": true
                        },
                        {
                            "option_id": 2,
                            "option_name": "ít đường",
                            "active": false
                        },
                        {
                            "option_id": 3,
                            "option_name": "Không có đường",
                            "active": false
                        },
                        {
                            "option_id": 4,
                            "option_name": "Chua nhiều",
                            "active": false
                        },
                        {
                            "option_id": 5,
                            "option_name": "chua ít",
                            "active": false
                        },
                        {
                            "option_id": 6,
                            "option_name": "Không chua",
                            "active": false
                        }
                    ]
                }
            ],
            "product_comment": "comment cho product 8"
        },
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
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
        "data_detail": {
            "size": {
                "size_id": 1,
                "size_price": 10000,
                "size_name": "S moi",
                "weight_number": 1,
                "product_base_price": "10000",
                "product_sale_price": "10000"
            },
            "product_id": "8",
            "product_quantity": "1",
            "product_base_price": "10000",
            "product_sale_price": "10000",
            "group_option": [
                {
                    "option_id": 1,
                    "option_name": "Nhiều đường"
                }
            ],
            "order_product_id": 3
        },
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
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
 * @apiParam {Number} product_id id của product(required)
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
 * @api {post} /api_customer/product/cart/update_product update số lượng sản phẩm
 * @apiName postProductCartUpdateProductQuantity
 * @apiGroup Cart
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {Number} customer_token token của customer(required)
 * @apiParam {Number} order_product_id lấy được khi add product hoặc từ danh sách sp trong giỏ(required)
 * @apiParam {Number} product_id id của product(required)
 * @apiParam {Number} product_update required and value is 1
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "data_detail": {
            "size": {
                "size_id": 1,
                "size_price": 10000,
                "size_name": "S moi",
                "weight_number": 1,
                "product_base_price": "10000",
                "product_sale_price": "10000"
            },
            "product_id": "8",
            "product_quantity": "3",
            "product_base_price": "10000",
            "product_sale_price": "10000",
            "group_option": [
                {
                    "option_id": 1,
                    "option_name": "Nhiều đường"
                }
            ],
            "order_product_id": 4
        },
        "meguu_fee": 0,
        "customer_action": [
            {
                "using_at": 1,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 1,
                        "customer_option_chosse_name": "Tại quán",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 2,
                        "customer_option_chosse_name": "Mang đi",
                        "active": 0
                    }
                ]
            },
            {
                "using_at": 2,
                "customer_option_chosse": [
                    {
                        "customer_option_chosse_id": 3,
                        "customer_option_chosse_name": "Tôi dùng",
                        "active": 1
                    },
                    {
                        "customer_option_chosse_id": 4,
                        "customer_option_chosse_name": "Mua tặng",
                        "active": 0
                    }
                ]
            }
        ]
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
 * @api {post} /api_customer/product/cart/finish Thanh toán đơn hàng
 * @apiName postProductCartFinish
 * @apiGroup Cart
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 * @apiParam {String} voucher_code mã voucher có thể empty(required)
 * @apiParam {Number} customer_friend_id id của customer_friend có thể empty(required)
 * @apiParam {String} address Tên địa chỉ có thể empty(required)
 * @apiParam {String} location_lat latitude có thể empty(required)
 * @apiParam {String} location_long longitude có thể empty(required)
 * @apiParam {Number} customer_option_chosse_id id lựa chọn khách hàng(required. Ví dụ:1: Tại quán, 2: Mang đi, 3: Tôi dùng, 4: Mua tặng)
 * @apiParam {Number} using_at hình thức sử dụng:1(tại quầy), 2(ship tận nơi)(required)
 * @apiParam {String} order_comment Comment thêm cho order có thể empty(required)
 
 *
 * @apiSuccessExample Success-Response: 
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "order_code": "1zJTw8pvo0N"
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
 * @apiParam {Number} total_product_price  Tổng tiền đơn hàng trước khi áp dụng voucher(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "total_product_price": 100000,
        "amount_after_promotion": 80000,
    },
    "message": "success"
}
 */

/**
 * @api {post} /api_customer/register Xác thực mã code và đăng ký user mới
 * @apiName postCustomerRegister
 * @apiGroup Customer
 *
 * @apiParam {String} customer_phone phone của customer(required)
 * @apiParam {String} customer_code code mà customer nhập(required)
 * @apiParam {String} verify_id verificationId của app nhận được khi gọi đến firebase(required)
 * @apiParam {String} device_id device_id của thiết bị(required)
 * @apiParam {String} device_token device_token của thiết bị(required)
 * @apiParam {Number} os Hệ điều hành của thiết bị(required. Default: 1: IOS, 2: ANDROID, 3: Hệ điều hành khác)
 *
 * @apiSuccessExample Success-Response: is_login: 0 là chưa login và chưa có tài khoản, 1: đã có tài khoản nhưng chưa update thông tin, 2: có tài khoản và đã update thông tin
 * HTTP/1.1 200 OK
    {
        "success": true,
        "response_code": 1000,
        "data": {
        "customer_id": 123,
        "customer_token": 'AIzaSyAaoRvXXCxKIJzjseA0GbEC58bckEtKLxE',
        "is_login": 0,
        },
        "message": "success"
    }
 */

/**
 * @api {post} /api_customer/update_profile Update thông tin user
 * @apiName postCustomerUpdateProfile
 * @apiGroup Customer
 *
 * @apiParam {Number} customer_id id của customer(required)
 * @apiParam {String} customer_token token của customer(required)
 * @apiParam {Number} sex giới tính của customer(required. Chi tiết: 0:nam, 1:nữ, 2: khác)
 * @apiParam {Number} birthday  Ngày tháng năm sinh của customer(required. Format: yyyy/mm/dd)
 * @apiParam {Number} height chiều cao của customer(required)
 * @apiParam {Number} weight cân nặng của customer(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
    {
        "success": true,
        "response_code": 1000,
        "data": {
        "customer_id": 123,
        "customer_token": 'AIzaSyAaoRvXXCxKIJzjseA0GbEC58bckEtKLxE',
        },
        "message": "success"
    }
 */

/**
 * @api {post} /api_hocmai/app/info Lấy thông tin app
 * @apiName postApiHocmaiAppInfo
 * @apiGroup Hocmai
 *
 * @apiParam {String} app_version version của app(required)
 * @apiParam {String} app_id id của app(required. Ví dụ: .com, .hocmai.vn, ....)
 * @apiParam {String} app_os Hệ điều hành của app(required. IOS:1, ANDROID:2, Khác:3)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
"app_id": "100",
"app_version": "1.0.0",
"hocmai_app_id": 1
},
"message": "success"
}
 */

/**
 * @api {post} /api_hocmai/user/info Lấy thông tin user
 * @apiName postApiHocmaiUserInfo
 * @apiGroup Hocmai
 *
 * @apiParam {Number} hocmai_user_id user_id của hocmai(required)
 * @apiParam {Number} city_id id của thành phố mà user đăng ký(required)
 * @apiParam {Number} district_id id của quận mà user đăng ký(required)
 * @apiParam {Number} class_id id của lớp mà user đăng ký(required)
 * @apiParam {String} phone sdt mà user dùng(required)
 * @apiParam {String} birthday ngày sinh của user(required. Định dạng: y/m/d. ví dụ: 2000/02/22)
 * @apiParam {String} register_time Ngày tháng năm đăng ký tài khoản của user(required. Định dạng: y/m/d. ví dụ: 2000/02/22)
 * @apiParam {String} app_version version của app(required)
 * @apiParam {String} app_id id của app(required. Ví dụ: .com, .hocmai.vn, ....)
 * @apiParam {String} user_name username của user
 * @apiParam {String} app_os Hệ điều hành của app(required. IOS:1, ANDROID:2, Khác:3)
 * @apiParam {String} device_token Token của device(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
"hocmai_user_id": "1",
"user_id": 1
},
"message": "success"
}
 */

/**
 * @api {post} /api_hocmai/course/list Lấy danh sách khóa học của 1 học sinh
 * @apiName postApiHocmaiCourseList
 * @apiGroup Hocmai
 *
 * @apiParam {Number} hocmai_user_id user_id của hocmai(required)
 * @apiParam {String} course_list_id danh sách id của khóa học(required. Format: 1,2,3,4)
 * @apiParam {String} course_list_name danh sách tên của khóa học tương ứng với course_list_id(required. Format: 'kh1','kh2','kh3','kh4')
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
"user_id": 1,
"hocmai_user_id": "1",
"total_course": 3
},
"message": "success"
}
 */

/**
 * @api {post} /api_hocmai/course/detail Chi tiết 1 khóa học của 1 học sinh
 * @apiName postApiHocmaiCourseDetail
 * @apiGroup Hocmai
 *
 * @apiParam {Number} hocmai_user_id user_id của hocmai(required)
 * @apiParam {Number} hocmai_course_id id của khóa học(required)
 * @apiParam {String} lesson_list_id danh sách id của bài giảng(required. Format: 1,2,3,4)
 * @apiParam {String} lesson_list_name danh sách tên của bài giảng tương ứng với lesson_list_id(required. Format: 'lesson1','lesson2','lesson3','lesson4')
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
"user_id": 1,
"hocmai_user_id": "1",
"course_id": 2
},
"message": "success"
}
 */

/**
 * @api {post} /api_hocmai/lesson/detail Chi tiết 1 bài giảng
 * @apiName postApiHocmaiLessonDetail
 * @apiGroup Hocmai
 *
 * @apiParam {Number} hocmai_user_id user_id của hocmai(required)
 * @apiParam {Number} hocmai_lesson_id id của bài giảng(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
"user_id": 1,
"hocmai_user_id": "1",
"lesson_id": "12"
},
"message": "success"
}
 */

/**
 * @api {post} /api_hocmai/logout Logout khỏi app
 * @apiName postApiHocmaiLogout
 * @apiGroup Hocmai
 *
 * @apiParam {Number} hocmai_user_id user_id của hocmai(required)
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
"user_id": 1,
"hocmai_user_id": "1",
},
"message": "success"
}
 */

/**
 * @api {get} /api_hocmai_backend/filter/list Lấy danh sách bộ lọc filter kèm chi tiết từng bộ lọc
 * @apiName getBackendFilterList
 * @apiGroup HocmaiBackend
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
{
    "success": true,
    "response_code": 1000,
    "data": {
        "1": {
            "filter_id": 1,
            "filter_name": "First Session",
            "type_id": 3,
            "operator": [
                {
                    "id": 1,
                    "name": ">"
                },
                {
                    "id": 2,
                    "name": "<"
                }
            ]
        },
        "2": {
            "filter_id": 2,
            "filter_name": "Last Session",
            "type_id": 3,
            "operator": [
                {
                    "id": 1,
                    "name": ">"
                },
                {
                    "id": 2,
                    "name": "<"
                }
            ]
        },
        "8": {
            "filter_id": 1,
            "filter_name": "App version",
            "type_id": 1,
            "operator": [
                {
                    "id": 1,
                    "name": ">"
                },
                {
                    "id": 2,
                    "name": "<"
                },
                {
                    "id": 3,
                    "name": ">="
                },
                {
                    "id": 4,
                    "name": "<="
                },
                {
                    "id": 5,
                    "name": "="
                },
                {
                    "id": 6,
                    "name": "!="
                }
            ],
            "option": [
                {
                    "option_id": 1,
                    "option_name": "1.0.0"
                },
                {
                    "option_id": 2,
                    "option_name": "2.0.1"
                },
                {
                    "option_id": 3,
                    "option_name": "1.0.1"
                },
                {
                    "option_id": 4,
                    "option_name": "2.0.2"
                }
            ]
        }
    },
    "message": "success"
}
 */


/**
 * @api {post} /api_hocmai_backend/notify/create/step4 confirm và lấy thông tin số lượng device_tokens sẽ được gửi
 * @apiName postNotifyCreateStep4
 * @apiGroup HocmaiNotify
 * @apiParam {Number} notify_id id của notify(required)
 * @apiParam {Number} import nếu import file thì phải gửi lên và giá trị = 1
 * @apiParam {String} sound
 * @apiParam {String} ios_badge
 * @apiParam {Array} context ngữ cảnh dạng array(ví dụ: context = [action_type=>1])
 * @apiSuccessExample Success-Response: số lượng device_token sẽ được gửi đi
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
'number_device_tokens' => 10
},
"message": "success"
}
 */

/**
 * @api {post} /api_hocmai_backend/notify/create/step5 Gửi notify tới các device_token
 * @apiName postNotifyCreateStep5
 * @apiGroup HocmaiNotify
 * @apiParam {Number} notify_id id của notify(required)
 * @apiSuccessExample Success-Response: sent_error: số lượng token ko có notify_id(debug hệ thống), send_fail: số lượng token mà firebase ko gửi được, sent_success: số lượng token gửi ok
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": {
'number_device_tokens' => 10,
 'sent_error' => 1,
 'sent_fail' => 1,
 'sent_success' => 8,
},
"message": "success"
}
 */

/**
 * @api {post} /notify/save_not_send Save notify nhưng chưa gửi
 * @apiName postNotifySaveNotSend
 * @apiGroup HocmaiBackend
 * @apiParam {Number} notify_id id của notify(required)
 * @apiSuccessExample Success-Response: Danh sách
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": [
],
"message": "success"
}
 */

/**
 * @api {get} api_hocmai_backend/app/list Lấy danh sách app
 * @apiName getAppList
 * @apiGroup HocmaiBackend
 *
 * @apiSuccessExample Success-Response: Danh sách
 * HTTP/1.1 200 OK
{
"success": true,
"response_code": 1000,
"data": [
{
"app_id": 1,
"app_name": "vn.hocmai.appuser",
"app_os": null
},
{
"app_id": 2,
"app_name": "com.hocmai",
"app_os": null
}
],
"message": "success"
}
 */

/**
 * @api {get} api_hocmai_backend/notify-list Lấy danh sách notify
 * @apiName getNotifyList
 * @apiGroup HocmaiBackend
 *
 * @apiSuccessExample Success-Response: Danh sách
 * HTTP/1.1 200 OK
"success": true,
"response_code": 1000,
"data": [
{
{
"notify_id": 1,
"notify_name": null,
"notify_title": "test",
"status": null,
"status_name": "Đang hoạt động",
"start_date_sent": null,
"end_date_sent": null,
"number_sent_success": null,
"is_edit": false
},
{
"notify_id": 2,
"notify_name": null,
"notify_title": "kjdsfjk",
"status": null,
"status_name": "Đang hoạt động",
"start_date_sent": "2020-10-02 08:08:43",
"end_date_sent": "2020-10-02 08:08:43",
"number_sent_success": null,
"is_edit": false
},
{
"notify_id": 3,
"notify_name": null,
"notify_title": "sfsd",
"status": null,
"status_name": "Đang hoạt động",
"start_date_sent": "2020-10-06 01:39:37",
"end_date_sent": "2020-10-06 01:39:37",
"number_sent_success": null,
"is_edit": false
},
]
 */
