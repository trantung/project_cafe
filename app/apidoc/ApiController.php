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
                "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "order_product_id": 106,
                "product_quantity": "1",
                "size": {
                    "size_name": "S moi",
                    "size_id": 1
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
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "order_product_id": 107,
                "product_quantity": "1",
                "size": {
                    "size_name": "M",
                    "size_id": 2
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
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "order_product_id": 108,
                "product_quantity": "1",
                "size": {
                    "size_name": "M",
                    "size_id": 2
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
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "order_product_id": 110,
                "product_quantity": "1",
                "size": {
                    "size_name": "M",
                    "size_id": 2
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
                "product_id": 7,
                "product_name": "Caramel Macchiato Đá",
                "product_short_desc": "Giới thiệu ngắn sản phẩm số 7",
                "product_description": "Caramel Macchiato Đá",
                "product_base_price": 50000,
                "product_sale_price": 50000,
                "product_image_thumbnail": "http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg",
                "product_using_at": 1,
                "order_product_id": 114,
                "product_quantity": "2",
                "size": {
                    "size_name": "S moi",
                    "size_id": 1
                },
                "topping": [],
                "option": [
                    {
                        "option_id": 1,
                        "option_name": "Nhiều"
                    }
                ]
            }
        ],
        "total_price": 340000
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
        "topping": [
            {
                "topping_id": 1,
                "topping_name": "Espresso (1shot)",
                "topping_price": "10000",
                "active": true
            }
        ],
        "option": [
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
 * @apiGroup Product
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






