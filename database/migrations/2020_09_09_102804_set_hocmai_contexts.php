<?php

use Illuminate\Database\Migrations\Migration;
use APV\Hocmai\Models\HocmaiContext;

class SetHocmaiContexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $contextName = [
            'Truy cập khóa học',
            'Truy cập vào mycourse',
            'Xem danh sách thông báo',
            'Xem chi tiết 1 thông báo',
            'Bật pop-up thông báo',
            'Bật pop-up thông báo - Khóa học',
            'Bật pop-up  - đăng ký tham gia sự kiện',
            'Bật popup tặng tài liệu học sinh',
            'Mở đến post facebook',
            'Bảo trì',
            'Cập nhật cache',
            'Đăng xuất',
            'Chuyển đến 1 màn hình chỉ định',
            'Chuyển đến trang webview',
            'Truy cập vào kênh livestream',
            'Truy cập vào 1 livestream cụ thể',
            'Truy cập ứng dụng'
        ];
        $contextDes = [
            'Sử dụng cho các thông báo mang tính kêu gọi người dùng vào học khóa học đã mua. Ví dụ "Hãy nhớ học bài nhé bạn để không quên kiến thức!"',
            'Sử dụng cho các thông báo mang tính kêu gọi người dùng vào mycourse app để chọn khóa mốn học. Ví dụ"Hãy tiếp tục học tập chăm chỉ nhé bạn!"',
            'Kêu gọi người dùng vào trang thông báo để cập nhật tin tức. Ví dụ "Bạn còn nhiều thông báo chưa xem, hãy xem ngay để nắm bắt tin tức HOCMAI nha"',
            'Kêu gọi người dùng xem 1 thông báo cụ thể. Ví du "HOCMAI đang có chương trình khuyến mãi 50% khi đăng kí khóa học. Hãy xem ngay!"',
            'Thông báo đến người dùng một nội dung ngắn gì đó và đồng thời mở popup trong ứng dụng. Ví dụ thông báo "Đã khuya rồi bạn ơi, ngủ sớm nhé"',
            'Thông báo đến người dùng một nội dung ngắn gì đó và đồng thời mở popup trong ứng dụng. Ví dụ thông báo "Một ưu đãi dành cho bạn khi đăng ký khóa học"',
            'Thông báo người dùng về một sự kiện, Khi người dùng touch vào sẽ ra trang đăng ký sự kiện đó. Ví dụ " Hãy đăng ký tham gia tân sinh viên 2021 nhé các bạn"',
            'Thông báo người dùng được tặng tài liệu. Người dùng có thể nhận hoặc từ chối',
            'Thông báo một nội dung cho người dùng, khi người dùng click vào sẽ dẫn người dùng ra 1 bài post facebook',
            'Chuyển người dùng tới trang bảo trì ứng dụng',
            'Ép máy người dùng xóa cache và update lại cache',
            'Đẩy người dùng ra trang login',
            'Chuyển người dùng đến 1 màn chỉ định',
            'Đưa người dùng đến 1 trang webview',
            'Đưa người dùng vào trong 1 kênh liveStream',
            'Đưa người dùng vào cụ thể 1 liveStream',
            ''


        ];
        foreach ($contextName as $key => $name)
        {
            HocmaiContext::create([
                'name' => $name,
                'des' => $contextDes[$key],
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
