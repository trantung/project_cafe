define({ "api": [
  {
    "type": "post",
    "url": "/api_customer/product/cart/cancel",
    "title": "Không thanh toán sản phẩm trong giỏ hàng nhưng vẫn giữ sản phẩm lại trong giỏ",
    "name": "postProductCartCancel",
    "group": "Cart",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "order_product_id",
            "description": "<p>lấy được khi add product hoặc từ danh sách sp trong giỏ(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "cancel_product",
            "description": "<p>giá trị thanh toán hay hủy thanh toán(0:vẫn giữ sản phẩm, 1: hủy thanh toán sản phẩm)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"list_product\": [\n            {\n                \"product_id\": 7,\n                \"product_name\": \"Caramel Macchiato Đá\",\n                \"product_short_desc\": \"\",\n                \"product_description\": \"Caramel Macchiato Đá\",\n                \"product_base_price\": 50000,\n                \"product_sale_price\": 50000,\n                \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg\",\n                \"product_using_at\": 1,\n                \"product_size_price\": \"50000\",\n                \"order_product_id\": 1,\n                \"product_cancel\": 1,\n                \"product_quantity\": \"1\",\n                \"size\": {\n                    \"size_id\": 2,\n                    \"size_name\": \"M\"\n                },\n                \"topping\": [\n                    {\n                        \"topping_id\": 1,\n                        \"topping_name\": \"Espresso (1shot)\",\n                        \"topping_price\": 10000\n                    }\n                ],\n                \"option\": [\n                    {\n                        \"option_id\": 1,\n                        \"option_name\": \"Nhiều\"\n                    },\n                    {\n                        \"option_id\": 4,\n                        \"option_name\": \"Nhiều\"\n                    }\n                ]\n            },\n            {\n                \"product_id\": 8,\n                \"product_name\": \"Caramel Macchiato Nóng\",\n                \"product_short_desc\": \"\",\n                \"product_description\": \"Caramel Macchiato Nóng\",\n                \"product_base_price\": 50000,\n                \"product_sale_price\": 50000,\n                \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg\",\n                \"product_using_at\": 1,\n                \"product_size_price\": \"50000\",\n                \"order_product_id\": 2,\n                \"product_cancel\": 0,\n                \"product_quantity\": \"1\",\n                \"size\": {\n                    \"size_id\": 2,\n                    \"size_name\": \"M\"\n                },\n                \"topping\": [\n                    {\n                        \"topping_id\": 1,\n                        \"topping_name\": \"Espresso (1shot)\",\n                        \"topping_price\": 10000\n                    }\n                ],\n                \"option\": []\n            },\n            {\n                \"product_id\": 9,\n                \"product_name\": \"Cà phê sữa Đá\",\n                \"product_short_desc\": \"\",\n                \"product_description\": \"Cà phê sữa Đá\",\n                \"product_base_price\": 29000,\n                \"product_sale_price\": 29000,\n                \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg\",\n                \"product_using_at\": 1,\n                \"product_size_price\": \"20000\",\n                \"order_product_id\": 4,\n                \"product_cancel\": 1,\n                \"product_quantity\": \"1\",\n                \"size\": {\n                    \"size_id\": 3,\n                    \"size_name\": \"L\"\n                },\n                \"topping\": [\n                    {\n                        \"topping_id\": 1,\n                        \"topping_name\": \"Espresso (1shot)\",\n                        \"topping_price\": 10000\n                    }\n                ],\n                \"option\": []\n            }\n        ],\n        \"total_price\": 60000\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Cart"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/change_using_at",
    "title": "Thay đổi hình thức sử dụng(using_at)",
    "name": "postProductCartChangeUsingAt",
    "group": "Cart",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "using_at",
            "description": "<p>hình thức sử dụng:1(tại quầy), 2(ship tận nơi)(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "list_product_id",
            "description": "<p>danh sách product_id có trong giỏ hàng(Ví dụ: &quot;1,2,3&quot; hoặc &quot;1&quot;, nếu không có thì để empty)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": [\n        {\n            \"product_id\": 7,\n            \"product_can_change\": true\n        },\n        {\n            \"product_id\": 8,\n            \"product_can_change\": true\n        },\n        {\n            \"product_id\": 9,\n            \"product_can_change\": false\n        },\n        {\n            \"product_id\": 10,\n            \"product_can_change\": true\n        }\n    ],\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Cart"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/finish",
    "title": "Thanh toán đơn hàng",
    "name": "postProductCartFinish",
    "group": "Cart",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "voucher_code",
            "description": "<p>mã voucher có thể empty(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_friend_id",
            "description": "<p>id của customer_friend có thể empty(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": "<p>Tên địa chỉ có thể empty(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "location_lat",
            "description": "<p>latitude có thể empty(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "location_long",
            "description": "<p>longitude có thể empty(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_option_chosse_id",
            "description": "<p>id lựa chọn khách hàng(required. Ví dụ:1: Tại quán, 2: Mang đi, 3: Tôi dùng, 4: Mua tặng)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "using_at",
            "description": "<p>hình thức sử dụng:1(tại quầy), 2(ship tận nơi)(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "order_comment",
            "description": "<p>Comment thêm cho order có thể empty(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"order_code\": \"1zJTw8pvo0N\"\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Cart"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/update_product",
    "title": "update số lượng sản phẩm",
    "name": "postProductCartUpdateProductQuantity",
    "group": "Cart",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "order_product_id",
            "description": "<p>lấy được khi add product hoặc từ danh sách sp trong giỏ(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_update",
            "description": "<p>required and value is 1</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": {\n            \"size\": {\n                \"size_id\": 1,\n                \"size_price\": 10000,\n                \"size_name\": \"S moi\",\n                \"weight_number\": 1,\n                \"product_base_price\": \"10000\",\n                \"product_sale_price\": \"10000\"\n            },\n            \"product_id\": \"8\",\n            \"product_quantity\": \"3\",\n            \"product_base_price\": \"10000\",\n            \"product_sale_price\": \"10000\",\n            \"group_option\": [\n                {\n                    \"option_id\": 1,\n                    \"option_name\": \"Nhiều đường\"\n                }\n            ],\n            \"order_product_id\": 4\n        },\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Cart"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/update_product",
    "title": "Xóa sản phẩm khỏi giở hàng hoàn toàn",
    "name": "postProductCartUpdateProductRemove",
    "group": "Cart",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "order_product_id",
            "description": "<p>lấy được khi add product hoặc từ danh sách sp trong giỏ(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_delete",
            "description": "<p>required and value is 1</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"list_product\": [\n            {\n                \"product_id\": 7,\n                \"product_name\": \"Caramel Macchiato Đá\",\n                \"product_short_desc\": \"\",\n                \"product_description\": \"Caramel Macchiato Đá\",\n                \"product_base_price\": 50000,\n                \"product_sale_price\": 50000,\n                \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg\",\n                \"product_using_at\": 1,\n                \"product_size_price\": \"50000\",\n                \"order_product_id\": 1,\n                \"product_cancel\": 0,\n                \"product_quantity\": \"1\",\n                \"size\": {\n                    \"size_id\": 2,\n                    \"size_name\": \"M\"\n                },\n                \"topping\": [\n                    {\n                        \"topping_id\": 1,\n                        \"topping_name\": \"Espresso (1shot)\",\n                        \"topping_price\": 10000\n                    }\n                ],\n                \"option\": [\n                    {\n                        \"option_id\": 1,\n                        \"option_name\": \"Nhiều\"\n                    },\n                    {\n                        \"option_id\": 4,\n                        \"option_name\": \"Nhiều\"\n                    }\n                ]\n            },\n            {\n                \"product_id\": 8,\n                \"product_name\": \"Caramel Macchiato Nóng\",\n                \"product_short_desc\": \"\",\n                \"product_description\": \"Caramel Macchiato Nóng\",\n                \"product_base_price\": 50000,\n                \"product_sale_price\": 50000,\n                \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg\",\n                \"product_using_at\": 1,\n                \"product_size_price\": \"50000\",\n                \"order_product_id\": 2,\n                \"product_cancel\": 0,\n                \"product_quantity\": \"1\",\n                \"size\": {\n                    \"size_id\": 2,\n                    \"size_name\": \"M\"\n                },\n                \"topping\": [\n                    {\n                        \"topping_id\": 1,\n                        \"topping_name\": \"Espresso (1shot)\",\n                        \"topping_price\": 10000\n                    }\n                ],\n                \"option\": []\n            },\n            {\n                \"product_id\": 9,\n                \"product_name\": \"Cà phê sữa Đá\",\n                \"product_short_desc\": \"\",\n                \"product_description\": \"Cà phê sữa Đá\",\n                \"product_base_price\": 29000,\n                \"product_sale_price\": 29000,\n                \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg\",\n                \"product_using_at\": 1,\n                \"product_size_price\": \"20000\",\n                \"order_product_id\": 4,\n                \"product_cancel\": 1,\n                \"product_quantity\": \"1\",\n                \"size\": {\n                    \"size_id\": 3,\n                    \"size_name\": \"L\"\n                },\n                \"topping\": [\n                    {\n                        \"topping_id\": 1,\n                        \"topping_name\": \"Espresso (1shot)\",\n                        \"topping_price\": 10000\n                    }\n                ],\n                \"option\": []\n            }\n        ],\n        \"total_price\": 120000\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Cart"
  },
  {
    "type": "get",
    "url": "/api_customer/friend/friendList",
    "title": "Danh sách bạn bè",
    "name": "getCustomerFriend",
    "group": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": [\n        {\n            \"friend_id\": 1,\n            \"friend_name\": \"cavoisatthu\",\n            \"friend_phone\": \"0912957368\",\n            \"avatar\": \"\"\n        },\n        {\n            \"friend_id\": 2,\n            \"friend_name\": \"gau me vi dai\",\n            \"friend_phone\": \"0943174218\",\n            \"avatar\": \"\"\n        },\n        {\n            \"friend_id\": 3,\n            \"friend_name\": \"lon to da man\",\n            \"friend_phone\": \"0912190812\",\n            \"avatar\": \"\"\n        }\n    ],\n    \"message\": \"Success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Customer"
  },
  {
    "type": "post",
    "url": "/api_customer/register",
    "title": "Xác thực mã code và đăng ký user mới",
    "name": "postCustomerRegister",
    "group": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_phone",
            "description": "<p>phone của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_code",
            "description": "<p>code mà customer nhập(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "verify_id",
            "description": "<p>verificationId của app nhận được khi gọi đến firebase(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "device_id",
            "description": "<p>device_id của thiết bị(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "device_token",
            "description": "<p>device_token của thiết bị(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "os",
            "description": "<p>Hệ điều hành của thiết bị(required. Default: 1: IOS, 2: ANDROID, 3: Hệ điều hành khác)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: is_login: 0 là chưa login và chưa có tài khoản, 1: đã có tài khoản nhưng chưa update thông tin, 2: có tài khoản và đã update thông tin",
          "content": "HTTP/1.1 200 OK\n    {\n        \"success\": true,\n        \"response_code\": 1000,\n        \"data\": {\n        \"customer_id\": 123,\n        \"customer_token\": 'AIzaSyAaoRvXXCxKIJzjseA0GbEC58bckEtKLxE',\n        \"is_login\": 0,\n        },\n        \"message\": \"success\"\n    }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Customer"
  },
  {
    "type": "post",
    "url": "/api_customer/update_profile",
    "title": "Update thông tin user",
    "name": "postCustomerUpdateProfile",
    "group": "Customer",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "sex",
            "description": "<p>giới tính của customer(required. Chi tiết: 0:nam, 1:nữ, 2: khác)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "birthday",
            "description": "<p>Ngày tháng năm sinh của customer(required. Format: yyyy/mm/dd)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "height",
            "description": "<p>chiều cao của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "weight",
            "description": "<p>cân nặng của customer(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n    {\n        \"success\": true,\n        \"response_code\": 1000,\n        \"data\": {\n        \"customer_id\": 123,\n        \"customer_token\": 'AIzaSyAaoRvXXCxKIJzjseA0GbEC58bckEtKLxE',\n        },\n        \"message\": \"success\"\n    }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Customer"
  },
  {
    "type": "get",
    "url": "/api_hocmai_backend/filter/list",
    "title": "danh sách bộ lọc filter kèm chi tiết từng bộ lọc",
    "name": "getBackendFilterList",
    "group": "HocmaiBackend",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"1\": {\n            \"filter_id\": 1,\n            \"filter_name\": \"First Session\",\n            \"type_id\": 3,\n            \"operator\": [\n                {\n                    \"id\": 1,\n                    \"name\": \">\"\n                },\n                {\n                    \"id\": 2,\n                    \"name\": \"<\"\n                }\n            ]\n        },\n        \"2\": {\n            \"filter_id\": 2,\n            \"filter_name\": \"Last Session\",\n            \"type_id\": 3,\n            \"operator\": [\n                {\n                    \"id\": 1,\n                    \"name\": \">\"\n                },\n                {\n                    \"id\": 2,\n                    \"name\": \"<\"\n                }\n            ]\n        },\n        \"8\": {\n            \"filter_id\": 1,\n            \"filter_name\": \"App version\",\n            \"type_id\": 1,\n            \"operator\": [\n                {\n                    \"id\": 1,\n                    \"name\": \">\"\n                },\n                {\n                    \"id\": 2,\n                    \"name\": \"<\"\n                },\n                {\n                    \"id\": 3,\n                    \"name\": \">=\"\n                },\n                {\n                    \"id\": 4,\n                    \"name\": \"<=\"\n                },\n                {\n                    \"id\": 5,\n                    \"name\": \"=\"\n                },\n                {\n                    \"id\": 6,\n                    \"name\": \"!=\"\n                }\n            ],\n            \"option\": [\n                {\n                    \"option_id\": 1,\n                    \"option_name\": \"1.0.0\"\n                },\n                {\n                    \"option_id\": 2,\n                    \"option_name\": \"2.0.1\"\n                },\n                {\n                    \"option_id\": 3,\n                    \"option_name\": \"1.0.1\"\n                },\n                {\n                    \"option_id\": 4,\n                    \"option_name\": \"2.0.2\"\n                }\n            ]\n        }\n    },\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "HocmaiBackend"
  },
  {
    "type": "post",
    "url": "/api_hocmai/app/info",
    "title": "Lấy thông tin app",
    "name": "postApiHocmaiAppInfo",
    "group": "Hocmai",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": "<p>version của app(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "app_id",
            "description": "<p>id của app(required. Ví dụ: .com, .hocmai.vn, ....)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "app_os",
            "description": "<p>Hệ điều hành của app(required. IOS:1, ANDROID:2, Khác:3)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"success\": true,\n\"response_code\": 1000,\n\"data\": {\n\"app_id\": \"100\",\n\"app_version\": \"1.0.0\",\n\"hocmai_app_id\": 1\n},\n\"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Hocmai"
  },
  {
    "type": "post",
    "url": "/api_hocmai/course/detail",
    "title": "Chi tiết 1 khóa học của 1 học sinh",
    "name": "postApiHocmaiCourseDetail",
    "group": "Hocmai",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_user_id",
            "description": "<p>user_id của hocmai(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_course_id",
            "description": "<p>id của khóa học(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lesson_list_id",
            "description": "<p>danh sách id của bài giảng(required. Format: 1,2,3,4)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lesson_list_name",
            "description": "<p>danh sách tên của bài giảng tương ứng với lesson_list_id(required. Format: 'lesson1','lesson2','lesson3','lesson4')</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"success\": true,\n\"response_code\": 1000,\n\"data\": {\n\"user_id\": 1,\n\"hocmai_user_id\": \"1\",\n\"course_id\": 2\n},\n\"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Hocmai"
  },
  {
    "type": "post",
    "url": "/api_hocmai/course/list",
    "title": "Lấy danh sách khóa học của 1 học sinh",
    "name": "postApiHocmaiCourseList",
    "group": "Hocmai",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_user_id",
            "description": "<p>user_id của hocmai(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "course_list_id",
            "description": "<p>danh sách id của khóa học(required. Format: 1,2,3,4)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "course_list_name",
            "description": "<p>danh sách tên của khóa học tương ứng với course_list_id(required. Format: 'kh1','kh2','kh3','kh4')</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"success\": true,\n\"response_code\": 1000,\n\"data\": {\n\"user_id\": 1,\n\"hocmai_user_id\": \"1\",\n\"total_course\": 3\n},\n\"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Hocmai"
  },
  {
    "type": "post",
    "url": "/api_hocmai/lesson/detail",
    "title": "Chi tiết 1 bài giảng",
    "name": "postApiHocmaiLessonDetail",
    "group": "Hocmai",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_user_id",
            "description": "<p>user_id của hocmai(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_lesson_id",
            "description": "<p>id của bài giảng(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"success\": true,\n\"response_code\": 1000,\n\"data\": {\n\"user_id\": 1,\n\"hocmai_user_id\": \"1\",\n\"lesson_id\": \"12\"\n},\n\"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Hocmai"
  },
  {
    "type": "post",
    "url": "/api_hocmai/logout",
    "title": "Logout khỏi app",
    "name": "postApiHocmaiLogout",
    "group": "Hocmai",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_user_id",
            "description": "<p>user_id của hocmai(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"success\": true,\n\"response_code\": 1000,\n\"data\": {\n\"user_id\": 1,\n\"hocmai_user_id\": \"1\",\n},\n\"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Hocmai"
  },
  {
    "type": "post",
    "url": "/api_hocmai/user/info",
    "title": "Lấy thông tin user",
    "name": "postApiHocmaiUserInfo",
    "group": "Hocmai",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "hocmai_user_id",
            "description": "<p>user_id của hocmai(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "city_id",
            "description": "<p>id của thành phố mà user đăng ký(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "district_id",
            "description": "<p>id của quận mà user đăng ký(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "class_id",
            "description": "<p>id của lớp mà user đăng ký(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": "<p>sdt mà user dùng(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birthday",
            "description": "<p>ngày sinh của user(required. Định dạng: y/m/d. ví dụ: 2000/02/22)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "register_time",
            "description": "<p>Ngày tháng năm đăng ký tài khoản của user(required. Định dạng: y/m/d. ví dụ: 2000/02/22)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "app_version",
            "description": "<p>version của app(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "app_id",
            "description": "<p>id của app(required. Ví dụ: .com, .hocmai.vn, ....)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "app_os",
            "description": "<p>Hệ điều hành của app(required. IOS:1, ANDROID:2, Khác:3)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "device_token",
            "description": "<p>Token của device(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"success\": true,\n\"response_code\": 1000,\n\"data\": {\n\"hocmai_user_id\": \"1\",\n\"user_id\": 1\n},\n\"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Hocmai"
  },
  {
    "type": "get",
    "url": "/api_customer/product/productDetail",
    "title": "Chi tiết của 1 product",
    "name": "getProductDetail",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: group_option_product_type là kiểu hiển thị: 1: single choice, 2: kiểu multi-choice, group_option_product_type_show: 1: slide, 2: tag, 3: checkbox,",
          "content": " product_base_price: giá bán sản phẩm trước khuyến mãi, product_sale_price: giá bán sản phẩm sau khuyến mãi, weight_number: thứ tự sắp xếp size(Ví dụ: S-M-L tương ứng 1-2-3)\nHTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": {\n            \"product_id\": 7,\n            \"product_name\": \"Caramel Macchiato Đá\",\n            \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 7\",\n            \"product_description\": \"Caramel Macchiato Đá\",\n            \"product_base_price\": \"10000\",\n            \"product_sale_price\": \"10000\",\n            \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg\",\n            \"product_using_at\": 1,\n            \"cover_list\": [\n                \"http://localhost:8000/uploads/products/7/images/caramel_macchiato.jpg\",\n                \"https://www.youtube.com/watch?v=K_XmTiNojMg\"\n            ],\n            \"group_option\": [\n                {\n                    \"group_option_id\": 1,\n                    \"group_option_name\": \"Độ ngọt\",\n                    \"group_option_product_type\": 1,\n                    \"group_option_product_type_show\": 2,\n                    \"option_list\": [\n                        {\n                            \"option_id\": 1,\n                            \"option_name\": \"Nhiều đường\"\n                        },\n                        {\n                            \"option_id\": 2,\n                            \"option_name\": \"ít đường\"\n                        },\n                        {\n                            \"option_id\": 3,\n                            \"option_name\": \"Không có đường\"\n                        }\n                    ]\n                },\n                {\n                    \"group_option_id\": 2,\n                    \"group_option_name\": \"Độ chua\",\n                    \"group_option_product_type\": 1,\n                    \"group_option_product_type_show\": 3,\n                    \"option_list\": [\n                        {\n                            \"option_id\": 4,\n                            \"option_name\": \"Chua nhiều\"\n                        },\n                        {\n                            \"option_id\": 5,\n                            \"option_name\": \"chua ít\"\n                        },\n                        {\n                            \"option_id\": 6,\n                            \"option_name\": \"Không chua\"\n                        }\n                    ]\n                }\n            ],\n            \"size\": [\n                {\n                    \"size_id\": 1,\n                    \"size_price\": 10000,\n                    \"size_name\": \"S moi\",\n                    \"weight_number\": 1,\n                    \"product_base_price\": \"10000\",\n                    \"product_sale_price\": \"10000\"\n                },\n                {\n                    \"size_id\": 2,\n                    \"size_price\": 20000,\n                    \"size_name\": \"M\",\n                    \"weight_number\": 2,\n                    \"product_base_price\": \"20000\",\n                    \"product_sale_price\": \"20000\"\n                },\n                {\n                    \"size_id\": 3,\n                    \"size_price\": 30000,\n                    \"size_name\": \"L\",\n                    \"weight_number\": 3,\n                    \"product_base_price\": \"30000\",\n                    \"product_sale_price\": \"30000\"\n                }\n            ],\n            \"product_topping\": [\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Espresso (1shot)\",\n                    \"topping_id\": 1\n                },\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Sauce Chocolate\",\n                    \"topping_id\": 2\n                },\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Trân châu trắng\",\n                    \"topping_id\": 3\n                },\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Trân châu đen\",\n                    \"topping_id\": 4\n                },\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Đào ngâm\",\n                    \"topping_id\": 5\n                },\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Vải ngâm\",\n                    \"topping_id\": 6\n                },\n                {\n                    \"topping_price\": \"20000\",\n                    \"topping_name\": \"Espresso (3shot)\",\n                    \"topping_id\": 7\n                },\n                {\n                    \"topping_price\": \"5000\",\n                    \"topping_name\": \"Chan trau\",\n                    \"topping_id\": 8\n                },\n                {\n                    \"topping_price\": \"10000\",\n                    \"topping_name\": \"Espresso (1shot)\",\n                    \"topping_id\": 1\n                }\n            ],\n            \"product_tags\": []\n        },\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "get",
    "url": "/api_customer/product/productList",
    "title": "Danh sách tất cả product chưa lọc theo category_id",
    "name": "getProductList",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "using_at",
            "description": "<p>kiểu sử dụng(có thể không truyền. 1:Đặt tại quầy, 2: Ship tận nơi)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: product_using_at: 1: Lấy đồ tại quầy, 2: Ship tận nơi, meguu_fee:phí ship của shop meguu: 0(nếu lấy đồ tại quầy), 25000(ví dụ là cho ship tận nơi),",
          "content": " customer_option_chosse: phương thức sử dụng cho từng trường hợp product_using_at = 1 hoặc 2 \nHTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": [\n            {\n                \"category_id\": 5,\n                \"category_name\": \"Thức uống\",\n                \"special_tag\": \"Món được ưa thích\",\n                \"list_product\": [\n                    {\n                        \"product_id\": 3,\n                        \"product_name\": \"Matcha phú quý\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 3\",\n                        \"product_description\": \"Món matcha đủ vị\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/3/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 4,\n                        \"product_name\": \"Cold brew Cam sả\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 4\",\n                        \"product_description\": \"Cold brew Cam sả\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/4/avatar/cold_brew_cam_sa.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 5,\n                        \"product_name\": \"Cold brew Phúc bồn tử\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 5\",\n                        \"product_description\": \"Cold brew Phúc bồn tử\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/5/avatar/coldbrew_phuc_bon_tu.png\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 6,\n                        \"product_name\": \"Cold brew Sữa tươi\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 6\",\n                        \"product_description\": \"Cold brew Sữa tươi\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/6/avatar/coldbrew_milk.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 7,\n                        \"product_name\": \"Caramel Macchiato Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 7\",\n                        \"product_description\": \"Caramel Macchiato Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 8,\n                        \"product_name\": \"Caramel Macchiato Nóng\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 8\",\n                        \"product_description\": \"Caramel Macchiato Nóng\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 9,\n                        \"product_name\": \"Cà phê sữa Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 9\",\n                        \"product_description\": \"Cà phê sữa Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/9/avatar/caramel_macchiato.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 10,\n                        \"product_name\": \"Cà phê sữa Nóng\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 10\",\n                        \"product_description\": \"Cà phê sữa Nóng\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/10/avatar/caramel_macchiato.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 11,\n                        \"product_name\": \"Americano Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 11\",\n                        \"product_description\": \"Americano Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/11/avatar/caramel_macchiato.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 14,\n                        \"product_name\": \"Cappucino Nóng\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 14\",\n                        \"product_description\": \"Cappucino Nóng\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/14/avatar/cappuccino_master.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 15,\n                        \"product_name\": \"Latte Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 15\",\n                        \"product_description\": \"Latte Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/15/avatar/latte_nong.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 17,\n                        \"product_name\": \"Mocha Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 17\",\n                        \"product_description\": \"Mocha Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/17/avatar/mocha_ice_blended_master.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 19,\n                        \"product_name\": \"Espresso Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 19\",\n                        \"product_description\": \"Espresso Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 20,\n                        \"product_name\": \"Espresso Nóng\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 20\",\n                        \"product_description\": \"Espresso Nóng\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 23,\n                        \"product_name\": \"Chocolate đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 23\",\n                        \"product_description\": \"Chocolate đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/23/avatar/chocolate_ice_blended_master.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 24,\n                        \"product_name\": \"Phúc bồn tử cam đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 24\",\n                        \"product_description\": \"Phúc bồn tử cam đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/24/avatar/chocolate_ice_blended_master.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 25,\n                        \"product_name\": \"Matcha đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 25\",\n                        \"product_description\": \"Matcha đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/25/avatar/matcha_ice_blended_master.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 26,\n                        \"product_name\": \"Cookies đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 26\",\n                        \"product_description\": \"Cookies đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/26/avatar/cookies-da-xay.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 27,\n                        \"product_name\": \"Chanh sả đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 27\",\n                        \"product_description\": \"Chanh sả đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/27/avatar/cookies-da-xay.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 28,\n                        \"product_name\": \"Cam đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 28\",\n                        \"product_description\": \"Cam đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/28/avatar/cookies-da-xay.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 29,\n                        \"product_name\": \"Ổi hồng việt quất đá xay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 29\",\n                        \"product_description\": \"Ổi hồng việt quất đá xay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/29/avatar/cookies-da-xay.jpg\",\n                        \"product_using_at\": 3\n                    }\n                ]\n            },\n            {\n                \"category_id\": 6,\n                \"category_name\": \"Thức ăn\",\n                \"special_tag\": \"Món được ưa thích\",\n                \"list_product\": [\n                    {\n                        \"product_id\": 30,\n                        \"product_name\": \"Đậu phộng tỏi ớt\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 30\",\n                        \"product_description\": \"Đậu phộng tỏi ớt\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/30/avatar/dau_phong_toi_ot.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 32,\n                        \"product_name\": \"Da Cá Sấy Giòn Vị Trứng Muối\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 32\",\n                        \"product_description\": \"Da Cá Sấy Giòn Vị Trứng Muối\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/32/avatar/banh_mi_que.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 35,\n                        \"product_name\": \"Hạt sen sấy\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 35\",\n                        \"product_description\": \"Hạt sen sấy\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/35/avatar/banh_mi_que.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 36,\n                        \"product_name\": \"Khô gà bơ cay\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 36\",\n                        \"product_description\": \"Khô gà bơ cay\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/36/avatar/banh_mi_que.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 37,\n                        \"product_name\": \"Cơm cháy chà bông\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 37\",\n                        \"product_description\": \"Cơm cháy chà bông\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/37/avatar/banh_mi_que.jpg\",\n                        \"product_using_at\": 1\n                    },\n                    {\n                        \"product_id\": 38,\n                        \"product_name\": \"Gạo lứt sấy giòn\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 38\",\n                        \"product_description\": \"Gạo lứt sấy giòn\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/38/avatar/banh_mi_que.jpg\",\n                        \"product_using_at\": 1\n                    }\n                ]\n            }\n        ],\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "get",
    "url": "/api_customer/product/productList",
    "title": "Danh sách tất cả product lọc theo category_id",
    "name": "getProductListByCategory",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "using_at",
            "description": "<p>kiểu sử dụng(có thể không truyền 1:Đặt tại quầy, 2: Ship tận nơi)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "category_id",
            "description": "<p>id của category(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": [\n            {\n                \"category_id\": 18,\n                \"category_name\": \"Espresso\",\n                \"special_tag\": \"Món được ưa thích\",\n                \"list_product\": [\n                    {\n                        \"product_id\": 19,\n                        \"product_name\": \"Espresso Đá\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 19\",\n                        \"product_description\": \"Espresso Đá\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/19/avatar/espresso_master.jpg\",\n                        \"product_using_at\": 3\n                    },\n                    {\n                        \"product_id\": 20,\n                        \"product_name\": \"Espresso Nóng\",\n                        \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 20\",\n                        \"product_description\": \"Espresso Nóng\",\n                        \"product_base_price\": \"10000\",\n                        \"product_sale_price\": \"10000\",\n                        \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/20/avatar/espresso_master.jpg\",\n                        \"product_using_at\": 1\n                    }\n                ]\n            }\n        ],\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/edit_product",
    "title": "Edit 1 product trong giỏ hàng",
    "name": "postCartEditProduct",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "order_product_id",
            "description": "<p>lấy được khi add product hoặc từ danh sách sp trong giỏ(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": {\n            \"product_id\": 8,\n            \"product_name\": \"Caramel Macchiato Nóng\",\n            \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 8\",\n            \"product_description\": \"Caramel Macchiato Nóng\",\n            \"product_base_price\": \"10000\",\n            \"product_sale_price\": \"10000\",\n            \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/8/avatar/caramel_macchiato.jpg\",\n            \"product_using_at\": 3,\n            \"order_product_id\": 2,\n            \"cover_list\": [\n                \"http://localhost:8000/uploads/products/8/images/caramel_macchiato.jpg\",\n                \"https://www.youtube.com/watch?v=K_XmTiNojMg\"\n            ],\n            \"product_tags\": [],\n            \"product_quantity\": \"2\",\n            \"size\": [\n                {\n                    \"size_id\": 1,\n                    \"size_name\": \"S moi\",\n                    \"size_price\": 10000,\n                    \"size_weight_number\": 1,\n                    \"active\": true\n                },\n                {\n                    \"size_id\": 2,\n                    \"size_name\": \"M\",\n                    \"size_price\": 20000,\n                    \"size_weight_number\": 2,\n                    \"active\": false\n                },\n                {\n                    \"size_id\": 3,\n                    \"size_name\": \"L\",\n                    \"size_price\": 30000,\n                    \"size_weight_number\": 3,\n                    \"active\": false\n                }\n            ],\n            \"product_topping\": [\n                {\n                    \"topping_id\": 1,\n                    \"topping_name\": \"Espresso (1shot)\",\n                    \"topping_price\": \"10000\",\n                    \"active\": true\n                },\n                {\n                    \"topping_id\": 2,\n                    \"topping_name\": \"Sauce Chocolate\",\n                    \"topping_price\": \"10000\",\n                    \"active\": true\n                },\n                {\n                    \"topping_id\": 3,\n                    \"topping_name\": \"Trân châu trắng\",\n                    \"topping_price\": \"10000\",\n                    \"active\": false\n                },\n                {\n                    \"topping_id\": 4,\n                    \"topping_name\": \"Trân châu đen\",\n                    \"topping_price\": \"10000\",\n                    \"active\": false\n                },\n                {\n                    \"topping_id\": 5,\n                    \"topping_name\": \"Đào ngâm\",\n                    \"topping_price\": \"10000\",\n                    \"active\": false\n                },\n                {\n                    \"topping_id\": 6,\n                    \"topping_name\": \"Vải ngâm\",\n                    \"topping_price\": \"10000\",\n                    \"active\": false\n                },\n                {\n                    \"topping_id\": 7,\n                    \"topping_name\": \"Espresso (3shot)\",\n                    \"topping_price\": \"20000\",\n                    \"active\": false\n                },\n                {\n                    \"topping_id\": 8,\n                    \"topping_name\": \"Chan trau\",\n                    \"topping_price\": \"5000\",\n                    \"active\": false\n                },\n                {\n                    \"topping_id\": 1,\n                    \"topping_name\": \"Espresso (1shot)\",\n                    \"topping_price\": \"10000\",\n                    \"active\": true\n                }\n            ],\n            \"group_option\": [\n                {\n                    \"group_option_id\": 1,\n                    \"group_option_name\": \"Độ ngọt\",\n                    \"group_option_product_type\": 1,\n                    \"group_option_product_type_show\": 1,\n                    \"option_list\": [\n                        {\n                            \"option_id\": 1,\n                            \"option_name\": \"Nhiều đường\",\n                            \"active\": true\n                        },\n                        {\n                            \"option_id\": 2,\n                            \"option_name\": \"ít đường\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 3,\n                            \"option_name\": \"Không có đường\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 4,\n                            \"option_name\": \"Chua nhiều\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 5,\n                            \"option_name\": \"chua ít\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 6,\n                            \"option_name\": \"Không chua\",\n                            \"active\": false\n                        }\n                    ]\n                },\n                {\n                    \"group_option_id\": 2,\n                    \"group_option_name\": \"Độ chua\",\n                    \"group_option_product_type\": 2,\n                    \"group_option_product_type_show\": 3,\n                    \"option_list\": [\n                        {\n                            \"option_id\": 1,\n                            \"option_name\": \"Nhiều đường\",\n                            \"active\": true\n                        },\n                        {\n                            \"option_id\": 2,\n                            \"option_name\": \"ít đường\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 3,\n                            \"option_name\": \"Không có đường\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 4,\n                            \"option_name\": \"Chua nhiều\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 5,\n                            \"option_name\": \"chua ít\",\n                            \"active\": false\n                        },\n                        {\n                            \"option_id\": 6,\n                            \"option_name\": \"Không chua\",\n                            \"active\": false\n                        }\n                    ]\n                }\n            ],\n            \"product_comment\": \"comment cho product 8\"\n        },\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/list_product",
    "title": "Danh sách product trong giỏ hàng",
    "name": "postCartListProduct",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: product_size_price: gía tiền của sản phẩm theo size, product_base_price: giá cơ bả của 1 sản phẩm để hiển thị ra ngoài, product_size_price: giá bán của 1 sản phẩm hiển thị ra ngoài",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": {\n            \"list_product\": [\n                {\n                    \"product_id\": 7,\n                    \"product_name\": \"Caramel Macchiato Đá\",\n                    \"product_short_desc\": \"Giới thiệu ngắn sản phẩm số 7\",\n                    \"product_description\": \"Caramel Macchiato Đá\",\n                    \"product_base_price\": \"30000\",\n                    \"product_sale_price\": \"30000\",\n                    \"product_image_thumbnail\": \"http://localhost:8000/uploads/products/7/avatar/caramel_macchiato.jpg\",\n                    \"product_using_at\": 1,\n                    \"product_size_price\": \"30000\",\n                    \"order_product_id\": 1,\n                    \"product_cancel\": 0,\n                    \"product_quantity\": \"2\",\n                    \"size\": {\n                        \"size_id\": 3,\n                        \"size_name\": \"L\"\n                    },\n                    \"topping\": [\n                        {\n                            \"topping_id\": 1,\n                            \"topping_name\": \"Espresso (1shot)\",\n                            \"topping_price\": 10000\n                        },\n                        {\n                            \"topping_id\": 2,\n                            \"topping_name\": \"Sauce Chocolate\",\n                            \"topping_price\": 10000\n                        }\n                    ],\n                    \"option\": [\n                        {\n                            \"option_id\": 1,\n                            \"option_name\": \"Nhiều đường\"\n                        }\n                    ]\n                }\n            ],\n            \"total_price\": 100000,\n            \"total_price_base\": 0\n        },\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "post",
    "url": "/api_customer/product/addProduct",
    "title": "Thêm sản phẩm vào giỏ hàng",
    "name": "postProductAdd",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_quantity",
            "description": "<p>số lượng của product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "size_id",
            "description": "<p>id của size_id khi chọn product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "option",
            "description": "<p>danh sách option lựa chọn của product(là list các id của option khi chọn product và cách nhau bởi dấu ','. Ví dụ: &quot;1,2,3&quot; hoặc &quot;1&quot;, nếu không có thì để empty)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "topping",
            "description": "<p>danh sách topping của product(Tương tự option)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "product_comment",
            "description": "<p>comment của product(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": {\n            \"size\": {\n                \"size_id\": 3,\n                \"size_price\": 30000,\n                \"size_name\": \"L\",\n                \"weight_number\": 3,\n                \"product_base_price\": \"30000\",\n                \"product_sale_price\": \"30000\"\n            },\n            \"product_id\": \"7\",\n            \"product_quantity\": \"2\",\n            \"product_base_price\": \"30000\",\n            \"product_sale_price\": \"30000\",\n            \"group_option\": [\n                {\n                    \"option_id\": 1,\n                    \"option_name\": \"Nhiều đường\"\n                }\n            ],\n            \"order_product_id\": 1\n        },\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "post",
    "url": "/api_customer/product/cart/update_product",
    "title": "Update thông tin thay đổi product trong giỏ hàng",
    "name": "postProductCartUpdateProduct",
    "group": "Product",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "order_product_id",
            "description": "<p>lấy được khi add product hoặc từ danh sách sp trong giỏ(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_id",
            "description": "<p>id của product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "product_quantity",
            "description": "<p>số lượng của product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "size_id",
            "description": "<p>id của size_id khi chọn product(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "option",
            "description": "<p>danh sách option lựa chọn của product(là list các id của option khi chọn product và cách nhau bởi dấu ','. Ví dụ: &quot;1,2,3&quot; hoặc &quot;1&quot;, nếu không có thì để empty)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "topping",
            "description": "<p>danh sách topping của product(Tương tự option)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "product_comment",
            "description": "<p>comment của product(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: ",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"data_detail\": {\n            \"size\": {\n                \"size_id\": 1,\n                \"size_price\": 10000,\n                \"size_name\": \"S moi\",\n                \"weight_number\": 1,\n                \"product_base_price\": \"10000\",\n                \"product_sale_price\": \"10000\"\n            },\n            \"product_id\": \"8\",\n            \"product_quantity\": \"1\",\n            \"product_base_price\": \"10000\",\n            \"product_sale_price\": \"10000\",\n            \"group_option\": [\n                {\n                    \"option_id\": 1,\n                    \"option_name\": \"Nhiều đường\"\n                }\n            ],\n            \"order_product_id\": 3\n        },\n        \"meguu_fee\": 0,\n        \"customer_action\": [\n            {\n                \"using_at\": 1,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 1,\n                        \"customer_option_chosse_name\": \"Tại quán\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 2,\n                        \"customer_option_chosse_name\": \"Mang đi\",\n                        \"active\": 0\n                    }\n                ]\n            },\n            {\n                \"using_at\": 2,\n                \"customer_option_chosse\": [\n                    {\n                        \"customer_option_chosse_id\": 3,\n                        \"customer_option_chosse_name\": \"Tôi dùng\",\n                        \"active\": 1\n                    },\n                    {\n                        \"customer_option_chosse_id\": 4,\n                        \"customer_option_chosse_name\": \"Mua tặng\",\n                        \"active\": 0\n                    }\n                ]\n            }\n        ]\n    },\n    \"message\": \"Detail success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Product"
  },
  {
    "type": "post",
    "url": "/api_customer/voucher/apply_code",
    "title": "Áp dụng voucher",
    "name": "getVoucherApplyCode",
    "group": "Voucher",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "voucher_code",
            "description": "<p>code của voucher(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "total_product_price",
            "description": "<p>Tổng tiền đơn hàng trước khi áp dụng voucher(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"total_product_price\": 100000,\n        \"amount_after_promotion\": 80000,\n    },\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Voucher"
  },
  {
    "type": "post",
    "url": "/api_customer/voucher/check_code",
    "title": "Kiểm tra voucher_code",
    "name": "getVoucherCheckCode",
    "group": "Voucher",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "voucher_code",
            "description": "<p>code của voucher(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"voucher_id\": 1,\n        \"voucher_name\": \"voucher test\",\n        \"voucher_start_time\": \"2020-07-01\",\n        \"voucher_end_time\": \"2021-07-01\",\n        \"voucher_money_promotion\": \"0\",\n        \"voucher_percent_promotion\": 10,\n        \"voucher_quantity\": 1000,\n        \"voucher_code\": \"MEGUU1\",\n        \"voucher_status\": 1\n    },\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Voucher"
  },
  {
    "type": "get",
    "url": "/api_customer/voucher/detail",
    "title": "Chi tiết 1 voucher",
    "name": "getVoucherDetail",
    "group": "Voucher",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "voucher_id",
            "description": "<p>id của voucher(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: voucher_status(1: Đã được sử dụng, 0: Chưa được sử dụng)",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": {\n        \"voucher_id\": 1,\n        \"voucher_name\": \"voucher test\",\n        \"voucher_start_time\": \"2020-07-01\",\n        \"voucher_end_time\": \"2021-07-01\",\n        \"voucher_money_promotion\": \"0\",\n        \"voucher_percent_promotion\": 10,\n        \"voucher_quantity\": 1000,\n        \"voucher_code\": \"MEGUU1\",\n        \"voucher_status\": 1\n    },\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Voucher"
  },
  {
    "type": "get",
    "url": "/api_customer/voucher/list",
    "title": "Danh sách các voucher",
    "name": "getVoucherList",
    "group": "Voucher",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_id",
            "description": "<p>id của customer(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "customer_token",
            "description": "<p>token của customer(required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response: voucher_is_use:voucher có thể được sử dụng hay ko(0: hết hạn-không được sử dụng, 1: được sử dụng-áp dụng) voucher_status: voucher đã dùng hay chưa dùng bao giờ(0: chưa dùng bao giờ, 1: đã được áp dụng ít nhất 1 lần rồi)",
          "content": "HTTP/1.1 200 OK\n{\n    \"success\": true,\n    \"response_code\": 1000,\n    \"data\": [\n        {\n            \"voucher_id\": 1,\n            \"voucher_name\": \"voucher test\",\n            \"voucher_start_time\": \"2020-07-01\",\n            \"voucher_end_time\": \"2021-07-01\",\n            \"voucher_money_promotion\": \"0\",\n            \"voucher_percent_promotion\": 10,\n            \"voucher_quantity\": 999,\n            \"voucher_code\": \"MEGUU1\",\n            \"voucher_is_use\": 1\n        },\n        {\n            \"voucher_id\": 2,\n            \"voucher_name\": \"voucher test hết hạn\",\n            \"voucher_start_time\": \"2020-07-01 15:00:00\",\n            \"voucher_end_time\": \"2020-07-02 16:00:00\",\n            \"voucher_money_promotion\": \"0\",\n            \"voucher_percent_promotion\": 10,\n            \"voucher_quantity\": 1000,\n            \"voucher_code\": \"MEGUU_EXPIRED\",\n            \"voucher_is_use\": 0\n        }\n    ],\n    \"message\": \"success\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "/var/www/html/meguu_cafe/app/apidoc/ApiController.php",
    "groupTitle": "Voucher"
  }
] });
