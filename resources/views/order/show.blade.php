@extends('common.default')
@section('content')
<!-- 'code', 'amount', 'status', 'customer_id', 'comment',
        'created_by', 'updated_by','order_type_id', 'ship_price', 'ship_id', 'total_product_price', 'total_topping_price', 'table_qr_code', 'level_id', 'table_id', 'amount_after_promotion',
        'customer_name', 'customer_phone', 'confirm_payment_by', 'updated_order_by' -->
<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Chi tiết đơn hàng</div>
      <div class="form-group">
        Mã đơn: {{ $order->code }}
      </div>
      <div class="form-group">
        Tổng tiền trước khuyến mãi: {{ $order->code }}
      </div>
      <div class="form-group">
        Tổng tiền sau khuyến mãi: {{ $order->code }}
      </div>
      <div class="form-group">
        Trạng thái đơn: {{ $order->code }}
      </div>
      <div class="form-group">
        Khách hàng có id là {{ $order->code }} và tên là
      </div>
      <div class="form-group">
        Comment đơn hàng: {{ $order->code }}
      </div>
      <div class="form-group">
        Người tạo đơn: {{ $order->code }}
      </div>
      <div class="form-group">
        Thể loại đơn hàng: {{ $order->code }}
      </div>
      <div class="form-group">
        Mã đơn: {{ $order->code }}
      </div>
      <div class="form-group">
        Mã đơn: {{ $order->code }}
      </div>
      <div class="form-group">
        Mã đơn: {{ $order->code }}
      </div>
      
  </div>
</div>

@stop
