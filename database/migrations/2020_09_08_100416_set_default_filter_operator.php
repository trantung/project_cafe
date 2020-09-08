<?php

use Illuminate\Database\Migrations\Migration;
use APV\Hocmai\Models\HocmaiFilter;
use APV\Hocmai\Models\HocmaiOperator;

class SetDefaultFilterOperator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $filterName = [
            'FIRST SESSION', 'LAST SESSION', 'AMOUNT SPENT', 'PURCHASED ITEM',
            'COURSE REGISTER ITEM', 'PROGRAME REGISTER ITEM', 'COURSE PACKAGE ITEM',
            'APP VERSION', 'APP TARGET', 'LOCATION', 'USER ID',
            'PHONE NUMBER', 'SESSION COUNT', 'LAST TIME OPEN COURSE', 'LAST LESSON LEARNING',
            'USER CLASS', 'USER DOB', 'USER REGISTER TIME', 'NOTIFICATION UNREAD IN APP',
            'AMOUNT COURSE IN MYCOURSE', 'EVENT REGISTER', 'DOCUMENT REGISTER'
        ];
        $filterDes = [
            'Là thời gian login lần đầu tiên của user vào vào app/web HOCMAI',
            'Là khoảng thời gian gần đây nhất người dùng tương tác với máy chủ HOCMAI. Bao gồm thời gian login và logout khỏi web/ứng dụng',
            'Số tiền mà người dùng đã nạp vào tài khoản HOCMAI', 'Mobile: Gói nạp mà người dùng đã nạp vào ví',
            'Sản phẩm khoá học mà người dùng đã đăng ký/chưa đăng ký', 'Sản phẩm chương trìnhmà người dùng đã đăng ký/chưa đăng ký', 'Sản phẩm gói học mà người dùng đã đăng ký/chưa đăng ký',
            'Phiên bản ứng dụng. Đây là filter bổ trợ thêm filter APP TARGET', 'id app của ứng dụng/website', 'Tỉnh/thành phố người dùng đăng ký trong profile', 'User ID của người dùng HOCMAI',
            'Số điện thoại kích hoạt tài khoản của HOCMAI', 'Mobile: Số lần mở ứng dụng',
            'Là khoảng thời gian gần đây nhất người dùng mở khoá học. Đây là filter bổ trợ thêm filter COURSE REGISTER ITEM',
            'Là bài giảng gần đây nhất người dùng học khoá học. Đây là filter bổ trợ thêm filter COURSE REGISTER ITEM',
            'Lớp của người dùng dựa trên info', 'Năm sinh người dùng dựa trên info', 'Ngày tháng năm đăng ký tài khoản của người dùng', 'Số lượng notification in app chưa đọc của người dùng',
            'Số khóa học hiện có (Active) trong mycourse', 'Sự kiện mà người dùng đã tham gia/chưa tham gia', 'Tài liệu mà người dùng đã nhận/chưa nhận'
        ];
        foreach ($filterName as $key => $name)
        {
            HocmaiFilter::create([
                'name' => $name,
                'des' => $filterDes[$key],
            ]);
        }
        $operatorDes = [
            'OPERATOR_GREATER', 'OPERATOR_LESS', 'OPERATOR_GREATER_EQUAL', 'OPERATOR_LESS_EQUAL', 'OPERATOR_EQUAL', 'OPERATOR_NOT_EQUAL'
        ];
        $operatorName = [
            '>', '<', '>=', '<=', '=', '!='
        ];
        foreach ($operatorName as $k => $name)
        {
            HocmaiOperator::create([
                'name' => $name,
                'des' => $operatorDes[$k],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
